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
/******************************************************************************
        ---------- User registeration routes-----------------------
 ****************************************************************************/
Route::get('registration', 'UserController@userRegister');

Route::get('registration/user/create', 'UserController@registrationCreate');