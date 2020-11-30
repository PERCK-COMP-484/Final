<?php
	include_once 'header.php'; //universal header
	//contains site info pnks to other sections
?>
<script>  //Script to perform pages on load function keep blank if no function required on load
	function pageLoad()
	{
	}
</script>
  <main class="material">
		<h1>Problem Categories</h1>
		<hr>
		<br>
      <h2><a href="practiceProblem.php?type=all">Practice All!</a></h2>
      <h2><a href="practiceProblem.php?type=slope">Practice Slope Intercept!</a></h2>
      <h2><a href="practiceProblem.php?type=trinomial">Practice Trinomials!</a></h2>
      <h2><a href="practiceProblem.php?type=solveX">Practice Solving for X!</a></h2>
			<h2><a href="practiceProblem.php?type=trig">Practice some Trigonometry!</a></h2>
  </main>
<?php
	include_once 'footer.php'; //universal footer
?>
