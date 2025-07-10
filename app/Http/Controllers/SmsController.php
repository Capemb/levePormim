<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SmsController extends Controller
{


    public function index()
    {
        return view('testesms');
    }

    public function sendsms(Request $request)
    {


        $receiver_phone = $request->phone;
        $message=  $request->message;

        $account_sid = getenv('TWILIO_SID');
        $auth_token = getenv('TWILIO_TOKEN');
        $sendernumber = getenv('TWILIO_PHONE');
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

        // A Twilio number you own with SMS capabilities
        $twilio_number = "+15017122661";

        $client = new Client($account_sid, $auth_token);
        $client->messages->create(
            // Where to send a text message (your cell phone?)
             $receiver_phone ,
            array(
                'from' => $sendernumber,
                'body' => $message
            )
        );
        
        dd('mensagem enviada com sucesso');

    }
}
