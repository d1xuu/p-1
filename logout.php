<?php
session_start();
session_destroy();
unset($_SESSION['userID']);
header('location:/p-1/login.php');
exit();
?>