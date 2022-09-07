<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('registration-user',[RegistrationController::class,'register'])->Name('authentication.registration');

Route::post('registration-user',[RegistrationController::class,'insert'])->Name('authentication.registration');

Route::get('login-user',[RegistrationController::class,'login'])->Name('authentication.login');

Route::post('login-user',[RegistrationController::class,'loginpost'])->Name('authentication.login');
