<?php
//account page for users when signed in. Will display user statistics and links to account settings page
include_once 'header.php'; //universal header
if (!isset($_SESSION["userUid"])) { //if the user is not logged in redirect them to login page
    header("location: login.php");
}
echo "hello " . $_SESSION["userUid"] . "!"; //Print users ID, funcitons will be implemented to retrieve user statistics
?>

        <main>
            <p>This is your account page</p>
            <ul>
                <li><a href="accountSettings.php">Settings</a></li>    <!--Link to account settings page where password can be changed and 2-factor can be enabled-->
            </ul>
        </main>


<?php
