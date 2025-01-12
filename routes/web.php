<?php

use App\Http\Controllers\JenisLayananController;
use App\Http\Controllers\LayananMedisController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RuangLayananController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'layanan_medis');

Route::middleware(['auth', 'verified'])->group(function() {
    // Route::get('/dashboard', fn() => Inertia::render('Dashboard'))
    //     ->name('dashboard');
    Route::resource('layanan_medis', LayananMedisController::class);
    Route::resource('jenis_layanan', JenisLayananController::class);
    Route::resource('ruang', RuangLayananController::class);
});

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
