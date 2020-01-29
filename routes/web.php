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

//top
Route::get('/','TopController@top');

//thread
Route::get('/create','ThreadController@create' );
Route::get('/res','ThreadController@res' );
Route::post('/new','ThreadController@new' );
Route::get('/read','ThreadController@read' );

//search
Route::get('/search/word','SearchController@word' );
Route::get('/search/category','SearchController@category' );
Route::get('/search/{}/pager','SearchController@peger' );
