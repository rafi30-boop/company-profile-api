<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortfolioStoreRequest;
use App\Http\Requests\PortfolioUpdateRequest;
use App\Models\Portfolio;
use App\Services\PortfolioService;
use Illuminate\Http\JsonResponse;

class PortfolioController extends Controller
{
    public function __construct(protected PortfolioService $service)
    {
    }

    public function index(): JsonResponse
    {
        return $this->service->index();
    }

    public function show(Portfolio $portfolio): JsonResponse
    {
        return $this->service->show($portfolio);
    }

    public function store(PortfolioStoreRequest $request): JsonResponse
    {
        return $this->service->store($request->validated());
    }

    public function update(PortfolioUpdateRequest $request, Portfolio $portfolio): JsonResponse
    {
        return $this->service->update($portfolio, $request->validated());
    }

    public function destroy(Portfolio $portfolio): JsonResponse
    {
        return $this->service->destroy($portfolio);
    }
}
