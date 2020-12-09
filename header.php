<?php
	session_start();	//restarts session so that session variables can be used
	$_SESSION["devMode"] = "true";	//comment out to remove dev mode options //??????????????
	//contains all nav, javascript, and stylesheets used on every page at the top
 ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>PI-Lizard!</title>
		<link rel="shortcut icon" type="image/jpg" href="img/favicong.ico"/>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>"> <!--Forces CSS reload-->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>	<!--jquery for some animations and other functions-->
		<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>	<!---->
		<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script> <!--Js Cookie used to simplify cookie management in JS-->
		<script id="MathJax-script" async
			src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js">
		</script> <!--Mathjax used for displaying math equations via latex format-->
		<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Indie+Flower&family=Montserrat:wght@100;300;600;800&family=Quicksand:wght@300;500;700&family=Raleway:wght@100;200;400;600&family=Roboto&family=Roboto+Condensed:wght@300;400;700&family=Shadows+Into+Light&display=swap" rel="stylesheet">
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
		<link rel="stylesheet" href="css/style.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
		<!-- <script src="js/script.js"></script>
		  <script src="js/templates.js"></script> -->
		  <!-- lessons -->
		<script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_CHTML"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>

  	</head>
	<body onload="pageLoad()"> <!--Loads page main function. Include pageLoad inline script on each page-->

      <nav class="navbar navbar-expand-md  navbar-light bg-warning zin-1">      <div class="container">

      <a class="navbar-brand" href="index.php">  <img  class="logo"  src="img/liz-blk.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse bg-warning p-3 " id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto ">
            <!-- <li class="nav-item d-flex pr-4 ">
              <a class="nav-link active" href="index.php#learnmore">LearnMore </a>
            </li> -->
            <!-- <li class="nav-item d-flex pr-4 ">
              <a class="nav-link active" href="undercons.php">Samples </a>
            </li> -->
            <!-- <li class="nav-item d-flex pr-4 ">
              <a class="nav-link active" href="undercons.php">Contact </a>
			</li> -->
			<li class="nav-item d-flex pr-4 ">
              <a class="nav-link active" href="practice.php">Practice </a>
			</li>

			<?php
					if(isset($_SESSION["userUid"])){	//displays account and logout buttons if currently logged in
						// echo "<li><a href='account.php'>Account</a></li>";
						echo "<li class='nav-item d-flex pr-4'> <a class='nav-link active ' href='lessons.php'>Lessons</a></li>";
						echo "<li class='nav-item d-flex pr-4'> <a class='nav-link active ' href='account.php'>Account</a></li>";
						// echo "<li><a href='includes/logout_inc.php'>Log Out</a></li>";
						echo "<li class='nav-item d-flex pt-1 pr-4 '> <a href='includes/logout_inc.php'><button type='button' class='btn btn-info btn-sm'>Sign out</button></a></li>";


					}
					else{	//displays signup and login if currently loggged out
						echo "<li class='nav-item d-flex pr-4'> <a class='nav-link active ' href='index.php#learnmore'>LearnMore</a></li>";
						// echo "<li class='nav-item d-flex pr-4'> <a class='nav-link active ' href='undercons.php'>Samples</a></li>";
						echo "<li class='nav-item d-flex pt-1 pr-4 '> <a href='login.php'><button type='button' class='btn btn-info btn-sm'>Sign in</button></a></li>";
					}
				 ?>

          </ul>
        </div>
      </div>
    </nav>
