<?php

use App\Http\Controllers\HomeController;
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
Route::get('/','HomeController@index')->name('index');
Route::get('/about','HomeController@about')->name('index.about');
Route::get('/service','HomeController@service')->name('index.service');
Route::get('/portfolio','HomeController@portfolio')->name('index.portfolio');
Route::get('/contact','HomeController@contact')->name('index.contact');