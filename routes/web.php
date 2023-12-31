<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BrodcastController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', [PageController::class, 'index']);
Route::get('/video/{any}', [PageController::class, 'PlayVideo']);
Route::middleware(['guest'])->group(function() {
    Route::get('/login',[AuthController::class,'index'])->name('login');
    Route::get('/register',[AuthController::class,'registerIndex'])->name('register');
});
Route::post('/login', [AuthController::class ,'login']);
Route::post('/register', [AuthController::class ,'register'])->name('register');
Route::post('/logout', [AuthController::class ,'logout'])->name('logout');


Route::middleware(['auth', 'admin'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/all-alerts', [BrodcastController::class, 'allAlerts']);
    Route::post('/submit-notification', [BrodcastController::class,'submitNotification'])->name('submit-notification');
});
