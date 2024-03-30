<?php

namespace App\Listeners;

use App\Events\PostRetrived;
use Illuminate\Support\Facades\Request;

class PostRetrivedHandler
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
    public function handle(PostRetrived $event): void
    {
        if (!Request::is('admin*') && !$event->post->status) {
            abort('404');
        }
    }
}
