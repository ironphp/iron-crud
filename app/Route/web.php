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

#resource
Route::resource('/', 'IndexController');

//Route::get($uri, $callback);
//Route::post($uri, $callback);
//Route::put($uri, $callback);
#Route::patch($uri, $callback);
//Route::delete($uri, $callback);
#Route::options($uri, $callback);
