<?php

namespace RoyceLtd\LaravelBulkSMS\Services;

use Ixudra\Curl\Facades\Curl;

class LaravelBulkSMS
{
    public function dump()
    {
        dd('dumping shopping cart');
    }
    public function sendSMS($phone, $message)
    {
        $url = 'https://bulksms.roycetechnologies.co.ke/api/sendmessage';
        $apikey = env('API_KEY');

        $response = Curl::to($url)
            ->withData(array(
                'phone_number' => $phone,
                'sender_id' => 'josphat',
                'text_message' => $message
            ))
            ->withBearer($apikey)
            ->post();

        dd($response);
    }
}
