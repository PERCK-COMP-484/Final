<?php
//page displayed when a user wants to setup 2factor on their account
	include_once 'header.php';
	if(!isset($_SESSION["userUid"])){
		header("location: login.php");
	}
?>
<main>
  <div class="container-fluyd bg-info ">
    <div class="row main-css pt-5 ">
      <div class="col-md  mx-auto d-block ">
        <div class="   ">
          <div class=" wrapper-login rapper-frame m0a my-5 bg-light ">
            <h2>Verification</h2>
            <form action="includes/setup_checkCode_inc.php" method="post">
                <div class="form-group ">
                  	<label>Type in the 6-digit Code Sent to your Mobile Phone</label>
                  	<input type="text" name="code" placeholder="Code" class="form-control" style="width: 150px" maxlength="6">
                </div>
                <div class="form-group ">
					<button class="btn btn-info" type="submit" name="submit" style="width: 150px">Check Code</button>
				</div>     
				</form>
				<hr>
				<form action="includes/setup_2Factor_inc.php" method="post" > 
				<div class="form-group ">
                	<input type="text" name="code" placeholder="Phone Number" class="form-control" style="width: 150px" maxlength="10">
                </div>
                <div class="form-group ">
					<button class="btn btn-info" type="submit" name="submit" style="width: 150px">Resend Code</button>
				</div>  
            </form>
            <?php
              if(isset($_GET["error"])){ //error handlers for code field error will display under form
                if($_GET["error"] == "emptyinput"){
                  echo "<p  class='text-danger'>Code Field is empty.</p>";
                }
                else if($_GET["error"] == "incorrectCode"){
                  echo "<p  class='text-danger'>Incorrect Code, please try again.</p>";
                }
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
		</main>

<?php
	include_once 'footer.php'; //universal footer
?>
