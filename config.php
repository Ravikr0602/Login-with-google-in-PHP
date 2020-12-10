<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of google API Client for call Google API
$google_client = new Google_client();

//Set the OAuth 2.0 Client ID
//$google_client->setClientId('Your Client ID.apps.googleusercontent.com');
$google_client->setClientId('107737875461-9nr08pttcpg6pvj2m8qpihdqe8jte64k.apps.googleusercontent.com');

//Set the OAuth 2.0 client Secret key
//$google_client->setClientSecret('Your Client Secret key');
$google_client->setClientSecret('f3ilELe_5gClqg6B5TYTBv8W');

//Set the OAuth 2.0 Redirect URI
//$google_client->setRedirectUri('your exact location where you want the code to be run');
$google_client->setRedirectUri('http://localhost:81/pratical/Login_with_google_account/index.php');

// to get the email and profile
$google_client->addScope('email');

$google_client->addScope('profile');

?>