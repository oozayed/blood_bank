<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DonationRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('web.admin.sections.donations.index');
    }


    /**
     * Display a listing of the resource.
     */
    public function dataTable()
    {
        $data = DonationRequest::with('bloodType')->select('id','patient_name', 'patient_phone', 'hospital_name',
            'blood_type_id', 'bags_num', 'details', 'created_at')->get();
        return DataTables::of($data)
            ->addColumn('action', function ($data) {
                return view('web.admin.sections.donations.action', compact('data'));
            })
            ->make(true);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $donation = DonationRequest::with('bloodType','client','city','governorate')->findOrFail($id);

        return view('web.admin.sections.donations.show', compact('donation'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $donation = DonationRequest::findOrFail($id);
        $donation->delete();
        flash('Deleted Successfully')->error()->important();
        return redirect()->back();
    }
}
