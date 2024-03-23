<?php

namespace App\Http\Controllers\Reader;

use App\Http\Controllers\Controller;
use App\Services\UserService;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $favorites = $this->userService->getFavorites();
        return view('reader.favorites.index', compact('favorites'));
    }

    // store method and destroy method using ajax
    // store method and destroy method using the same method

    public function store(Request $request)
    {
        $this->userService->toggleFavorite($request->novel_id);
    }

}
