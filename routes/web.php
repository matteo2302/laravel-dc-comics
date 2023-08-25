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

    $fumetti = config('fumetti');
    return view('layout.main', compact('fumetti'));
})->name('main');
Route::get('/header', function () {

    $fumetti = config('fumetti');
    return view('header', compact('fumetti'));
})->name('index');
