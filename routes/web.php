<?php

use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\ServiceOrderController;
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
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard')
        ->middleware('permission:view_dashboard');

    // Service Order Routes
    Route::middleware('permission:view_orders')->group(function () {
        Route::get('/manajemen-servis', [ServiceOrderController::class, 'index'])->name('manajemen-servis.index');
        Route::post('/manajemen-servis', [ServiceOrderController::class, 'store'])->name('manajemen-servis.store');
        Route::get('/manajemen-servis/{order}', [ServiceOrderController::class, 'show'])->name('manajemen-servis.show');
        Route::put('/manajemen-servis/{order}', [ServiceOrderController::class, 'update'])->name('manajemen-servis.update');
        Route::delete('/manajemen-servis/{order}', [ServiceOrderController::class, 'destroy'])->name('manajemen-servis.destroy');
        Route::patch('/manajemen-servis/{order}/assign-technician', [ServiceOrderController::class, 'assignTechnician'])->name('manajemen-servis.assign-technician');
        Route::patch('/manajemen-servis/{order}/update-status', [ServiceOrderController::class, 'updateStatus'])->name('manajemen-servis.update-status');
    });

    // Customer Routes
    Route::middleware('permission:view_customers')->group(function () {
        Route::get('/manajemen-pelanggan/export/csv', [CustomerController::class, 'export'])->name('manajemen-pelanggan.export');
        Route::get('/manajemen-pelanggan', [CustomerController::class, 'index'])->name('manajemen-pelanggan.index');
        Route::post('/manajemen-pelanggan', [CustomerController::class, 'store'])->name('manajemen-pelanggan.store');
        Route::get('/manajemen-pelanggan/{customer}', [CustomerController::class, 'show'])->name('manajemen-pelanggan.show');
        Route::put('/manajemen-pelanggan/{customer}', [CustomerController::class, 'update'])->name('manajemen-pelanggan.update');
        Route::delete('/manajemen-pelanggan/{customer}', [CustomerController::class, 'destroy'])->name('manajemen-pelanggan.destroy');
    });

    // Payment Routes
    Route::middleware('permission:view_payments')->group(function () {
        Route::get('/pembayaran', [PaymentController::class, 'index'])->name('pembayaran.index');
        Route::post('/pembayaran/{order}/pay', [PaymentController::class, 'pay'])->name('pembayaran.pay');
    });

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

        // Permission Management
        Route::post('/api/permissions/update', [UserManagementController::class, 'updatePermissions'])->name('permissions.update');
    });
});
