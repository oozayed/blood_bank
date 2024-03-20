<?php

namespace App\Http\Controllers\Admin\General;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\General\SettingsRequest;
use Rawilk\Settings\Facades\Settings;

class SettingsController extends Controller
{
    public function index()
    {
        return view('web.admin.sections.general.settings');
    }

    public function update(SettingsRequest $request): \Illuminate\Http\RedirectResponse
    {
        foreach ($request->validated() as $key => $value){
            Settings::set($key,$value);
        }
        return back()->with('success','Settings Updated Successfully');
    }
}
