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

/*  Route::get('/users/{id}', function ($id) {
    return 'This is user '.$id;
  
  });

  Route::get('/hello', function () {
    return 'hello';
 
 });

 */


Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about' );

Route::get('/services', 'PagesController@services' );

Route::resource('items', 'ItemsController');




 

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/wishlist', 'FavoritesController@index')->name('favorites');
Route::resource('favorites', 'FavoritesController');
Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);

Route::get('items/{item}/favorite', 'ItemsController@favorite');