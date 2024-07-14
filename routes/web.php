<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/text-to-slug', [TextToSlugController::class, 'index']);
Route::post('/text-to-slug', [TextToSlugController::class, 'convert']);
