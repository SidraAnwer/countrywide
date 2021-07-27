<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'],function(){

      /*========  Ticket Routes  =============*/
    Route::get('/complete-ticket-form/{id}','App\Http\Controllers\ExtraWorkOrderController@completeTicketForm');

    Route::get('/ticket-form','App\Http\Controllers\ExtraWorkOrderController@index');
    Route::get('/add-ticket-form','App\Http\Controllers\ExtraWorkOrderController@create');
    Route::post('/add-ticket-form','App\Http\Controllers\ExtraWorkOrderController@store')->name('tickets.form');
    Route::get('/ticket-form-edit/{id}','App\Http\Controllers\ExtraWorkOrderController@edit')->name('tickets.form.edit');
    Route::post('/ticket-form-update/{id}','App\Http\Controllers\ExtraWorkOrderController@update')->name('tickets.form.update');
    /*========  Ticket Routes  End =============*/


    /*========  Material Routes  =============*/
    Route::get('/add-material','App\Http\Controllers\MaterialController@create');
    Route::get('/material-list','App\Http\Controllers\MaterialController@index')->name('material.list');
    Route::post('/add-material','App\Http\Controllers\MaterialController@store')->name('add.material');
    Route::get('/material-edit/{id}','App\Http\Controllers\MaterialController@edit')->name('material.edit');
    Route::post('/material-update/{id}','App\Http\Controllers\MaterialController@update')->name('material.update');
    /*========  Material Routes End =============*/


    /*========  Place Order Routes  =============*/
    Route::get('/place-order','App\Http\Controllers\PlaceOrderController@index');
    /*========   Place Order Routes End  =============*/


    /*========  Employee Routes  =============*/
    Route::get('/add-employee','App\Http\Controllers\EmployeeController@create');
    Route::get('/add-employee-list','App\Http\Controllers\EmployeeController@index');
    Route::post('/add-employee-store','App\Http\Controllers\EmployeeController@store');
    Route::post('/employeeTimeSheet','App\Http\Controllers\EmployeeController@employeeTimeSheet')->name('employeeTimeSheet');
    Route::post('/employee-delete/{id}','App\Http\Controllers\EmployeeController@delete');
    Route::get('/timesheet','App\Http\Controllers\EmployeeController@timeSheet');
    
    Route::get('/complete-timesheet',function(){
        return view('completetimesheets');
    });

    /*======== Projects Routes  =============*/
     Route::get('/project-list','App\Http\Controllers\ProjectController@index');
     Route::get('/add-project','App\Http\Controllers\ProjectController@create');
     Route::post('/store-project','App\Http\Controllers\ProjectController@store');

     Route::get('/appartment/detail/{id}','App\Http\Controllers\ProjectController@appartmentDetail');
     Route::get('/area/detail/{id}','App\Http\Controllers\ProjectController@areaDetail');
    /*========   Projects Routes End  =============*/


    Route::get('/upload-shop-drawing','App\Http\Controllers\SketchController@create');
    Route::get('/drawing-view/{id}','App\Http\Controllers\SketchController@viewSketche');
    Route::get('/sketche/view/download/{name}','App\Http\Controllers\SketchController@download');
    Route::post('/upload-shop-drawing','App\Http\Controllers\SketchController@store');
    
    Route::get('/project-detail/{id}','App\Http\Controllers\ProjectController@projectDetail');
    Route::post('/project-delete/{id}','App\Http\Controllers\ProjectController@projectDelete');



  
    
    Route::get('/shopdrawinglist','App\Http\Controllers\SketchController@index');
    
    Route::get('/leaktest',function(){
       return view('leaktest'); 
    });
    
    
    Route::get('/addproject2',function(){
      return view('addproject2'); 
    });
    Route::get('/addproject3',function(){
      return view('addproject3'); 
    });
 
   Route::get('test',function(){ return view('test');});   
    
});



