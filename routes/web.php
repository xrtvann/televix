<?php

use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/layanan', function () {
    return view('pages.public.layanan');
})->name('layanan');

Route::get('/tentang-kami', function () {
    return view('pages.public.tentang-kami');
})->name('tentang-kami');

Route::get('/kontak', function () {
    return view('pages.public.kontak');
})->name('kontak');

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/reset-password', function () {
        return view('pages.public.reset-password');
    })->name('reset-password');
});

Route::post('/logout', LogoutController::class)->middleware('auth')->name('logout');

// Handle GET logout (redirect to POST or direct logout for safety)
Route::get('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route('login')->with('success', 'Anda telah berhasil logout.');
})->middleware('auth')->name('logout.get');

// Protected Admin Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('pages.admin.dashboard');
    })->name('dashboard')->middleware('permission:view_dashboard');

    Route::get('/manajemen-servis', function () {
        return view('pages.admin.manajemen-servis');
    })->name('manajemen-servis')->middleware('permission:view_orders');

    Route::get('/manajemen-pelanggan', function () {
        return view('pages.admin.manajemen-pelanggan');
    })->name('manajemen-pelanggan')->middleware('permission:view_customers');

    Route::get('/ringkasan-keuangan', function () {
        return view('pages.admin.ringkasan-keuangan');
    })->name('ringkasan-keuangan')->middleware('permission:view_reports');

    Route::get('/laporan-operasional', function () {
        return view('pages.admin.laporan-operasional');
    })->name('laporan-operasional')->middleware('permission:view_reports');

    Route::get('/pengaturan-umum', function () {
        return view('pages.admin.pengaturan-umum');
    })->name('pengaturan-umum')->middleware('permission:view_settings');

    // User Management Routes
    Route::middleware('permission:view_users')->group(function () {
        Route::get('/manajemen-staff-rbac', [UserManagementController::class, 'index'])->name('manajemen-staff-rbac.index');
        Route::post('/manajemen-staff-rbac', [UserManagementController::class, 'store'])->name('manajemen-staff-rbac.store');
        Route::put('/manajemen-staff-rbac/{user}', [UserManagementController::class, 'update'])->name('manajemen-staff-rbac.update');
        Route::delete('/manajemen-staff-rbac/{user}', [UserManagementController::class, 'destroy'])->name('manajemen-staff-rbac.destroy');
        Route::patch('/manajemen-staff-rbac/{user}/toggle-status', [UserManagementController::class, 'toggleStatus'])->name('manajemen-staff-rbac.toggle-status');
    });
});
