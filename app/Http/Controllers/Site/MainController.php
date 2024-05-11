<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\BloodType;
use App\Models\City;
use App\Models\DonationRequest;
use App\Models\Post;
use Illuminate\Http\Request;

    class MainController extends Controller
    {
        public function index()
        {
            $posts = Post::get();
            $bloodTypes =BloodType::get();
            $cities = City::get();
            

            return view('web.site.index', compact('posts', 'bloodTypes', 'cities', ));
        }

        public function search($request){
           DonationRequest::where('blood_type_id', $request->blood_type_id)
            ->where('city_id', $request->city_id)
            ->get();
        }
    }
