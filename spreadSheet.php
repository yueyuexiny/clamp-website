<?php
/**
* Retrieves a Google API access token by using a P12 key file,
* client ID and email address
*
* These three things may be obtained from
* https://console.developers.google.com/
* by creating a new "Service account"
*/

function getGoogleTokenFromKeyFile() {
$clientId = 'e8aac84e8c913a3d9399f7d9f64b1a2aa9c7aff8';
$clientEmail = 'clamp-1265@appspot.gserviceaccount.com';
$pathToP12File = './CLAMP-e8aac84e8c91.p12';
$G_CLIENT_KEY_PW   = 'notasecret';

$client = new Google_Client();
$client->setClientId($clientId);

$cred = new Google_Auth_AssertionCredentials(
$clientEmail,
array('https://spreadsheets.google.com/feeds'),
file_get_contents($pathToP12File),
$G_CLIENT_KEY_PW
);

$client->setAssertionCredentials($cred);

if ($client->getAuth()->isAccessTokenExpired()) {
$client->getAuth()->refreshTokenWithAssertion($cred);
}

$service_token = json_decode($client->getAccessToken());
return $service_token->access_token;
}
