<?php
	include_once 'header.php'; //universal header
	//contains site info links to other sections
?>

<script>  //Script to perform pages on load function keep blank if no function required on load
	function pageLoad()
	{
	}
</script>

    <div class="sec1 container-fluid p00 m00 ">
      <div class="row">
        <div class="col-md-12 pt-5">
          <img class="  mx-auto d-block sec1-img1 " src="img/header-logo1.png" alt="">
          <div class="sec1-txt mx-auto d-block p-3 m-5 boxShadow">
            <h5>
								Welcome to PiLizard! This website is dedicated to help students learn algebra concepts for middle and high school levels!
            </h5>

						<h5>
							We are a team of four College Seniors, who want to inspire the same love of learning that we do. With PiLizard you can challenge yourself with numerous dynamically generated math problems. Track your progress as you continue to determine what subjects you struggle in and receive hand tailored picks to help enhance your mathematical abilities!
            </h5>
            <button type="button" class="m-2 mt-3 mx-auto d-block btn btn-info btn-sm"><a href="practice.php">Let's Go!</a></button>
          </div>
        </div>
      </div>
    </div>
    <div class="sec2 container-fluid bg-info">
      <div class="container">
        <div class="row ">
          <div class="sec2-l col-md-6 ">
            <div class=" sec2-l-txt  ">
              <h1>Use our study pages to help learn math concepts, and test your skills using the practice functionality.</h1>
              <a href="#learnmore"><button type="button" class="btn btn-outline-light">Learn More</button></a>
            </div>
          </div>
          <div class="col-md-6  mt-5 " >
            <img class="sec2-r-img1 mx-auto d-block " src="img/logo2.png" alt="">
            <img class="sec2-r-img2 mt-5 mx-auto d-block " src="img/char-w-1.png" alt="">
          </div>
        </div>
      </div>
    </div>
    <div id="learnmore" class=" sec3 ">
      <div class=" container ">
        <div class="row ">
          <div class="col-md-6 ">
            <div class="  ">
              <img class="sec3-img1 mx-auto d-block " src="img/img-parabpla.png" alt="">
            </div>
          </div>
          <div class="col-md-6  mt-5 " >
            <div class="sec3-txt mx-auto d-block p-5 m-5  boxShadow">
              <h5>
									We offer multiple different subjects of math topics to test your skills in a multitude of ways.
              </h5>

							<h5>
									Visualize the unimaginable implementation of D3 graphs for better accessibility and problem visualization.
              </h5>

							<h5>
									Unlike other websites, our help will always be FREE! All you need to do it sign up to start using PiLizard today!
              </h5>
              <button type="button" class="m-2 mt-4 mx-auto d-block btn btn-info btn-sm"><a href="login.php">Try it for Free</a></button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 d-flex justify-content-center mt75">
            <form class="form-inline ">
              <div class="form-group mx-sm-3 mb-2">
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
              </div>
              <button type="submit" class="btn btn-outline-info mb-2">Subscribe</button>
            </form>
          </div>
          <div class="col-md-12 d-flex justify-content-center ">
            <div class=" ">
              <img class="img-pi mt-5" src="img/logo-pi.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
	include_once 'footer.php'; //universal footer
?>
