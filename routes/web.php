<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ItemController;

Route::get('/', [WelcomeController::class, 'welcome'])->name('home');

// Item routes
Route::get('/items', [ItemController::class, 'index'])->name('items.index');
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
Route::post('/items', [ItemController::class, 'store'])->name('items.store');
Route::get('/item/{item}', [ItemController::class, 'show'])->name('item.single');
//Route::get('/', function () {
//    return view('welcome');
//})->name('home');

Route::get('/home', function () {
    return view('welcome');
})->name('welcome');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/items', function () {
    return view('items');
})->name('items');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

