<?php

namespace App\Http\Controllers\Api\Public;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Resources\BlogResource;
use App\Services\BlogService;

class BlogController extends BaseApiController
{
    protected BlogService $service;

    public function __construct(BlogService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $data = $this->service->all();

        return $this->success(
            BlogResource::collection($data),
            'Blogs retrieved successfully'
        );
    }

    public function show(string $slug)
    {
        $data = $this->service->findBySlug($slug);

        if (!$data) {
            return $this->error('Blog not found', null, 404);
        }

        return $this->success(
            new BlogResource($data),
            'Blog retrieved successfully'
        );
    }
}