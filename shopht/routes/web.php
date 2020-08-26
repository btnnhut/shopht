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

Route::get('/',['uses'=>'HomePageController@index','as'=>'index']);
Route::get('about',function(){
	return view('about');
});
Route::view('/contact','contact');

Route::get('/listing',['uses'=>'ListingPageController@index','as'=>'index']);

Route::get('/details',['uses'=>'DetailsPageController@index','as'=>'index']);

Route::group(['prefix'=>'back'],function(){
	// Route::get('/','Admin\DashboardController@index');
	Route::get('/',['uses'=>'Admin\DashboardController@index','as'=>'index']);
	Route::get('/category',['uses'=>'Admin\CategoryController@index','as'=>'index']);
	Route::get('/category/create',['uses'=>'Admin\CategoryController@create','as'=>'create']);
	Route::get('/category/edit',['uses'=>'Admin\CategoryController@edit','as'=>'edit']);
});

Route::get('/query',['uses'=>'DbController@index','as'=>'index']);
Route::get('/joining','DbController@joining');
Route::get('/model','DbController@model');
// Route::get('/home','HomePageController@index');
// Route::get('/home',['uses'=>'HomePageController@index','as'=>'index']);