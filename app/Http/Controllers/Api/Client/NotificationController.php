<?php

namespace App\Http\Controllers\Api\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Client\NotificationSettingRequest;
use App\Models\BloodTypeClient;
use App\Models\ClientGovernorate;
use App\Models\DonationRequest;
use App\Models\Notification;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{

    use ResponseTrait;

    public function index()
    {
        $user = auth('sanctum')->user();
        // 1 - blood type ids and governorate ids of the user     /////
        $blood_types_ids = $user->bloodTypes()->pluck('blood_type_id')->toArray();
        $governorates_ids = $user->governorates()->pluck('governorate_id')->toArray();

        // 2- get donation request ids based on no 1
        $donation_requests_ids = DonationRequest::query()
            ->whereIn('blood_type_id', $blood_types_ids)
            ->orWhereIn('governorate_id', $governorates_ids)

            ->pluck('id')
            ->toArray();

        // 3 notifications based on no 2
        $notifications = Notification::query()->whereIn('donation_request_id', $donation_requests_ids)->select('title', 'content')->get();
        return $this->data('This is all notifications', $notifications);
    }

    public function settings(NotificationSettingRequest $request): \Illuminate\Http\JsonResponse
    {
        DB::beginTransaction();

        $user = $request->user();
        $user->bloodTypes()->delete();
        $user->governorates()->delete();

        foreach ($request->blood_type_ids as $blood_type_id) {

            BloodTypeClient::query()->create([
                'client_id' => $request->user()->id,
                'blood_type_id' => $blood_type_id
            ]);

        }
        foreach ($request->governorates_ids as $governorate_id) {
            ClientGovernorate::query()->create([
                'client_id' => $request->user()->id,
                'governorate_id' => $governorate_id
            ]);
        }

        DB::commit();
        return $this->success('notification general updated successfully');
    }
}
