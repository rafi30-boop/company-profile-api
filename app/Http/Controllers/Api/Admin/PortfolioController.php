<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Requests\Portfolio\StorePortfolioRequest;
use App\Http\Requests\Portfolio\UpdatePortfolioRequest;
use App\Http\Resources\PortfolioResource;
use App\Services\PortfolioService;

class PortfolioController extends BaseApiController
{
    protected PortfolioService $service;

    public function __construct(PortfolioService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $data = $this->service->all();

        return $this->success(
            PortfolioResource::collection($data),
            'Portfolios retrieved successfully'
        );
    }

    public function show(int $id)
    {
        $data = $this->service->find($id);

        if (!$data) {
            return $this->error('Portfolio not found', null, 404);
        }

        return $this->success(
            new PortfolioResource($data),
            'Portfolio retrieved successfully'
        );
    }

    public function store(StorePortfolioRequest $request)
    {
        $data = $this->service->create($request->validated());

        return $this->success(
            new PortfolioResource($data),
            'Portfolio created successfully',
            201
        );
    }

    public function update(UpdatePortfolioRequest $request, int $id)
    {
        $data = $this->service->update($id, $request->validated());

        return $this->success(
            new PortfolioResource($data),
            'Portfolio updated successfully'
        );
    }

    public function destroy(int $id)
    {
        $this->service->delete($id);

        return $this->success(null, 'Portfolio deleted successfully');
    }
}