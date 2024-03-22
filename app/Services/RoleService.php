<?php

namespace App\Services;

use App\Models\Permission;
use App\Repositories\Interfaces\IRoleRepository;

class RoleService
{
    protected $roleRepository;

    public function __construct(IRoleRepository $roleRepository)
    {
        $this->roleRepository = $roleRepository;
    }

    public function store($request)
    {
        $role = $this->roleRepository->create([
            'name' => $request->name
        ]);

        $role->permissions()->attach($request->permissions);
    }

    public function update($request, $id)
    {
        $role = $this->roleRepository->update($id, [
            'name' => $request->name
        ]);

        $this->getRole($id)->permissions()->sync($request->permissions);
    }

    public function destroy($id)
    {
        $this->roleRepository->delete($id);
    }

    public function getPermissions()
    {
        return Permission::all();
    }

    public function getRoles()
    {
        return $this->roleRepository->all();
    }

    public function getRole($id)
    {
        return $this->roleRepository->findById($id);
    }
}