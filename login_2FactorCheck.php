<?php
//page that is displayed if a user tries to login with 2 factor auth enabled in account settings
	include_once 'header.php'; //universal header
	if(!isset($_SESSION["tempUserUid"])){
		header("location: login.php");
	}
?>
<script>  //Script to perform pages on load function keep blank if no function required on load
	function pageLoad()
	{
	}
</script>
<main>
<h2>Type in the 6-digit Code Sent to your Mobile Phone</h2>
<form action="includes/login_checkCode_inc.php" method="post" >
  <input type="text" name="code" placeholder="Code">
  <button type="submit" name="submit">Check Code</button>
</form> <!--Runs LOGIN check code script which confirms user input with code generated-->

<form action="includes/login_2Factor_inc.php" method="post" > <!--resend text button. includes hidden phone number field to pass to resend script-->
  <input type="hidden" name="phone" value=
  <?php echo($_SESSION['phone']);
  ?>
  >
  <button type="submit" name="submit">Resend Code</button>
</form>


<?php
  if(isset($_GET["error"])){ //error handlers for code field error will display under form
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
