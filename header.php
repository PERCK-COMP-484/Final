<?php
	session_start();	//restarts session so that session variables can be used
	//contains all nav, javascript, and stylesheets used on every page at the top
 ?>

<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<?php
					if(isset($_SESSION["userUid"])){	//displays account and logout buttons if currently logged in
						echo "<li><a href='account.php'>Account</a></li>";
						echo "<li><a href='includes/logout_inc.php'>Log Out</a></li>";
					}
					else{	//displays signup and login if currently loggged out
						echo "<li><a href='signup.php'>Sign Up</a></li>";
						echo "<li><a href='login.php'>Log In</a></li>";
					}
				 ?>

			</ul>
		</nav>
