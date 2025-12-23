<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HistoryController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
->middleware(['auth', 'verified'])
->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/pesan/{id}', [PesanController::class, 'index'])
    ->middleware('auth');
Route::post('/pesan/{id}', [PesanController::class, 'pesan']);
Route::get('/check_out', [PesanController::class, 'check_out'])->name('checkout');
Route::delete('/check_out/{id}', [PesanController::class, 'delete']);
Route::get('konfirmasi-check-out', [PesanController::class, 'konfirmasi']);
Route::get('/history', [HistoryController::class, 'index'])
    ->middleware('auth')
    ->name('history');
Route::get('/history/{id}', [HistoryController::class, 'detail']);

require __DIR__.'/auth.php';
