<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PortfolioResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'client' => $this->client,
            'description' => $this->description,
            'thumbnail' => $this->thumbnail,
            'project_url' => $this->project_url,
            'completed_at' => $this->completed_at,
            'images' => PortfolioImageResource::collection($this->whenLoaded('images')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}