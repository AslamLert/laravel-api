<?php

use App\Http\Controllers\CustomerController;
//use App\Models\Customer;
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

//Add employee
Route::post('addEmployee', [EmployeeController::class,'addEmployee']);

//Update employee
Route::put('updateEmployee/{id}', [EmployeeController::class,'updateEmployee']);

//Delete employee
Route::delete('deleteEmployee/{id}',[EmployeeController::class,'deleteEmployee']);



//ALL API
Route::resource('customers', CustomerController::class);
Route::get('/customers/search/{name}', [CustomerController::class, 'search']);
/*
GET
http://127.0.0.1:8000/api/customers
http://127.0.0.1:8000/api/customers/1
http://127.0.0.1:8000/api/customers/search/c
POST
http://127.0.0.1:8000/api/customers
PUT
http://127.0.0.1:8000/api/customers/5
DEL
http://127.0.0.1:8000/api/customers/5
*/




















//CUSTOMER
// Route::get('/customers', function(){
//     return Customer::all();
// });
// Route::get('/customers', [CustomerController::class, 'index']);
// Route::post('/customers', function(){
//     return Customer::create([
//         'name' => 'aaa',
//         'email' => 'aaa@aaa',
//         'salary' => '100'
//     ]);
// });
// Route::post('/customers', [CustomerController::class, 'store']);
