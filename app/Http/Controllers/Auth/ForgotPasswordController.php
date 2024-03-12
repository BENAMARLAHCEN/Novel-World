<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    protected $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }
    
    public function showResetPasswordForm($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    public function forgotPassword(Request $request)
    {
        return $this->userService->forgotPassword($request);
    }

    public function resetPassword(Request $request)
    {
        return $this->userService->resetPassword($request);
    }
}
