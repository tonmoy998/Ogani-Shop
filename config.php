<?php
require_once('vendor/autoload.php');

$client = new Google_Client();
$client->setAuthConfig('./client_secret.json');
$client->setRedirectUri(
  'http://localhost:8080/auth.php'
);
$client->addScope('email');
