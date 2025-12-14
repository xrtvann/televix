<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/login', function () {
    return view('pages.public.login');
})->name('login');

Route::get('/layanan', function () {
    return view('pages.public.layanan');
})->name('layanan');

Route::get('/reset-password', function () {
    return view('pages.public.reset-password');
})->name('reset-password');
