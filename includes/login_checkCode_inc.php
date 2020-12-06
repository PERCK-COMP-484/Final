<?php
//script to check if user login 2-factor code matches
session_start();  //restart session to use session info
if (isset($_POST["submit"])){ //redirect to signup if not accessed from proper form
  $input=$_POST["code"];
  $code=$_SESSION["code"];
  $phone=$_SESSION["phone"];

  require_once 'dbh_inc.php'; //include database handler
  require_once 'functions_inc.php'; //include functions script

  if (emptyInputCode($input) !== false) { //error handlers for code field
    header("location: ../login_2FactorCheck.php?error=emptyinput");
    exit();
  }
  if (incorrectCode($input, $code) !== false) {
    header("location: ../login_2FactorCheck.php?error=incorrectCode");
    exit();
  }

  $_SESSION["userid"] =  $_SESSION["tempUserid"]; //2 factor check successful set user data to the previous temp value
  $_SESSION["userUid"] =  $_SESSION["tempUserUid"];

  unset($_SESSION["tempUserid"]); //clear old temp values
  unset($_SESSION["tempUserUid"]);
  getStats($conn, $_SESSION["userUid"]);
  header("location: ../index.php"); //redirect to main page
  exit();
}

else{
  header("location: ../signup.php");
  exit();
}
