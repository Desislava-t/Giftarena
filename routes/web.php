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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomePageController@index')->name('index');


/** admin routing*/

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/admin-giftarena', function () {
        return view('admin.dashboard');
    });




    /**post-home-page*/
    Route::get('/admin-post-page', 'PostToHomePageController@index')->name('admin-post-page');
    /**.post-home-page*/

    /**Subscribers user*/
    Route::get('/admin-subscribers', 'SubscribeController@index')->name('admin-subscribers');
    /**.Subscribers user*/

    /**register-users page*/
    Route::get('/admin-register-users', 'RegisterUsersController@index')->name('admin-register-users');
    /**C users*/
    Route::post('/admin-register-users', 'RegisterUsersController@store');
    /**R users*/
    Route::get('/admin-register-users-update/edit{id}', 'RegisterUsersController@edit')->name('admin-register-users-update/edit');
    /**U users*/
    Route::post('/admin-register-users-update/update{id}', 'RegisterUsersController@update')->name('admin-register-users-update/update');
    /**D users*/
    Route::get('/admin-register-users/delete{id}', 'RegisterUsersController@destroy')->name('admin-register-users/delete');
    /**.register-users page*/



});

/** .admin routing*/

