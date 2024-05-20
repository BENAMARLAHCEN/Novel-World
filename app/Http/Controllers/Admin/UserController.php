<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\StoreRequest;
use App\Http\Requests\Users\UpdateRequest;
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

    public function admins()
    {
        $users = $this->userService->getAllUsers(10, 'admin');
        return view('dashboard.admin.users.index', compact('users'));
    }

    public function readers()
    {
        $users = $this->userService->getAllUsers(10, 'reader');
        return view('dashboard.admin.users.index', compact('users'));
    }

    public function authors()
    {
        $users = $this->userService->getAllUsers(10, 'author');
        return view('dashboard.admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('dashboard.admin.users.create');
    }

    public function show($id)
    {
        $user = $this->userService->getUser($id);
        return view('dashboard.admin.users.show', compact('user'));
    }



    public function edit($id)
    {
        $user = $this->userService->getUser($id);
        return view('dashboard.admin.users.edit', compact('user'));
    }

   
    public function toggleAdmin($id)
    {
        $this->userService->toggleAdmin($id);
    }

    public function toggleBan($id)
    {
        return $this->userService->toggleBan($id);
    }

    public function blockPermissions(Request $request, $id)
    {
        
        return $this->userService->blockPermission($request, $id);
    }


}
