<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $data= ['key'=>'value'];
    return Inertia::render('Welcome',[
        'data'=>$data
    ]);
});
 
Route::inertia('/about', 'About');
Route::inertia('/contact', 'Contact');
 