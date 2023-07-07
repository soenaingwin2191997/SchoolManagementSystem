<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentGradeController;
use App\Models\StudentClass;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('school.master');
});

route::get('add/student',[StudentController::class,'addStudent']);
route::get('home',[DashboardController::class,'dashboard']);

route::post('add/grade',[StudentController::class,'addGrade']);
route::post('add/class',[StudentController::class,'addClass']);
route::post('add/township',[StudentController::class,'addTownship']);
route::get('ajax/search/township',[StudentController::class,'searchTownship']);

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
