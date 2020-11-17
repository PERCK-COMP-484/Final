<?php

if (isset($_POST["submit"])){ //redirect to signup if not accessed from proper form
  $name = $_POST["name"];
  $email = $_POST["email"];
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];

  require_once 'dbh_inc.php'; //include database handler
  require_once 'functions_inc.php'; //include functions script

  if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) { //error handlers
    header("location: ../signup.php?error=emptyinput");
    exit();
  }
  if (invalidUid($username) !== false) {
    header("location: ../signup.php?error=invalidUid");
    exit();
  }
  if (invalidEmail($email) !== false) {
    header("location: ../signup.php?error=invalidEmail");
    exit();
  }
  if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=pwdMatch");
    exit();
  }
  if (uidExists($conn, $username, $email) !== false) {
    header("location: ../signup.php?error=usernameTaken");
    exit();
  }

  createUser($conn, $name, $email, $username, $pwd);  //if no errrors create user by adding to database


}
else {
  header("location: ../signup.php");
  exit();
}
