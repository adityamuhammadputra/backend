<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1'], function () {

    Route::post('register', 'UserController@register');
    Route::post('login', 'UserController@login');

    // Route::group(['middleware' => 'jwt.verify'], function () {
    // Route::get('todos', 'TodoController@index');
    // Route::post('todos', 'TodoController@store');
    // Route::patch('todos/{id}', 'TodoController@update');
    // Route::get('todos/{id}/edit', 'TodoController@edit');
    // Route::delete('todos/{id}', 'TodoController@destroy');

    Route::resource('home', 'HomeController')->except('create');
    Route::resource('portofolio', 'PortofolioController')->except('create');
    Route::resource('images', 'ImagesController')->except('create');


    Route::get('user', 'UserController@getAuthenticatedUser');
    // });

});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
