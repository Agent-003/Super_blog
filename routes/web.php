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

/** Posts */
Route::get('/post/create', 'PostController@create')->name('create_post');
Route::post('/post/create', 'PostController@store');
Route::get('/', 'HomeController@index');
Route::get('/posts', 'PostController@index')->name('show_posts');

/** Post */
Route::get('/post/{postId}', 'PostController@show')->name('show_post');
Route::delete('/post/{postId}', 'PostController@destroy')->name('delete_post');
Route::put('/post/{postId}', 'PostController@edit')->name('edit_post');

/** Categories */
Route::get('/categories', 'CategoryController@index')->name('list_categories');
Route::get('/category', 'CategoryController@create')->name('create_category');
Route::post('/category', 'CategoryController@store');
Route::get('/category/{categoryId}', 'CategoryController@show')->name('show_category');
Route::delete('/category/{categoryId}', 'CategoryController@destroy')->name('delete_category');

Auth::routes();