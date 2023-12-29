<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, $feedbackId)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $body = $request->body;

        $mentionedUserId = $this->extractMentionedUserId($body);
        $bodyname = preg_replace('/@([a-zA-Z0-9_]+)/', '', $request->body);
        Comment::create([
            'user_id' => auth()->id(),
            'feedback_id' => $feedbackId,
            'body' => $bodyname,
            'mentioned_user_id' => $mentionedUserId,
        ]);

        return redirect()->back()->with('success', 'Comment added successfully.');
    }

    private function extractMentionedUserId($body)
    {
        preg_match_all('/@([a-zA-Z0-9_]+)/', $body, $matches);

        if (!empty($matches[1])) {
            $mentionedUsername = $matches[1][0];

            // Use double quotes to include the variable in the string
            $mentionedUser = User::where('name', 'LIKE', "%$mentionedUsername%")->first();

            if ($mentionedUser) {
                return $mentionedUser->id;
            }
        }

        return null;
    }

}
