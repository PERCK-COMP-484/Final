<?php
//Script for updating DB after user gets a problem correct or incorrect
session_start();  //restart session to use session info
if(isset($_SESSION["userUid"]))
{
    $username = $_SESSION["userUid"];

    require_once 'dbh_inc.php'; //include database handler
    require_once 'functions_inc.php'; //include functions script

  if(isset($_COOKIE["slopeCorrect"]))
  {
      addSlopeCorrect($conn,$username);
      setcookie("slopeCorrect", "", 1, "/"); //set cookie to expire immediatley
  }
  if(isset($_COOKIE["slopeIncorrect"]))
  {
      addSlopeIncorrect($conn,$username);
      setcookie("slopeIncorrect", "", 1, "/"); //set cookie to expire immediatley
  }
  if(isset($_COOKIE["quadraticCorrect"]))
  {
      addQuadraticCorrect($conn,$username);
      setcookie("quadraticCorrect", "", 1, "/"); //set cookie to expire immediatley
  }
  if(isset($_COOKIE["quadraticIncorrect"]))
  {
      addQuadraticIncorrect($conn,$username);
      setcookie("quadraticIncorrect", "", 1, "/"); //set cookie to expire immediatley
  }
  if(isset($_COOKIE["solveXCorrect"]))
  {
      addSolveXCorrect($conn,$username);
      setcookie("solveXCorrect", "", 1, "/"); //set cookie to expire immediatley
  }
  if(isset($_COOKIE["solveXIncorrect"]))
  {
      addSolveXIncorrect($conn,$username);
      setcookie("solveXIncorrect", "", 1, "/"); //set cookie to expire immediatley
  }
  if(isset($_COOKIE["trigCorrect"]))
  {
      addTrigCorrect($conn,$username);
      setcookie("trigCorrect", "", 1, "/"); //set cookie to expire immediatley
  }
  if(isset($_COOKIE["trigIncorrect"]))
  {
      addTrigIncorrect($conn,$username);
      setcookie("trigIncorrect", "", 1, "/"); //set cookie to expire immediatley
  }
}
else
{
  echo "<script>
               //alert('Not');
       </script>";
  setcookie("slopeCorrect", "", 1, "/");  //set cookie to expire immediatley
  setcookie("slopeIncorrect", "", 1, "/");  //set cookie to expire immediatley
  setcookie("quadraticCorrect", "", 1, "/");  //set cookie to expire immediatley
  setcookie("quadraticIncorrect", "", 1, "/");  //set cookie to expire immediatley
  setcookie("solveXCorrect", "", 1, "/"); //set cookie to expire immediatley
  setcookie("solveXIncorrect", "", 1, "/"); //set cookie to expire immediatley
  setcookie("trigCorrect", "", 1, "/"); //set cookie to expire immediatley
  setcookie("trigIncorrect", "", 1, "/"); //set cookie to expire immediatley
}
     header("location: ".$_SESSION["previousPage"]);

?>
