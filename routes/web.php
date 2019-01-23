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

Route::get('blog/{slug}', ['as' => 'blog.single', 'uses'=> 'BlogController@getSingle'])
->where('slug', '[\w\d\-\_]+');

Route::get('contact', 'PagesController@getContact');

Route::get('about', 'PagesController@getAbout'); 

Route::get('/', 'PagesController@getIndex');

Route::get('create', 'PagesController@getPost');

Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index' ]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('post', 'PostController');

//Categories
Route::resource('categories', 'CategoryController', ['except' => ['create']]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
