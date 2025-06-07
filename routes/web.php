<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'welcome'])->name('home');

// Item routes
Route::get('/items', [ItemController::class, 'index'])->name('items.index');
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');
Route::post('/items', [ItemController::class, 'store'])->name('items.store');
Route::get('/item/{item}', [ItemController::class, 'show'])->name('item.single');
Route::get('/items/{item}', [ItemController::class, 'show'])->name('items.single');


Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
Route::get('/service/{service}', [ServiceController::class, 'show'])->name('service.single');


Route::get('/home', function () {
    return view('welcome');
})->name('welcome');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/items', [PageController::class, 'items'])->name('items');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

