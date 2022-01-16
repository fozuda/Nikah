<?php

use App\Http\Controllers\FrontController;
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
// use App\Http\Controllers\BackendController;

Route::get('/', 'FrontController@welcome');
// Route::get('/contact', 'FrontController@contact')->name('contact');
// Route::get('/users/{name}', 'FrontController@user');
// Route::get('/users/{name}/{id?}', 'FrontController@user');
// Route::get('/okay', 'FrontController@okay');

Route::get('/login', 'FrontController@showLoginPage')->name('login');
Route::post('/login', 'FrontController@loginProcess')->name('loginprocess');
Route::get('/register', 'FrontController@showRegisterPage')->name('register');
Route::post('/register', 'FrontController@registerProcess')->name('registerprocess');
Route::get('/post', 'FrontController@posts')->name('post');
Route::get('/aboutus', 'FrontController@aboutUs')->name('aboutus');
Route::get('/blog', 'FrontController@blog')->name('blog');
Route::get('/rules', 'FrontController@rules')->name('rules');
Route::get('/success', 'FrontController@successStory')->name('success');



//BioData
Route::get('/bio-data', 'BioDataController@bioData')->name('biodata');
Route::get('/personal-info', 'BioDataController@showPersonalInfo')->name('personalinfo');
Route::post('/personal-info', 'BioDataController@personalInfoProcess')->name('personalinfoprocess');
Route::get('/family-details', 'BioDataController@familyDetails')->name('familyDetails');
Route::get('/bride-groom-more-details', 'BioDataController@brideGroomMoreDetails')->name('brideGroomMoreDetails');
Route::get('/requirment', 'BioDataController@requirment')->name('requirment');
Route::get('/communication', 'BioDataController@communication')->name('communication');
