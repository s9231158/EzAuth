<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\EmployeeAccessMiddleware;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth', 'employee_access'])->group(function () {
    Route::get('/employees',[ProfileController::class,'employees'])->name('employees');
    Route::get('/employees/{employeeid}',[ProfileController::class,'getemployee'])->name('getemployee');
    Route::put('/employeeupdate/{employeeid}',[ProfileController::class,'employeeupdate'])->name('employeeupdate');
});

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard',[ProfileController::class,'dashboard'])->name('dashboard');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
