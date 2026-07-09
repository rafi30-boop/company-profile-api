<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Requests\About\AboutUpdateRequest;  // ← Perhatikan ini!
use App\Http\Resources\AboutResource;
use App\Services\AboutService;

class AboutController extends BaseApiController
{
    protected AboutService $service;

    public function __construct(AboutService $service)
    {
        $this->service = $service;
    }

    public function update(AboutUpdateRequest $request)
    {
        $data = $this->service->update($request->validated());

        return $this->success(
            new AboutResource($data),
            'About updated successfully'
        );
    }
}