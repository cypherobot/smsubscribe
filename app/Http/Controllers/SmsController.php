<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use GuzzleHttp\Client;


class SmsController extends Controller
{
    public function getSMSDetails(Request $request) {
        try {
            $fullurl = $request->fullUrl();
            $queryString = $request->getQueryString();
            $query = $request->query();
            Log::debug("FULLURL::" . print_r($fullurl,true));                    
            // Log::debug("queryString::" . print_r($queryString,true));                    
            Log::debug("query::" . print_r($query,true));                    

            $mobile = $query['mobile'];
            $msg = $query['msg'];
            $uname = $query['uname'];
            $pass = $query['pass'];

            if(($mobile != '') && ($msg != '') && ($uname != '') && ($pass != '')){
        
                Log::debug("SMS_DETAILS|" .$mobile ."|" . $msg . "|" . $uname . "|" . $pass);
                
                $username = 'Apollo12';
                $password = 'apollomu';
                if(($uname == $username) && ($pass == $password)){
                    //sending sms
                    $sms_url = 'https://api.instaalerts.zone/SendSMS/sendmsg.php?uname=Apollolemnisk&pass=h@9Pv)4E&send=AMHICL&dest=' .$mobile .'&msg=' .$msg;
                    $client = new Client([
                        'headers' => [ 'Content-Type' => 'application/json' ]
                    ]);
                    
                    
                    $response = $client->get($sms_url);

                    $sms_response = json_decode($response->getBody()->getContents());
                    Log::debug("SMS_RESPONSE::" . print_r($sms_response,true));                    
                    // return Redirect::to($sms_url);
                }
            }else{
                Log::debug("PARAMETER_MISSING");
            }

            
        } catch ( \Exception $e ) {
            Log::error ( " :: GAME VIEW EXCEPTION :: ".$e->getMessage()."\n".$e->getTraceAsString() );
            // abort(500);
        }
    }

    public function webmailer(Request $request) {
        try {
            return view('webmailer');
        } catch ( \Exception $e ) {
            Log::error ( " :: GAME VIEW EXCEPTION :: ".$e->getMessage()."\n".$e->getTraceAsString() );
            // abort(500);
        }
    }

    public function openThankYou(Request $request) {
        try {
            return view('thankyou-page');
        } catch ( \Exception $e ) {
            Log::error ( " :: GAME VIEW EXCEPTION :: ".$e->getMessage()."\n".$e->getTraceAsString() );
            // abort(500);
        }
    }
}

// https://api.instaalerts.zone/SendSMS/sendmsg.php?uname=Apollolemnisk&pass=h@9Pv)4E&send=AMHICL&dest=9873767973&msg=test_from_pritam