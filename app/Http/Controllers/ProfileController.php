<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\DeletRequest;
use App\Http\Requests\Profile\SocialRequest;
use App\Http\Requests\Profile\UpdateInfoRequest;
use App\Http\Requests\Profile\UpdatePwRequest;
use App\Http\Requests\Profile\UpdateRequest;
use App\Services\ProfileService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    public function profile()
    {
        return view('dashboard.profile');
    }

    

//     Route::get('/dashboard/profile',[ProfileController::class,'profile'])->name('profile');
// Route::put('/dashboard/profile',[ProfileController::class,'updateProfile'])->name('profile.update');
// Route::put('/dashboard/profile/password',[ProfileController::class,'updatePassword'])->name('profile.password');
// Route::put('/dashboard/profile/info',[ProfileController::class,'updateInfo'])->name('profile.info');
// Route::put('/dashboard/profile/social',[ProfileController::class,'updateSocial'])->name('profile.social');
// Route::delete('/dashboard/profile',[ProfileController::class,'deleteAccount'])->name('profile.delete');
    
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

}