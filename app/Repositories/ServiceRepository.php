<?php

namespace App\Repositories;

use App\Interfaces\ServiceRepositoryInterface;
use App\Models\Service;
use Illuminate\Database\Eloquent\Collection;

class ServiceRepository implements ServiceRepositoryInterface
{
    public function all(): Collection
    {
        return Service::all();
    }

    public function find(int $id): ?Service
    {
        return Service::find($id);
    }

    public function create(array $data): Service
    {
        return Service::create($data);
    }

    public function update(Service $service, array $data): Service
    {
        $service->update($data);
        return $service;
    }

    public function delete(Service $service): bool
    {
        return $service->delete();
    }
}