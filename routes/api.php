<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'api'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', 'AuthController@login');
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::get('user-profile', 'AuthController@userProfile');

    });
    Route::group(['middleware' => 'auth'], function () {
        Route::post('create-category', 'CategoryController@create');
        Route::post('create-menu', 'MenuController@create');
        Route::get('menu-list', 'MenuController@get');
        Route::post('category-list', 'CategoryController@get');
        Route::get('get-category-temp', 'CategoryController@getTemp');
    });
});