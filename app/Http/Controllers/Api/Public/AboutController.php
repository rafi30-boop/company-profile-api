<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Resources\AboutResource;
use App\Services\AboutService;

class AboutController extends BaseApiController
{
    protected AboutService $service;

    public function __construct(AboutService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $data = $this->service->get();

        if (!$data) {
            return $this->error('About not found', null, 404);
        }

        return $this->success(
            new AboutResource($data),
            'About retrieved successfully'
        );
    }
}