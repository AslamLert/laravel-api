<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
| Route::get('/admin',[RoomController::class,'index'])->name('admin');
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Get all employees
Route::get('employees',[EmployeeController::class,'getEmployee']);

//Get Specific employee detail
Route::get('employees/{id}',[EmployeeController::class,'getEmployeeById']);
