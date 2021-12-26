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
// use App\Http\Controllers\FrontController;

Route::get('/', 'FrontController@index');
Route::get('/contact', 'FrontController@contact')->name('contact');
// Route::get('/users/{name}', 'FrontController@user');
Route::get('/users/{name}/{id?}', 'FrontController@user');
Route::get('/okay', 'FrontController@okay');

Route::get('/login', 'FrontController@showRegisterd');
Route::post('/login', 'FrontController@loginProcess')->name('loginprocess');

Route::get('/registerPage', 'FrontController@showRegisterPage');
Route::post('/registerPage', 'FrontController@registerProcess')->name('registerprocess');
