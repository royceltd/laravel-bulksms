<?php

// use Illuminate\Routing\Route;
use RoyceLtd\LaravelBulkSMS\Http\Controllers\RoyceController;
// use RoyceLtd\LaravelBulkSMS\Http\Cont
// use App\Http\Controllers\RoyceController;



Route::group(['namespace' => 'RoyceLtd\LaravelBulkSMS\Http\Controllers'], function () {
    Route::get('royceroute', ['uses' => 'RoyceController@index']);
    Route::get('bulksms/dashboard', ['uses' => 'RoyceController@messages']);
    Route::get('bulksms/apikeys', ['uses' => 'RoyceController@apiKeys']);
    Route::get('base', ['uses' => 'RoyceController@base']);
    Route::post('deliveryreport', ['uses' => 'RoyceController@deliveryReport']);
    // Route::get('technohive-sendsms', ['uses' => 'LaravelBulkSMSController@sms']);
    // Route::post('technohive-sendsms', ['uses' => 'LaravelBulkSMSController@sendSMS']);

    // Route::get('technohive-sendbulk', ['uses' => 'LaravelBulkSMSController@bulkSms']);
    // Route::post('technohive-sendbulk', ['uses' => 'LaravelBulkSMSController@sendBulkSMS']);
    // Route::get('test', function () {
    //     BulkSMS::sendSMS("Hey");
    // });
});
