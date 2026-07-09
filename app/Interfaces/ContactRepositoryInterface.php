<?php

namespace App\Interfaces;

use App\Models\ContactMessage;
use Illuminate\Database\Eloquent\Collection;

interface ContactRepositoryInterface
{
    public function all(): Collection;
    public function find(int $id): ?ContactMessage;
    public function create(array $data): ContactMessage;
    public function delete(ContactMessage $contact): bool;
    public function markAsRead(ContactMessage $contact): ContactMessage;
}