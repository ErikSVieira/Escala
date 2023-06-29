<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    // return view('welcome');
})->name('home.index');

// Position
Route::any('/position/search', [PositionController::class, 'search'])->name('position.search');
Route::get('/position', [PositionController::class, 'index'])->name('position.index');
Route::get('/position/create', [PositionController::class, 'create'])->name('position.create');
Route::post('/position/store', [PositionController::class, 'store'])->name('position.store');
Route::get('/position/{id}', [PositionController::class, 'show'])->name('position.show');
Route::get('/position/edit/{id}', [PositionController::class, 'edit'])->name('position.edit');
Route::put('/position/{id}', [PositionController::class, 'update'])->name('position.update');
Route::delete('/position/{id}', [PositionController::class, 'destroy'])->name('position.destroy');

// Employee
Route::any('/employee/search', [EmployeeController::class, 'search'])->name('employee.search');
Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('/employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employee/{id}', [EmployeeController::class, 'show'])->name('employee.show');
Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('/employee/{id}', [EmployeeController::class, 'update'])->name('employee.update');
Route::delete('/employee/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy');
