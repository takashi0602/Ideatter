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

// 投稿
Route::get('/tweet', function () {
  return view('tweet');
});

// タイムライン
Route::get('/timeline', function () {
  return view('timeline');
});

// ユーザー
Route::get('/user', function () {
  return view('user');
});

// 検索
Route::get('/search', function () {
  return view('search');
});

// ヘッダー
Route::get('/header', function () {
  return view('header');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
