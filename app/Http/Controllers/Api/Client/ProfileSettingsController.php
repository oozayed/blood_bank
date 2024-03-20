<?php

namespace App\Http\Controllers\Api\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Client\ProfileSettingsRequest;
use App\Http\Resources\Api\Client\ProfileSettingsResource;
use App\Models\Client;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;

class ProfileSettingsController extends Controller
{
    use ResponseTrait;

    /**
     * Display the specified resource.
     */
    public function show(Request $request): \Illuminate\Http\JsonResponse
    {
        $profile = $request->user();
        if ($profile) {
            return $this->data('profile general is ',new ProfileSettingsResource($profile));
        } else {
            return $this->error('profile not found');
        }
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(ProfileSettingsRequest $request, string $id)
    {
        $data = $request->validated();
        $client = Client::query()->find($id);
        $data['password'] = bcrypt($data['password']);
        if ($data) {
            $client->update($data);
            return $this->success('profile general updated successfully');
        } else {
            return $this->error('profile not found');
        }
    }


}
