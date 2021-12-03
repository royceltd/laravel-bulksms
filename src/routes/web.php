<?php

// use Illuminate\Routing\Route;
use RoyceLtd\LaravelBulkSMS\Http\Controllers\RoyceController;
// use RoyceLtd\LaravelBulkSMS\Http\Cont
// use App\Http\Controllers\RoyceController;



Route::group(['namespace' => 'RoyceLtd\LaravelBulkSMS\Http\Controllers'], function () {
    Route::get('royceroute', ['uses' => 'RoyceController@index']);
    Route::get('bulksms/dashboard', ['uses' => 'RoyceController@messages']);
    Route::get('bulksms/', ['uses' => 'RoyceController@messages']);
    
    Route::get('base', ['uses' => 'RoyceController@base']);
    Route::post('deliveryreport', ['uses' => 'RoyceController@deliveryReport']);
    Route::get('bulksms/contacts', ['uses' => 'RoyceController@contacts']);
    Route::post('bulksms/contacts', ['uses' => 'RoyceController@saveContacts']);
    Route::get('bulksms/contacts-group', ['uses' => 'RoyceController@contactsGroup']);
    Route::post('bulksms/contacts-group', ['uses' => 'RoyceController@saveContactsGroup']);
    Route::get('bulksms/single-text', ['uses' => 'RoyceController@singleText']);
    Route::post('bulksms/single-text', ['uses' => 'RoyceController@sendSingleText']);
    Route::get('bulksms/contacts-text', ['uses' => 'RoyceController@contactsText']);
    Route::post('bulksms/contacts-text', ['uses' => 'RoyceController@sendContactsText']);

    Route::get('bulksms/group-text', ['uses' => 'RoyceController@groupText']);
    Route::post('bulksms/group-text', ['uses' => 'RoyceController@sendGroupText']);
    Route::get('bulksms/delivery-report', ['uses' => 'RoyceController@getDeliveryReport']);
    Route::post('bulksms/delivery-report', ['uses' => 'RoyceController@pDeliveryReport']);
    Route::get('bulksms/set-webhook', ['uses' => 'RoyceController@setWebhook']);
    
    // Route::get('technohive-sendsms', ['uses' => 'LaravelBulkSMSController@sms']);
    // Route::post('technohive-sendsms', ['uses' => 'LaravelBulkSMSController@sendSMS']);

    // Route::get('technohive-sendbulk', ['uses' => 'LaravelBulkSMSController@bulkSms']);
    // Route::post('technohive-sendbulk', ['uses' => 'LaravelBulkSMSController@sendBulkSMS']);
    // Route::get('test', function () {
    //     BulkSMS::sendSMS("Hey");
    // });
});
