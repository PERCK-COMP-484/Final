<?php include_once 'header.php'; //universal header ?>
<script>  //Script to perform pages on load function keep blank if no function required on load
	function pageLoad()
	{
	}
</script>


    <div class="sec1 container-fluid p00 m00 p-5 bg-info">
      <div class="row">
        <div class="col-md-12 pt-5 jumbotron ">


          <div id="lesson-eight">
            <div class="text-info mb-5" role="banner">
              <h1>
                Lesson Eight: Solve Quadratic Equations using the Quadratic Formula
              </h1>
            </div>
            <main role="main">
              <article role="article">
                <div class="terminology-block">
                  <h2>
                    Terminology You Need to Know
                  </h2>
                  <div class="terms">
                    <dl>
                      <dt>Standard Form of a Quadratic Equation</dt>
                      <dd>
                        Denoted as \(ax^2 + bx + c = 0\) where a \(\in\) \(\mathbb
                        R_{\ne 0}\), and b, c \(\in\) \(\mathbb{R}\)
                      </dd>
                      <dt>Quadratic Formula</dt>
                      <dd>
                        Used to solve for x values of Quadratic Equations and denoted
                        as \(x = {-b \pm \sqrt{b^2-4ac} \over 2a}\).
                      </dd>
                    </dl>
                  </div>
                </div>
                <div id="quadratic-formula-block">
                  <h2>
                    Using the Quadratic Formula to Solve for Quadratic Equations
                  </h2>
                  <div id="quadratic-formula-steps">
                    <ol>
                      <li>
                        If the quadratic equation is not in the form of \(ax^2 + bx +
                        c = 0 \), then do so.
                      </li>
                      <li>
                        To make life a little easier, if the quadratic equation
                        contains any fractions, then multiply the entire quadratic
                        equation by the least common denominator or the LCD.
                      </li>
                      <li>Find and identify your a, b, and c.</li>
                      <li>Plug it into the quadratic formula.</li>
                    </ol>
                  </div>
                </div>
                <div class="example-block">
                  <h2>
                    Examples
                  </h2>
                  <div class="example-one">
                    <h3>
                      Example One
                    </h3>
                    <p>
                      Solve the equation using the quadratic formula.
                    </p>
                    <p>
                      \(x^2 - 6x - 7 = 0\)<br />
                      let \(a = 1, b = -6, c = -7\)<br />
                      \(x = {-b \pm \sqrt{b^2-4ac} \over 2a}\)<br />
                      \(x = {-(-6) \pm \sqrt{(-6)^2-4(1)(-7)} \over 2(1)}\)<br />
                      \(x = {6 \pm \sqrt{36 + 28 } \over 2}\)<br />
                      \(x = {6 \pm \sqrt{64} \over 2}\)<br />
                      \(x = {6 \pm 8 \over 2}\)<br />
                      \(x = {6 + 8 \over 2}\) or \({6 - 8 \over 2}\)<br />
                      \(x = {14 \over 2}\) or \({-2 \over 2}\)<br />
                      \(x = 7\) or \(-1\)<br />
                    </p>
                    <div id="image-8-1" class="graph">
                      <script>
                        drawGraph([1, -6, -7], 20, "image-8-1");
                      </script>
                    </div>
										<br />
                    <p>
                      The equation given to us is already in its standard form so we
                      can skip step 1. We now have to identify our a, b, and c. Most
                      students get confused and include the x.
                      <strong>DO NOT</strong> include the x to the value of what a, b,
                      and c are. The variables, a, b, and c are coefficients and
                      constants to their respective variables. Once you identify what
                      your a, b, and c is, here comes the easy, but tedious part, plug
                      it in. Once you simplify and solve for what x is, you should
                      always get two answers for x.
                    </p>
                  </div>
                  <div class="example-two">
                    <h3>
                      Example Two
                    </h3>
                    <p>
                      Solve the equation using the quadratic formula.
                    </p>
                    <p>
                      \(x^2 - 56 = x\)<br />
                      \(x^2 - x - 56 = 0\)<br />
                      let \(a = 1, b = -1, c = -56\)<br />
                      \(x = {-b \pm \sqrt{b^2-4ac} \over 2a}\)<br />
                      \(x = {-(-1) \pm \sqrt{(-1)^2 - 4(1)(-56)} \over 2(1)}\)<br />
                      \(x = {1 \pm \sqrt{1 + 224} \over 2}\)<br />
                      \(x = {1 \pm \sqrt{225} \over 2}\)<br />
                      \(x = {1 \pm 15 \over 2}\)<br />
                      \(x = {1 + 15 \over 2}\) or \({1 - 15 \over 2}\) <br />
                      \(x = {16 \over 2}\) or \({-14 \over 2}\)<br />
                      \(x = 8\) or \(-7\)
                    </p>
                    <div id="image-8-2" class="graph">
                      <script>
                        drawGraph([1, -1, -56], 60, "image-8-2");
                      </script>
                    </div>
										<br />
                    <p>
                      Because the given equation is not in its standard form, we would
                      have to subtract x from both sides to get the standard form of
                      \(ax^2 + bx + c = 0\). From there, we would follow the same
                      steps as we did for example one and you should be able to get
                      two answers for x.
                    </p>
                  </div>
                  <div class="example-three">
                    <h3>
                      Example Three
                    </h3>
                    <p>
                      Solve the equation using the quadratic formula.
                    </p>
                    <p>
                      \({x^2 \over 3} + x - {1 \over 2} = 0\)<br />
                      \(6({x^2 \over 3} + x - {1 \over 2} = 0)\)<br />
                      \(2x^2 + 6x - 3 = 0\)<br />
                      let \(a = 2, b = 6, c = -3\)<br />
                      \(x = {-b \pm \sqrt{b^2-4ac} \over 2a}\)<br />
                      \(x = {-6 \pm \sqrt{(6)^2 - 4(2)(-3)} \over 2(2)}\)<br />
                      \(x = {-6 \pm \sqrt{36 + 24} \over 4}\)<br />
                      \(x = {-6 \pm \sqrt{60} \over 4}\)<br />
                      \(x = {-6 \pm 2\sqrt{15} \over 4}\)<br />
                      \(x = {-3 \pm \sqrt{15} \over 2}\)
                    </p>
                                  <div id="image-8-3" class="graph">
                      <script>
                        drawGraph([1/3, 1, -1/2], 10, "image-8-3");
                      </script>
                    </div>
										<br />
                    <p>
                      The only difference between this example and the rest of the
                      example is that this example has fractions. There are two ways
                      to approach this type of problem. You can either use the
                      fractions as values for their respective variables or find the
                      LCD and use the LCD to multiply the entire quadratic equation to
                      get rid of the fractions. Sure, you'll get larger numbers, but
                      its way less of a mess than using fractions as values to plug
                      into the quadratic formula.
                    </p>
                  </div>
                </div>
              </article>
            </main>
          </div>
					<div style="text-align: center;">
						<br />
						<hr />
						<br />
						<p>Now that you have learned the basics let's try some practice problems!</p>
						<button type='button' class='m-2 mt-3 mx-auto d-block btn btn-info btn-sm'><a href='practiceProblem.php?type=trinomial'>Click Me for practice Material!</a></button>
					</div>



        </div>
      </div>
    </div>

    <?php include_once 'footer.php'; //universal footer ?>
