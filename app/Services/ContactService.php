<?php

namespace App\Services;

use App\Interfaces\ContactRepositoryInterface;

class ContactService
{
    protected ContactRepositoryInterface $repository;

    public function __construct(ContactRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function find(int $id)
    {
        return $this->repository->find($id);
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function delete(int $id)
    {
        $contact = $this->repository->find($id);
        return $this->repository->delete($contact);
    }

    public function markAsRead(int $id)
    {
        $contact = $this->repository->find($id);
        return $this->repository->markAsRead($contact);
    }
}