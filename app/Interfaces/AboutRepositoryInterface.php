<?php

namespace App\Interfaces;

use App\Models\About;

interface AboutRepositoryInterface
{
    public function get(): ?About;
    public function update(array $data): About;
}