<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $feedbackId)
    {
        $request->validate([
            'body' => 'required',
        ]);

        Comment::create([
            'user_id' => auth()->id(),
            'feedback_id' => $feedbackId,
            'body' => $request->input('body'),
        ]);

        return redirect()->back()->with('success', 'Comment added successfully.');
    }
}
