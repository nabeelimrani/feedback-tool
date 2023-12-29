<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackValidation;
use App\Models\Feedback;
use Auth;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('components.feedback');
    }

    public function submit(FeedbackValidation $req)
    {
        $feedback = new Feedback;
        $feedback->title = $req->title;
        $feedback->description = $req->description;
        $feedback->category = $req->category;

        $user_name = Auth::user()->name;
        $feedback->user_name = $user_name;

        $feedback->save();
        return redirect()->back()->with('success', "Feedback successfully Submitted");
    }
    public function show(Request $request)
    {
        $search = $request['feedbacksearch'] ?? " ";

        if ($search != " ") {
            $feedback = Feedback::where('title', 'LIKE', "%$search%")->orderBy('title', 'asc')->paginate(10);
            return view('components.feedback_show')->with('feedback', $feedback)->with('search', $search);
        } else {
            $feedback = Feedback::orderBy('title', 'asc')->paginate(10);
            return view('components.feedback_show')->with('feedback', $feedback)->with('search', $search);
        }

    }
}
