<?php

namespace App\Repositories;

use App\Interfaces\CompanyProfileRepositoryInterface;
use App\Models\CompanyProfile;
use Illuminate\Database\Eloquent\Collection;

class CompanyProfileRepository implements CompanyProfileRepositoryInterface
{
    // TAMBAHKAN INI:
    public function get(): ?CompanyProfile
    {
        return CompanyProfile::first();
    }

    // Yang sudah ada:
    public function all(): Collection
    {
        return CompanyProfile::orderBy('order')->get();
    }

    public function find(int $id): ?CompanyProfile
    {
        return CompanyProfile::find($id);
    }

    public function create(array $data): CompanyProfile
    {
        return CompanyProfile::create($data);
    }

    public function update(CompanyProfile $companyProfile, array $data): CompanyProfile
    {
        $companyProfile->update($data);
        return $companyProfile;
    }

    public function delete(CompanyProfile $companyProfile): bool
    {
        return $companyProfile->delete();
    }
}