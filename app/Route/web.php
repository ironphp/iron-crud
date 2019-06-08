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
Route::post('/{id}/update', 'IndexController@update');

#show
Route::get('/{id}/delete', 'IndexController@destroy');
