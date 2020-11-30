<?php
//account page for users when signed in. Will display user statistics and links to account settings page
if(isset($_SESSION["previousPage"]))
{
  if (!$_SESSION["previousPage"]==="/account.php")
  {
    $_SESSION["previousPage"] =  "../account.php";  //sets previous page to this
    header("location: includes/updateDB_inc");
  }
}
include_once 'header.php'; //universal header
if (!isset($_SESSION["userUid"])) { //if the user is not logged in redirect them to login page
    header("location: login.php");
}
?>

        <script>  //Script to perform pages on load function keep blank if no function required on load
          function pageLoad()
          {
          }
        </script>
        <main>

            <?php echo "<h1>Hello " . $_SESSION["userUid"] . "!</h1>"; //Print users ID ?>
            <p>This is your account page</p>
            <?php
            echo("
            <br />
            <hr />
            <br />
            <h3>Here are your Stats!</h3>
            <table class=material>
              <tr>
                <th>Problem Type:</th>
                <th>Correct:</th>
                <th>Incorrect:</th>
              </tr>

              <tr>
                <td>Slope Intercept</td>
                <td>".$_SESSION["slopeCorrect"]."</td>
                <td>".$_SESSION["slopeIncorrect"]."</td>
              </tr>

              <tr>
                <td>Quadratic</td>
                <td>".$_SESSION["quadraticCorrect"]."</td>
                <td>".$_SESSION["quadraticIncorrect"]."</td>
              </tr>

              <tr>
                <td>SolveX</td>
                <td>".$_SESSION["solveXCorrect"]."</td>
                <td>".$_SESSION["solveXIncorrect"]."</td>
              </tr>

              <tr>
                <td>Trigonometry</td>
                <td>".$_SESSION["trigCorrect"]."</td>
                <td>".$_SESSION["trigIncorrect"]."</td>
              </tr>
            </table>
            <br />
            <hr />
            <br />
            ")
            ?>
                <a href="accountSettings.php">Settings</a>    <!--Link to account settings page where password can be changed and 2-factor can be enabled-->

                <br />
                <br />
                <hr />
        </main>

<?php
	include_once 'footer.php'; //universal footer
?>
