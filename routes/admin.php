<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Map\MarkerController;
use Illuminate\Support\Facades\Route;

Route::name('admin.')->prefix('admin')->middleware(['auth', 'role:super-admin'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::post('/user/{user}', [UserController::class, 'update'])->name('update-user');

    Route::get('/news', [NewsController::class, 'index'])->name('news');
    Route::get('/news/create', [NewsController::class, 'create'])->name('create-news');
    Route::post('/news/store', [NewsController::class, 'store'])->name('store-news');
    Route::post('/news/{news}', [NewsController::class, 'update'])->name('update-news');
    Route::get('/news/edit/{news}', [NewsController::class, 'edit'])->name('edit-news');
    Route::delete('/news/delete/{news}', [NewsController::class, 'delete'])->name('delete-news');

    Route::post('/marker/store', [MarkerController::class, 'store'])->name('marker-store');
    Route::delete('/marker/delete/{marker}', [MarkerController::class, 'delete'])->name('marker-delete');

});
