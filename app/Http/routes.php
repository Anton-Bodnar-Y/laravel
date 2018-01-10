<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




DB::listen(function($query) {
    //var_dump($query->sql, $query->bindings);
});





Route::get('/', ['uses'=>'HomeController@getIndex', 'as'=>'home']);
Route::get('/news', ['uses'=>'NewsController@getIndex', 'as'=>'news']);

Route::get('/newsua', ['uses'=>'NewsUaController@getIndex', 'as'=>'newsua']);
Route::get('/newsworld', ['uses'=>'NewsWorldController@getIndex', 'as'=>'newsworld']);
Route::get('/community', ['uses'=>'CommunityController@getIndex', 'as'=>'community']);
Route::get('/admin', ['uses'=>'admin\HomeAdminController@getIndex', 'as'=>'admin']);