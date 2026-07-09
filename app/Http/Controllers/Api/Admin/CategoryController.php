<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Services\CategoryService;

class CategoryController extends BaseApiController
{
    protected CategoryService $service;

    public function __construct(CategoryService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $data = $this->service->all();

        return $this->success(
            CategoryResource::collection($data),
            'Categories retrieved successfully'
        );
    }

    public function show(int $id)
    {
        $data = $this->service->find($id);

        if (!$data) {
            return $this->error('Category not found', null, 404);
        }

        return $this->success(
            new CategoryResource($data),
            'Category retrieved successfully'
        );
    }

    public function store(StoreCategoryRequest $request)
    {
        $data = $this->service->create($request->validated());

        return $this->success(
            new CategoryResource($data),
            'Category created successfully',
            201
        );
    }

    public function update(UpdateCategoryRequest $request, int $id)
    {
        $data = $this->service->update($id, $request->validated());

        return $this->success(
            new CategoryResource($data),
            'Category updated successfully'
        );
    }

    public function destroy(int $id)
    {
        $this->service->delete($id);

        return $this->success(null, 'Category deleted successfully');
    }
}