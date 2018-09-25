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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//students login
Route::get('students/login', 'StudentsController@showLoginForm');
Route::post('students/login',['as'=>'students.login','uses' => 'StudentsController@login']);
Route::get('students/','StudentsController@index');

//parents login
Route::get('parents/login','GuardiansController@showLoginForm');
Route::post('parents/login',['as' => 'guardians.login','uses' => 'GuardiansController@login']);
Route::get('parents/','GuardiansController@index');