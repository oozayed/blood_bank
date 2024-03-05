<?php

namespace App\Http\Controllers\Api\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Client\LoginRequest;
use App\Http\Requests\Api\Client\RegisterRequest;
use App\Models\Clients;
use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use ResponseTrait;

    public function register(RegisterRequest $request)
    {
        // 1 validation
        // 2 insert to database
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        $client = Clients::query()->create($data);
        // 3 generate token
        $token = $client->createToken('auth_token');
        // 4 return response
        return $this->data('Client created successfully', [
            'client' => $client,
            'token' => $token->plainTextToken
        ]);
    }

    public function login(LoginRequest $request)
    {
        $data = $request->validated();
        $client = Clients::query()->where('phone', $data['phone'])->first();
        if ($client) {
            if (Hash::check($data['password'], $client->password)) {
                $token = $client->createToken('auth_token');
                // 4 return response
                return $this->data('Logged in successfully', [
                    'client' => $client,
                    'token' => $token->plainTextToken
                ]);
            } else {
                return $this->error('Credentials not match', false);
            }


        } else {
            return $this->error('Credentials not match', false);
        }

    }

    public function logout()
    {
        auth()->user()->currentAccessToken()->delete();
        return $this->success('Logged out successfully');
    }

}
