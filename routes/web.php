<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return inertia('Home');
})->name('home');

Route::get('/about', function () {
    return inertia('About');
})->name('about');
