<?php

$username    = 'global/admin'; // Contact Phorest support for these
$password    = 'q1w2e3r4'; // Contact Phorest support for these

require_once 'vendor/autoload.php';

$businessId = 'eTC3QY5W3p_HmGHezKfxJw';
$apiUrl = 'api-gateway-dev.phorest.com';

$uri = 'http://' . $apiUrl . '/third-party-api-server/api/business/' . $businessId . '/voucher';

$response = \Httpful\Request::post($uri)
    ->authenticateWith($username, $password)->
    sendsJson()->body('{
  "clientId": "WwEaIb0m4bhJphVtm2VgIw",
  "creatingBranchId": "SE-J0emUgQnya14mOGdQSw",
  "expiryDate": "2017-07-11T08:27:23.993Z",
  "id": "ab-123",
  "issueDate": "2017-07-11T08:27:23.993Z",
  "originalBalance": 123.12, 
  "serialNumber": "567533439724"                
}')->send();       // create your own unique serial number

echo $response->body->clientId;
echo "\n";
echo $response->body->creatingBranchId;
echo "\n";
echo $response->body->expiryDate;
echo "\n";
echo $response->body->id;
echo "\n";
echo $response->body->issueDate;
echo "\n";
echo $response->body->originalBalance;
echo "\n";
echo $response->body->serialNumber;