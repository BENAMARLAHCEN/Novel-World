<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\DeletRequest;
use App\Http\Requests\Profile\SocialRequest;
use App\Http\Requests\Profile\UpdateInfoRequest;
use App\Http\Requests\Profile\UpdatePwRequest;
use App\Http\Requests\Profile\UpdateRequest;
use App\Services\ProfileService;
use App\Services\UserService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $profileService;
    protected $userService;

    public function __construct(ProfileService $profileService, UserService $userService)
    {
        $this->profileService = $profileService;
        $this->userService = $userService;
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

   
        public function updateProfile(UpdateRequest $request)
        {
            $this->profileService->updateProfile($request);
            return redirect()->back()->with('success', 'Profile updated successfully');
        }
    
        public function updatePassword(UpdatePwRequest $request)
        {
            $this->profileService->updatePassword($request);
            return redirect()->back()->with('success', 'Password updated successfully');
        }
    
        public function updateInfo(UpdateInfoRequest $request)
        {
            $this->profileService->updateInfo($request);
            return redirect()->back()->with('success', 'Info updated successfully');
        }
    
        public function updateSocial(SocialRequest $request)
        {
            $this->profileService->updateSocial($request);
            return redirect()->back()->with('success', 'Social updated successfully');
        }
    
        public function deleteAccount(DeletRequest $request)
        {
            $this->profileService->deleteAccount($request->validated());
        }

        public function show()
        {
            return view('profile');
        }

}