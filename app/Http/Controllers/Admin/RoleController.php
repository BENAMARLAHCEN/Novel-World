<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\RoleService;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // role controller methods will be defined here using the same structure as the AuthController

    protected $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    public function index()
    {
        $roles = $this->roleService->getRoles();
        return view('dashboard.admin.roles.index', compact('roles'));
    }

    public function create()
    {
        $permissions = $this->roleService->getPermissions();
        return view('dashboard.admin.roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        // request validation will be done here , request have role name and permissions
        $request->validate([
            'name' => 'required|unique:roles',
            'permissions' => 'required|array',
            'permissions.*' => 'exists:permissions,id'
        ]);
        // store the role in the database using the role servic
        $this->roleService->store($request);
        // redirect to the roles index page
        return redirect()->route('roles.index')->with('success', 'Role created successfully');

    }

    public function edit($id)
    {
        $role = $this->roleService->getRole($id);
        $permissions = $this->roleService->getPermissions();
        return view('dashboard.admin.roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, $id)
    {
        // request validation will be done here , request have role name and permissions
        $request->validate([
            'name' => 'required|unique:roles,name,'.$id,
            'permissions' => 'required|array',
            'permissions.*' => 'exists:permissions,id'
        ]);
        // update the role in the database using the role servic
        $this->roleService->update($request, $id);
        // redirect to the roles index page
        return redirect()->route('roles.index')->with('success', 'Role updated successfully');
    }

    public function destroy($id)
    {
        // delete the role from the database using the role servic
        $this->roleService->destroy($id);
        // redirect to the roles index page
        return redirect()->route('roles.index')->with('success', 'Role deleted successfully');
    }

    public function show($id)
    {
        return view('dashboard.admin.roles.show');
    }
}
