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

Route::get('/', ['as'=> 'welcome','uses' => 'WebController@index']);

Route::get('shelf/{shelf_slug}/read/',
    ['as'=> 'read','uses' => 'WebController@read'])
    ->where('shelf_slug', '[\w\d\-\_]+');
