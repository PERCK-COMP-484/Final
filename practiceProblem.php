<?php
	include_once 'header.php'; //universal header
	$_SESSION["previousPage"] =  "../practiceProblem.php?type=".$_GET["type"]; //sets previous page to this
	//contains site info links to other sections
?>
<main class="">
  <script src="js/script.js"></script>
  <script src="js/templates.js"></script>
  <script>  //Script to perform pages on load function keep blank if no function required on load
    function pageLoad()
    {
      main();
    }
  </script>


<div class="container-fluyd bg-light ">
		<div class="row main-css pt-5 ">
			<div class="col-md  mx-auto d-block ">
				<div class=" wrapper-account m0a my-5 bg-light">
					<h2 class="text-center">Practice</h2>	
					<hr>
          <div class=" ">
          <h5>Question:</h5>
          <div id="section1" class="section problem"></div>
          <div id="section2" class="problem"></div>
          <div id="canvas"></div>
            <h5>Answer Here:</h5>
            <form>
                <label for="answer"></label>
                <input type="text" id="answer" name="fanswer" autocomplete="off" style="width: 55%; height:60px; ">
                <div id="devToolWrap " class="d-flex justify-content-start my-2">
                <div class=" m-1 " >
                  <button id="check" onclick="checkAns()" type="button" class="btn btn-info">Give Up</button>
                </div>
                <div class=" m-1 " >
                  <button onclick="cheat()" type="button" class="btn btn-info">Cheat</button>
                </div>
                <div class=" m-1" >
                  <button onclick="showAll()" type="button" class="btn btn-info">Show Answer</button>
                </div>
                <div class=" m-1" >
                  <button onclick="hideAll()" type="button" class="btn btn-info"> Hide Answer</button>
                </div>
              </div>
            </form> 
            <div class="explain flowRight">
            <div id="status" class=""></div>
              <div id="section3" class="section invisible"></div>
              <div id="section4" class="section invisible"></div>
              <div id="section5" class="section invisible"></div>
              <div id="section6" class="section invisible"></div>
              <div id="section7" class="section invisible"></div>
              <div id="section8" class="section invisible"></div>
              <div id="section9" class="section invisible"></div>
              <div id="section10" class="section invisible"></div>
              <div id="section11" class="section invisible"></div>
              <div id="section12" class="section invisible"></div>
              <div id="section13" class="section invisible"></div>
              <br>
              <button onclick="NextQuestion()" id="contBut" class="invisible">Continue</button> 
            </div>
					</div>
				</div>
			</div>
		</div>
	</div>

          <!-- <?php
            if(isset($_SESSION["devMode"])) //???????????????????
            {
                echo('
                    <div id="devToolWrap " class="d-flex justify-content-start"">
                      <div class="px-2 my-2 " >
                        <button onclick="cheat()" type="button" class="btn btn-info">Cheat</button>
                      </div>
                      <div class="px-2 my-2" >
                        <button onclick="showAll()" type="button" class="btn btn-info">Hide Answer</button>
                      </div>
                      <div class="px-2 my-2" >
                        <button onclick="hideAll()" type="button" class="btn btn-info">Show Answer</button>
                      </div>
                    </div>
                ');
            }
          ?> -->





</main>

<?php
	include_once 'footer.php'; //universal footer
?>
