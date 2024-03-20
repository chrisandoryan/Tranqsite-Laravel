<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/message')->group(function() {
    Route::get('/', [MessageController::class, 'index'])->name('view_messages');
    Route::get('/send', [MessageController::class, 'create'])->name('send_message_page');
    Route::post('/send', [MessageController::class, 'store'])->name('send_message');
    Route::get('/delete/{message}', [MessageController::class, 'destroy']);
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login_page');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'showRegistration'])->name('registration_page');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
