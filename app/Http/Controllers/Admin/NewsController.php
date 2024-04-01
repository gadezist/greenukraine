<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\NewsRequest;
use App\Models\News;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class NewsController
{
    public function index(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        $posts = News::orderBy('created_at', 'desc')->get();

        return view('admin.news.news', [
            'posts' => $posts,
        ]);
    }

    public function create(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('admin.news.create-news');
    }

    public function store(NewsRequest $newsRequest): RedirectResponse
    {
        if (!$newsRequest->hasFile('image')) {
            return redirect()->back()->withErrors(['errors', 'Upload file error']);
        }

        $image = $newsRequest->file('image');

        $filePath = $image->store('public/news');

        $validatedData = $newsRequest->validated();

        $validatedData['image'] = $filePath;

        News::create($validatedData);

        return redirect()->route('admin.news')->with('success', 'News created successfully');
    }

    public function edit(News $news): Application|Factory|View|\Illuminate\Foundation\Application
    {
        return view('admin.news.edit-news', [
            'news' => $news
        ]);
    }

    public function update(NewsRequest $newsRequest, News $news): RedirectResponse
    {
        $validatedData = $newsRequest->validated();

        if ($newsRequest->hasFile('image')) {
            $image = $newsRequest->file('image');

            $filePath = $image->store('public');
            $validatedData['image'] = $filePath;
        }

        $news->update($validatedData);

        return redirect()->route('admin.news')->with('success', 'News updated successfully');
    }

    public function delete(News $news): RedirectResponse
    {
        $news->delete();

        return redirect()->route('admin.news')->with('success', 'News deleted successfully');
    }
}
