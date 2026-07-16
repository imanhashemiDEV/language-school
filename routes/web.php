<?php

use App\Http\Controllers\Auth\ResetPasswordByMobileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');


// Auth Routes
Route::get('/forgot_password', [ResetPasswordByMobileController::class, 'forgotPassword'])
    ->name('auth.forgot_password');
Route::post('/reset_password', [ResetPasswordByMobileController::class, 'resetPassword'])
    ->name('auth.reset_password');

Route::get('/update_password/{mobile}', [ResetPasswordByMobileController::class, 'updatePassword'])
    ->name('auth.update_password');
Route::post('/save_password', [ResetPasswordByMobileController::class, 'savePassword'])
    ->name('auth.save_password');
