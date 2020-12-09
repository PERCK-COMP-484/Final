<?php
//page that is displayed if a user tries to login with 2 factor auth enabled in account settings
	include_once 'header.php'; //universal header
	if(!isset($_SESSION["tempUserUid"])){
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
            <h2>Verification</h2>
            <form action="includes/login_checkCode_inc.php" method="post">
                <div class="form-group ">
                  <label>Type in the 6-digit Code Sent to your Mobile Phone</label>
                  <input type="text" name="code" placeholder="Code" class="form-control" style="width: 150px" maxlength="6">
                </div>
                <div class="form-group ">
								  <button class="btn btn-info" type="submit" name="submit" style="width: 150px">Check Code</button>
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
