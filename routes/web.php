<?php

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

Route::get('auth/login', [\App\Http\Controllers\AuthController::class, 'index'])->name('auth.login');

Route::group(['middleware' => 'auth:web', 'prefix' => 'dashboard'], function () {
    Route::get('index', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
});

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('index', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
});

Route::get('auth/logout', function () {
    Auth::logout();
    return redirect(\route('auth.login'));
})->name('auth.logout');
