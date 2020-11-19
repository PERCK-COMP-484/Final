<?php
	include_once 'header.php'; //universal header
	//contains site info links to other sections
?>
<main class="material">
  <script src="js/script.js"></script>
  <script src="js/templates.js"></script>
  <script>  //Script to perform pages on load function keep blank if no function required on load
    function pageLoad()
    {
      main();
    }
  </script>
    <div id="section1" class="section problem"></div>
    <div id="section2" class="problem"></div>

    <br>

    <form>
        <label for="answer">Answer Here:</label>
        <input type="text" id="answer" name="fanswer">
        <button onclick="checkAns()" type="button" id="check">Check Answer</button>
        <button onclick="showAll()" type="button" class="devTool">Show Answer</button>
        <button onclick="hideAll()" type="button" class="devTool">Hide Answer</button>
    </form>

    <br>
    <div id="status" class=""></div>
    <br>

    <div id="section3" class="section invisible"></div>
    <div id="section4" class="section invisible"></div>
    <div id="section5" class="section invisible"></div>
    <div id="section6" class="section invisible"></div>
    <div id="section7" class="section invisible"></div>
    <div id="section8" class="section invisible"></div>
    <div id="section9" class="section invisible"></div>
    <div id="section10" class="section invisible"></div>
    <br>
    <button onclick="NextQuestion()" id="contBut" class="invisible">Continue</button>

</main>

<?php
	include_once 'footer.php'; //universal footer
?>
