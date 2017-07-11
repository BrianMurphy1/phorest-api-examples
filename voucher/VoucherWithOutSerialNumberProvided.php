<?php

require_once 'vendor/autoload.php';

$businessId = 'eTC3QY5W3p_HmGHezKfxJw';
$apiUrl = 'api-gateway-dev.phorest.com';

$uri = 'http://' . $apiUrl . '/third-party-api-server/api/business/' . $businessId . '/voucher';


$response = \Httpful\Request::post($uri)->
authenticateWith('global/admin', 'q1w2e3r4')->
sendsJson()->
body('{
  "clientId": "WwEaIb0m4bhJphVtm2VgIw",
  "creatingBranchId": "SE-J0emUgQnya14mOGdQSw",
  "expiryDate": "2017-07-11T08:27:23.993Z",
  "id": "ab-123",
  "issueDate": "2017-07-11T08:27:23.993Z",
  "originalBalance": 123.12
}')->send();

echo $response->body->expiryDate;
echo "\n";
echo $response->body->serialNumber;