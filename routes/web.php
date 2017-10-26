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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/my_plans', 'PlansController@my_plans')->name('plans');
Route::get('/plans', 'PlansController@index')->name('plans-index');
Route::post('/assignPlan', 'PlansController@create')->name('plans-create');
Route::get('/conversation', 'ConversationsController@index')->name('conversation');
Route::post('/start_convo', 'ConversationsController@start')->name('start_convo');
Route::post('/shoppingbuddy/{id}', 'ConversationsController@converse_high')->name('converse_high');
Route::get('/history', 'HistoryController@index')->name('history');
Route::get('/getChat/{id}', 'ConversationsController@getChat')->name('getchat');
Route::get('/getConversations', 'ConversationsController@webService');

