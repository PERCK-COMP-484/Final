<?php
//page displayed when a user wants to setup 2factor on their account
	include_once 'header.php';
	if(!isset($_SESSION["userUid"])){
		header("location: login.php");
	}
?>
<main>
<h2>Type in the 6-digit Code Sent to your Mobile Phone</h2>
<form action="includes/setup_checkCode_inc.php" method="post" >
  <input type="text" name="code" placeholder="Code">
  <button type="submit" name="submit">Check Code</button>
</form> <!-- Runs SETUP check code script that confirms user input with code generated-->

<form action="includes/setup_2Factor_inc.php" method="post" > <!-- resend code form with phone number field if user incorrectly filled out phone number-->
  <input type="text" name="phone" value=
  <?php echo($_SESSION['phone']);
  ?>
  placeholder="Phone Number">
  <button type="submit" name="submit">Resend Code</button>
</form>

<?php
	if(isset($_GET["error"])){ //error handlers for code field
		if($_GET["error"] == "emptyinput"){
			echo "<p>Code Field is empty.</p>";
		}
		else if($_GET["error"] == "incorrectCode"){
			echo "<p>Incorrect Code, please try again.</p>";
		}
	}
 ?>
		</main>

<?php
	include_once 'footer.php'; //universal footer
?>
