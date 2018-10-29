<?php

use Illuminate\Http\Request;
use \App\Article;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('articles', 'ArticleController@index');


Route::get('articles/{article}', 'ArticleController@show');
//목록중 한개만 컨트롤러에게 요청

Route::post('articles', 'ArticleController@store');
//insert되게끔 컨트롤러에게 요청

Route::put('articles/{article}', 'ArticleController@update');
//update되게끔요청

Route::delete('articles/{article}', 'ArticleController@delete');
