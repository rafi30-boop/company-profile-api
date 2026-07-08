<?php

namespace App\Services;

use App\Interfaces\CompanyProfileRepositoryInterface;
use App\Models\CompanyProfile;

class CompanyProfileService
{
    public function __construct(protected CompanyProfileRepositoryInterface $repository)
    {
    }

    /**
     * Get single company profile (first record)
     * Untuk Public API
     */
    public function get()
    {
        return $this->repository->get();
    }

    /**
     * Update company profile
     * Untuk Admin API
     */
    public function update(array $data)
    {
        $company = $this->repository->get();
        
        if (!$company) {
            // Jika belum ada data, buat baru
            return $this->repository->create($data);
        }
        
        // Jika sudah ada, update
        return $this->repository->update($company, $data);
    }

    // ============================================
    // METHOD DI BAWAH INI UNTUK MULTI DATA (OPSIONAL)
    // ============================================

    public function index()
    {
        return $this->repository->all();
    }

    public function show(CompanyProfile $companyProfile)
    {
        return $companyProfile;
    }

    public function store(array $data)
    {
        return $this->repository->create($data);
    }

    public function destroy(CompanyProfile $companyProfile)
    {
        return $this->repository->delete($companyProfile);
    }
}