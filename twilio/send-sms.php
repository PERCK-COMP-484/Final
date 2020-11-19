<?php
require_once 'vendor/autoload.php';

 use Twilio\Rest\Client;


function twilioSMS($phone, $code)
{
//$sid = getenv("TWILIO_ACCOUNT_SID");        //Add env var later
//$token = getenv("TWILIO_AUTH_TOKEN");       //Add env var later

$to = $phone;  //my personal phone number will be passed by external script later
$message = $code;

$sid = "AC0a3f53875027eb3a8ac11b9fedfa42a6";  //ask Robert for sid access
$token = "5ce58fd59415cee5923cba080d574da6";  //ask Robert for token access

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
