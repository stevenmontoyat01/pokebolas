<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//---------------------Routes--------------------

//route of index
Route::get("/trainners", "App\Http\Controllers\TrainnerController@index");
//route of create
Route::get("/register", "App\Http\Controllers\TrainnerController@create");
//route of post 
Route::post("/trainners/create","App\Http\Controllers\TrainnerController@store");
//route of show
Route::get("/trainner/{id}","App\Http\Controllers\TrainnerController@show");
//route of edit
Route::get("/trainner/{id}/edit","App\Http\Controllers\TrainnerController@edit");
//route of update
Route::put("/trainnerUp/{id}","App\Http\Controllers\TrainnerController@update");

//routes of resource

Route::resource('trainneresource' ,"App\Http\Controllers\TrainnerController"::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
