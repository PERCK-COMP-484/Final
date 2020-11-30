<?php
require_once '../twilio/send-sms.php';  //include Twilio SMS scripts

/*
=========================================Error Handlers=========================================
*/

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) //checks if fields are empty on signup page; returns true if fields are empty
{
  $result;
  if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
    $result=true;
  }
  else {
    $result=false;
  }
  return $result;
}

function emptyInputPhone($phone)  //checks if phone number field is empty on 2 factor enable page; returns true if number is empty
{
  $result;
  if(empty($phone)){
    $result=true;
  }
  else {
    $result=false;
  }
  return $result;
}

function emptyInputCode($input) //checks if code is not inputted on 2-factor code check pages; returns true if code fields is empty
{
  $result;
  if(empty($input)){
    $result=true;
  }
  else {
    $result=false;
  }
  return $result;
}

function incorrectCode($input, $code) //checks if code is incorrect on 2-factor check pages; returns true if code is incorrect
{
  $result;
  if($code!==$input){
    $result=true;
  }
  else {
    $result=false;
  }
  return $result;
}

function badNumber($phone)  //checks if entered phone number is valid; returns true if number is bad
{
  $result;
  $phone = preg_replace('/[^\p{L}\p{N}\s]/u', '', $phone);  //removes all symbols from input
  if(preg_match("/[a-z]/i", $phone)){
    $result=true;
  }
  else if(strlen($phone)!==10){
    $result=true;
  }
  else{
    $result=false;
  }
  return $result;
}


function invalidUid($username)  //checks if Uid is valid, returns true if invalid
{
  $result;
  if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    $result=true;
  }
  else {
    $result=false;
  }
  return $result;
}

function invalidEmail($email) //checks if email is valid, returns true if invalid email
{
  $result;
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result=true;
  }
  else {
    $result=false;
  }
  return $result;
}

function pwdMatch($pwd, $pwdRepeat) //checks if both entered passwords match; returns false if they dont match
{
  $result;
  if ($pwd !== $pwdRepeat){
    $result = true;
  }
  else {
    $result=false;
  }
  return $result;
}

function uidExists($conn, $username, $email)  //checks if entered User ID is already taken, returns true if UID is unavailable
{
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn); //prepared statement to prevent sql injection attacks

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=stmtFailed");
  }

  mysqli_stmt_bind_param($stmt, "ss", $username, $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);

}

function incorrectPwd($conn, $username, $pwd) //checks if entered password is correct; return true if password doesnt match DB password hash
{
  $result;
  $sql = "SELECT usersPwd FROM users WHERE usersUid='$username' OR usersEmail='$username'";
  $sqlResult = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($sqlResult);

  $pwdHashed = $row["usersPwd"];
  $checkPwd = password_verify($pwd, $pwdHashed);
  if($checkPwd === false){
      $result=true;
  }
  else {
      $result=false;
  }
  return $result;
}

function emptyInputChange($oldPwd, $pwd, $pwdRepeat)  //checks if change password fields are empty, if empty return true
{
  $result;
  if(empty($oldPwd) || empty($pwd) || empty($pwdRepeat)){
    $result=true;
  }
  else {
    $result=false;
  }
  return $result;
}

function emptyInputLogin($username, $pwd) //checks if login fields are empty; return true if fields are emoty
{
  $result;
  if(empty($username) || empty($pwd)){
    $result=true;
  }
  else {
    $result=false;
  }
  return $result;
}

/*
=========================================User Functions=========================================
*/

function createUser($conn, $name, $email, $username, $pwd)  //creates user and records info into DB
{
  $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn); //prepared statement to prevent sql injection attacks

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=stmtFailed");
    exit();
  }
  $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  header("location: ../signup.php?error=none");
  exit();

}

function changePassword($conn, $userUid, $pwd) //changes user password by altering entry in DB
{

  $sql = "UPDATE users SET usersPwd=? WHERE usersUid=? OR usersEmail=?;";

  $stmt = mysqli_stmt_init($conn); //prepared statement to prevent sql injection attacks

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../accountSettings.php?error=stmtFailed");
    exit();
  }
  $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "sss", $hashedPwd, $userUid, $userUid);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  header("location: ../accountSettings.php?error=success");
}

function enable2Factor($conn, $phone, $userUid) //enables 2-factor authentication by adding a phone number to users DB entry
{
  $sql = "UPDATE users SET usersPhone=? WHERE usersUid=? OR usersEmail=?;";

  $stmt = mysqli_stmt_init($conn); //prepared statement to prevent sql injection attacks

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    //echo("Error description: " . $conn -> error);
    header("location: ../accountSettings.php?error=stmtFailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "sss", $phone, $userUid, $userUid);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  unset($_SESSION["code"]);
  unset($_SESSION["phone"]);
  $_SESSION["TwoFactor"] =  true;
}

function disable2Factor($conn, $username) //disables 2-factor by setting user phone number to null in DB entry
{
  $sql = "UPDATE users SET usersPhone=NULL WHERE usersUid=? OR usersEmail=?;";

  $stmt = mysqli_stmt_init($conn); //prepared statement to prevent sql injection attacks

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    //echo("Error description: " . $conn -> error);
    header("location: ../accountSettings.php?error=stmtFailed");
    exit();
  }
  mysqli_stmt_bind_param($stmt, "ss", $username, $username);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  $_SESSION["TwoFactor"] =  false;
  header("location: ../accountSettings.php?error=twoFactorDisabled");
}

function codeGen()  //generates secure code from 000000 to 999999
{
  $min=0;
  $max=999999;
  $number=  random_int($min , $max );
  $number=str_pad($number, 6, '0', STR_PAD_LEFT);
  return $number;
}

function twoFactorSet($conn, $username) //returns true if user has 2-factor enabled, false if disabled
{
  $sql = "SELECT usersPhone FROM users WHERE usersUid='$username' OR usersEmail='$username'";
  $sqlResult = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($sqlResult);

  if($row["usersPhone"]!==null)
  {
    $isSet=true;
  }
  else
  {
    $isSet=false;
  }
  return $isSet;
}

function loginUser($conn, $username, $pwd)  //logins the user by adding their info to the session variables altering function of some pages
{
    $uidExists = uidExists($conn, $username, $username);
    if($uidExists===false)
    {
      header("location: ../signup.php?error=wronglogin");
      exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false){
      header("location: ../signup.php?error=wronglogin");
      exit();
    }
    else if($checkPwd === true){
      session_start();
      $_SESSION["TwoFactor"] =  twoFactorSet($conn, $username);
      if($_SESSION["TwoFactor"]==true){
        $_SESSION["tempUserid"] =  $uidExists["usersId"];
        $_SESSION["tempUserUid"] =  $uidExists["usersUid"];
        $_SESSION['phone']=getPhone($conn, $username);
        header("location: ./login_2Factor_inc.php");
        exit();
      }
      else{
        $_SESSION["userid"] =  $uidExists["usersId"];
        $_SESSION["userUid"] =  $uidExists["usersUid"];
        getStats($conn, $username);
        header("location: ../index.php");
        exit();
      }
    }
}

function getPhone($conn, $username) //gets user phone number given username
{
  $sql = "SELECT usersPhone FROM users WHERE usersUid='$username' OR usersEmail='$username'";
  $sqlResult = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($sqlResult);
  return $row["usersPhone"];
}

function getStats($conn, $username) //gets user stats of given username at start of session
{
  $sql = "SELECT * FROM users WHERE usersUid='$username' OR usersEmail='$username'";
  $sqlResult = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($sqlResult);

  $_SESSION["slopeCorrect"] =  $row["usersSlopeCorrect"];
  $_SESSION["slopeIncorrect"] =  $row["usersSlopeIncorrect"];

  $_SESSION["quadraticCorrect"] =  $row["usersQuadraticCorrect"];
  $_SESSION["quadraticIncorrect"] =  $row["usersQuadraticIncorrect"];

  $_SESSION["solveXCorrect"] =  $row["usersSolveXCorrect"];
  $_SESSION["solveXIncorrect"] =  $row["usersSolveXIncorrect"];

  $_SESSION["trigCorrect"] =  $row["usersTrigCorrect"];
  $_SESSION["trigIncorrect"] =  $row["usersTrigIncorrect"];
}

function sendText($phone, $code)  //sends a text to provided number containing generated 2 factor code
{
  $phone="+1".$phone;
  twilioSMS($phone, $code);
}

/*
=========================================DB Update=========================================
*/

function addSlopeCorrect($conn, $userUid)
{
  $sql = "UPDATE users SET usersSlopeCorrect=? WHERE usersUid=? OR usersEmail=?;";

  $stmt = mysqli_stmt_init($conn); //prepared statement to prevent sql injection attacks

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../accountSettings.php?error=stmtFailed");
    exit();
  }
  $_SESSION["slopeCorrect"] =  $_SESSION["slopeCorrect"]+1;
  $number=$_SESSION["slopeCorrect"];
  mysqli_stmt_bind_param($stmt, "sss", $number, $userUid, $userUid);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

function addSlopeIncorrect($conn, $userUid)
{
  $sql = "UPDATE users SET usersSlopeIncorrect=? WHERE usersUid=? OR usersEmail=?;";

  $stmt = mysqli_stmt_init($conn); //prepared statement to prevent sql injection attacks

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../accountSettings.php?error=stmtFailed");
    exit();
  }
  $_SESSION["slopeIncorrect"] =  $_SESSION["slopeIncorrect"]+1;
  $number=$_SESSION["slopeIncorrect"];
  mysqli_stmt_bind_param($stmt, "sss", $number, $userUid, $userUid);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

function addQuadraticCorrect($conn, $userUid)
{
  $sql = "UPDATE users SET usersQuadraticCorrect=? WHERE usersUid=? OR usersEmail=?;";

  $stmt = mysqli_stmt_init($conn); //prepared statement to prevent sql injection attacks

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../accountSettings.php?error=stmtFailed");
    exit();
  }
  $_SESSION["quadraticCorrect"] =  $_SESSION["quadraticCorrect"]+1;
  $number=$_SESSION["quadraticCorrect"];
  mysqli_stmt_bind_param($stmt, "sss", $number, $userUid, $userUid);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

function addQuadraticIncorrect($conn, $userUid)
{
  $sql = "UPDATE users SET usersQuadraticIncorrect=? WHERE usersUid=? OR usersEmail=?;";

  $stmt = mysqli_stmt_init($conn); //prepared statement to prevent sql injection attacks

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../accountSettings.php?error=stmtFailed");
    exit();
  }
  $_SESSION["quadraticIncorrect"] =  $_SESSION["quadraticIncorrect"]+1;
  $number=$_SESSION["quadraticIncorrect"];
  mysqli_stmt_bind_param($stmt, "sss", $number, $userUid, $userUid);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

function addSolveXCorrect($conn, $userUid)
{
  $sql = "UPDATE users SET usersSolveXCorrect=? WHERE usersUid=? OR usersEmail=?;";

  $stmt = mysqli_stmt_init($conn); //prepared statement to prevent sql injection attacks

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../accountSettings.php?error=stmtFailed");
    exit();
  }
  $_SESSION["solveXCorrect"] =  $_SESSION["solveXCorrect"]+1;
  $number=$_SESSION["solveXCorrect"];
  mysqli_stmt_bind_param($stmt, "sss", $number, $userUid, $userUid);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

function addSolveXIncorrect($conn, $userUid)
{
  $sql = "UPDATE users SET usersSolveXIncorrect=? WHERE usersUid=? OR usersEmail=?;";

  $stmt = mysqli_stmt_init($conn); //prepared statement to prevent sql injection attacks

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../accountSettings.php?error=stmtFailed");
    exit();
  }
  $_SESSION["solveXIncorrect"] =  $_SESSION["solveXIncorrect"]+1;
  $number=$_SESSION["solveXIncorrect"];
  mysqli_stmt_bind_param($stmt, "sss", $number, $userUid, $userUid);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

function addTrigCorrect($conn, $userUid)
{
  $sql = "UPDATE users SET usersTrigCorrect=? WHERE usersUid=? OR usersEmail=?;";

  $stmt = mysqli_stmt_init($conn); //prepared statement to prevent sql injection attacks

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../accountSettings.php?error=stmtFailed");
    exit();
  }
  $_SESSION["trigCorrect"] =  $_SESSION["trigCorrect"]+1;
  $number=$_SESSION["trigCorrect"];
  mysqli_stmt_bind_param($stmt, "sss", $number, $userUid, $userUid);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}

function addTrigIncorrect($conn, $userUid)
{
  $sql = "UPDATE users SET usersTrigIncorrect=? WHERE usersUid=? OR usersEmail=?;";

  $stmt = mysqli_stmt_init($conn); //prepared statement to prevent sql injection attacks

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../accountSettings.php?error=stmtFailed");
    exit();
  }
  $_SESSION["trigIncorrect"] =  $_SESSION["trigIncorrect"]+1;
  $number=$_SESSION["trigIncorrect"];
  mysqli_stmt_bind_param($stmt, "sss", $number, $userUid, $userUid);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
}
