<?php

use Illuminate\Support\Facades\Route;




Route::get('/', 'EmployeeController@index') -> name('employees-index');
Route::get('/employee/{id}', 'EmployeeController@show') -> name('employee-show');
Route::get('/create/employee', 'EmployeeController@create') -> name('employee-create');
Route::post('/store/employee', 'EmployeeController@store') -> name('employee-store');
Route::get('/edit/employee/{id}', 'EmployeeController@edit') -> name('employee-edit');
Route::post('/update/employee/{id}', 'EmployeeController@update') -> name('employee-update');


Route::get('/tasks', 'TaskController@index') -> name('tasks-index');
Route::get('/task/{id}', 'TaskController@show') -> name('task-show');
Route::get('/create/task', 'TaskController@create') -> name('task-create');
Route::post('/store/task', 'TaskController@store') -> name('task-store');
Route::get('/edit/task/{id}', 'TaskController@edit') -> name('task-edit');
Route::post('/update/task/{id}', 'TaskController@update') -> name('task-update');


Route::get('/typologies', 'TypologyController@index') -> name('typologies-index');
Route::get('/typology/{id}', 'TypologyController@show') -> name('typology-show');
Route::get('/create/typology', 'TypologyController@create') -> name('typology-create');
Route::post('/store/typology', 'TypologyController@store') -> name('typology-store');
Route::get('/edit/typology/{id}', 'TypologyController@edit') -> name('typology-edit');
Route::post('/update/typology/{id}', 'TypologyController@update') -> name('typology-update');
