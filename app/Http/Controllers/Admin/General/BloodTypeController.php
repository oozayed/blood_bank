<?php

namespace App\Http\Controllers\Admin\General;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\General\BloodTypeRequest;
use App\Models\BloodType;
use Illuminate\Http\Request;

class BloodTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bloodTypes = BloodType::query()->paginate(10);
        return view('web.admin.sections.general.bloodTypes.index', compact('bloodTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('web.admin.sections.general.bloodTypes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BloodTypeRequest $request)
    {
       $data = $request->validated();
        BloodType::query()->create($data);
        flash('Added Successfully')->success()->important();
        return to_route('admin.general.blood-types.index');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bloodType = BloodType::query()->findOrFail($id);
        return view('web.admin.sections.general.bloodTypes.edit', compact('bloodType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BloodTypeRequest $request, string $id)
    {
        $data = $request->validated();
        $bloodType = BloodType::query()->findOrFail($id);
        $bloodType->update($data);
        flash('Updated Successfully')->success()->important();
        return to_route('admin.general.blood-types.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bloodType = BloodType::query()->findOrFail($id);
        $bloodType->delete();
        flash('Deleted Successfully')->error()->important();
        return redirect()->back();
    }
}
