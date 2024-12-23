<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KarirController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\ViewController;
use Illuminate\Support\Facades\Route;


// Route::get('/', [ViewController::class, 'index']);

Route::middleware('auth')->group(function () {
    
    // Dashboard
    Route::get('/dash', [DashboardController::class, 'index']);     

    // karir
    Route::get('/karir', [KarirController::class, 'index']);
    Route::get('/daftar', [KarirController::class, 'create']);
    Route::post('/karir', [KarirController::class, 'store'])->name('karir.store');
    Route::get('/karir/{id}', [KarirController::class, 'show'])->name('karir.show');

    // user
    Route::resource('/users', UserController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
