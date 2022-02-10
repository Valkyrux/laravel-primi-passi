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

Route::get('/', function () {
    $menu_voices = [
        "home" => "Home",
        "other_voices" => [
            "Voce 1",
            "Voce 2",
            "Voce 3",
        ]
    ];
    return view('home', $menu_voices);
})->name('Home');

Route::get('/voice_1', function () {
    $menu_voices = [
        "home" => "Home",
        "other_voices" => [
            "Voce 1",
            "Voce 2",
            "Voce 3",
        ]
    ];
    return view('voice_1', $menu_voices);
})->name('Voce 1');

Route::get('/voice_2', function () {
    $menu_voices = [
        "home" => "Home",
        "other_voices" => [
            "Voce 1",
            "Voce 2",
            "Voce 3",
        ]
    ];
    return view('voice_2', $menu_voices);
})->name('Voce 2');

Route::get('/voice_3', function () {
    $menu_voices = [
        "home" => "Home",
        "other_voices" => [
            "Voce 1",
            "Voce 2",
            "Voce 3",
        ]
    ];
    return view('voice_3', $menu_voices);
})->name('Voce 3');
