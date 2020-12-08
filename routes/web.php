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

Route::get('/comics','App\Http\Controllers\ComicsController@index'); 
Route::get('/about','App\Http\Controllers\PagesController@about');  
Route::get('/favorites','App\Http\Controllers\ComicsController@favorites'); 

Route::get('/comicsList','App\Http\Controllers\ComicsController@comicsList');
Route::get('/contact','App\Http\Controllers\PagesController@contact');
Route::get('/register','App\Http\Controllers\PagesController@register');
Route::get('/titles/{name}','App\Http\Controllers\PagesController@titles');
Route::get('/chapter/{name}/{no}','App\Http\Controllers\PagesController@chapter');


Route::resource('/','App\Http\Controllers\PagesController'); 
