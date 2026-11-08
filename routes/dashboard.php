<?php

use App\Http\Controllers\Dashboard\ClassroomsController;
use App\Http\Controllers\Dashboard\TeachersController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\StudentsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::group([
    'prefix'=>'admin/dashboard',
    'as'=>'dashboard.',
    'middleware'=>['auth']
],function(){
    Route::get('/',[DashboardController::class,'index'])
    ->name('index');
    Route::resource('classrooms',ClassroomsController::class);
    Route::resource('teachers',TeachersController::class);
    Route::resource('students',StudentsController::class);
});
