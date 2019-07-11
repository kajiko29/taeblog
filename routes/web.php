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

/****************************************
* ホーム画面
*****************************************/
Route::get('/','PagesController@index') ->name('taeblo.index');

/****************************************
* article1 <siargao>
*****************************************/
Route::get('article1','PagesController@article1') ->name('taeblo.article1');
Route::get('article2','PagesController@article2') ->name('taeblo.article2');
Route::get('article3','PagesController@article3') ->name('taeblo.article3');
Route::get('article4','PagesController@article4') ->name('taeblo.article4');
Route::get('article5','PagesController@article5') ->name('taeblo.article5');
Route::get('article6','PagesController@article6') ->name('taeblo.article6');



// 以下練習用
// Route::get('/', 'WelcomeController@index');
// Route::get('contact', 'WelcomeController@contact');
// Route::get('about', 'PagesController@about');

// Route::get('tweets', 'TweetsController@index');

