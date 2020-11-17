<?php
//script for user login
if (isset($_POST["submit"])){//redirect to signup if not accessed from proper form
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];

  require_once 'dbh_inc.php'; //include database handler
  require_once 'functions_inc.php'; //include functions script

  if (emptyInputLogin($username, $pwd) !== false) {//error handler for empty fields
    header("location: ../login.php?error=emptyinput");
    exit();
  }

  loginUser($conn, $username, $pwd);  //log in user with entered credentials
}
else {
  header("location: ../login.php");
  exit();
}
