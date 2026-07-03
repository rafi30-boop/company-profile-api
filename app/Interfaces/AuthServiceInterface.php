<?php

namespace App\Interfaces;

use Illuminate\Http\JsonResponse;

interface AuthServiceInterface
{
    public function register(array $data): JsonResponse;
    public function login(array $data): JsonResponse;
    public function logout(): JsonResponse;
    public function user(): JsonResponse;
}
