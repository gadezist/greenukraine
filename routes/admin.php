<?php

use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::name('admin.')->prefix('admin')->middleware(['auth', 'role:super-admin'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');

});
