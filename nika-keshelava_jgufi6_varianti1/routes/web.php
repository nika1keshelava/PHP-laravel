<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth', 'active_user']],
    function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/users', 'UsersController@allUsers');

    Route::post('/add-users', 'UsersController@saveUser');
    Route::get('/delete-user/{id}', 'UsersController@deleteUser');
    Route::get('/edit-user/{id}', 'UsersController@editUser');
    Route::post('/update-users', 'UsersController@updateUsers');
    Route::get('/notification', 'HomeController@notification');

    });

