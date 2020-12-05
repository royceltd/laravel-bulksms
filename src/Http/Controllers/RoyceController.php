<?php

// namespace App\Http\Controllers;

namespace RoyceLtd\LaravelBulkSMS\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RoyceLtd\LaravelBulkSMS\Facades\RoyceBulkSMS;
use RoyceLtd\LaravelBulkSMS\Models\SentTextMessage;

class RoyceController extends Controller
{
    //
    public function index()
    {
        $phone = "0713727937";
        $sms = "Royce technologies LTD";

        RoyceBulkSMS::sendSMS($phone, $sms);
    }
    public function messages()
    {
        $messages = SentTextMessage::orderBy('id', 'DSC')->paginate(1);
        // dd($messages);
        return view('royceviews::textmessages', ['messages' => $messages]);
    }
}
