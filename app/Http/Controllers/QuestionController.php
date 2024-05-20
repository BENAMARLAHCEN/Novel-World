<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuestionController extends Controller
{
    public function sendQuestion(QuestionRequest $request){
        Mail::send('emails.question', ['question' => $request->question, 'email' => $request->email, 'name' => $request->name], function ($message) use ($request) {
            $message->to($request->email)->subject('New Question');
        });
        return response()->json(['message' => 'Question sent successfully','success' => true], 200);
    }

    
}
