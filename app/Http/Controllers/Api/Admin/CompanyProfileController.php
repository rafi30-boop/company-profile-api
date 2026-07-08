<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Requests\CompanyProfile\CompanyProfileUpdateRequest; // ← Perhatikan path-nya
use App\Http\Resources\CompanyProfileResource;
use App\Services\CompanyProfileService;

class CompanyProfileController extends BaseApiController
{
    protected CompanyProfileService $service;

    public function __construct(CompanyProfileService $service)
    {
        $this->service = $service;
    }

    public function update(CompanyProfileUpdateRequest $request)
    {
        $data = $this->service->update($request->validated());

        return $this->success(
            new CompanyProfileResource($data),
            'Company profile updated successfully'
        );
    }
}