<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});
 
Route::inertia('/about', 'About');
Route::inertia('/contact', 'Contact');
 