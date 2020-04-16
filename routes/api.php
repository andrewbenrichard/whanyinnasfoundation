<?php

// use Illuminate\Http\Request;

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


Route::group(['prefix'=> 'auth','namespace' => 'API'], function(){
        Route::post('signin', 'Auth\LoginController');
        Route::post('signout', 'Auth\LogoutController');
        Route::get('me', 'Auth\MeController');
});
Route::group(['prefix'=> 'sc_admin','namespace' => 'API'], function(){
        Route::get('stats', 'ApiController@stats');
        /* project */
        Route::get('projects', 'ApiController@projects');
        Route::get('single/project/{slug}', 'ApiController@singleProject');
        Route::post('post/project', 'ApiController@ProjectStore');
        Route::delete('delete/project/{id}', 'ApiController@ProjectDelete');
        /* donaion */
        Route::post('post/donation', 'ApiController@saveDonation');
        Route::get('donations', 'ApiController@donations');
        Route::delete('delete/donation/{id}', 'ApiController@DonateDelete');
        /* articles */
        Route::get('articles', 'ApiController@articles');
        Route::get('single/article/{slug}', 'ApiController@singleArticle');
        Route::post('post/article', 'ApiController@ArticleStore');
        Route::delete('delete/article/{id}', 'ApiController@ArticleDelete');
        /* gallery */
        Route::get('galleries', 'ApiController@galleries');
        Route::delete('delete/gallery/{id}', 'ApiController@GalleryDelete');
        Route::post('post/gallery', 'ApiController@GalleryStore');
       
});
// Route::apiResources(['user' => 'API\UserController']);
