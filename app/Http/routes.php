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



//Route::get('/admin', ['uses'=>'admin\HomeAdminController@getIndex', 'as'=>'admin']);





Route::get('/sendcomment', ['uses'=>'CommentsController@getIndex', 'as'=>'sendcomment']);
Route::post('/sendcomment', ['uses'=>'CommentsController@getIndex', 'as'=>'sendcomment']);



Route::get('/tag/{tag_id}', ['uses'=>'NewsController@getNewsTag', 'as'=>'tag']);

Route::post('/search/', ['uses'=>'NewsController@getNewsSearch', 'as'=>'search']);
Route::get('/search/', ['uses'=>'NewsController@getNewsSearch', 'as'=>'search']);



/**
* ADMIN PART
*/

Route::auth();

Route::group(['prefix'=>'admin', 'middleware'=>"auth"], function(){
	
	Route::get('/', ['uses'=>'Admin\AdminController@getIndex', 'as'=>'admin']);
	
	Route::get('/news', ['uses'=>'Admin\AdminNewsController@getIndex', 'as'=>'admin/news']);
	Route::get('/categories', ['uses'=>'Admin\AdminCategoriesController@getIndex', 'as'=>'admin/categories']);
	Route::get('/tags', ['uses'=>'Admin\AdminTagsController@getIndex', 'as'=>'admin/tags']);
	Route::get('/pages', ['uses'=>'Admin\AdminPagesController@getIndex', 'as'=>'admin/pages']);
	Route::get('/flags', ['uses'=>'Admin\AdminFlagsController@getIndex', 'as'=>'admin/flags']);
	Route::get('/users', ['uses'=>'Admin\AdminUsersController@getIndex', 'as'=>'admin/users']);
	
	/**
	* UPDATE NEW
	*/
	Route::get('/edit/new/{id}', ['uses'=>'Admin\AdminNewsController@edinNew', 'as'=>'admin/edit/new']);
	Route::post('updatenews', ['uses'=>'Admin\AdminNewsController@updateNew', 'as'=>'updatenews']);
	
	/**
	* ADD NEW
	*/
	Route::get('/add/new', ['uses'=>'Admin\AdminNewsController@addNew', 'as'=>'admin/add/new']);
	Route::post('addnews', ['uses'=>'Admin\AdminNewsController@writeNew', 'as'=>'addnews']);
	
	/**
	* DELETE NEW
	*/
	Route::get('/delete/new/{id}', ['uses'=>'Admin\AdminNewsController@deleteNew', 'as'=>'admin/delete/new']);
	
	/**
	* UPDATE category
	*/
	Route::get('/edit/category/{id}', ['uses'=>'Admin\AdminCategoriesController@edinCategory', 'as'=>'admin/edit/category']);
	Route::post('updatecategory', ['uses'=>'Admin\AdminCategoriesController@updateCategory', 'as'=>'updatecategory']);
	
	/**
	* ADD category
	*/
	Route::get('/add/category', ['uses'=>'Admin\AdminCategoriesController@addCategory', 'as'=>'admin/add/category']);
	Route::post('addcategory', ['uses'=>'Admin\AdminCategoriesController@writeCategory', 'as'=>'addcategory']);
	
	/**
	* DELETE category
	*/
	Route::get('/delete/category/{id}', ['uses'=>'Admin\AdminCategoriesController@deleteCategory', 'as'=>'admin/delete/category']);
	
	/**
	* UPDATE TAG
	*/
	Route::get('/edit/tag/{id}', ['uses'=>'Admin\AdminTagsController@edinTeg', 'as'=>'admin/edit/tag']);
	Route::post('updatetags', ['uses'=>'Admin\AdminTagsController@updateTag', 'as'=>'updatetags']);
	
	/**
	* ADD TAG
	*/
	Route::get('/add/tag', ['uses'=>'Admin\AdminTagsController@addTag', 'as'=>'admin/add/tag']);
	Route::post('addtags', ['uses'=>'Admin\AdminTagsController@writeTag', 'as'=>'addtags']);
	
	/**
	* DELETE TAG
	*/
	Route::get('/delete/tag/{id}', ['uses'=>'Admin\AdminTagsController@deleteTag', 'as'=>'admin/delete/tag']);
	
	
	
	
	
	
	
	
	/**
	* UPDATE page
	*/
	Route::get('/edit/page/{id}', ['uses'=>'Admin\AdminPagesController@editPage', 'as'=>'admin/edit/page']);
	Route::post('updatepage', ['uses'=>'Admin\AdminPagesController@updatePage', 'as'=>'updatepage']);
	
	/**
	* ADD page
	*/
	Route::get('/add/page', ['uses'=>'Admin\AdminPagesController@addPage', 'as'=>'admin/add/page']);
	Route::post('addpage', ['uses'=>'Admin\AdminPagesController@writePage', 'as'=>'addpage']);
	
	/**
	* DELETE page
	*/
	Route::get('/delete/page/{id}', ['uses'=>'Admin\AdminPagesController@deletePage', 'as'=>'admin/delete/page']);
	
	
	
	
	
	
	/**
	* SAVE page
	*/
	//Route::get('/save/flags', ['uses'=>'Admin\AdminPagesController@addPage', 'as'=>'save/flags']);
	Route::post('/saveflags', ['uses'=>'Admin\AdminFlagsController@saveFlags', 'as'=>'saveflags']);
	
	
});












