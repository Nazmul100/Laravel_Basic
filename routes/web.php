<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserInformationController;


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

