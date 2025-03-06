<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

 

Route::get("/",[LoginController::class,'loadSignUp']); // Cargar registro

Route::post("/register/user",[LoginController::class,'ComprobarUserRegistro'])->name('ComprobarUserRegistro'); // Añadir usuario

Route::post("/login/user",[LoginController::class,'ComprobarUserInicio'])->name('ComprobarUserInicio'); // Añadir usuario

Route::get("/login",[LoginController::class,'loadLogin']); // Cargar inicio sesión

Route::middleware(['auth'])->group(function () {
    
    Route::get('/index', [UserController::class, 'index']);
    
    Route::get('/profile', [UserController::class, 'show']);

});