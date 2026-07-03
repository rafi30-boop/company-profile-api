<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyProfileStoreRequest;
use App\Http\Requests\CompanyProfileUpdateRequest;
use App\Models\CompanyProfile;
use App\Services\CompanyProfileService;
use Illuminate\Http\JsonResponse;

class CompanyProfileController extends Controller
{
    public function __construct(protected CompanyProfileService $service)
    {
    }

    public function index(): JsonResponse
    {
        return $this->service->index();
    }

    public function show(CompanyProfile $companyProfile): JsonResponse
    {
        return $this->service->show($companyProfile);
    }

    public function store(CompanyProfileStoreRequest $request): JsonResponse
    {
        return $this->service->store($request->validated());
    }

    public function update(CompanyProfileUpdateRequest $request, CompanyProfile $companyProfile): JsonResponse
    {
        return $this->service->update($companyProfile, $request->validated());
    }

    public function destroy(CompanyProfile $companyProfile): JsonResponse
    {
        return $this->service->destroy($companyProfile);
    }
}
