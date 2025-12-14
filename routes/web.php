<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('pages.public.login');
})->name('login');

Route::get('/reset-password', function () {
    return view('pages.public.reset-password');
})->name('reset-password');
