<?php
require_once "vendor/autoload.php";
  
use GuzzleHttp\Client;
  
$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://api.apilayer.com'
]);
$em = 'sandipta.sardar@innoraft';
$response = $client->request('GET', 'email_verification/check?email='.$em,[
    'headers' => [
        'apikey' => 'EgFVIMYLC78KM6VD65HlOY6k5VpA0CTB',
    ]
]);
  
$body = $response->getBody();
$arr_body = json_decode($body);
if($arr_body->format_valid && $arr_body->smtp_check){
    echo "succes";
}
else{
    echo 'failure';
}
?>