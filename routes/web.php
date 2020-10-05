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

Route::get('/webmailer', 'SmsController@webmailer')->name('webmailer');
Route::get('/airtel-landing', 'SmsController@openThankYou');
// Route::get('/airtel-feedback', 'SmsController@openThankYou');
