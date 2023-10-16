<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\StudentController;
use  App\Models\StudentModel;
use  App\Http\Controllers\IndexController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// get update delete add student detail in table

// show initaial msg in main screen
Route::get('/', [StudentController::class, 'index']);

// add data in database through sttudent model
Route::post('/addStudent', [StudentController::class, 'addStudent']);

// see data from data base
Route::get('/student', [StudentController::class, 'viewStudent']);

// delete student delete Query
Route::get('/deleteStudent/{id}' , [StudentController::class, 'deleteStudent']);

//update student   -> update Query
Route::post('/updateStudent/{id}', [StudentController::class, 'updateStudent']);

// with id
Route::get('/studentId/{id}', [StudentController::class, 'ViewStudentWithId']);
// with name
Route::get('/studentName/{name}', [StudentController::class, 'ViewStudentWithName']);

Route::get('/data' , [IndexController::class,'index']);

Route::get('/group', [IndexController::class,'group']);









