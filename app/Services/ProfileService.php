<?php 

namespace App\Services;

use App\Repositories\Interfaces\IProfileRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileService
{

    protected $ProfileRepository;

    public function __construct(IProfileRepository $ProfileRepository)
    {
        $this->ProfileRepository = $ProfileRepository;
    }

    public function updateProfile($request)
    {
        $attributes = $request->validated();
        // update user avatar image
        if ($request->hasFile('avatar')) {
            $attributes['avatar'] = $request->file('avatar')->store('avatars');
        }else{
            unset($attributes['avatar']);
        }
        $userId = auth()->id();
        return $this->ProfileRepository->updateUser($userId, $attributes);
    }

    public function updatePassword($request)
    {
        $attributes = $request->validated();
        $userId = auth()->id();
        $user = auth()->user();
        if (Hash::check($attributes['password'], $user->password)) {
            $attributes['password'] = Hash::make($attributes['password']);
            return $this->ProfileRepository->updateUser($userId, ['password' => $attributes['password']]);
        }
        return response()->back()->with('error', 'Current password is incorrect');
    }

    public function updateInfo($request)
    {
        $attributes = $request->validated();
        $userId = auth()->id();
        return $this->ProfileRepository->update($userId, $attributes);
    }

    public function updateSocial($request)
    {
        $attributes = $request->validated();
        $userId = auth()->id();
        return $this->ProfileRepository->update($userId, $attributes);
    }

    public function deleteAccount($request)
    {
        $userId = auth()->id();
        $user = auth()->user();
        if (Hash::check($request['password'], $user->password)) {
            DB::beginTransaction();
            try {
                $this->ProfileRepository->delete($userId);
                $user->delete();
                DB::commit();
                return redirect()->route('login')->with('success', 'Account deleted successfully');
            } catch (\Exception $e) {
                DB::rollBack();
                return response()->back()->with('error', 'Failed to delete account');
            }
        }
        return response()->back()->with('error', 'Password is incorrect');
    }
}