<?php

namespace App\Http\Controllers\Api\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Traits\ResponseTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    use ResponseTrait;
    public function checkIfPhoneIsExist(Request $request): JsonResponse
    {
        $client = Client::query()->where('phone', $request->phone)->first();
        if ($client) {
            $client->update([
                'pin_code' => rand(100000, 999999)
            ]);
            //TODO: Send Pin Code To ClientEmail
            return $this->success('Pin Code Sent');
        } else {
            return $this->error('Client is not exist');
        }
    }
    public function setNewPassword(Request $request): JsonResponse
    {
        $client = Client::query()->where('phone', $request->phone)->first();
        if ($client) {
            if ($client->pin_code != $request->pin_code) {
                return $this->error('Pin Code Not Correct');
            }
            $client->update([
                'password' => bcrypt($request->password),
                'pin_code' => null
            ]);
            return $this->success('Password Updated');
        } else {
            return $this->error('Client is not exist');
        }
    }
}
