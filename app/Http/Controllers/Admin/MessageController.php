<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

use Twilio\Rest\Client;
use App\Models\Message;

class MessageController extends Controller
{
    public function message_send_from_admin(Request $request)
    {
    	//dd($request->all());

        $request->validate([
            'message' => 'required|string'
        ]);

    	$message = new Message;
    	$message->sender_id = $request->admin_id;
    	$message->recipient_id = $request->client_id;
        $message->role_id = 2;
    	$message->body = $request->message;
    	$message->save();
    	
    	/*start to send sms*/
    	
        /*$sid    = env( 'TWILIO_SID' );
        $token  = env( 'TWILIO_TOKEN' );
        $client = new Client( $sid, $token );

        $message = $request->message;
        $client->messages->create(
                    $request->phone,
                    [
                        'from' => env( 'TWILIO_FROM' ),
                        'body' => $message,
                    ]
                );*/
        
        /*end to send sms*/

    	Session::Flash('success', "Message send successfully.");
        return redirect()->back();

    }
    public function message_send_from_client(Request $request)
    {
    	//dd($request->all());

        $request->validate([
            'message' => 'required|string'
        ]);

    	$message = new Message;
    	$message->sender_id = $request->client_id;
    	$message->recipient_id = $request->admin_id;
        $message->role_id = 4;
    	$message->body = $request->message;
    	$message->save();
    	
    	/*start to send sms*/
    	
       /* $sid    = env( 'TWILIO_SID' );
        $token  = env( 'TWILIO_TOKEN' );
        $client = new Client( $sid, $token );

        $message = $request->message;
        $client->messages->create(
                    $request->phone,
                    [
                        'from' => env( 'TWILIO_FROM' ),
                        'body' => $message,
                    ]
                );*/
        
        /*end to send sms*/

    	Session::Flash('success', "Message send successfully.");
        return redirect()->back();

    }
}
