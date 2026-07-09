<?php

namespace App\Services;

use App\Interfaces\ServiceRepositoryInterface;

class ServiceService
{
    protected ServiceRepositoryInterface $repository;

    public function __construct(ServiceRepositoryInterface $repository)
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
        $service = $this->repository->find($id);
        return $this->repository->update($service, $data);
    }

    public function delete(int $id)
    {
        $service = $this->repository->find($id);
        return $this->repository->delete($service);
    }
}