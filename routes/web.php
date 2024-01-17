<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\FeedbackController;
use App\Models\Comment;
use App\Models\Feedback;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes([
    'verify' => true,
]);

Route::middleware(['verified'])->group(function () {

    Route::get('/{lang}', function ($lang) {
        App::setLocale($lang); // Use 'ur' as a string
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
    })->name('lang.switch');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback');
    Route::get('/feedback/show', [FeedbackController::class, 'show'])->name('feedback.show');
    Route::post('/feedback/submit', [FeedbackController::class, 'submit'])->name('submit');
    Route::post('/feedback/{feedbackId}/comment/store', [CommentController::class, 'store'])
        ->name('feedback.comment.store');

    // In your routes/web.php file
    Route::get('googleLogin', [FeedbackController::class, 'googleLogin']);
    Route::get('auth/google/redirect', [FeedbackController::class, 'handleGoogleCallback']);

});
