<?php
require_once 'vendor/autoload.php';

 use Twilio\Rest\Client;


function twilioSMS($phone, $code)
{
//$sid = getenv("TWILIO_ACCOUNT_SID");        //Add env var later
//$token = getenv("TWILIO_AUTH_TOKEN");       //Add env var later

$to = $phone;  //my personal phone number will be passed by external script later
$message = $code;

$sid = "";  //ask Robert for sid access
$token = "";  //testing only, remove in final release

$twilio = new Client($sid, $token);   //authenticate with twilio

$message = $twilio->messages
                  ->create($to, // to
                           [
                               "body" => $message,
                               "from" => "+12019879741"   //accounts phone number can be ENV var later okay to hardcode for now
                           ]
                  );
//print($message->sid);
}
