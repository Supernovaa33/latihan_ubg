<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('dashboard', 'dashboard')->name('dashboard');
Route::view('tentang', 'tentang')->name('tentang');
Route::view('fikri', 'fikri')->name('fikri');

Route::get('gilang', function () {
    return view('gilang');
});

require __DIR__.'/settings.php';
