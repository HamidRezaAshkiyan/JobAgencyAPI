<?php

use App\Http\Controllers\API\EmployeeController;
use App\Http\Controllers\API\EmployerController;
use App\Http\Controllers\API\RequestController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;

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



// Route::apiResource([
//     'users'    => UserController::class,
//     'Employee' => EmployeeController::class,
//     'Employer' => EmployerController::class,
//     'Request'  => RequestController::class
// ]);

// USER API ROUTE
Route::get('user', 'API\UserController@index');
Route::get('user/{id}', 'API\UserController@show');
Route::post('user', 'API\UserController@store');
Route::put('user/{id}', 'API\UserController@update');
Route::delete('user', 'API\UserController@delete');

// EMPLOYEE API ROUTE
Route::get('employee', 'API\EmployeeController@index');
Route::get('employee/{id}', 'API\EmployeeController@show');
Route::post('employee', 'API\EmployeeController@store');
Route::put('employee/{id}', 'API\EmployeeController@update');
Route::delete('employee', 'API\EmployeeController@delete');

// EMPLOYER API ROUTE
Route::get('employer', 'API\EmployerController@index');
Route::get('employer/{id}', 'API\EmployerController@show');
Route::post('employer', 'API\EmployerController@store');
Route::put('employer/{id}', 'API\EmployerController@update');
Route::delete('employer', 'API\EmployerController@delete');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
