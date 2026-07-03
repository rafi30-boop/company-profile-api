<?php

namespace App\Services;

use App\Http\Resources\CompanyProfileResource;
use App\Interfaces\CompanyProfileRepositoryInterface;
use App\Models\CompanyProfile;
use Illuminate\Http\JsonResponse;

class CompanyProfileService
{
    public function __construct(protected CompanyProfileRepositoryInterface $repository)
    {
    }

    public function index(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Company profile list retrieved successfully',
            'data' => CompanyProfileResource::collection($this->repository->all()),
        ]);
    }

    public function show(CompanyProfile $companyProfile): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Company profile retrieved successfully',
            'data' => new CompanyProfileResource($companyProfile),
        ]);
    }

    public function store(array $data): JsonResponse
    {
        $companyProfile = $this->repository->create($data);

        return response()->json([
            'success' => true,
            'message' => 'Company profile created successfully',
            'data' => new CompanyProfileResource($companyProfile),
        ], 201);
    }

    public function update(CompanyProfile $companyProfile, array $data): JsonResponse
    {
        $companyProfile = $this->repository->update($companyProfile, $data);

        return response()->json([
            'success' => true,
            'message' => 'Company profile updated successfully',
            'data' => new CompanyProfileResource($companyProfile),
        ]);
    }

    public function destroy(CompanyProfile $companyProfile): JsonResponse
    {
        $this->repository->delete($companyProfile);

        return response()->json([
            'success' => true,
            'message' => 'Company profile deleted successfully',
        ]);
    }
}
