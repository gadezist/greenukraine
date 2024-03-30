<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ActualController
{
    public function index(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $posts = News::where('status', true)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('actual.actual', [
            'posts' => $posts,
        ]);
    }

    public function post(News $post): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('actual.post', [
            'post' => $post,
        ]);
    }
}
