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

Route::resource('articles', 'ArticleController');
Route::resource('authors', 'AuthorController');
Route::resource('comments', 'CommentController');

Route::get('articles/{article}/relationships/author', 'ArticleRelationshipController@author')->name('articles.relationships.author');
Route::get('articles/{article}/author', 'ArticleRelationshipController@author')->name('articles.author');
Route::get('articles/{article}/relationships/comments', 'ArticleRelationshipController@comments')->name('articles.relationships.comments');
Route::get('articles/{article}/comments', 'ArticleRelationshipController@comments')->name('articles.comments');
