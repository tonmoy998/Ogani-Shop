<?php
require 'functions.inc.php';
$chechIfExist = new CheckIfExist($db);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user = $_POST['user'];
  $productId = $_POST['productId'];
  if (empty($user)) {
    /* echo "user not registered"; */
    echo 'notRegistered';
  } else {

    $productFound = false;
    $stmt = $db->con->prepare("SELECT * FROM wishlist WHERE email=? AND productId=?");
    $stmt->bind_param('ss', $user, $productId);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
      $productFound = true;
    }
    if (!$productFound) {
      $message = $insertData->insertData($table = 'wishlist', $productId, $email = $user);
      echo "success";
    }
    return null;
  }
}
