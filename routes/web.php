<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\StudentController;
use  App\Models\StudentModel;
use  App\Http\Controllers\IndexController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// show initaial msg in main screen
Route::get('/', [StudentController::class, 'index']);

// add data in database through sttudent model
Route::post('/addStudent', [StudentController::class, 'addStudent']);

// see data from data base
Route::get('/student', [StudentController::class, 'viewStudent']);

// delete student delete Query
Route::get('/deleteStudent/{id}' , [StudentController::class, 'deleteStudent']);

//update student   -> update Query
Route::get('/updateStudent', [StudentController::class, 'updateStudent']);

Route::get('/data', [IndexController::class,'index']);







