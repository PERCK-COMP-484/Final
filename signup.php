<?php
	include_once 'header.php'; //universal header
?>
		<script>  //Script to perform pages on load function keep blank if no function required on load
			function pageLoad()
			{
			}
		</script>
		<main>
			<h2>Sign Up</h2>	<!--calls sign up form makes database entry if succesful-->
			<div class="formWrap">
			<form action="includes/signup_inc.php" method="post" >
				<input type="text" name="name" placeholder="Full Name">
				<input type="text" name="email" placeholder="Email Address">
				<input type="text" name="uid" placeholder="Username">
				<input type="password" name="pwd" placeholder="Password">
				<input type="password" name="pwdrepeat" placeholder="Repeat Password">
				<button type="submit" name="submit">Sign Up</button>
			</form>
		</div>

			<?php
				if(isset($_GET["error"])){	//error handlers for signup field, error printed bellow form
					if($_GET["error"] == "emptyinput"){
						echo "<p>Please fill all fields</p>";
					}
					else if($_GET["error"] == "invalidUid"){
						echo "<p>Username must not contain any special characters</p>";
					}
					else if($_GET["error"] == "invalidEmail"){
						echo "<p>Please use a valid email address</p>";
					}
					else if($_GET["error"] == "pwdMatch"){
						echo "<p>Passwords don't match</p>";
					}
					else if($_GET["error"] == "stmtfailed"){
						echo "<p>Oops something went wrong, try again later.</p>";
					}
					else if($_GET["error"] == "usernameTaken"){
						echo "<p>Username or email already in use try something different.</p>";
					}
					else if($_GET["error"] == "none"){
						echo "<p>Thanks for signing up!.</p>";
					}
				}
			 ?>

		</main>



<?php
	include_once 'footer.php'; //universal footer
?>
