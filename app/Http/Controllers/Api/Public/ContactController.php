<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Requests\Contact\StoreContactRequest;
use App\Http\Resources\ContactResource;
use App\Services\ContactService;

class ContactController extends BaseApiController
{
    protected ContactService $service;

    public function __construct(ContactService $service)
    {
        $this->service = $service;
    }

    public function store(StoreContactRequest $request)
    {
        $data = $this->service->create($request->validated());

        return $this->success(
            new ContactResource($data),
            'Pesan berhasil dikirim',
            201
        );
    }
}