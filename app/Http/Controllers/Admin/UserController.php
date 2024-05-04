<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('web.admin.sections.users.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('web.admin.sections.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        $roles = Role::find($request->roles);
        if (!$roles) {
            flash('Roles not found')->error()->important();
            return redirect()->route('admin.users.index');
        }

        $user->assignRole($roles);

        flash('User added successfully')->success()->important();
        return redirect()->route('admin.users.index');

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('web.admin.sections.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
            'roles' => 'required|array|max:1,exists:roles,id',
        ]);
        if ($request->filled('password')) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $user = User::findOrFail($id);
        $user->update($data);

        // Detach all roles and then assign the new ones
        $user->roles()->detach();
        $roles = Role::find($request->roles);
        if (!$roles) {
            flash('Roles not found')->error()->important();
            return redirect()->route('admin.users.index');
        }
        $user->assignRole($roles);

        flash('User updated successfully')->success()->important();
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::findOrFail($id)->delete();
        flash('User deleted successfully')->success()->important();
        return redirect()->route('admin.users.index');
    }
}
