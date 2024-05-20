<?php
session_start();
$_SESSION['status'] = 'Logout successfully';
header("Location:http://localhost:8080/");
session_destroy();
exit;
