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
		$title_page = 'Inicio';
    return view('welcome',compact('title_page'));
});

Auth::routes();

Route::get('/admin', 'UserController@index')->name('home');

//students login
Route::get('students/login', ['as'=>'students.form','uses'=>'StudentsController@showLoginForm']);
Route::post('students/login',['as'=>'students.login','uses' => 'StudentsController@login']);
Route::get('students/','StudentsController@index');

Route::resource('estudiantes','StudentsController');
//parents login
Route::get('parents/login',['as'=>'guardians.form','uses'=>'GuardiansController@showLoginForm']);
Route::post('parents/login',['as' => 'guardians.login','uses' => 'GuardiansController@login']);
Route::get('parents/','GuardiansController@index');

Route::resource('padres','GuardiansController');

//employees login
Route::get('employees/login',['as'=>'employees.form','uses'=>'EmployeesController@showLoginForm']);
Route::post('employees/login',['as' => 'employees.login','uses' => 'EmployeesController@login']);
Route::get('employees/','EmployeesController@index');

Route::resource('personal','EmployeesController');



