<?php
//account page for users when signed in. Will display user statistics and links to account settings page
include_once 'header.php'; //universal header
if(isset($_SESSION["previousPage"]))  //runs DBupdate on first time page open so user values are up to date with session
{
  if($_SESSION["previousPage"] === "../account.php")
  {
    $_SESSION["previousPage"] = ""; //removes value so it can be updated next page visit
  }
  else
  {
    $_SESSION["previousPage"] =  "../account.php"; //sets previous page to this
    header("location: includes/updateDB_inc.php"); //run db update
  }
}
else
{
    $_SESSION["previousPage"] =  "../account.php"; //sets previous page to this
    header("location: includes/updateDB_inc.php"); //run db update
}
if (!isset($_SESSION["userUid"])) { //if the user is not logged in redirect them to login page
    header("location: login.php");
}
?>

<script>  //Script to perform pages on load function keep blank if no function required on load
	function pageLoad()
	{
	}
</script>

<?php
echo("
<script>
      // Array for dataset
      const correctScore = [
        { userAttempt: 'Slope', userScore: ".$_SESSION['slopeCorrect']." },
        { userAttempt: 'Quadratic', userScore: ".$_SESSION['quadraticCorrect']." },
        { userAttempt: 'Solve X', userScore: ".$_SESSION['solveXCorrect']." },
        { userAttempt: 'Trigonometry', userScore: ".$_SESSION['trigCorrect']." }
      ];

      const incorrectScore = [
        { userAttempt: 'Slope', userScore: ".$_SESSION['slopeIncorrect']." },
        { userAttempt: 'Quadratic', userScore: ".$_SESSION['quadraticIncorrect']." },
        { userAttempt: 'Solve X', userScore: ".$_SESSION['solveXIncorrect']." },
        { userAttempt: 'Trigonometry', userScore: ".$_SESSION['trigIncorrect']." }
      ];

      const max=(Math.max(".$_SESSION['slopeCorrect'].",".$_SESSION['quadraticCorrect'].",".$_SESSION['solveXCorrect'].",".$_SESSION['trigCorrect'].",".$_SESSION['slopeIncorrect'].",".$_SESSION['quadraticIncorrect'].",".$_SESSION['solveXIncorrect'].",".$_SESSION['trigIncorrect']."));
</script>
");
?>

    <main>
        <div class="container-fluyd bg-info ">
		    <div class="row main-css pt-5 ">
			    <div class="col-md  mx-auto d-block ">
				    <div class=" wrapper-account m0a my-5 bg-light">
                        <h2>My Account</h2>
                        <!-- <p>This is your account page.</p> -->
                        <div class="my-3 mb-5">
                            <?php
                            echo "<h4>Hello " . $_SESSION["userUid"] . "!</h4>"; //Print users ID, funcitons will be implemented to retrieve user statistics
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
                        <hr />
                        <br />

                          <?php
                            $number=max($_SESSION["slopeCorrect"],$_SESSION["quadraticCorrect"],$_SESSION["solveXCorrect"],$_SESSION["trigCorrect"]);
                            if($number!=0)
                            {
                              echo("
                              </div>
                              <div style='text-align: center;'>
                               <h1>Correct</h1>
                               <div id='svg' class='chart'></div>
                               <br />
                               ");
                            }
                            switch ($number) {
                              case 0;
                              echo "<p>You haven't gotten anything correct yet. Let's change that!</p>
                                    <button type='button' class='m-2 mt-3 mx-auto d-block btn btn-info btn-sm'><a href='practice.php'>Click Me to see some practice categories!</a></button>
                              ";
                              break;

                              case $_SESSION["slopeCorrect"]:
                              echo "<p>You answered a lot of Slope Intercept questions correctly!</p>";
                              break;

                              case $_SESSION["quadraticCorrect"]:
                              echo "<p>You answered a lot of Quadratic Formula questions correctly!</p>";
                              break;

                              case $_SESSION["solveXCorrect"]:
                              echo "<p>You answered a lot of Solve for X questions correctly!</p>";
                              break;

                              case $_SESSION["trigCorrect"]:
                              echo "<p>You answered a lot of Trigonometry questions correctly!</p>";
                              break;
                            }
                          ?>
                          <br />
                          <hr />
                          <br />
                          <?php
                            $number=max($_SESSION["slopeIncorrect"],$_SESSION["quadraticIncorrect"],$_SESSION["solveXIncorrect"],$_SESSION["trigIncorrect"]);
                            if($number!=0)
                            {
                              echo("
                              </div>
                              <div style='text-align: center;'>
                               <h1>Incorrect</h1>
                               <div id='svg2' class='chart'></div>
                               <br />
                               ");
                            }
                            switch ($number) {
                              case 0;
                              echo "<p>You haven't gotten anything wrong yet. Way to go!</p>";
                              break;

                              case $_SESSION["slopeIncorrect"]:
                              echo "<p>Looks like you struggled on Slope Intercept Questions. Don't worry, we can help!</p>
                                    <button type='button' class='m-2 mt-3 mx-auto d-block btn btn-info btn-sm'><a href='page-3.php'>Click Me for a Slope Intercept Refresher Course!</a></button>
                                    ";
                              break;

                              case $_SESSION["quadraticIncorrect"]:
                              echo "<p>Looks like you struggled on Quadratic Formula questions. Don't worry, we can help!</p>
                                    <button type='button' class='m-2 mt-3 mx-auto d-block btn btn-info btn-sm'><a href='page-8.php'>Click Me for a Quadratic Formula Refresher Course!</a></button>
                                    ";
                              break;

                              case $_SESSION["solveXIncorrect"]:
                              echo "<p>Looks like you struggled on Solve for X questions. Don't worry, we can help!</p>
                                    <button type='button' class='m-2 mt-3 mx-auto d-block btn btn-info btn-sm'><a href='page-1.php'>Click Me for a Solve for X Refresher Course!</a></button>
                                    ";
                              break;

                              case $_SESSION["trigIncorrect"]:
                              echo "<p>Looks like you struggled on Trigonometry. Don't worry, we can help!</p>
                                    <button type='button' class='m-2 mt-3 mx-auto d-block btn btn-info btn-sm'><a href='page-10.php'>Click Me for a Trigonometry Refresher Course!</a></button>
                                    ";
                              break;
                            }
                          ?>
                          <br />
                        </div>

                        <script type="text/javascript" src="js/d3Chart.js"></script>
                    </div>
			    </div>
	         </div>
	    </div>
    </main>
<?php
	include_once 'footer.php'; //universal footer
?>
