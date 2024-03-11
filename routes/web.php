<?php

use App\Http\Controllers\FileController;
use App\Http\Controllers\Map\MarkerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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
    return view('home.home');
})->name('home');

Route::get('/about', function () {
    return view('about.about');
})->name('about');

Route::get('/map', function () {
    return view('map.map', ['map_header' => true, 'user_role' => Auth::user()?->getRoleNames()[0]]);
})->name('map');

Route::get('/partners', function () {
    return view('partners.partners');
})->name('partners');

Route::get('/actual', function () {
    return view('actual.actual');
})->name('actual');

Route::get('/post', function () {
    return view('actual.post');
})->name('post');

Route::get('/team', function () {
    return view('team.team');
})->name('team');

Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/get/geo-json', [FileController::class, 'getGeoJson'])->name('get-geo-json');
Route::post('/markers/all', [MarkerController::class, 'all'])->name('markers-all');
Route::get('/marker/get/{marker}', [MarkerController::class, 'info'])->name('marker-info');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
