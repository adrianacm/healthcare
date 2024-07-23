<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    // Show all patients
    Route::get('/patients', [PatientController::class, 'index'])->name('patients');

    // Show one patient
    Route::get('/patient', [PatientController::class, 'show'])->name('patient');

    // Show form to create patient
    Route::get('/patient/create', [PatientController::class, 'create'])->name('patient.create');

    // Save form
    Route::post('/patient', [PatientController::class, 'store'])->name('patient.store');

    // Show form to edit an existing patient
    Route::get('/patient/{patient}/edit', [PatientController::class, 'edit'])->name('patient.edit');

    // Update form
    Route::put('/patient/{patient}', [PatientController::class, 'update'])->name('patient.update');

    // Delete patient
    Route::delete('/patient/delete/{patient}', [PatientController::class, 'destroy'])->name('patient.delete');
});










