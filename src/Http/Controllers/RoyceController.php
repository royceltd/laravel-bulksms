<?php

// namespace App\Http\Controllers;

namespace RoyceLtd\LaravelBulkSMS\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoyceController extends Controller
{
    //
    public function index()
    {
        RoyceBulkSMS::dump();
    }
}
