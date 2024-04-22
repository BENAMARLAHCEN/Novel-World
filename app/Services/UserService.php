<?php

// user service class to handle user related operations like register, login, etc, and also to interact with the user repository class
// using blade template engine
namespace App\Services;

use App\Repositories\Interfaces\IUserRepository;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserService
{

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
            $user->assignRole('reader');
            $this->sendVerificationEmail($user);
            return redirect()->route('login')->with('success', 'Registered successfully. Please check your email to verify your account');
        } else {
            return back()->with('error', 'Failed to register');
        }
    }

    public function login(LoginRequest $request)
    {
        if (auth()->attempt($request->only('email', 'password'))) {
            // test if the user is banned or not
            if (auth()->user()->banned_at) {
                auth()->logout();
                return back()->with('error', 'Your account has been banned');
            }
            return redirect()->intended('/')->with('success', 'Logged in successfully');
        } else {
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
        // check if user exists and if it does, generate a token and store it in the password_reset_tokens table

        $passwordResetToken = DB::table('password_reset_tokens')->where('email', $request->email)->first();
        if ($passwordResetToken) {
            DB::table('password_reset_tokens')->where('email', $request->email)->delete();
        }

        $user = $this->userRepository->findByEmail($request->email);

        if ($user) {
            $token = Str::random(64);
            DB::table('password_reset_tokens')->insert([
                'email' => $user->email,
                'token' => $token
            ]);
            // send email with token

            Mail::send('emails.resetPassword', ['token' => $token], function ($message) use ($user) {
                $message->to($user->email);
                $message->subject('Reset your password');
            });
            return back()->with('success', 'Password reset link sent to your email');
        } else {
            return back()->with('error', 'User not found');
        }
    }

    public function resetPassword($request)
    {
        // check if token exists in the password_reset_tokens table and if it does, update the user's password and delete the token
        $update = DB::table('password_reset_tokens')->where('token', $request->token)->where('email', $request->email)->first();
        if ($update) {
            $user = $this->userRepository->findByEmail($request->email);
            $user->password = Hash::make($request->password);
            $user->save();
            DB::table('password_reset_tokens')->where('token', $request->token)->delete();
            return redirect()->route('login')->with('success', 'Password reset successfully');
        } else {
            return back()->with('error', 'Invalid token');
        }
    }


    // verify email address using the token sent to the user's email 

    public function verify($token)
    {
        $user = $this->userRepository->findByVerifyToken($token);
        if ($user) {
            $user->email_verified_at = now();
            $user->verify_token = null;
            $user->save();
            return redirect()->route('login')->with('success', 'Email verified successfully');
        } else {
            return redirect()->route('login')->with('error', 'Invalid token');
        }
    }

    // send email verification link to the user's email

    public function sendVerificationEmail($user)
    {
        $token = Str::random(64);
        $user->verify_token = $token;
        $user->save();
        Mail::send('emails.verifyEmail', ['token' => $token, 'user' => $user], function ($message) use ($user) {
            $message->to($user->email);
            $message->subject('Verify your email address');
        });
    }

    // user favorite a novel methods

    public function getFavorites()
    {
        return auth()->user()->favorites;
    }

    public function toggleFavorite($novelId)
    {

        $user = $this->userRepository->findById(auth()->id());
        $novel = $user->favorites()->where('novel_id', $novelId)->first();
        
        if ($novel) {
            $user->favorites()->detach($novelId);            
            return response()->json(['success' => 'Novel removed from favorites successfully']);
        } else {
            $user->favorites()->attach($novelId);
            return response()->json(['success' => 'Novel added to favorites successfully']);
        }
    }

    // user like a novel methods

    public function getLikes()
    {
        return auth()->user()->likes;
    }

    public function toggleLike($novelId)
    {
        $user = $this->userRepository->findById(auth()->id());
        $novel = $user->likes()->where('novel_id', $novelId)->first();
        if ($novel) {
            $user->likes()->detach($novelId);
            return response()->json(['message' => 'Novel unliked successfully']);
        } else {
            $user->likes()->attach($novelId);
            return response()->json(['message' => 'Novel liked successfully']);
        }
    }


    // admin user management methods

    public function getAllUsers(int $perPage = null,$role=null)
    {

        if ($perPage) {
            return $this->userRepository->paginate($perPage,$role);
        }
        return $this->userRepository->all();
    }
    
    public function getUser($id)
    {
        return $this->userRepository->findById($id);
    }

    public function createUser($request)
    {
        $this->userRepository->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect()->route('admin.users.index')->with('success', 'User created successfully');
    }

    public function updateUser($request, $id)
    {
        $user = $this->userRepository->findById($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
    }

    public function deleteUser($id)
    {
        $user = $this->userRepository->findById($id);
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully');
    }

    public function toggleAdmin($id)
    {
        $user = $this->userRepository->findById($id);
        if ($user->hasRole('admin')) {
            $user->removeRole('admin');
            return redirect()->route('admin.users.index')->with('success', 'Admin role removed successfully');
        } else {
            $user->assignRole('admin');
            return redirect()->route('admin.users.index')->with('success', 'Admin role assigned successfully');
        }
    }

    public function toggleBan($id)
    {
        $user = $this->userRepository->findById($id);
        if ($user->banned_at) {
            $user->banned_at = null;
            $user->save();
            return redirect()->back()->with('success', 'User unbanned successfully');
        } else {
            $user->banned_at = now();
            $user->save();
            return redirect()->back()->with('success', 'User banned successfully');
        }
    }

    public function blockPermission($request, $id)
    {
        $user = $this->userRepository->findById($id);
        if ($request->permissions == null) {
            $user->detachBlockPermissions();
            return redirect()->back()->with('success', 'All permissions revoked successfully');
        }
        $permissions = implode(',', $request->permissions);
        $user->blockPermissionsTo($permissions);
        return redirect()->back()->with('success', 'Permission revoked successfully');
    }


    public function getCount($users)
    {
        return $this->userRepository->countOf($users);
    }

    public function findById($id)
    {
        return $this->userRepository->findById($id);
    }
}
