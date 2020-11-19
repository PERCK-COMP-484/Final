<?php
//account page for users when signed in. Will display user statistics and links to account settings page
include_once 'header.php'; //universal header
if (!isset($_SESSION["userUid"])) { //if the user is not logged in redirect them to login page
    header("location: login.php");
}
echo "Hello " . $_SESSION["userUid"] . "!"; //Print users ID, funcitons will be implemented to retrieve user statistics
?>
        <script>  //Script to perform pages on load function keep blank if no function required on load
          function pageLoad()
          {
          }
        </script>
        <main>
            <p>This is your account page</p>

                <a href="accountSettings.php">Settings</a>    <!--Link to account settings page where password can be changed and 2-factor can be enabled-->

        </main>

<?php
	include_once 'footer.php'; //universal footer
?>
