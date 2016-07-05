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

Route::get('/list','CustomController@listEmployees');
Route::get('/create','CustomController@insertData');
Route::get('/display','CustomController@listData');
//Route::get('/doInsert','CustomController@doInsert');
//Route::get('/doUpdate','CustomController@doUpdate');
//Route::get('/doInsert','CustomController@handleInsert');
//Route::get('/delete','CustomController@doDelete');

Route::post('/employee/{id}/delete','CustomController@doDelete');
Route::post('/doInsert', 'CustomController@doInsert');
//Route::get('/employee/{id,employee_name,employee_email,Department}/insert','CustomController@doInsert');
Route::post('employee/{id}', 'CustomController@storeInsert');