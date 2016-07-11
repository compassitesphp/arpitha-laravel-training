<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'myController@First' ); 
Route::get('/disp','myController@second');
Route::get('/as','CustomController@Add');
Route::get('/z','CustomController@Sub');
Route::get('/pa/{name?}','myController@third');

Route::get('/create','CustomController@insertData');
Route::post('/display','CustomController@listData');

//Modified by shan
Route::get('/list','EmployeeController@listEmployees');

Route::get('/insert','EmployeeController@insertEmployee');
Route::get('/insertData','EmployeeController@insertData');
//End modifications by Shan

Route::get('/{id}/edit','EmployeeController@doEdit');
Route::post('/update','EmployeeController@UpdateEmployee');

Route::get('{id}/delete','EmployeeController@deleteEmployee');