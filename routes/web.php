<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\PatientController;

Route::get('/', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::resource('hospitals', HospitalController::class);
    Route::resource('patients', PatientController::class);
    Route::delete('patients/{id}', [PatientController::class, 'destroyAjax'])->name('patients.destroyAjax');
    Route::get('patients/filter/{hospital_id}', [PatientController::class, 'filter'])->name('patients.filter');
});

