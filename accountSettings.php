<?php
	include_once 'header.php'; //universal header
	if(!isset($_SESSION["userUid"])){ //if the user is not logged in redirect them to login page
		header("location: login.php");
	}
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
				<div class="   ">
					<div class=" wrapper-login rapper-frame m0a my-5 bg-light ">
						<h2>Change Password</h2>	<!-- Change password form submit calls changepwd script-->
						<?php
							if(isset($_GET["error"])){ //Error handlers that call functions to check errors, will print corresponding problem under form
								if($_GET["error"] == "emptyinput"){
									echo "<p class='text-danger'>Please fill all fields</p>";
								}
								else if($_GET["error"] == "pwdMatch"){
									echo "<p class='text-danger'>Passwords don't match</p>";
								}
								else if($_GET["error"] == "wrongPwd"){
									echo "<p class='text-danger'>Incorrect Password</p>";
								}
								else if($_GET["error"] == "stmtFailed"){
									echo "<p class='text-danger'>Sorry Something went wrong. Please try again later.</p>";
								}
								else if($_GET["error"] == "success"){
									echo "<p class='text-danger'>Password changed Succesfully</p>";
								}
							}
						?>
						<form action="includes/changePwd_inc.php" method="post">
							<div class="form-group ">
								<label>Old Password</label>
								<input type="password" name="oldPwd" placeholder="" class="form-control">
							</div>    
							<div class="form-group ">
								<label>New Password</label>
								<input type="password" name="pwd" placeholder="" class="form-control">
							</div>   
							<div class="form-group ">
								<input type="password" name="pwdrepeat" placeholder="Repeat new password" class="form-control">
							</div>   				  
							<div class="form-group ">
								<button class="btn btn-info" type="submit" name="submit">Change Password</button>
							</div>
						</form>
						<br>
						<hr>
						<h2>Set up 2-Factor Authentication</h2>
						<br>
						<div class="mb-5"> 
							<?php
								if($_SESSION["TwoFactor"]==true){	//if 2-factor is set show disable option
									echo'
										<h3>2-Factor Set</h3>
										<form action="includes/disable2Factor_inc.php" method="post" >
										<button class="btn btn-info" type="submit" name="submit">Disable 2 Factor?</button>
									'; //displays form button that runs disable2factor script
								}
								else{ //if 2 factor unset display phone number entry form
									echo '
										<form action="includes/setup_2Factor_inc.php" method="post" >
										<div class="form-group "><input type="text" name="phone" placeholder="Phone Number" class="form-control"></div>
										<button class="btn btn-info" type="submit" name="submit">Send Code</button>
										</form>
									';//submit runs SETUP 2 factor form
								}
								if(isset($_GET["error"])){//Error handlers that call functions to check errors, will print corresponding problem under form
									if($_GET["error"] == "emptyPhone"){
										echo "<p class='text-danger'>Phone Number field Empty</p>";
									}
									else if($_GET["error"] == "badNumber"){
										echo "<p class='text-danger'>Invalid Phone Number.</p>";
									}
									else if($_GET["error"] == "twoFactorEnabled"){
										echo "<p class='text-danger'>Two Factor Authentication was turned on!</p>";
									}
									else if($_GET["error"] == "twoFactorDisabled"){
										echo "<p class='text-danger'>Two Factor Authentication was turned off!</p>";
									}
								}
							?>
						</div>
					</div> 
				</div> 
			</div>
		</div>
	</div>
</main>
<?php
	include_once 'footer.php'; //universal footer
?>
