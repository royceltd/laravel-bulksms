<?php

// namespace App\Http\Controllers;

namespace RoyceLtd\LaravelBulkSMS\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use RoyceLtd\LaravelBulkSMS\Facades\RoyceBulkSMS;
use RoyceLtd\LaravelBulkSMS\Models\SentTextMessage;
use Illuminate\Support\Facades\Log;
use RoyceLtd\LaravelBulkSMS\Models\ApiKey;
use RoyceLtd\LaravelBulkSMS\Models\Contact;
use RoyceLtd\LaravelBulkSMS\Models\ContactGroup;

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
        // Log::info($request);
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
    public function contacts(){
        $contacts= Contact::all();
        // dd($apikey);
        $groups=ContactGroup::all();
        return view('royceviews::contacts',['contacts'=>$contacts,'groups'=>$groups]);

    }

    public function contactsGroup(){
        $groups= ContactGroup::all();
        // dd($apikey);
        return view('royceviews::contactgroups',['groups'=>$groups]);

    }

    public function saveContactsGroup(Request $request){
        $this->validate($request,[
            'group'=>'required|unique:contact_groups,name'

        ]);
        $group=new ContactGroup;
        $group->name=$request->group;
        $group->description=$request->description;
        $group->save();

        return back()->with('status','Group saved successfully');

    }

    public function saveContacts(Request $request){
        // dd($request->all());
        // $this->validate($request,[
        //     'first_namesf'=>'required'

        // ]);
        $contact= new Contact;
        $contact->first_name=$request->first_name;
        $contact->other_names=$request->other_names;
        $contact->phone_number=$request->phone_number;
        $contact->alt_phone_number=$request->alt_phone_number;
        $contact->group_id=$request->group;
        $contact->email=$request->email;
        $contact->save();

        return back()->with('status','Contact added successfully');

    }

    
}
