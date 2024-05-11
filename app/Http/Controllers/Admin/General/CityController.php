<?php

namespace App\Http\Controllers\Admin\General;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\General\CityRequest;
use App\Models\City;
use App\Models\Governorate;
use Illuminate\Http\Request;

class CityController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:admin.general.cities.index|admin.general.cities.create|admin.general.cities.edit|admin.general.cities.destroy')->only('index');
        $this->middleware('permission:admin.general.cities.create')->only('create','store');
        $this->middleware('permission:admin.general.cities.edit')->only('edit','update');
        $this->middleware('permission:admin.general.cities.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = City::query()->with('governorate')->paginate(20);
//        $governorates = Governorate::query()->paginate(20);
        return view('web.admin.sections.general.cities.index', compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('web.admin.sections.general.cities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CityRequest $request)
    {
        $data = $request->validated();
        City::query()->create($data);
        flash('Added Successfully')->success()->important();
        return to_route('admin.general.cities.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $city = City::query()->findOrFail($id);
        return view('web.admin.sections.general.cities.edit', compact('city'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CityRequest $request, string $id)
    {
        $data = $request->validated();
        $city = City::query()->findOrFail($id);
        $city->update($data);
        flash('Updated Successfully')->success()->important();
        return to_route('admin.general.cities.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $city = City::query()->findOrFail($id);
        $city->delete();
        flash('Deleted Successfully')->error()->important();
        return redirect()->back();
    }
}
