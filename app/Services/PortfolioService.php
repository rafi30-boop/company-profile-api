<?php

namespace App\Services;

use App\Interfaces\PortfolioRepositoryInterface;

class PortfolioService
{
    protected PortfolioRepositoryInterface $repository;

    public function __construct(PortfolioRepositoryInterface $repository)
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
        $portfolio = $this->repository->find($id);
        return $this->repository->update($portfolio, $data);
    }

    public function delete(int $id)
    {
        $portfolio = $this->repository->find($id);
        return $this->repository->delete($portfolio);
    }
}