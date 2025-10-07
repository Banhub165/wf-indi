<?php

use Illuminate\Support\Facades\Route;

// Basic Pages
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/program', function () {
    return view('program');
});

Route::get('/our-team', function () {
    return view('our-team');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

// Route dengan parameter (contoh program spesifik)
Route::get('/program/{program}', function ($program) {
    return view('program', compact('program'));
});

// Route group untuk tim
Route::prefix('team')->group(function () {
    Route::get('/', function () {
        return view('our-team');
    });

    Route::get('/member/{member}', function ($member) {
        return view('our-team', compact('member'));
    });
});

// Redirect
Route::redirect('/home', '/');

// Fallback (jika route tidak ditemukan)
Route::fallback(function () {
    return response()->view('404', [], 404);
});
