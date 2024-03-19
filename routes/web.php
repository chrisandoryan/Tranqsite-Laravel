<?php

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
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/send', function () {
    return view('send');
});
