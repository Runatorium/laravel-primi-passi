<?php

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

    $info = [
        'users' => [
            'Stefano',
            'Michele',
            'Daniele',
            'Giovanni'
        ]
    ];


    return view('myHomepage', $info);
})->name('home');

Route::get('about', function () {
    $descrizione = [
        'descrizione' => [
            'titolo',
            'storia',
            'altro'
        ]
    ];

    return view('about', $descrizione);
})->name('about');