<?php

namespace App\Services;

use App\Interfaces\BlogRepositoryInterface;

class BlogService
{
    protected BlogRepositoryInterface $repository;

    public function __construct(BlogRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function findBySlug(string $slug)
    {
        return $this->repository->findBySlug($slug);
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
        $blog = $this->repository->find($id);
        return $this->repository->update($blog, $data);
    }

    public function delete(int $id)
    {
        $blog = $this->repository->find($id);
        return $this->repository->delete($blog);
    }
}