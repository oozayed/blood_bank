<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('web.admin.sections.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('web.admin.sections.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name',
            'permissions' => 'required|array|min:1',
        ]);
        $permissions = Permission::find($request->permissions);

        if (!$permissions) {
            flash('Permissions not found')->error()->important();
            return redirect()->route('admin.roles.index');
        }

        $role = Role::create($request->only('name'));
        $role->syncPermissions($permissions);
        $role->save();
        flash('Role created successfully')->success()->important();
        return redirect()->route('admin.roles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::findOrFail($id);
//        $rolePermissions = $role->permissions->pluck('id')->toArray();
        $permissions = Permission::all();
        return view('web.admin.sections.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name,' . $id,
            'permissions' => 'required|array|min:1',
        ]);
        $permissions = Permission::find($request->permissions);

        if (!$permissions) {
            flash('Permissions not found')->error()->important();
            return redirect()->route('admin.roles.index');
        }

        $role = Role::findOrFail($id);
        $role->update($request->only('name'));
        $role->syncPermissions($permissions);
        $role->save();
        flash('Role updated successfully')->success()->important();
        return redirect()->route('admin.roles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $role = Role::findOrFail($id);
        foreach ($role->permissions as $permission) {
            $role->revokePermissionTo($permission);
        }
        $role->delete();
        flash('Role deleted successfully')->error()->important();
        return redirect()->route('admin.roles.index');
    }
}
