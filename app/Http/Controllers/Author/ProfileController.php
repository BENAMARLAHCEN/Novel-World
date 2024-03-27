<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Services\UserService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $profile = Profile::where('user_id', auth()->id())->first();
        return view('author.profile.index', compact('profile'));
    }

    public function generalInfo()
    {
        $profile = Profile::where('user_id', auth()->id())->first();
        return view('author.profile.general-info', compact('profile'));
    }

    public function updateGeneralInfo(Request $request)
    {
        $this->userService->updateProfile($request->validated(), auth()->id());
        return redirect()->route('author.profile.index')->with('success', 'Profile updated successfully');
    }

    public function socialLinks()
    {
        $profile = Profile::where('user_id', auth()->id())->first();
        return view('author.profile.social-links', compact('profile'));
    }

    public function updateSocialLinks(Request $request)
    {
        $this->userService->updateProfile($request->validated(), auth()->id());
        return redirect()->route('author.profile.index')->with('success', 'Profile updated successfully');
    }

    public function addressInfo()
    {
        $profile = Profile::where('user_id', auth()->id())->first();
        return view('author.profile.address-info', compact('profile'));
    }

    public function updateAddressInfo(Request $request)
    {
        $this->userService->updateProfile($request->validated(), auth()->id());
        return redirect()->route('author.profile.index')->with('success', 'Profile updated successfully');
    }

    public function changePassword()
    {
        return view('author.profile.change-password');
    }

    public function updatePassword(Request $request)
    {
        $this->userService->updatePassword($request->validated(), auth()->id());
        return redirect()->route('author.profile.index')->with('success', 'Password updated successfully');
    }

    public function destroy()
    {
        $this->userService->deleteProfile(auth()->id());
        return redirect()->route('login')->with('success', 'Profile deleted successfully');
    }

}
