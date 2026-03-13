<?php

use App\Http\Controllers\LatihanController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return "welcome";
});

Route::get('/welcome/{id}', function ($id) {
    return "welcome " . $id;
});

Route::get('/name', function () {
    return "welcome to name";
})->name('name');

Route::get('/sapa', [LatihanController::class, 'index']);
Route::get('/sapa/{name?}', function ($nama = "saya") {
    return "sapa " . $nama;
});


Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);


