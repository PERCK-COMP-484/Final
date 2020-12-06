<?php
	include_once 'header.php'; //universal header
?>

<main>
	<div class="container-fluyd bg-info ">
		<div class="row main-css pt-5 ">
			<div class="col-md  mx-auto d-block ">
				<div class=" wrapper-login   m0a my-5 bg-light">

					<h2>Sign up</h2>
					<p>Please fill this form to create an account.</p>
					<?php
						if(isset($_GET["error"])){	//error handlers for signup field, error printed bellow form
							if($_GET["error"] == "emptyinput"){
								echo "<p class='text-danger'>Please fill all fields</p>";
							}
							else if($_GET["error"] == "invalidUid"){
								echo "<p class='text-danger'>Username must not contain any special characters</p>";
							}
							else if($_GET["error"] == "invalidEmail"){
								echo "<p class='text-danger'>Please use a valid email address</p>";
							}
							else if($_GET["error"] == "pwdMatch"){
								echo "<p class='text-danger'>Passwords don't match</p>";
							}
							else if($_GET["error"] == "stmtfailed"){
								echo "<p class='text-danger'>Oops something went wrong, try again later.</p>";
							}
							else if($_GET["error"] == "usernameTaken"){
								echo "<p class='text-danger'>Username or email already in use try something different.</p>";
							}
							else if($_GET["error"] == "none"){
								echo "<p class='text-danger'>Thanks for signing up !</p>";
							}
						}
					?>
					<form action="includes/signup_inc.php" method="post">
						<div class="form-group ">
							<label>Full Name</label>
							<input type="text" name="name" placeholder="" class="form-control">
						</div>    
						<div class="form-group ">
							<label>Email Address</label>
							<input type="text" name="email" placeholder="" class="form-control">
						</div>   
						<div class="form-group ">
							<label>Username </label>
							<input type="text" name="uid" placeholder="" class="form-control">
						</div>   
						<div class="form-group ">
							<label> Password </label>
							<input type="password" name="pwd" placeholder="" class="form-control">
						</div>   
						<div class="form-group ">
							<label>Repeat Password </label>
							<input type="password" name="pwdrepeat" placeholder="" class="form-control">
						</div>  
						<div class="form-group ">
							<button class="btn btn-info" type="submit" name="submit">Sign Up</button>
						</div>
						<p class="txt-green" ><a href="login.php" >Login Here</a></p>
					</form>
				</div>  
			</div>
		</div>
	</div>


</main>



<?php
	include_once 'footer.php'; //universal footer
?>
