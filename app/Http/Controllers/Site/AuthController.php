<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Client\LoginRequest;
use App\Models\Client;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('web.site.auth.login');
    }

    public function handleLogin(LoginRequest $request)
    {
        $data = $request->validated();
        $client = Client::query()->where('phone', $data['phone'])->first();
        if ($client && $client->status === 1) {
            //dd(Hash::check($data['password'], $client->password));
            if (Hash::check($data['password'], $client->password)) {
                Auth::guard('web_clients')->login($client);
                return redirect()->route('site.index');
            } else {
                return redirect()->back()->withErrors(['error' => 'Credentials not match']);
            }
        }

        return redirect()->back()->withErrors(['error' => 'Credentials not match']);
    }
}
