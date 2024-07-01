<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeconntroller;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/home', [homeconntroller::class, 'index']);