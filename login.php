<?php
	include_once 'header.php'; //universal header
?>

<script>  //Script to perform pages on load function keep blank if no function required on load
	function pageLoad()
	{
	}
</script>

<main>
	<div class="container-fluyd bg-info ">
		<div class="row main-css pt-5 ">
			<div class="col-md  mx-auto d-block ">
				<div class=" wrapper-login   m0a mt-5 bg-light">
					<h2>Sign in</h2>
					<p>Please fill in your credentials to login.</p>
					<?php //error handlers for login form
						if(isset($_GET["error"])){
							if($_GET["error"] == "emptyinput"){
								echo "<p class='text-danger'>Please fill all fields</p>";
							}
							else if($_GET["error"] == "wronglogin"){
								echo "<p class='text-danger'>Username or Password are incorrect</p>";
							}
						}
					?>
					<form action="includes/login_inc.php" method="post">
						<div class="form-group ">
							<label>Username / Email</label>
							<input type="text" name="uid" placeholder="" class="form-control">
						</div>    
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="pwd" placeholder="" class="form-control">
						</div>
						<div class="form-group ">
							<button class="btn btn-info" type="submit" name="submit">Login</button>
						</div>
						<p class="txt-green" ><a href="signup.php" >Sign up now</a></p>
					</form>
				</div>  
			</div>
		</div>
	</div>
</main>

<?php
	include_once 'footer.php'; //universal footer
?>
