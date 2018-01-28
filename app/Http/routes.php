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





Route::get('/', ['uses'=>'MainController@getIndex', 'as'=>'main']);
Route::get('/news', ['uses'=>'NewsController@getIndex', 'as'=>'news']);
Route::get('/forums', ['uses'=>'ForumsController@getIndex', 'as'=>'forums']);
Route::get('/shop', ['uses'=>'shop\HomeController@getIndex', 'as'=>'shop']);
Route::get('/page/{id}', ['uses'=>'PagesController@getIndex', 'as'=>'page']);



Route::get('/new/{id}', ['uses'=>'NewsController@getOneNew', 'as'=>'new']);
Route::get('/category/{id}', ['uses'=>'CategoryController@getNews', 'as'=>'category']);



Route::get('/admin', ['uses'=>'admin\HomeAdminController@getIndex', 'as'=>'admin']);



Route::auth();

Route::group(['prefix'=>'admin', 'middleware'=>['web','auth']], function(){
	
	Route::get('/', ['uses'=>'AdminController@getIndex', 'as'=>'admin']);
	
});



Route::auth();

Route::get('/home', 'HomeController@index');
