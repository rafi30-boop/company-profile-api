<?php

namespace App\Interfaces;

use App\Models\CompanyProfile;
use Illuminate\Database\Eloquent\Collection;

interface CompanyProfileRepositoryInterface
{
    public function all(): Collection;

    public function find(int $id): ?CompanyProfile;

    public function create(array $data): CompanyProfile;

    public function update(CompanyProfile $companyProfile, array $data): CompanyProfile;

    public function delete(CompanyProfile $companyProfile): bool;
}
