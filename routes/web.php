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
    $links_footer = config("links-footer");
    return view('home', compact("links", "links_jumbo", "links_footer"));
})->name("home");
// /HOME

// CHARACTERS
Route::get('/characters', function () {
    $links = config('links');
    $links_jumbo = config("links-jumbo");
    $links_footer = config("links-footer");
    return view('characters', compact("links", "links_jumbo", "links_footer"));
})->name("characters");
// /CHARACTERS

// COMICS
Route::get('/comics', function () {
    $links = config('links');
    $links_jumbo = config("links-jumbo");
    $comics = config('comics');
    $links_footer = config("links-footer");
    return view('comics', compact("links", "comics", "links_jumbo", "links_footer"));
})->name("comics");
// /COMICS

// MOVIES
Route::get('/movies', function () {
    $links = config('links');
    $links_jumbo = config("links-jumbo");
    $links_footer = config("links-footer");
    return view('movies', compact("links", "links_jumbo", "links_footer"));
})->name("movies");
// /MOVIES

// TV
Route::get('/tv', function () {
    $links = config('links');
    $links_jumbo = config("links-jumbo");
    $links_footer = config("links-footer");
    return view('tv', compact("links", "links_jumbo", "links_footer"));
})->name("tv");
// /TV

// GAMES
Route::get('/games', function () {
    $links = config('links');
    $links_jumbo = config("links-jumbo");
    $links_footer = config("links-footer");
    return view('games', compact("links", "links_jumbo", "links_footer"));
})->name("games");
// /GAMES

// COLLECTIONABLES
Route::get('/collectionables', function () {
    $links = config('links');
    $links_jumbo = config("links-jumbo");
    $links_footer = config("links-footer");
    return view('collectionables', compact("links", "links_jumbo", "links_footer"));
})->name("collectionables");
// /COLLECTIONABLES

// VIDEOS
Route::get('/videos', function () {
    $links = config('links');
    $links_jumbo = config("links-jumbo");
    $links_footer = config("links-footer");
    return view('videos', compact("links", "links_jumbo", "links_footer"));
})->name("videos");
// /VIDEOS

// FANS
Route::get('/fans', function () {
    $links = config('links');
    $links_jumbo = config("links-jumbo");
    $links_footer = config("links-footer");
    return view('fans', compact("links", "links_jumbo", "links_footer"));
})->name("fans");
// /FANS

// NEWS
Route::get('/news', function () {
    $links = config('links');
    $links_jumbo = config("links-jumbo");
    $links_footer = config("links-footer");
    return view('news', compact("links", "links_jumbo", "links_footer"));
})->name("news");
// /NEWS

// SHOP
Route::get('/shop', function () {
    $links = config('links');
    $links_jumbo = config("links-jumbo");
    $links_footer = config("links-footer");
    return view('shop', compact("links", "links_jumbo", "links_footer"));
})->name("shop");
// /SHOP