<?php
	include_once 'header.php'; //universal header
	//contains site info pnks to other sections
?>
<script>  //Script to perform pages on load function keep blank if no function required on load
	function pageLoad()
	{
	}
</script>
<main >
	<div class="container-fluyd bg-light ">
		<div class="row main-css pt-5 ">
			<div class="col-md  mx-auto d-block ">
				<div class=" wrapper-account m0a my-5 bg-light">
					<h2 class="text-center">Problem Categories</h2>	
					<hr>
						<div class="px-5 my-5 mx-auto d-block" style="width: 450px ;">
							<a href="practiceProblem.php?type=all"><button type="button" class="btn btn-info btn-lg btn-block my-4">Practice All !  </button></a>
							<a href="practiceProblem.php?type=slope"><button type="button" class="btn btn-info btn-lg btn-block my-4">Practice Slope Intercept !  </button></a>
							<a href="practiceProblem.php?type=trinomial"><button type="button" class="btn btn-info btn-lg btn-block my-4">Practice Trinomials !  </button></a>
							<a href="practiceProblem.php?type=solveX"><button type="button" class="btn btn-info btn-lg btn-block my-4">Practice Solving for X !   </button></a>
							<a href="practiceProblem.php?type=trig"><button type="button" class="btn btn-info btn-lg btn-block my-4">Practice some Trigonometry !  </button></a>
						</div>
						<hr>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php
	include_once 'footer.php'; //universal footer
?>
