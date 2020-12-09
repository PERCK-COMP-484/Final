<?php
//account page for users when signed in. Will display user statistics and links to account settings page
include_once 'header.php'; //universal header
if (!isset($_SESSION["userUid"])) { //if the user is not logged in redirect them to login page
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
				    <div class=" wrapper-account m0a my-5 bg-light">
                        <h2>My Account</h2>
                        <!-- <p>This is your account page.</p> -->
                        <div class="my-3 mb-5">
                            <?php
                            echo "Hello " . $_SESSION["userUid"] . " !"; //Print users ID, funcitons will be implemented to retrieve user statistics
                            ?>
                        </div>
                        <div class="my-2 mb-5">
                            <a href='accountSettings.php'><button class="btn btn-info" type="button" name="settings">Settings</button></a>
                        </div>
                        <!-- <p class="txt-green" ><a href="login.php" >some text</a></p> -->	
                        <hr>
                        <h2>My Progress</h2>
                        <div id="chart" class="chart my-5">


                        <?php
                        echo('
            
                            <table class="table table-striped ">
                                <thead>
                                    <tr class="bg-info">
                                        <th scope="col"></th>
                                        <th scope="col">Problem Type</th>
                                        <th scope="col">Correct</th>
                                        <th scope="col">Incorrect</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <th scope="row"></th>
                                        <td>Slope Intercept</td>
                                        <td>'.$_SESSION["slopeCorrect"].'</td>
                                        <td>'.$_SESSION["slopeIncorrect"].'</td>
                                    </tr>


                                    <tr>
                                        <th scope="row"></th>
                                        <td>Quadratic</td>
                                        <td>'.$_SESSION["quadraticCorrect"].'</td>
                                        <td>'.$_SESSION["quadraticIncorrect"].'</td>
                                    </tr>



                                    <tr>
                                        <th scope="row"></th>
                                        <td>SolveX</td>
                                        <td>'.$_SESSION["solveXCorrect"].'</td>
                                        <td>'.$_SESSION["solveXIncorrect"].'</td>
                                    </tr>


                                    <tr>
                                    <th scope="row"></th>
                                        <td>Trigonometry</td>
                                        <td>'.$_SESSION["trigCorrect"].'</td>
                                        <td>'.$_SESSION["trigIncorrect"].'</td>
                                    </tr>
                                </tbody>



                            </table>
                           

                        ')
                        ?>








                             <img src="img/chart.png" alt="" class=" mx-auto d-block mt-5">
                         </div>				
                    </div>  
			    </div>
	         </div>
	    </div>
    </main>
    <script src="https://d3js.org/d3.v6.min.js"></script>
<?php
	include_once 'footer.php'; //universal footer
?>
