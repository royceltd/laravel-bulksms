<?php

// namespace App\Http\Controllers;

namespace RoyceLtd\LaravelBulkSMS\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RoyceLtd\LaravelBulkSMS\Facades\RoyceBulkSMS;

class RoyceController extends Controller
{
    //
    public function index()
    {
        $phone = "0713727937";
        $sms = "hello world";

        RoyceBulkSMS::sendSMS($phone, $sms);
    }
}
