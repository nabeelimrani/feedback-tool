<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Feedback;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totaluser = User::count();
        $totalfeedback = Feedback::count();
        $feedbackdata = Feedback::latest()->take(4)->get();
        $totalcomment = Comment::count();
        $commentdata = Comment::latest()->take(4)->get();
        return view('components.home')
            ->with('commentdata', $commentdata)
            ->with('totalcomment', $totalcomment)
            ->with('feedbackdata', $feedbackdata)
            ->with('totalfeedback', $totalfeedback)
            ->with('totaluser', $totaluser);
    }
}
