<?php
  session_start();
  unset($_SESSION["username"]);
  $_SESSION['logoutmessage']= "log-out successfully";
  header("location:index.php");
 
?>
