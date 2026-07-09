<?php

namespace App\Services;

use App\Interfaces\CategoryRepositoryInterface;

class CategoryService
{
    protected CategoryRepositoryInterface $repository;

    public function __construct(CategoryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function find(int $id)
    {
        return $this->repository->find($id);
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function update(int $id, array $data)
    {
        $category = $this->repository->find($id);
        return $this->repository->update($category, $data);
    }

    public function delete(int $id)
    {
        $category = $this->repository->find($id);
        return $this->repository->delete($category);
    }
}