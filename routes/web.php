<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// --- COMICS

Route::get('/', function () {
    return view('comics', ['comics' =>config('comics')]);
})->name('comics');

//COMICS

Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');
    $comic = $comics[$id];

    return view('comic', compact('comic'));
})->name('comic');

// MOVIES

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/games', function () {
    return view('games');
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos');
})->name('videos');
