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

Route::get('/', 'FrontController@index')->name('/');
Route::get('/post/{id}', 'FrontController@getPost')->name('post');

Route::get('/category/{id}/post', 'FrontController@getPostByCategory')->name('post.category');
Route::get('/user/{id}/post', 'FrontController@getPostByUser')->name('post.user');

Auth::routes();


// Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){
  Route::get('/', 'AdminController@index')->name('admin');
  Route::resource('/category', 'CategoryController');
  Route::resource('/post', 'PostController');
});
