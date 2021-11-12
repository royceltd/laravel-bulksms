<?php

// namespace App\Http\Controllers;

namespace RoyceLtd\LaravelBulkSMS\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RoyceLtd\LaravelBulkSMS\Facades\RoyceBulkSMS;
use RoyceLtd\LaravelBulkSMS\Models\SentTextMessage;
use Illuminate\Support\Facades\Log;

class RoyceController extends Controller
{
    //
    public function index()
    {
        $phone = "0713727937";
        $sms = "Testing delivery report";

        RoyceBulkSMS::sendSMS($phone, $sms);
    }
    public function messages()
    {
        $messages = SentTextMessage::orderBy('id', 'desc')->paginate(100);
        // dd($messages);
        return view('royceviews::textmessages', ['messages' => $messages]);
    }
    public function deliveryReport(Request $request){
        Log::info($request);
        $txt = SentTextMessage::where('message_id', '=', $request->unique_id)->first();
        $txt->delivery_status = $request->delivery_status;
        $txt->delivery_code = $request->delivery_status;
        $txt->delivery_description = $request->delivery_description;
        $txt->delivery_response_description = $request->delivery_response_description;
        $txt->delivery_network_id = $request->delivery_network_id;
        $txt->delivery_tat = $request->delivery_tat;
        $txt->delivery_time = $request->delivery_time;
        $txt->save();
    }

    public function base(){
        return view('royceviews::base');

    }
    public function apiKeys(){
        return view('royceviews::apikeys');
    }
}
