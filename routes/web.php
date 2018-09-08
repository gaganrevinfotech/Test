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
Route::get('/register', 'RegistrationController@create');
//Route::post('register', 'RegistrationController@store');
Route::any('view-data', 'RegistrationController@view_data');
Route::any('destroy/{id}', 'RegistrationController@destroy');
Route::any('edit/{id}', 'RegistrationController@edit');
 
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
Route::group(['middleware' => 'web'], function () {
	Route::get('fileUpload', function () {
        return view('fileUpload');
    });
    Route::post('fileUpload', ['as'=>'fileUpload','uses'=>'RegistrationController@fileUpload']);
    Route::get('fileUploadEdit', function () {
        return view('fileUploadEdit');
    });
    Route::post('fileUploadEdit', ['as'=>'fileUploadEdit','uses'=>'RegistrationController@fileUploadEdit']);

});