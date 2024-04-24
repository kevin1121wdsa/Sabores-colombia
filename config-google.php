<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('203375526481-t2glp128ggjo5tsanpnuc9jm2uthnv2r.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/login-register/SABORES%20COLOMBIA/pantallaInicio.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>