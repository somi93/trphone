<?php

/*
|--------------------------------------------------------------------------
| Angular Rest Api Routes
|--------------------------------------------------------------------------
 */

Route::get('/api/employees', 'EmployeesController@employees');
Route::delete('/api/employees/{id}', 'EmployeesController@delete');
Route::post('/api/employee/edit/{id}', 'EmployeesController@update');
Route::post('/api/employee/insert', 'EmployeesController@insert');


/*
|--------------------------------------------------------------------------
| Page Routes
|--------------------------------------------------------------------------
 */
Route::get('/', function () {
    return view('pages/index');
});

Route::get('/admin', function () {
    return view('admin/index');
});
