<?php
require_once 'vendor/autoload.php';

// Initialize the Google_Client object
$client = new Google_Client();
$client->setClientId('444336577984-f2v3h24qgo612af44ct9m7hfcc149kjt.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost:8080/example.php'); // Redirect URI after authentication
$client->addScope('email'); // Request access to the user's email
$client->addScope('profile'); // Request access to the user's profile information

// Check if the user is not authenticated
if (!isset($_SESSION['access_token'])) {
  // Check if the 'code' parameter is present in the URL (callback from Google)
  if (isset($_GET['code'])) {
    // Exchange authorization code for access token
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    // Set the access token to the client
    $client->setAccessToken($token);

    // Store the access token in the session (or your preferred storage)
    $_SESSION['access_token'] = $token;
  } else {
    // Redirect user to Google OAuth consent screen
    $authUrl = $client->createAuthUrl();
    header('Location: ' . $authUrl);
    exit;
  }
}

// After successful authentication, you can use the Google API client to make requests
if (isset($_SESSION['access_token'])) {
  // Create a Google service object (e.g., Google_Service_Oauth2)
  $service = new Google_Service_Oauth2($client);

  // Get the user's profile information
  $userInfo = $service->userinfo->get();

  // Display user information
  echo '<h1>Welcome, ' . htmlspecialchars($userInfo->getName()) . '!</h1>';
  echo '<p>Email: ' . htmlspecialchars($userInfo->getEmail()) . '</p>';
  echo '<img src="' . htmlspecialchars($userInfo->getPicture()) . '" alt="Profile Picture">';
} else {
  echo '<a href="' . htmlspecialchars($authUrl) . '">Login with Google</a>';
}
