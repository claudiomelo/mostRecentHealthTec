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

Route::get('/home', 'HomeController@home');

//Timers
Route::get('/react/sample/addTimer', 'ReactTimersSampleController@addTimerSample');
Route::get('/react/sample/addPeriodicTimer', 'ReactTimersSampleController@addPeriodicTimerSample');
Route::get('/react/sample/mixTimers', 'ReactTimersSampleController@mixTimersSample');
Route::get('/react/sample/cancelingTimers', 'ReactTimersSampleController@cancelingTimersSample');
Route::get('/react/sample/cancelingTimers', 'ReactTimersSampleController@cancelPediodicTimerSample');

//Streams
Route::get('/react/sample/streamRead', 'ReactStreamsSampleController@streamReadSample');
Route::get('/react/sample/duplexResourceStream', 'ReactStreamsSampleController@duplexResourceStreamSample');

//ReactPHP HttpRequests
Route::get('/react/sample/http/request', 'HttpClientSample@httpClientRequest');
Route::get('/react/sample/http/multrequest', 'HttpClientSample@multReactRequests');


//Normal Requests
Route::get('/normal/sample/http/request', 'NormalHttpClientSample@httpClientRequest');
