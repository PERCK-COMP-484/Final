<?php
	include_once 'header.php'; //universal header
?>

		<main>
			<h2>Login</h2> <!-- form runs login script-->
			<form action="includes/login_inc.php" method="post" >
				<input type="text" name="uid" placeholder="Username or Email Address">
				<input type="password" name="pwd" placeholder="Password">
				<button type="submit" name="submit">Login</button>
			</form>

			<?php //error handlers for login form
				if(isset($_GET["error"])){
					if($_GET["error"] == "emptyinput"){
						echo "<p>Please fill all fields</p>";
					}
					else if($_GET["error"] == "wronglogin"){
						echo "<p>Username or Password are incorrect</p>";
					}
				}
			 ?>
		</main>

<?php
	include_once 'footer.php'; //universal footer
?>
