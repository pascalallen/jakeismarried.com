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

Route::get('/', 'Controller@home');
Route::get('/images', 'Controller@images');
Route::post('/', 'RsvpController@new');
Route::get('rsvp/{uniqid}', 'RsvpController@find'); // show
Route::post('rsvp/{uniqid}', 'RsvpController@update'); // update
Route::get('rsvps', 'RsvpController@all'); // all