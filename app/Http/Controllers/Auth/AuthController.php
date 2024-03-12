<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    // displaying the login and register forms

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // using the repository pattern and the service pattern and request validation
    public function register(RegisterRequest $request)
    {
        return $this->userService->register($request);
    }
    public function login(LoginRequest $request)
    {
        return $this->userService->login($request);
    }
    public function logout()
    {
        return $this->userService->logout();
    }

}
