<?php include_once 'header.php'; //universal header ?>
<script>  //Script to perform pages on load function keep blank if no function required on load
	function pageLoad()
	{
	}
</script>


    <div class="sec1 container-fluid p00 m00 p-5 bg-info">
      <div class="row">
        <div class="col-md-12 pt-5 jumbotron ">


          <div id="lesson-nine">
            <div class="text-info mb-5" role="banner">
              <h1>
                Lesson Nine: Solve Radical Equations
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
                      <dt>Property of Radical Equations Part 1</dt>
                      <dd>Given \(x = a\), then we have \(x^2 = a^2\)</dd>
                      <dt>Property of Radical Equations Part 2 2</dt>
                      <dd>Given \(\sqrt{x} = a\), then we have \(x = a^2\)</dd>
                      <dt>Pythagorean Theorem</dt>
                      <dd>
                        Given a right triangle with two sides, the Pythagorean Theorem
                        can be denoted as \(a^2 + b^2 = c^2\) where a and b are the
                        legs of the right triangle and c is the hypotenuse.
                      </dd>
                      <div id="right-triangle-container">
                        <img
                          src="https://i.gyazo.com/00f14faaf29533d3d7d50212594d7c94.png"
                          alt="right triangle"
                        />
                      </div>
                    </dl>
                  </div>
                </div>
                <div id="radical-equation">
                  <h2>
                    Solving Radical Equations
                  </h2>
                  <div id="radical-equation-steps">
                    <ol>
                      <li>
                        The main goal is to solve a radical equation is to isolate the
                        variable.
                      </li>
                      <li>
                        If the variable is contained in a radical, you must get rid of
                        the radical by squaring both sides of the equation to solve
                        for the variable
                      </li>
                      <li>
                        Once the radical is gone, you simplify the problem until you
                        solve for the variable.
                      </li>
                      <li>
                        Because we are dealing with radical equations, always double
                        check your answers for extraneous solutions - a solution you
                        got from solving an equation, but the solution is not valid.
                      </li>
                    </ol>
                  </div>
                </div>
                <div class="example-block">
                  <h3>
                    Examples
                  </h3>
                  <div class="example-one">
                    <h3>
                      Example One
                    </h3>
                    <p>
                      Solve the equation.
                    </p>
                    <p>
                      \(\sqrt{x + 5} = 2\)<br />
                      \((\sqrt{x + 5})^2 = 2^2\)<br />
                      \(x + 5 = 4\)<br />
                      \(x = -1\)<br />
                      <br />
                      Double Check:<br />
                      \(\sqrt{-1 + 5} = 2\)<br />
                      \(\sqrt{4} = 2\)<br />
                      \(2 = 2\)
                    </p>
                    <p>
                      Example one is the most simple problem you can come across for
                      radical equations. As you can see, we must get rid of the square
                      root affecting the \(x + 5\) to solve for \(x\). Once we get the
                      answer, it is in your best practice to double check if the
                      solution is valid by plugging it back into the equation.
                    </p>
                  </div>
                  <div class="example-two">
                    <h3>
                      Example Two
                    </h3>
                    <p>
                      Solve the equation.
                    </p>
                    <p>
                      \(\sqrt{4x^2 + 3x + 2} = 2x\)<br />
                      \((\sqrt{4x^2 + 3x + 2})^2 = (2x)^2\)<br />
                      \(4x^2 + 3x + 2 = 4x^2\)<br />
                      \(3x + 2 = 0\)<br />
                      \(3x = -2\)<br />
                      \(x = {-2 \over 3}\)<br />
                      <br />
                      Double Check:<br />
                      \(\sqrt{4({-2 \over 3})^2 + 3({-2 \over 3}) + 2} = 2({-2 \over
                      3})\)<br />
                      \(\sqrt{4({-2 \over 3})^2 + 3({-2 \over 3}) + 2} = {-4 \over
                      3}\)<br />
                      No solution
                    </p>
                    <p>
                      In example two, we have to apply the same concept/steps we did
                      for example one. We have to get rid of the square root by
                      squaring both sides of the equation and then solve for x. Notice
                      how our \(x = {-2 \over 3}\) and when we plugged it back into
                      the equation, we got no solution. Keep in mind that anything
                      <strong>inside</strong> of a radical will
                      <strong>never</strong> yield a negative solution without any
                      external forces or factors affecting the radical.
                    </p>
                  </div>
                  <div class="example-three">
                    <h3>
                      Example Three
                    </h3>
                    <p>
                      Use the Pythagorean Theorem to find the missing side of the
                      right triangle.
                    </p>
                    <div id="image-9-1">
                      <img style="height: 250px"
                        src="https://i.gyazo.com/b3851276d651ffa5576140c1a47452af.png"
                        alt="right traingle ex1"
                      />
                    </div>
                    <p>
                      \(a^2 + b^2 = c^2\)<br />
                      let \(a = 8\) and \(c = 12\)<br />
                      \(8^2 + b^2 = 12^2\)<br />
                      \(64 + b^2 = 144\)<br />
                      \(b^2 = 80\)<br />
                      \(\sqrt{b^2} = 80\)<br />
                      \(b = \sqrt{80}\)<br />
                      \(b = 4\sqrt{5}\)
                    </p>
                    <p>
                      In example three, we see that we are given a right triangle and
                      two sides. By using the Pythagorean Theorem, we can find our
                      missing side. First, we need to identify what is our a, b, and
                      c. The variable c must always be the hypotenuse while a and b
                      can be interchangeable, meaning you can choose whatever leg you
                      decide you want to be a or b. From there, you can easily plug in
                      your values and work backwards to find your missing side. Once
                      you find your answer, you can plug it back into the formula to
                      double check your work.
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
						<button type='button' class='m-2 mt-3 mx-auto d-block btn btn-info btn-sm'><a href='practiceProblem.php?type=trig'>Click Me for practice Material!</a></button>
					</div>



        </div>
      </div>
    </div>

    <?php include_once 'footer.php'; //universal footer ?>
