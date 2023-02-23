<?php
require_once "vendor/autoload.php";
  
use GuzzleHttp\Client;
  
$url = 'https://ir-dev-d9.innoraft-sites.com/jsonapi/node/services';
$client = new Client();
$response = $client->get($url);
$body = $response->getBody()->getContents();
$arr_body = json_decode($body,true);
for($i=0;$i<16;$i++){
  echo $arr_body['data'][$i]['attributes']['title']."<br>";
}
?>