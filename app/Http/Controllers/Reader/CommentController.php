<?php

namespace App\Http\Controllers\Reader;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comments\StoreRequest;
use App\Models\Comment;
use App\Services\UserService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    public function index()
    {
        $comments = $this->commentService->getComments();
        return view('reader.comments.index', compact('comments'));
    }

    public function store(StoreRequest $request)
    {
        $this->commentService->create($request->validated());
        return redirect()->route('comments.index')->with('success', 'Comment created successfully');
    }

    public function destroy(Comment $comment)
    {
        $this->commentService->delete($comment);
        return redirect()->route('comments.index')->with('success', 'Comment deleted successfully');
    }
}
