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
//Categories routes

Route::resource('categories', 'CategoryController',['except' => 'create']);


//Authentication routes:

Route::get('login',['as' => 'login','uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login',['as' => 'login.post','uses' => 'Auth\LoginController@login']);
Route::post('logout',['as'=>'logout', 'uses' => 'Auth\LoginController@logout']);

//Registration routes

Route::get('register',['as' => 'register','uses' => 'Auth\RegisterController@showRegistrationForm']);
Route::post('register',['as' => 'register.post','uses' => 'Auth\RegisterController@register']);

Route::get('blog/{slug}', ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->
	where('slug', '[\w\d\-\_]+');

Route::get('blog','BlogController@getIndex');	

Route::get('contact','PagesController@getContact');

Route::get('about','PagesController@getAbout');

Route::get('/', 'PagesController@getIndex');

Route::resource('posts','PostController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
