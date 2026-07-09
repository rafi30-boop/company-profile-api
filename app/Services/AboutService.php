<?php

namespace App\Services;

use App\Interfaces\AboutRepositoryInterface;

class AboutService
{
    protected AboutRepositoryInterface $repository;

    public function __construct(AboutRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function get()
    {
        return $this->repository->get();
    }

    public function update(array $data)
    {
        return $this->repository->update($data);
    }
}