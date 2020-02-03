<?php
session_start();
  if(!isset($_SESSION)){
     header("location:pe_login.php");
  } else {
     session_unset();
     session_destroy();
     header("location:pe_login.php");
  }
?>
