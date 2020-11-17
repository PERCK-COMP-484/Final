<?php
//script for users to disable 2factor when logged in
session_start(); //restart session to use session info
if (isset($_POST["submit"])){//redirect to signup if not accessed from proper form

  require_once 'dbh_inc.php'; //include database handler
  require_once 'functions_inc.php'; //include functions script

    disable2Factor($conn, $_SESSION["userUid"]);  //disables 2-factor for certain userUid


}
else {
  header("location: ../signup.php");  //return
  exit();
}
