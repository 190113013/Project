<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudInsertController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\AuthController;


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
    return view('pr');
});

Route::get('login', 'App\Http\Controllers\AuthController@index');
Route::post('post-login', 'App\Http\Controllers\AuthController@postLogin')->name('post-login');; 
Route::get('register', 'App\Http\Controllers\AuthController@register');
Route::post('post-register', 'App\Http\Controllers\AuthController@postRegister')->name('post-register'); 
Route::get('dashboard', 'App\Http\Controllers\AuthController@dashboard'); 
Route::get('logout', 'App\Http\Controllers\AuthController@logout');

Route::get('/price', function () {
    return view('price');
});

Route::get('/policy', function () {
    return view('policy');
});



Route::get('/{lang}', function ($lang) {
	App::setlocale($lang);
    return view('pr');
});

Route::get('/{lang}', 'App\Http\Controllers\LocalizationController@index');

Route::get('/multiuploads', 'App\Http\Controllers\UploadController@uploadForm');
Route::post('/multiuploads', 'App\Http\Controllers\UploadController@uploadSubmit');

Route::get('/inst','App\Http\Controllers\InsertController@insertform');
Route::post('/crt','App\Http\Controllers\InsertController@insert');


 

Route::get("/register", function(){
return view('register');
});