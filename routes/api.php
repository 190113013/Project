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

//List articles
Route::get('customers', 'App\Http\Controllers\CustomersController@index');

//List single article
Route::get('customer/{id}', 'App\Http\Controllers\CustomersController@show');

//Create new article
Route::post('customer', 'App\Http\Controllers\CustomersController@store');

//Update article
Route::put('customer', 'App\Http\Controllers\CustomersController@store');

//Delete article
Route::delete('customer/{id}', 'App\Http\Controllers\CustomersController@destroy');

Route::get('/createcust','App\Http\Controllers\InsertController@insertform');
Route::post('/createcust','App\Http\Controllers\InsertController@insert');