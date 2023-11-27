<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MastermobilController;
use App\Http\Controllers\PemakaianController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SupirController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('datamobil', [MastermobilController::class, 'index'])->name('datamobil.index');
Route::get('datamobil/create', [MastermobilController::class, 'create'])->name('datamobil.create');
Route::post('datamobil', [MastermobilController::class, 'store'])->name('datamobil.store');
Route::get('datamobil/{id}/edit', [MastermobilController::class, 'edit'])->name('datamobil.edit');
Route::put('datamobil/{id}', [MastermobilController::class, 'update'])->name('datamobil.update');
Route::delete('datamobil/{id}', [MastermobilController::class, 'destroy'])->name('datamobil.destroy');

Route::get('pemakaian', [PemakaianController::class, 'index'])->name('pemakaian.index');

Route::get('pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');

Route::get('supir', [SupirController::class, 'index'])->name('supir.index');

Route::get('/', function () {
    return view('dashboard');
});
