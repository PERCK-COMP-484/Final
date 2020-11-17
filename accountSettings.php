<?php
	include_once 'header.php'; //universal header
	if(!isset($_SESSION["userUid"])){ //if the user is not logged in redirect them to login page
		header("location: login.php");
	}
?>
<main>
		<h2>Change Password</h2>	<!-- Change password form submit calls changepwd script-->
		<form action="includes/changePwd_inc.php" method="post" >
			<input type="password" name="oldPwd" placeholder="Old Password">
			<input type="password" name="pwd" placeholder="New Password">
			<input type="password" name="pwdrepeat" placeholder="Repeat New Password">
			<button type="submit" name="submit">Change Password</button>
		</form>

		<?php
			if(isset($_GET["error"])){ //Error handlers that call functions to check errors, will print corresponding problem under form
				if($_GET["error"] == "emptyinput"){
					echo "<p>Please fill all fields</p>";
				}
				else if($_GET["error"] == "pwdMatch"){
					echo "<p>Passwords don't match</p>";
				}
				else if($_GET["error"] == "wrongPwd"){
					echo "<p>Incorrect Password</p>";
				}
				else if($_GET["error"] == "stmtFailed"){
					echo "<p>Sorry Something went wrong. Please try again later.</p>";
				}
				else if($_GET["error"] == "success"){
					echo "<p>Password changed Succesfully</p>";
				}
			}
?>
<br>
<hr>
<h2>Set up 2-Factor Authentication</h2>

<?php
		 if($_SESSION["TwoFactor"]==true){	//if 2-factor is set show disable option
			 echo '<h3>2-Factor Set</h3>
			 			<form action="includes/disable2Factor_inc.php" method="post" >
						<button type="submit" name="submit">Disable 2 Factor?</button>
			 '; //displays form button that runs disable2factor script
		 }
		 else{ //if 2 factor unset display phone number entry form
			 echo '
				 <form action="includes/setup_2Factor_inc.php" method="post" >
				 	<input type="text" name="phone" placeholder="Phone Number">
				 	<button type="submit" name="submit">Send Code</button>
				 </form>
				 	';//submit runs SETUP 2 factor form
				}
				 	if(isset($_GET["error"])){//Error handlers that call functions to check errors, will print corresponding problem under form
				 		if($_GET["error"] == "emptyPhone"){
				 			echo "<p>Phone Number field Empty</p>";
				 		}
				 		else if($_GET["error"] == "badNumber"){
				 			echo "<p>Invalid Phone Number.</p>";
				 		}
				 		else if($_GET["error"] == "twoFactorEnabled"){
				 			echo "<p>Two Factor Authentication was turned on!</p>";
				 		}
						else if($_GET["error"] == "twoFactorDisabled"){
				 			echo "<p>Two Factor Authentication was turned off!</p>";
				 		}
				 	}
	?>
			<br>
			<hr>
	</main>
<?php
	include_once 'footer.php'; //universal footer
?>
