<?php
//script for checking code from initial setup screen
session_start();  //restart session to use session info
if (isset($_POST["submit"])){//redirect to signup if not accessed from proper form
  $input=$_POST["code"];
  $code=$_SESSION["code"];
  $phone=$_SESSION["phone"];

  require_once 'dbh_inc.php'; //include database handler
  require_once 'functions_inc.php'; //include functions script

  if (emptyInputCode($input) !== false) { //error handlers
    header("location: ../setup_2FactorCheck.php?error=emptyinput");
    exit();
  }
  if (incorrectCode($input, $code) !== false) {
    header("location: ../setup_2FactorCheck.php?error=incorrectCode");
    //echo($input." ".$code);
    exit();
  }
  enable2Factor($conn, $phone, $_SESSION["userUid"]); //enables 2-factor if no error occur. Adds phone number to user DB record
  header("location: ../accountSettings.php?error=twoFactorEnabled");
  exit();
}

else{
  header("location: ../signup.php");
  exit();
}
