<?php

namespace App\Interfaces;

use App\Models\Service;
use Illuminate\Database\Eloquent\Collection;

interface ServiceRepositoryInterface
{
    public function all(): Collection;
    public function find(int $id): ?Service;
    public function create(array $data): Service;
    public function update(Service $service, array $data): Service;
    public function delete(Service $service): bool;
}