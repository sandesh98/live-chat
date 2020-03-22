<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/chat', 'ChatController@index')->name('chat.index');

Route::get('friends', 'FriendController@index');

Route::get('/messages', 'Api\MessageController@index');

Route::post('/messages', 'Api\MessageController@store');
