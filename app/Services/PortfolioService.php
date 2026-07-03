<?php

namespace App\Services;

use App\Http\Resources\PortfolioResource;
use App\Interfaces\PortfolioRepositoryInterface;
use App\Models\Portfolio;
use Illuminate\Http\JsonResponse;

class PortfolioService
{
    public function __construct(protected PortfolioRepositoryInterface $repository)
    {
    }

    public function index(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Portfolio list retrieved successfully',
            'data' => PortfolioResource::collection($this->repository->all()),
        ]);
    }

    public function show(Portfolio $portfolio): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Portfolio retrieved successfully',
            'data' => new PortfolioResource($portfolio),
        ]);
    }

    public function store(array $data): JsonResponse
    {
        $portfolio = $this->repository->create($data);

        return response()->json([
            'success' => true,
            'message' => 'Portfolio created successfully',
            'data' => new PortfolioResource($portfolio),
        ], 201);
    }

    public function update(Portfolio $portfolio, array $data): JsonResponse
    {
        $portfolio = $this->repository->update($portfolio, $data);

        return response()->json([
            'success' => true,
            'message' => 'Portfolio updated successfully',
            'data' => new PortfolioResource($portfolio),
        ]);
    }

    public function destroy(Portfolio $portfolio): JsonResponse
    {
        $this->repository->delete($portfolio);

        return response()->json([
            'success' => true,
            'message' => 'Portfolio deleted successfully',
        ]);
    }
}
