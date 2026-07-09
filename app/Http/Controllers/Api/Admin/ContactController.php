<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Resources\ContactResource;
use App\Services\ContactService;

class ContactController extends BaseApiController
{
    protected ContactService $service;

    public function __construct(ContactService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $data = $this->service->all();

        return $this->success(
            ContactResource::collection($data),
            'Messages retrieved successfully'
        );
    }

    public function show(int $id)
    {
        $data = $this->service->find($id);

        if (!$data) {
            return $this->error('Message not found', null, 404);
        }

        // Tandai sebagai sudah dibaca
        $this->service->markAsRead($id);

        return $this->success(
            new ContactResource($data),
            'Message retrieved successfully'
        );
    }

    public function destroy(int $id)
    {
        $this->service->delete($id);

        return $this->success(null, 'Message deleted successfully');
    }
}