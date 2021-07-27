<?php

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
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/*=========  Extra Work Order Routes    ========== */
Route::get('/extra-work-order-show','App\Http\Controllers\ExtraWorkOrderController@index');
Route::post('/extra-work-order','App\Http\Controllers\ExtraWorkOrderController@store');
Route::post('/update-extra-work-order','App\Http\Controllers\ExtraWorkOrderController@update');

/*=========  Material  Routes    ========== */
Route::get('/material','App\Http\Controllers\MaterialController@index');
Route::post('/create-material','App\Http\Controllers\MaterialController@store');
Route::post('/update-material/{id}','App\Http\Controllers\MaterialController@update');