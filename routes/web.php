<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\TextToSlugController;

Route::get('/text-to-slug', [TextToSlugController::class, 'index'])->name('text-to-slug.index');
Route::post('/text-to-slug', [TextToSlugController::class, 'generateSlug'])->name('text-to-slug.generate');
