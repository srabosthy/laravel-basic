<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\AuthController;
//use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UploadController;

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

// Route :: get('/',function(){
//     return view ('welcome');
// });

// Route :: get('/home',function(){
//     return view ('welcome');
// });

// Route :: get('/about-us/{category}/{article}',function($c,$a){
//     $name = 'Prama';
//     return view ('about',['cate' => $c, 'myname' => $name, 'article' => $a]);
//     //echo 'Hello, I am Srabosthy :) and category is : ' .$c;
// });

// Route :: get('/history/{category}',[HistoryController::class,'home']);
// Route::get('insert',[EmployeeController::class,'insert']);
// Route::post('store-employee',[EmployeeController::class,'store']);
// // Route::get('employees',[EmployeeController::class,'index']);
// Route::get('edit/{id}',[EmployeeController::class,'edit']);
// Route::post('update/{id}',[EmployeeController::class,'update']);
// Route::get('delete/{id}',[EmployeeController::class,'delete']);

//layouting
Route::get('index',[LayoutController::class,'index']);
Route::get('chart',[LayoutController::class,'chart']);
Route::get('table',[LayoutController::class,'table']);

//authentication-authorization
Route::get('/',[AuthController::class,'login']);
Route::get('login',[AuthController::class,'login']);
Route::post('store-login',[AuthController::class,'storelogin']);
Route::middleware(['AdminIsLogin'])->group(function () {
    Route::get('employees',[EmployeeController::class,'index']);
    Route::get('insert',[EmployeeController::class,'insert']);
    Route::post('store-employee',[EmployeeController::class,'store']);
    Route::get('edit/{id}',[EmployeeController::class,'edit']);
    Route::post('update/{id}',[EmployeeController::class,'update']);
    Route::get('delete/{id}',[EmployeeController::class,'delete']);
});
Route::middleware(['EmployeeIsLogin'])->group(function () {
    Route::get('employeehome',[AuthController::class,'employeehome']);
});

Route::get('logout',[AuthController::class,'logout']);

//validation
Route::get('create-student',[StudentController::class,'create']);
Route::post('store-student',[StudentController::class,'store']);

//Join
Route::get('product',[ProductController::class,'all']);

//File Uploading
Route::get('upload',[UploadController::class,'upload']);
Route::post('upload-image',[UploadController::class,'uploadImage']);