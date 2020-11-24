<?php
	include_once 'header.php'; //universal header
	//contains site info links to other sections
?>
<main class="material">
  <script src="/comp484_test/js/script.js"></script>
  <script src="/comp484_test/js/templates.js"></script>
  <script>  //Script to perform pages on load function keep blank if no function required on load
    function pageLoad()
    {
      main();
    }
  </script>

		<p>

		</p>
    <div id="section1" class="section problem"></div>
    <div id="section2" class="problem"></div>

    <br>
<div class="formWrap flowLeft">
    <form>
        <label for="answer">Answer Here:</label>
        <input type="text" id="answer" name="fanswer">
        <button onclick="checkAns()" type="button" id="check">Check Answer</button>
        <button onclick="showAll()" type="button" class="devTool">Show Answer</button>
        <button onclick="hideAll()" type="button" class="devTool">Hide Answer</button>
    </form>
</div>

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
</main>

<?php
	include_once 'footer.php'; //universal footer
?>
