<?php

use App\Http\Controllers\Auth\ResetPasswordByMobileController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Laravel\Fortify\Http\Controllers\NewPasswordController;
use Laravel\Fortify\RoutePath;

Route::get('/', function () {
    \App\Services\MelipayamakService::sendSMS('09167014556','سلام');
   // return view('welcome');
})->name('home');

Route::get('mobile_password_forget',[ResetPasswordByMobileController::class,'forgetPassword'])->name('mobile.password.forget');
Route::get('mobile_password_reset',[ResetPasswordByMobileController::class,'resetPassword'])->name('mobile.password.reset');
