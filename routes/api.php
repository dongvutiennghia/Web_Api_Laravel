<?php

// namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
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
// Route::get('/customer','CustomerController@index');
// Route::get('customer', 'App\Http\Controllers\CustomerController@index');

Route::group([
    'prefix'=>'V1',
],function(){
    Route::resource('customer','App\Http\Controllers\Api\V1\CustomerController')->only(['index','show','update','delete','store']);
// Route::resource('customer','App\Http\Controllers\CustomerController')->except(['edit','create']);

});
