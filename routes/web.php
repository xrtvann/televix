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

Route::get('/tentang-kami', function () {
    return view('pages.public.tentang-kami');
})->name('tentang-kami');

Route::get('/kontak', function () {
    return view('pages.public.kontak');
})->name('kontak');

Route::get('/dashboard', function () {
    return view('pages.admin.dashboard');
})->name('dashboard');

Route::get('/manajemen-servis', function () {
    return view('pages.admin.manajemen-servis');
})->name('manajemen-servis');

Route::get('/manajemen-pelanggan', function () {
    return view('pages.admin.manajemen-pelanggan');
})->name('manajemen-pelanggan');

Route::get('/ringkasan-keuangan', function () {
    return view('pages.admin.ringkasan-keuangan');
})->name('ringkasan-keuangan');

Route::get('/laporan-operasional', function () {
    return view('pages.admin.laporan-operasional');
})->name('laporan-operasional');

Route::get('/pengaturan-umum', function () {
    return view('pages.admin.pengaturan-umum');
})->name('pengaturan-umum');

Route::get('/manajemen-staff-rbac', function () {
    return view('pages.admin.manajemen-staff-rbac');
})->name('manajemen-staff-rbac');

Route::get('/reset-password', function () {
    return view('pages.public.reset-password');
})->name('reset-password');
