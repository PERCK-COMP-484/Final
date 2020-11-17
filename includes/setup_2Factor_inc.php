<?php
//script for setting up 2-factor from account settings page
session_start();  //restart session to use session info
if (isset($_POST["submit"])){//redirect to signup if not accessed from proper form
  $phone = $_POST["phone"];

  require_once 'dbh_inc.php'; //include database handler
  require_once 'functions_inc.php'; //include functions script

  if (emptyInputPhone($phone) !== false) {//error handler for phone number field
    header("location: ../accountSettings.php?error=emptyPhone");
    exit();
  }
  if (badNumber($phone) !== false) {
    header("location: ../accountSettings.php?error=badNumber");
    exit();
  }
    $code=codeGen();  //generate secure code
    sendText($phone, $code);  //send text containing code
    $_SESSION["phone"] = $phone;   //store phone in session variable for future confirmation
    $_SESSION["code"] = $code;   //store code in session variable for future check
    header("location: ../setup_2FactorCheck.php");  //redirect to 2-factor SETUP check page
    exit();
}
else {
  header("location: ../signup.php");
  exit();
}
