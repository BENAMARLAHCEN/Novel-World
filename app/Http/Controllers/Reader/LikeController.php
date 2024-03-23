<?php

namespace App\Http\Controllers\Reader;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $likes = $this->userService->getLikes();
        return view('reader.likes.index', compact('likes'));
    }

    // store method and destroy method using ajax
    // store method and destroy method using the same method

    public function store(Request $request)
    {
        $this->userService->toggleLike($request->novel_id);
    }
}
