<?php

// use Illuminate\Routing\Route;
use RoyceLtd\LaravelBulkSMS\Http\Controllers\RoyceController;
// use RoyceLtd\LaravelBulkSMS\Http\Cont
// use App\Http\Controllers\RoyceController;



Route::group(['namespace' => 'RoyceLtd\LaravelBulkSMS\Http\Controllers'], function () {
    Route::get('royceroute', ['uses' => 'RoyceController@index']);
    Route::get('textmessages', ['uses' => 'RoyceController@messages']);
    // Route::get('technohive-sendsms', ['uses' => 'LaravelBulkSMSController@sms']);
    // Route::post('technohive-sendsms', ['uses' => 'LaravelBulkSMSController@sendSMS']);

    // Route::get('technohive-sendbulk', ['uses' => 'LaravelBulkSMSController@bulkSms']);
    // Route::post('technohive-sendbulk', ['uses' => 'LaravelBulkSMSController@sendBulkSMS']);
    // Route::get('test', function () {
    //     BulkSMS::sendSMS("Hey");
    // });
});
