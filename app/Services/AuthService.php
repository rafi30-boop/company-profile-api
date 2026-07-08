<?php

namespace App\Services;

use App\Interfaces\AuthServiceInterface;
use App\Repositories\UserRepository;
use App\Http\Resources\UserResource;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthService implements AuthServiceInterface
{
    public function __construct(protected UserRepository $userRepository)
    {
    }


    public function login(array $data): JsonResponse
    {
        if (!Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials',
            ], 401);
        }

        $user = Auth::user();
        $tokenResult = $user->createToken('auth_token');
        $token = $tokenResult->accessToken;

        event(new Login('web', $user, false));

        return response()->json([
            'success' => true,
            'message' => 'Login successful',
            'data' => [
                'user' => new UserResource($user),
                'token' => $token,
            ],
        ]);
    }

    public function logout(): JsonResponse
    {
        $user = Auth::user();
        if ($user && method_exists($user, 'token')) {
            $user->token()->revoke();
        }

        return response()->json([
            'success' => true,
            'message' => 'Logout successful',
        ]);
    }

    public function user(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Current user retrieved successfully',
            'data' => new UserResource(Auth::user()),
        ]);
    }
}
