<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;



Route::get('/', function () {
return view('welcome');


});
Route::resource("/student", StudentController::class);
Route::get('/student/go', 'StudentController@show');
Route::post('/student/ohmy', [StudentController::class, 'loginPOST']);
Route::get('/student/go', 'StudentController@show');