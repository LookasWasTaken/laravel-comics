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

Route::get('/', function () {
    $data = [
        "hrefs" => [
            "characters",
            "comics",
            "movies",
            "tv",
            "games",
            "collectibles",
            "videos",
            "fans",
            "news",
            "shop"
        ],
        "links" => [
            "1" => [
                "DC Comics",
                "Characters",
                "Comics",
                "Movies",
                "Tv",
                "Games",
                "Collectibles",
                "Videos",
                "News"
            ],
            "2" => [
                "SHOP",
                "Shop DC",
                "Shop DC Collectibles"
            ],
            "3" => [
                "DC",
                "Terms of Use",
                "Privacy Policy (New)",
                "Ad Choises",
                "Advertising",
                "Jobs",
                "Subscriptions",
                "Talent Workshops",
                "CPSC Certificates",
                "Ratings",
                "Shop Help",
                "Contact Us"
            ],
            "4" => [
                "SITES",
                "DC",
                "Mad Magazine",
                "DC Kids",
                "DC Universe",
                "DC Power Visa",
            ],
        ],
        "socials" => [
            "facebook.png",
            "twitter.png",
            "youtube.png",
            "pinterest.png",
            "periscope.png"
        ],
        "banners" => [
            "digital comics" => "buy-comics-digital-comics.png",
            "dc merchandise" => "buy-comics-merchandise.png",
            "subscription" => "buy-comics-shop-locator.png",
            "comic shop locator" => "buy-comics-subscriptions.png",
            "dc power visa" => "buy-dc-power-visa.svg"
        ],
    ];
    return view('comics', $data);
})->name('comics');

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

Route::get('/fans', function () {
    return view('fans');
})->name('fans');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
