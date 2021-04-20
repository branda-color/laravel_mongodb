<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;
use App\Http\Controllers\MongodbController;

use App\Http\Controllers\UserController;

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
    return view('welcome');
});


Route::get('data',[MongodbController::class, 'index']);

Route::get('tt',"UserController@index");

Route::get('test',[TestController::class, 'urlTest']);


Route::get('/users', [UserController::class, 'index']);

Route::get('xx',function(){

    return view('welcome');

});
