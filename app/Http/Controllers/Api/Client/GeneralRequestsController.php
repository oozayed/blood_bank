<?php

namespace App\Http\Controllers\Api\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Client\ContactUsRequest;
use App\Models\BloodType;
use App\Models\Category;
use App\Models\City;
use App\Models\Contact;
use App\Models\Governorate;
use App\Models\Setting;
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
        $governorates = Governorate::query()
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
        $cities = City::query()
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

        $data = Setting::query()->whereIn('key', ['phone', 'email', 'insta', 'youtube', 'facebook', 'twitter'])->pluck('value', 'key');
        return $this->data('This is all general ', $data);

    }

    public function categories(): JsonResponse
    {
        $data = Category::query()->select('id', 'name')->get();
        return $this->data('This is all categories', $data);
    }

    public function contactUs(ContactUsRequest $request)
    {

        $data = $request->validated();
        $data['client_id'] = auth()->user()->id;
        Contact::query()->create($data);
        return $this->success('your message is sent successfully');
    }

}
