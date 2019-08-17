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

// Route::get('/', function () {
//     return view('');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/proposedtalks', function () {
//     return view('TalkController@index');
// })->middleware('auth');

Route::get('/proposedtalks', 'TalkController@index')->middleware('auth');

Route::post('/vote', 'TalkController@voteTalk')->name('vote');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
