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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/',[
//    'uses'=> 'HomeController@index',
//    'as'=> ''
//]);
Route::get('/','HomeController@index');

Route::get('usesr','UsesrController@create');

Route::get('allId','UsesrController@allId');

Route::get('show/{id}','UsesrController@show');

Route::get('show/{id}/delete','UsesrController@delete');

Route::get('show/{id}/edit','UsesrController@edit');
