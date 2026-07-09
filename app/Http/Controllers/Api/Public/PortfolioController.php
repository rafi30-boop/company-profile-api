<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Api\BaseApiController;
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

    public function show(string $slug)
    {
        $data = $this->service->findBySlug($slug);

        if (!$data) {
            return $this->error('Portfolio not found', null, 404);
        }

        return $this->success(
            new PortfolioResource($data),
            'Portfolio retrieved successfully'
        );
    }
}