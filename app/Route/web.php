<?php
/**
 * @package       IronPHP Application
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */

use Friday\Http\Route;

/**
 *--------------------------------------------------------------------------
 * Web Routes
 *--------------------------------------------------------------------------
 *
 * Here is where you can register web routes for your application. Now
 * create something great!
 *
 */

#index
Route::get('/', 'IndexController@index');

#show
Route::get('/{id}', 'IndexController@show');

#create
Route::get('/create', 'IndexController@create');

#store
Route::post('/', 'IndexController@store');

#show
Route::get('/{id}/edit', 'IndexController@edit');

#store
Route::put('/{id}', 'IndexController@update');

#show
Route::delete('/{id}', 'IndexController@destroy');

//Route::get($uri, $callback);
//Route::post($uri, $callback);
//Route::put($uri, $callback);
#Route::patch($uri, $callback);
//Route::delete($uri, $callback);
#Route::options($uri, $callback);
