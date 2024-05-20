<?php
require_once 'vendor/autoload.php';
require_once 'php/functions.inc.php';

$client = new Google_Client();
$client->setAuthConfig('client_secret.json');
$client->setRedirectUri('http://localhost:8080/auth.php'); // Make sure this matches the authorized redirect URI in your Google Cloud Console
$client->addScope("email");
$client->addScope("profile");

if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

  if (isset($token['access_token'])) {
    $client->setAccessToken($token['access_token']);

    // Get user info
    $oauth = new Google_Service_Oauth2($client);
    $userinfo = $oauth->userinfo->get();
    $email =  $userinfo->email;
    $name =  $userinfo->name;
    $image =  $userinfo->picture;


    /* ini_set('session.gc_maxlifetime', 30 * 24 * 60 * 60); */
    session_start();
    $register = true;
    if ($email) {
      $checkStmt = $db->con->prepare("select * from users where email=?");
      $checkStmt->bind_param('s', $email);
      $checkStmt->execute();
      $checkResult = $checkStmt->get_result();

      if ($checkResult->num_rows > 0) {
        $register = false;
      }
    }
    if ($register) {
      $stmt = $db->con->prepare("INSERT INTO users(name , email , profile_img) VALUES (? , ? , ?)");
      $stmt->bind_param('sss', $name, $email, $image);
      $stmt->execute();
      $_SESSION['status'] =  'User Registration successfull!';
    } else {
      $_SESSION['status'] =  'success';
    }
    $_SESSION['name'] = $name;
    $_SESSION['user'] = $email;
    /* setcookie($name, time() + 30 * 86400); */
    header('Location: index.php');
  } else {
    echo "Failed to retrieve access token.";
  }
} else {
  $authUrl = $client->createAuthUrl();
}
