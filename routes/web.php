<?php

use App\Http\Controllers\InfoControllers;
use App\Http\Controllers\MainControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainControllers::class, "home"]);


Route::get('/about', [MainControllers::class, "about"]);


Route::get('/contact', [MainControllers::class, "contact"]);

Route::get('/travel', [MainControllers::class, "travel"]);

Route::get('.Information/information', [InfoControllers::class, "info"]);

Route::get('.Information/information2', [InfoControllers::class, "info2"]);

Route::get('.Information/information3', [InfoControllers::class, "info3"]);

