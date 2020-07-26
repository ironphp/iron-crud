<?php
/**
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */
use Friday\Http\Route;

/*
 *--------------------------------------------------------------------------
 * Web Routes
 *--------------------------------------------------------------------------
 *
 * Here is where you can register web routes for your application. Now
 * create something great!
 *
 */

// for CRUD operation use resource method,
Route::resource('/', 'IndexController');
/*
 *
 * /          GET     @index
 * /create    GET     @create
 * /{id}      GET     @show
 * /{id}/edit GET     @edit
 * /          POST    @store
 * /{id}      PUT     @update
 * /{id}      DELETE  @destroy
 *
 */
//Route::get($uri, $callback);
//Route::post($uri, $callback);
//Route::put($uri, $callback);
//Route::patch($uri, $callback);
//Route::delete($uri, $callback);
//Route::options($uri, $callback);
