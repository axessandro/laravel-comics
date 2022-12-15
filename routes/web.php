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

// HOME
Route::get('/', function () {
    $links = config('links');
    return view('home', compact("links"));
})->name("home");
// /HOME

// CHARACTERS
Route::get('/characters', function () {
    $links = config('links');
    return view('characters', compact("links"));
})->name("characters");
// /CHARACTERS

// COMICS
Route::get('/comics', function () {
    $links = config('links');
    $comics = config('comics');
    return view('comics', compact("links", "comics"));
})->name("comics");
// /COMICS

// MOVIES
Route::get('/movies', function () {
    $links = config('links');
    return view('movies', compact("links"));
})->name("movies");
// /MOVIES

// TV
Route::get('/tv', function () {
    $links = config('links');
    return view('tv', compact("links"));
})->name("tv");
// /TV

// GAMES
Route::get('/games', function () {
    $links = config('links');
    return view('games', compact("links"));
})->name("games");
// /GAMES

// COLLECTIONABLES
Route::get('/collectionables', function () {
    $links = config('links');
    return view('collectionables', compact("links"));
})->name("collectionables");
// /COLLECTIONABLES

// VIDEOS
Route::get('/videos', function () {
    $links = config('links');
    return view('videos', compact("links"));
})->name("videos");
// /VIDEOS

// FANS
Route::get('/fans', function () {
    $links = config('links');
    return view('fans', compact("links"));
})->name("fans");
// /FANS

// NEWS
Route::get('/news', function () {
    $links = config('links');
    return view('news', compact("links"));
})->name("news");
// /NEWS

// SHOP
Route::get('/shop', function () {
    return view('shop');
})->name("shop");
// /SHOP