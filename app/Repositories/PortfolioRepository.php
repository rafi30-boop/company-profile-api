<?php

namespace App\Repositories;

use App\Interfaces\PortfolioRepositoryInterface;
use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Collection;

class PortfolioRepository implements PortfolioRepositoryInterface
{
    public function all(): Collection
    {
        return Portfolio::orderBy('order')->get();
    }

    public function find(int $id): ?Portfolio
    {
        return Portfolio::find($id);
    }

    public function create(array $data): Portfolio
    {
        return Portfolio::create($data);
    }

    public function update(Portfolio $portfolio, array $data): Portfolio
    {
        $portfolio->update($data);

        return $portfolio;
    }

    public function delete(Portfolio $portfolio): bool
    {
        return $portfolio->delete();
    }
}
