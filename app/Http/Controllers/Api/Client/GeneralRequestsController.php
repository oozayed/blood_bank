<?php

namespace App\Http\Controllers\Api\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Client\ContactUsRequest;
use App\Models\BloodType;
use App\Models\Categories;
use App\Models\Cities;
use App\Models\Contacts;
use App\Models\Governorates;
use App\Models\Settings;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class GeneralRequestsController extends Controller
{
    use ResponseTrait;

    public function bloodTypes(): JsonResponse
    {
        return $this->data('This is all blood types', BloodType::query()->select('id', 'name')->get());
    }

    public function governorates(): JsonResponse
    {
        $governorates = Governorates::query()
            ->select('id', 'name')
            ->when(\request()->has('search'), function ($q) {
                return $q->where('name', 'like', '%' . \request()->search . '%');
            })
            ->get();
//        if ($request->has('search')){
//            $governorates = $governorates->where('name', 'like', '%' . $request->search . '%');
//        }

//        $governorates = $governorates->get();

        return $this->data('This is all governments', $governorates);


    }

    public function governorateCities($id): JsonResponse
    {
        $cities = Cities::query()
            ->select('id', 'name', 'governorate_id')
            ->where('governorate_id', $id)
            ->when(\request()->has('search'), function ($q) {
                return $q->where('name', 'like', '%' . \request()->search . '%');
            })
            ->get();

        return $this->data('This is all cities', $cities);
    }


    public function settings(): JsonResponse
    {

        $data = Settings::query()->whereIn('key', ['phone', 'email', 'insta', 'youtube', 'facebook', 'twitter'])->pluck('value', 'key');
        return $this->data('This is all settings ', $data);

    }

    public function categories(): JsonResponse
    {
        $data = Categories::query()->select('id', 'name')->get();
        return $this->data('This is all categories', $data);
    }

    public function contactUs(ContactUsRequest $request)
    {

        $data = $request->validated();
        $data['client_id'] = auth()->user()->id;
        Contacts::query()->create($data);
        return $this->success('your message is sent successfully');
    }

}
