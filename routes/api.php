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

/**FooterComponent -> subscriber form*/
/**C subscriber form*/
Route::post('subscribe', 'SubscribeController@store');
/**.FooterComponent -> subscriber form*/

/** Admin subscribers users*/
Route::get('getemail','GetSubscribersUsersEmail@index');


/**Admin -> AdminPostToHomePageComponent -> post to home page form */
/**C post to home page form*/
Route::post('admin-create-post-to-home-page', 'PostToHomePageController@store');
/**Admin -> AdminPostToHomePageComponent -> post to home page form */

Route::get('getpost','GetPostToHomePageController@index');