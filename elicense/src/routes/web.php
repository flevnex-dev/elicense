<?php

use Illuminate\Support\Facades\Route;
use Flevnex\Elicense\Http\Controllers\LicenseController;

Route::middleware(['web', 'auth'])->group(function () {
    Route::prefix('licenses')->group(function () {
        Route::get('/', [LicenseController::class, 'index'])->name('licenses.index');
        Route::post('/', [LicenseController::class, 'store'])->name('licenses.store');
    });
});