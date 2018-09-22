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
    return view('top');
});

// 検索
Route::get('/search', function () {
  return view('search');
});

// ヘッダー
Route::get('/header', function () {
  return view('header');
});

//　通知
Route::get('/mention', function(){
  return view('mention');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/timeline', 'TweetsController@index');

Route::post('/timeline/reply', 'TweetsController@reply');

Route::post('/timeline/replyreplies', 'TweetsController@replyreplies');

Route::get('/tweet', 'TweetsController@tweet');

Route::post('/tweet/create', 'TweetsController@create');

Route::get('/user', 'UsersController@index');
