<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//get_details api
Route::post('APOLLO1/apsms.aspx', 'SmsController@getSMSDetails')->name('get-sms-details');


// http://wwsys.in/api/APOLLO1/apsms.aspx?mobile=&amp;msg=&uname=Apollo12&pass=apollomu