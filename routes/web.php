<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as'=>'home','uses'=>'Admin\IndexController@show']);

Route::group(['prefix'=>'admin/{id}'],function(){
	Route::get('page/edit',function(){
		echo "page/edit";
	});
	
});
Route::get('/about', ['as'=>'about','uses'=>'TestController@show']);
Route::match(['get','post'],'/contact/{name?}', ['as'=>'contact','uses'=>'ContactController@show']);
Route::get('/articles/',['uses'=>'Admin\Core@getArticles','as'=>'articles']);
Route::get('/article/{page}',['middleware'=>'mymiddle:home','uses'=>'Admin\Core@getArticle','as'=>'article'])/*->middleware(['mymiddle'])*/;

//list pages
Route::resource('/pages','Admin\CoreResource');