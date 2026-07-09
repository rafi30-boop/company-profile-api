<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Requests\Service\StoreServiceRequest;
use App\Http\Requests\Service\UpdateServiceRequest;
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

    public function store(StoreServiceRequest $request)
    {
        $data = $this->service->create($request->validated());

        return $this->success(
            new ServiceResource($data),
            'Service created successfully',
            201
        );
    }

    public function update(UpdateServiceRequest $request, int $id)
    {
        $data = $this->service->update($id, $request->validated());

        return $this->success(
            new ServiceResource($data),
            'Service updated successfully'
        );
    }

    public function destroy(int $id)
    {
        $this->service->delete($id);

        return $this->success(null, 'Service deleted successfully');
    }
}