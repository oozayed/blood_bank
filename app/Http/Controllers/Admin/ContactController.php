<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('web.admin.sections.contacts.index');
    }

    public function dataTable(){
        $data = Contact::with('client')->get();
        return DataTables::of($data)
            ->addColumn('action', function ($data) {
                return view('web.admin.sections.contacts.action', compact('data'));
            })

            ->make(true);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $contact = Contact::with('client')->findOrFail($id);
        return view('web.admin.sections.contacts.show', compact('contact'));

    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        flash('Deleted Successfully')->error()->important();
        return redirect()->back();
    }
}
