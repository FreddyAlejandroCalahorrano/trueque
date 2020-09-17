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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//Users

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');
Route::get('articles', 'ArticleController@index');

//Products
Route::get('products', 'ProductController@index');

//Questions
Route::get('questions', 'QuestionController@index');

//Categories
Route::get('categories', 'CategoryController@index');

Route::group(['middleware' => ['jwt.verify']], function() {
    //Users
    Route::get('user', 'UserController@getAuthenticatedUser');

    //Products

    Route::get('products/{product}', 'ProductController@show');
    Route::post('products', 'ProductController@store');
    Route::put('products/{product}', 'ProductController@update');
    Route::delete('products/{product}', 'ProductController@delete');

    //Questions

    Route::get('questions/{question}', 'QuestionController@show');
    Route::post('questions', 'QuestionController@store');
    Route::put('questions/{question}', 'QuestionController@update');
    Route::delete('questions/{question}', 'QuestionController@delete');

    //Categories

    Route::get('categories/{category}', 'CategoryController@show');
    Route::post('categories', 'CategoryController@store');
    Route::put('categories/{category}', 'CategoryController@update');
    Route::delete('categories/{category}', 'CategoryController@delete');

});




