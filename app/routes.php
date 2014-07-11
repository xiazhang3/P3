<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'GeneratorController@showIndex');
Route::get('paragraph', 'GeneratorController@getCreateParagraph');
Route::post('paragraph', 'GeneratorController@postCreateParagraph');

Route::get('user', 'GeneratorController@getCreateUser');
Route::post('user', 'GeneratorController@postCreateUser');




