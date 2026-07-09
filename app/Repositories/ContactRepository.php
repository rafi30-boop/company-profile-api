<?php

namespace App\Repositories;

use App\Interfaces\ContactRepositoryInterface;
use App\Models\ContactMessage;
use Illuminate\Database\Eloquent\Collection;

class ContactRepository implements ContactRepositoryInterface
{
    public function all(): Collection
    {
        return ContactMessage::orderBy('created_at', 'desc')->get();
    }

    public function find(int $id): ?ContactMessage
    {
        return ContactMessage::find($id);
    }

    public function create(array $data): ContactMessage
    {
        return ContactMessage::create($data);
    }

    public function delete(ContactMessage $contact): bool
    {
        return $contact->delete();
    }

    public function markAsRead(ContactMessage $contact): ContactMessage
    {
        $contact->is_read = true;
        $contact->save();
        return $contact;
    }
}