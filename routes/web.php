<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NavController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RekapController;
use App\Http\Controllers\EvdataController;
use App\Http\Controllers\HarianController;
use App\Http\Controllers\RekapBidang1Controller;
use App\Http\Controllers\RekapBidangController;
use App\Http\Controllers\ProfileController;


Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {

    Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
    Route::post('/registered', [AuthController::class, 'registered'])->name('registered');

    Route::prefix("user")->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('add', [AuthController::class, 'register'])->name('register');
        Route::post('store', [UserController::class, 'store'])->name('user.store');
        Route::get('edit/{id}', [UserController::class, 'edit'])->name('user.edit');
        Route::post('update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::post('delete/{id}', [UserController::class, 'delete'])->name('user.delete');
        Route::post('recycle/{id}', [UserController::class, 'recycle'])->name('user.recycle');
        Route::get('restore/{id}', [UserController::class, 'restore'])->name('user.restore');
    });

    Route::get('/rekapdata/harian', [HarianController::class, 'harian'])->name('rekap.harian');
    Route::get('/rekapdata/rekapbidang1', [RekapBidang1Controller::class, 'rekapbidang1'])->name('rekap.rekapbidang1');
    Route::get('/rekapdata/rekapbidang', [RekapBidangController::class, 'rekapbidang'])->name('rekaprekapbidang');
    Route::get('/rekapdata/rekap', [RekapController::class, 'rekap'])->name('rekap.rekap');

    Route::get('harian/export/', [HarianController::class, 'export'])->name('harian.export');
    Route::get('rb/export/', [RekapBidangController::class, 'export'])->name('rb.export');
    Route::get('rb1/export/', [RekapBidang1Controller::class, 'export'])->name('rb1.export');
    Route::get('r/export/', [RekapController::class, 'export'])->name('r.export');
});

Route::group(['middleware' => ['auth', 'ceklevel:admin,user']], function () {
    Route::get('/home', [NavController::class, 'dashboard'])->name('dashboard');

    Route::prefix("profile")->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
    });

    Route::prefix("evdata")->group(function () {
        Route::get('/', [EvdataController::class, 'index'])->name('evdata.index');
        Route::get('add', [EvdataController::class, 'create'])->name('evdata.add');
        Route::post('store', [EvdataController::class, 'store'])->name('evdata.store');
        Route::post('delete/{id}', [EvdataController::class, 'delete'])->name('evdata.delete');
    });
});

Route::get('/', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/ceklogin', [AuthController::class, 'ceklogin'])->name('ceklogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
