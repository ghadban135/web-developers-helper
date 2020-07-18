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

Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@login');
Route::post('/logout', 'AuthController@logout');

Route::get('/subcategory', 'SubcategoryController@index');
Route::get('/subcategory/{id}', 'SubcategoryController@show');
Route::post('/subcategory', 'SubcategoryController@store'); // i should put inside admin middleware
Route::post('/subcategory/{id}', 'SubcategoryController@update'); // i should put inside admin middleware
Route::delete('/subcategory/{id}', 'SubcategoryController@destroy'); // i should put inside admin middleware
Route::get('/content', 'ContentController@index');
Route::get('/content/{id}', 'ContentController@show');
Route::get('/content-feedback/{id}', 'FeedbackController@showAll');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('/ping', function(){
        return response()->json([
                    'success' => true,], 200);
    });

Route::post('/content', 'ContentController@store');
Route::post('/content/{id}', 'ContentController@update');
Route::delete('/content/{id}', 'ContentController@destroy');

Route::get('/feedback', 'FeedbackController@index');
Route::get('/feedback/{id}', 'FeedbackController@show');
Route::post('/feedback', 'FeedbackController@store');
Route::post('/feedback/{id}', 'FeedbackController@update');
Route::delete('/feedback/{id}', 'FeedbackController@destroy');
});
