<?php

// user service class to handle user related operations like register, login, etc, and also to interact with the user repository class
// using blade template engine
namespace App\Services;

use App\Repositories\Interfaces\IUserRepository;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService {

    protected $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register(RegisterRequest $request)
    {
        $user = $this->userRepository->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        
        if ($user) {
            $user->assignRole('user');
            return redirect()->route('login')->with('success', 'Registered successfully');
        }else{
            return back()->with('error', 'Failed to register');
        }
    }

    public function login(LoginRequest $request)
    {
        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect()->intended('/')->with('success', 'Logged in successfully');
        }else{
            return back()->with('error', 'Invalid login details');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login')->with('success', 'Logged out successfully');
    }

    public function forgotPassword($request)
    {
        $user = $this->userRepository->findByEmail($request->email);

        if ($user) {
            $user->sendPasswordResetNotification($user->createToken('password_reset')->plainTextToken);
            return back()->with('success', 'Password reset link sent to your email');
        }else{
            return back()->with('error', 'User not found');
        }
    }

    public function resetPassword($request)
    {
        $user = $this->userRepository->findByEmail($request->email);

        if ($user) {
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->route('login')->with('success', 'Password reset successfully');
        }else{
            return back()->with('error', 'User not found');
        }
    }

   
}