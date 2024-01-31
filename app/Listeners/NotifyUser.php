<?php

namespace App\Listeners;

use App\Models\User;
use App\Mail\UserMail;
use App\Events\PostPublish;
use Illuminate\Support\Facades\Mail;

class NotifyUser
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostPublish $event): void
    {
        $users = User::all();
        foreach ($users as $user) {
            Mail::to($user->email)->send(new UserMail($event->data));
        }

    }
}
