<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function index()
    {
        return view('sms');
    }

    public function sendSMS(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'mssg' => 'required|string',
            'phone' => 'required|string',
        ]);

        
        // Prepare the payload
        $payload = [
            'template_id' => '663d0f67d6fc05223f610c82',
            'short_url' => 1, // Change to 1 for On or 0 for Off
            'recipients' => [
                [
                    'mobiles' => $validatedData['phone'],
                    'VAR1' => $validatedData['mssg'],
                    'VAR2' => 'It is working.'
                ]
            ]
        ];

        // Initialize Curl
        $curl = curl_init();
        
        // Set Curl options
        curl_setopt_array($curl, [
            CURLOPT_URL => "https://control.msg91.com/api/v5/flow/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($payload), // Encode payload as JSON
            CURLOPT_HTTPHEADER => [
                "accept: application/json",
                "authkey: 421777AiWNLclyJYd663ccdf9P1",
                "content-type: application/json"
            ],
        ]);
        
        // Execute Curl request
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        dd($response, $err);
        exit;
        // Close Curl
        curl_close($curl);

        // Check for Curl errors
        if ($err) {
            // Handle Curl errors
            return response()->json(['error' => "cURL Error: $err"], 500);
        } else {
            // Handle successful response
            return response()->json(['response' => $response], 200);
        }
    }
}
