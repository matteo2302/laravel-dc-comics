<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Folder\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('main');
Route::get('/card/{index}', [HomeController::class, 'show'])->name('card');
Route::post('/add', [HomeController::class, 'create'])->name('add');
Route::post('/card/{index}', [HomeController::class, 'store'])->name('card');
Route::resource('comics', HomeController::class);
