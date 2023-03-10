<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {

    return $request->user();

});

/* Route::get('/posts', 'Api\PostController@index'); */

Route::namespace('Api')->prefix('/posts')->group(function(){

    Route::get('/', 'PostController@index');

    Route::get('/{id}', 'PostController@show');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {

    return $request->user();

});

/* Route::get('/tags', 'Api\PostController@index'); */

Route::namespace('Api')->prefix('/tags')->group(function(){

    Route::get('/', 'TagsController@index');

    Route::get('/{name}', 'TagsController@show');

});
