<?php

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

Route::get('/','homeController@index');

Route::get('/create','homeController@create');
Route::get('/login','loginController@index');



Route::get('/register','loginController@register');

Route::get('/make_list','homeController@make');


Route::post('/insert','Controller@insert');

Route::get('/show_list','Controller@show');


Route::get('edit-records','taskUpdateController@index');
Route::get('edit/{id}','taskUpdateController@showlist');
Route::post('edit/{id}','taskUpdateController@edit');

Route::get('delete-records','taskDeleteController@index');
Route::get('delete/{id}','taskDeleteController@destroy');










Route::get('/show_list','Controller@show');


Route::get('/success','successController@register');
Route::get('/home','homeController@list');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
