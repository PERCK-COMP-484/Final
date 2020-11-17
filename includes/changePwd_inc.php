<?php
//script for changing password in account settings menu
session_start(); //restart session to use session info
if (isset($_POST["submit"])){//redirect to signup if not accessed from proper form
  $oldPwd = $_POST["oldPwd"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];

  require_once 'dbh_inc.php'; //include database handler
  require_once 'functions_inc.php'; //include functions script

  if (emptyInputChange($oldPwd, $pwd, $pwdRepeat) !== false) {  //error handlers
    header("location: ../accountSettings.php?error=emptyinput");
    exit();
  }

  if (pwdMatch($pwd, $pwdRepeat) !== false) { //error handlers
    header("location: ../accountSettings.php?error=pwdMatch");
    exit();
  }

  if (incorrectPwd($conn, $_SESSION["userUid"], $oldPwd) !== false) { //error handlers
    header("location: ../accountSettings.php?error=wrongPwd");
    exit();
  }
    changePassword($conn, $_SESSION["userUid"], $pwd);  //if no error run changePassword function an alter database entry
  }
  else {
    header("location: ../signup.php");
    exit();
  }
