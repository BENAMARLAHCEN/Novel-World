<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAllUsers(10);
        return view('dashboard.admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('dashboard.admin.users.create');
    }

    public function store(Request $request)
    {
        $this->userService->createUser($request);
        return redirect()->route('dashboard.admin.users.index')->with('success', 'User created successfully');
    }

    public function edit($id)
    {
        $user = $this->userService->getUser($id);
        return view('dashboard.admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->userService->updateUser($request, $id);
    }

    public function destroy($id)
    {
        $this->userService->deleteUser($id);
    }

    public function toggleAdmin($id)
    {
        $this->userService->toggleAdmin($id);
    }

    public function toggleBan($id)
    {
        $this->userService->toggleBan($id);
    }


}
