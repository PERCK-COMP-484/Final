<?php
	session_start();	//restarts session so that session variables can be used
	//contains all nav, javascript, and stylesheets used on every page at the top
 ?>

<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="/comp484_test/css/style.css?v=<?php echo time(); ?>"> <!--Forces CSS reload-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
		<script id="MathJax-script" async
			src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
		</script>
    <title>PiLizard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body onload="pageLoad()"> <!--Loads page main function. Include pageLoad inline script on each page-->
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="practice.php">Practice</a></li>
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
