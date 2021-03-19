<?php

namespace RoyceLtd\LaravelBulkSMS\Services;

use Illuminate\Support\Facades\DB;
use Ixudra\Curl\Facades\Curl;
use RoyceLtd\LaravelBulkSMS\Models\SentTextMessage;
use Illuminate\Support\Facades\Log;

class LaravelBulkSMS
{
    public function dump()
    {
        dd('dumping shopping cart');
    }
    public function sendSMS($phone, $message)
    {

        //store text in the database

        // DB::table('sent_text_messages')
        $newtext = new SentTextMessage;
        $newtext->text_message = $message;

        $newtext->senderid_string = env('SENDER_ID');
        $newtext->text_message = $message;
        $newtext->phone_number = $phone;
        $newtext->save();


        $url = 'http://localhost:8000/api/sendmessage';
        $apikey = env('API_KEY');
        

        $response = Curl::to($url)
            ->withData(array(
                'phone_number' => $phone,
                'sender_id' => 'josphat',
                'text_message' => $message
            ))
            ->withBearer($apikey)
            ->post();
            Log::info($response);

        $res = json_decode($response);

        if ($res->code == 1) {
            $up = SentTextMessage::find($newtext->id);
            $up->message_id = $res->message_id;
            $up->status = $res->status;
            $up->save();
        }
    }
}
