<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MajorsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/register', [AuthController::class, 'store'])->name('auth.store');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
Route::delete('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name(name: 'dashboard');
    Route::get('/profile', [ProfileController::class, 'index'])->name(name: 'profile.index');
    
    Route::get('/students', [StudentController::class, 'index'])->name(name: 'students.index');
    Route::get('/students/create', [StudentController::class, 'create'])->name(name: 'students.create');
    Route::post('/students',[StudentController::class, 'store'])->name(name: 'students.store');
    Route::get('/students/{id}', [StudentController::class, 'show'])->name(name: 'students.show');
    Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name(name: 'students.edit');
    Route::put('/students/{id}', [StudentController::class, 'update'])->name(name: 'students.update');
    Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name(name: 'students.destroy');
    
    Route::get('/majors', [MajorsController::class, 'index'])->name(name: 'majors.index');
    // Route::get('/majors/create', [MajorsController::class, 'create'])->name(name: 'majors.create');
    // Route::get('/majors/{id}', [MajorsController::class, 'show'])->name(name: 'majors.show');
    // Route::get('/majors/{id}/edit', [MajorsController::class, 'edit'])->name(name: 'majors.edit'); 
});