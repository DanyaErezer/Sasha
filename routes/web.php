<?php

use App\Http\Controllers\WPControllers;
use App\Http\Controllers\InfoControllers;
use App\Http\Controllers\MainControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainControllers::class, "home"])->name('home');

Route::get('/', [WPControllers::class, "WP_home"])->name('home');


Route::get('/about', [MainControllers::class, "about"])->name('about');


Route::get('/contact', [MainControllers::class, "contact"])->name('contact');

Route::get('/travel', [MainControllers::class, "travel"])->name('travel');

Route::get('/photo', [MainControllers::class, "photo"])->name('photo');

//Route::get('.Information/information', [WPControllers::class, "info"]);

//Route::get('.Information/information2', [WPControllers::class, "info2"]);

//Route::get('.Information/information3', [WPControllers::class, "info3"]);

Route::get('/info/{category}', [WPControllers::class, 'info']);

