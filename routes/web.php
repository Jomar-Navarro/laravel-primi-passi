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

Route::get('/header', function () {

    $text = 'Ciao';

    return view('header', compact('text'));
})->name('header');

Route::get('/', function () {

    $name = 'Ken';
    $surname = 'Okazashi';

    return view('home', compact('name', 'surname'));
})->name('Homepage');
