<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::group(['prefix' => 'api'], function () {
    Route::resource('authenticate', 'AuthenticationController', ['only' => ['index']]);
    Route::post('authenticate/register', 'AuthenticationController@register');
    Route::post('authenticate', 'AuthenticationController@authenticate');
    Route::get('authenticate/user', 'AuthenticationController@getAuthenticatedUser');

    //Users
    Route::post('users/update', 'Users\UsersController@update');

    //Forgot Password
    Route::post('/forgotPassword', 'Auth\ResetPasswordController@postEmail');

    //Repository User
    Route::get('repository/repo/{id}', 'Repo\RepoController@getImgByRepo');
    Route::get('repository/get', 'Repo\RepoController@getRepoUser');
    //Images
    Route::post('images/add', 'Repo\ImagesController@addImg');
    Route::get('images/showAll', 'Repo\ImagesController@getAll');
    Route::get('images/image/{id}', 'Repo\ImagesController@getImgById');
    Route::post('images/{id_repository}', 'Repo\ImagesController@getImgByRepo');
    Route::resource('images', 'Repo\ImagesController');

});

Auth::routes();

Route::get('/home', 'HomeController@index');
