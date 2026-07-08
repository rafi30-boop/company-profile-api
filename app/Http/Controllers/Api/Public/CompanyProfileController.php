<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Resources\CompanyProfileResource;
use App\Services\CompanyProfileService;

class CompanyProfileController extends BaseApiController
{
    protected CompanyProfileService $service;

    public function __construct(CompanyProfileService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $data = $this->service->get();

        if (!$data) {
            return $this->error('Company profile not found', null, 404);
        }

        return $this->success(
            new CompanyProfileResource($data),
            'Company profile retrieved successfully'
        );
    }
}