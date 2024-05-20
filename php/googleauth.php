<?php
require_once 'functions.inc.php';
require_once __DIR__ . 'vendor/autoload.php';

$client = new Google_Client();
var_dump($client);
$client->setAuthConfig('../client_secret.json');
$client->setRedirectUri('http://localhost:8080/googleauth.php'); // Make sure this matches the authorized redirect URI in your Google Cloud Console
$client->addScope("email");
$client->addScope("profile");

if (isset($_GET['code'])) {
  // Exchange authorization code for an access token
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

  if (isset($token['access_token'])) {
    $client->setAccessToken($token['access_token']);

    // Get user info
    $oauth = new Google_Service_Oauth2($client);
    $userinfo = $oauth->userinfo->get();
    $email =  $userinfo->email;
    $name =  $userinfo->name;
  } else {
    echo "Failed to retrieve access token.";
  }
} else {
  // Redirect to Google OAuth consent screen
  $authUrl = $client->createAuthUrl();
}
