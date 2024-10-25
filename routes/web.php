<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\S3Controller;

Route::post('/upload', S3Controller::class)->name('upload.file');

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
