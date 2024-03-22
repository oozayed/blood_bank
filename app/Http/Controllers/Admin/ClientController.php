<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('web.admin.sections.clients.index');
    }

    public function dataTable(){
        $data = Client::with('bloodType', 'city', 'governorate')->get();
        return DataTables::of($data)
            ->addColumn('action', function ($data) {
                return view('web.admin.sections.clients.action', compact('data'));
            })


            ->make(true);
    }

    public function status(string $id){
        $client = Client::findOrFail($id);
        $client->status = !$client->status;
        $client->save();
        flash('Success')->success()->important();
        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $client = Client::findOrFail($id);

        $client->delete();
        flash('Deleted Successfully')->error()->important();
        return redirect()->back();
    }
}
