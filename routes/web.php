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


Route::get('/', 'ItemsController@index');

Route::resource('items', 'ItemsController');

/*Route::get('get-ip-details', function () {
  $ip = '91.180.55.5';
  // $ip = Request::ip();
    $data = \Location::get($ip);
    dd($data);
});*/




 

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/wishlist', 'ItemsController@wishlist')->name('favorites');
Route::resource('favorites', 'FavoritesController');
Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);

Route::get('items/{item}/favorite', 'ItemsController@favorite');
Route::get('items/{item}/unfavorite', 'ItemsController@unfavorite');

Route::group(['prefix' => 'messages'], function () {
Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});