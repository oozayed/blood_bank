<?php

namespace App\Http\Controllers\Admin\General;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\General\GovernorateRequest;
use App\Models\Governorate;
use Illuminate\Http\Request;

class GovernorateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $governorates = Governorate::paginate(15);
        return view('web.admin.sections.general.governorates.index', compact('governorates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('web.admin.sections.general.governorates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GovernorateRequest $request)
    {
        $data = $request->validated();
        Governorate::query()->create($data);
        flash('Added Successfully')->success()->important();
        return to_route('admin.general.governorates.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $governorate = Governorate::query()->findOrFail($id);
        return view('web.admin.sections.general.governorates.edit', compact('governorate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GovernorateRequest $request, string $id)
    {
        $data = $request->validated();
        $governorate = Governorate::query()->findOrFail($id);
        $governorate->update($data);
        flash('Updated Successfully')->success()->important();
        return to_route('admin.general.governorates.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $governorateId)
    {
        $governorate = Governorate::query()->findOrFail($governorateId);
        $governorate->delete();
        flash('Deleted Successfully')->error()->important();
        return redirect()->back();
    }
}
