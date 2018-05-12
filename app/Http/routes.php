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



Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        return view('index');
    })->name('main');

    Route::get('/new_main', function () {
        return view('new_index');
    })->name('new_main');

    Route::get('/sho2oon', [
        'uses' => 'AppController@getSho2oonPage',
        'as' => 'sho2oon',
        'middleware' => 'roles',
        'roles' => ['Admin', 'Sho2oon']
    ]);

    Route::get('/sho2oon/add-new-mosab', [
        'uses' => 'AppController@getAddMosab',
        'as' => 'sho2oon.mosab',
        'middleware' => 'roles',
        'roles' => ['Sho2oon']
    ]);

    Route::get('/sho2oon/tamreed', [
        'uses' => 'AppController@getTamreed',
        'as' => 'tamreed',
        'middleware' => 'roles',
        'roles' => ['Tamreed']
    ]);

    Route::get('/admin', [
        'uses' => 'AppController@getAdminPage',
        'as' => 'admin',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);

    Route::post('/admin/assign-roles', [
        'uses' => 'AppController@postAdminAssignRoles',
        'as' => 'admin.assign',
        'middleware' => 'roles',
        'roles' => ['Admin']
    ]);

    Route::get('/signup', [
        'uses' => 'AuthController@getSignUpPage',
        'as' => 'signup'
    ]);

    Route::post('/signup', [
        'uses' => 'AuthController@postSignUp',
        'as' => 'signup'
    ]);

    Route::get('/signin', [
        'uses' => 'AuthController@getSignInPage',
        'as' => 'signin'
    ]);

    Route::post('/signin', [
        'uses' => 'AuthController@postSignIn',
        'as' => 'signin'
    ]);

    Route::get('/logout', [
        'uses' => 'AuthController@getLogout',
        'as' => 'logout'
    ]);
});