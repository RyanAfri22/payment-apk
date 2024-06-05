<?php

use App\Http\Controllers\historyController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\paymentbillController;
use App\Http\Controllers\transferController;
use Illuminate\Support\Facades\Route;
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

Route::get('/dashboard', [homeController::class, 'index']);
Route::get('/history', [historyController::class, 'index']);
Route::get('/transfer', [transferController::class, 'index']);
Route::get('/transfer/paymentbill', [paymentbillController::class, 'index']);
Route::get('/transfer/paymentbill/transactionsuccess', [transferController::class, 'success']);

Route::get('/', [loginController::class, 'index']);
Route::Post('/login-proses', [loginController::class, 'proses']);
Route::get('/register', [loginController::class, 'register']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
