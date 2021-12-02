<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserInformationController;

//homepage
Route::get('/',[AuthController::class,'home'])->name('home');
//Log-in page
Route::get('/login',[AuthController::class,'loginView'])->name('loginView');
Route::post('/login',[AuthController::class,'login'])->name('login');
//Registration page
Route::get('/registration',[AuthController::class,'registrationView'])->name('registrationView');
Route::post('/registration',[AuthController::class,'registration'])->name('registration');
//Display Data
Route::get('/crud',[UserInformationController::class,'index'])->name('CRUD');//display page and get data and show.

//Store Data
Route::get('/crud_create',[UserInformationController::class,'createView'])->name('createView');
Route::post('/crud_create',[UserInformationController::class,'create'])->name('createUser');

//View User
Route::get('/view/{id}',[UserInformationController::class,'show'])->name('show');

//Update Data
Route::get('/edit/{id}',[UserInformationController::class,'edit'])->name('edit');
Route::post('/update/{id}',[UserInformationController::class,'update'])->name('update');

//Delete Data
Route::get('/delete/{id}',[UserInformationController::class,'delete'])->name('delete');




//Route::get('/edit/{id}',[UserInformationController::class,'edit'])->name('edit');
//Route::put('/edit/{id}',[UserInformationController::class,'update'])->name('update');
//Route::get('/delete/{id}',[UserInformationController::class,'destroy'])->name('destroy');

