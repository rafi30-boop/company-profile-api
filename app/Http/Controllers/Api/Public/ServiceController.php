<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Resources\ServiceResource;
use App\Services\ServiceService;

class ServiceController extends BaseApiController
{
    protected ServiceService $service;

    public function __construct(ServiceService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $data = $this->service->all();

        return $this->success(
            ServiceResource::collection($data),
            'Services retrieved successfully'
        );
    }

    public function show(int $id)
    {
        $data = $this->service->find($id);

        if (!$data) {
            return $this->error('Service not found', null, 404);
        }

        return $this->success(
            new ServiceResource($data),
            'Service retrieved successfully'
        );
    }
}