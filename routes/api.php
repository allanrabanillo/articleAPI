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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//List of articles
Route::get('articles','ArticleController@index');

//List single article
Route::get('article/{id}','ArticleController@show');

//Create new article
Route::middleware('auth:api')->post('article','ArticleController@store');

//Update article
Route::middleware('auth:api')->put('article','ArticleController@store');

//Delete article
Route::middleware('auth:api')->delete('article/{id}','ArticleController@destroy');

//List the comments of article
Route::get('article/{id}/comments','CommentsController@index')->name('comments.index');

