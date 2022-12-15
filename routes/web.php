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
    $links_jumbo = config("links-jumbo");
    return view('home', compact("links", "links_jumbo"));
})->name("home");
// /HOME

// CHARACTERS
Route::get('/characters', function () {
    $links = config('links');
    $links_jumbo = config("links-jumbo");
    return view('characters', compact("links", "links_jumbo"));
})->name("characters");
// /CHARACTERS

// COMICS
Route::get('/comics', function () {
    $links = config('links');
    $links_jumbo = config("links-jumbo");
    $comics = config('comics');
    return view('comics', compact("links", "comics", "links_jumbo"));
})->name("comics");
// /COMICS

// MOVIES
Route::get('/movies', function () {
    $links = config('links');
    $links_jumbo = config("links-jumbo");
    return view('movies', compact("links", "links_jumbo"));
})->name("movies");
// /MOVIES

// TV
Route::get('/tv', function () {
    $links = config('links');
    $links_jumbo = config("links-jumbo");
    return view('tv', compact("links", "links_jumbo"));
})->name("tv");
// /TV

// GAMES
Route::get('/games', function () {
    $links = config('links');
    $links_jumbo = config("links-jumbo");
    return view('games', compact("links", "links_jumbo"));
})->name("games");
// /GAMES

// COLLECTIONABLES
Route::get('/collectionables', function () {
    $links = config('links');
    $links_jumbo = config("links-jumbo");
    return view('collectionables', compact("links", "links_jumbo"));
})->name("collectionables");
// /COLLECTIONABLES

// VIDEOS
Route::get('/videos', function () {
    $links = config('links');
    $links_jumbo = config("links-jumbo");
    return view('videos', compact("links", "links_jumbo"));
})->name("videos");
// /VIDEOS

// FANS
Route::get('/fans', function () {
    $links = config('links');
    $links_jumbo = config("links-jumbo");
    return view('fans', compact("links", "links_jumbo"));
})->name("fans");
// /FANS

// NEWS
Route::get('/news', function () {
    $links = config('links');
    $links_jumbo = config("links-jumbo");
    return view('news', compact("links", "links_jumbo"));
})->name("news");
// /NEWS

// SHOP
Route::get('/shop', function () {
    $links = config('links');
    return view('shop', compact("links", "links_jumbo"));
})->name("shop");
// /SHOP