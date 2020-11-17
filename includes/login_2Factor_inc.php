<?php
//script that runs if user logs in with 2-factor enabled
session_start();  //restart session to use session info
if (isset($_SESSION["tempUserid"])){  //redirects user if not submitted from login with 2-factor enabled, prevents unauthorized access
  $phone = $_SESSION['phone'];  //create local var from session var

  require_once 'dbh_inc.php'; //include database handler
  require_once 'functions_inc.php'; //include functions script

    $code=codeGen();  //generate secure code
    sendText($phone, $code);  //send text containing code
    $_SESSION["code"] = $code;  //store code in session variable for future check
    header("location: ../login_2FactorCheck.php");  //go to 2-factor LOGIN check page
    exit();
}
else {
  header("location: ../signup.php");
  exit();
}
