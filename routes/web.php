<?php

use App\Http\Controllers\WPControllers;
use App\Http\Controllers\InfoControllers;
use App\Http\Controllers\MainControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainControllers::class, "home"])->name('home');

Route::get('/', [WPControllers::class, "WP_home"])->name('home');


Route::get('/about', [MainControllers::class, "about"])->name('about');


Route::get('/travel', [MainControllers::class, "travel"])->name('travel');

Route::get('/travel', [WPControllers::class, "WP_travel"])->name('travel');

Route::get('/photo', [MainControllers::class, "photo"])->name('photo');


Route::get('/info/{category}', [WPControllers::class, 'info']);

