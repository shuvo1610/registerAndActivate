<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('registration-user',[RegistrationController::class,'register'])->Name('authentication.registration');

Route::post('registration-user',[RegistrationController::class,'insert'])->Name('authentication.registration');
