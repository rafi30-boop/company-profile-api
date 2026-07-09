<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'client',
        'description',
        'thumbnail',
        'project_url',
        'completed_at'
    ];

    // Relasi ke PortfolioImage
    public function images()
    {
        return $this->hasMany(PortfolioImage::class);
    }
}