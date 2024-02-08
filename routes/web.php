<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PharmacistController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopAdminController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
});

Route::middleware(['auth','role:shopadmin'])->group(function(){
    Route::get('/shopadmin/dashboard', [ShopAdminController::class, 'ShopAdminDashboard'])->name('admin.dashboard');
});

Route::middleware(['auth','role:doctor'])->group(function(){
    Route::get('/doctor/dashboard', [DoctorController::class, 'DoctorDashboard'])->name('admin.dashboard');
});

Route::middleware(['auth','role:pharmacist'])->group(function(){
    Route::get('/pharmacist/dashboard', [PharmacistController::class, 'PharmacistDashboard'])->name('admin.dashboard');
});

