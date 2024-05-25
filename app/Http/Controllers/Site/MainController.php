<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\BloodType;
use App\Models\City;
use App\Models\DonationRequest;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

    class MainController extends Controller
    {
        public function index(Request $request)
        {
            $posts = Post::where('created_at','<',Carbon::now()->toDateString())->take(9)->get();
            $bloodTypes = BloodType::get();
            $cities = City::get();
            $donationRequests = DonationRequest::when($request->blood_type_id, function ($query, $blood_type_id) {
                return $query->where('blood_type_id', $blood_type_id);
            })->when($request->city_id, function ($query, $city_id) {
                return $query->where('city_id', $city_id);
            })->get();

            return view('web.site.index', compact('bloodTypes', 'cities', 'donationRequests','posts'));
        }
    }
