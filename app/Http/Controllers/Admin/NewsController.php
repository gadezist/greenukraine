<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\NewsRequest;
use App\Models\News;

class NewsController
{
    public function index()
    {
        return view('admin.news.news', [
            'posts' => News::all(),
        ]);
    }

    public function create()
    {
        return view('admin.news.create-news');
    }

    public function store(NewsRequest $newsRequest)
    {
        if (!$newsRequest->hasFile('image')) {
            return redirect()->back()->withErrors(['errors', 'Upload file error']);
        }

        $image = $newsRequest->file('image');

        $filePath = $image->store('public');

        $validatedData = $newsRequest->validated();
        $validatedData['image'] = $filePath;

        News::create($validatedData);

        return redirect()->route('admin.news')->with('success', 'News created successfully');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit-news', [
            'news' => $news
        ]);
    }

    public function update(NewsRequest $newsRequest, News $news)
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

    public function delete(News $news)
    {
        $news->delete();

        return redirect()->route('admin.news')->with('success', 'News deleted successfully');
    }
}
