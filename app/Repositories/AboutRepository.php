<?php

namespace App\Repositories;

use App\Interfaces\AboutRepositoryInterface;
use App\Models\About;

class AboutRepository implements AboutRepositoryInterface
{
    public function get(): ?About
    {
        return About::first();
    }

    public function update(array $data): About
    {
        $about = About::first();
        
        if (!$about) {
            $about = new About();
        }
        
        $about->fill($data);
        $about->save();
        
        return $about;
    }
}