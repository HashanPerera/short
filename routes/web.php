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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/', 'PagesController@index'); 
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
//Route::get('/login', 'Login1Controller@index');
//Route::get('/sign', 'SignController@index');
//Route::get('/sign1', 'SignController@index1');
//Route::get('/views', 'PagesController@view');
//Route::get('/viewmen', 'PagesController@view_m');
//Route::get('/create', 'PostsController@create');
//Route::get('/show', 'PostsController@show');
//Route::get('/albums/index', 'PostalbumsController@index');
//Route::get('posts', 'PostsController@index');

Route::resource('posts','PostsController');

Auth::routes();

//Route::post('/show', 'PostsController@show');
Route::get('/home', 'HomeController@index');
//Route::get('/profile','OwnerController@index')->name('profile');

//Route::post('/profile','OwnerController@update_avatar')->name('profile');

//Route::get('/profiles', 'UserProfileController@show')->middleware('auth')->name('profiles.show');
//Route::post('/profiles', 'UserProfileController@update')->middleware('auth')->name('profiles.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
