
<?php include_once 'header.php'; //universal header ?>
<script>  //Script to perform pages on load function keep blank if no function required on load
	function pageLoad()
	{
	}
</script>


    <div class="sec1 container-fluid p00 m00 p-5 bg-info">
      <div class="row">
        <div class="col-md-12 pt-5 jumbotron ">

                
                <div id="lesson-two">
                  <div class="text-info mb-5" role="banner">
                    <h1>
                      Lesson Two: Introduction to Linear Inequalities and Absolute Value
                      Equations
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
                            <dt>Inequality</dt>
                            <dd>
                              An equation, expression, or statement containing the symbols
                              \(\ge\), \(\gt\), \(\le\), or \(\lt\).
                            </dd>
                            <dt>Addition Property of Inequalities</dt>
                            <dd>
                              Given \(a \lt b\), \(a + c \lt b + c\) where a, b, and c
                              \(\in\) \(\mathbb{R}\).
                            </dd>
                            <dd>
                              Given \(a \gt b\), \(a + c \gt b + c\) where a, b, and c
                              \(\in\) \(\mathbb{R}\).
                            </dd>
                            <dt>Multiplcation Property of Inequalities</dt>
                            <dd>
                              Given c \(\in\) \(\mathbb R_{\ge 0}\) and \(a \lt b\), then
                              \(ac \lt bc\).
                            </dd>
                            <dd>
                              Given c \(\in\) \(\mathbb R_{\ge 0}\) and \(a \gt b\), then
                              \(ac \gt bc\).
                            </dd>
                            <dd>
                              Given c \(\in\) \(\mathbb R_{\lt 0}\) and \(a \lt b\), then
                              \(ac \gt bc\).
                            </dd>
                            <dd>
                              Given c \(\in\) \(\mathbb R_{\lt 0}\) and \(a \gt b\), then
                              \(ac \lt bc\).
                            </dd>
                            <dt>Inequalities Signs</dt>
                            <dl>
                              <dt>\(\lt\)</dt>
                              <dd>less than</dd>
                              <dt>\(\le\)</dt>
                              <dd>at most, OR less than or equal to</dd>
                              <dt>\(\gt\)</dt>
                              <dd>greater than</dd>
                              <dt>\(\ge\)</dt>
                              <dd>at least, no more than, OR greater than or equal to</dd>
                              <dt>\(\ne\)</dt>
                              <dd>not equal to</dd>
                            </dl>
                            <dt>Absolute Value</dt>
                            <dd>
                              Given x \(\in\) \(\mathbb{R}\), the absolute value of x is
                              denoted as \(\lvert x \rvert\) which represents the distance
                              from zero. Therefore, \(\lvert x \rvert\) \(\in\) \(\mathbb
                              R_{\ge 0}\).
                            </dd>
                            <dt>Absolute value Property</dt>
                            <dd>
                              Given \(\lvert x \rvert = y\), then either \(x = y\) or \(x =
                              -y\) where x and y \(\in\) \(\mathbb{R}\).
                            </dd>
                          </dl>
                        </div>
                        <div id="absolute-value-block">
                          <h2>
                            How to Solve Absolute values
                          </h2>
                          <div id="absolute-value-steps">
                            <ol>
                              <li>
                                Like any other equation, the goal is to isolate the variable
                                onto one side of the expression by working backwards and
                                utilizing reversed PEMDAS.
                              </li>
                              <li>
                                Absolute Values are just like parenthesis with a special
                                characteristic. We would need to isolate the absolute value
                                first before isolating the variable.
                              </li>
                              <li>
                                Once the absolute value has been isolated, we will need to
                                check the non absolute side of the equation. If there is a
                                negative on the nonabsolute side of the equation, then there
                                is no solution since absolute values
                                <strong>CANNOT</strong> be negative numbers.
                              </li>
                              <li>
                                If the nonabsolute side of the value is a positive, then we
                                can break the equation down into two equations. The absolute
                                value sign will disappear and you will have the positive and
                                negative variant of the side that was originally the
                                nonabsolute value.
                              </li>
                              <li>
                                From there, solve as if it were any other linear equation,
                                but you will have two answers, one from each equation.
                              </li>
                            </ol>
                          </div>
                        </div>
                        <div id="inequality-block">
                          <h2>
                            How to Solve Inequalities
                          </h2>
                          <div id="inequality-steps">
                            <ol>
                              <li>
                                Treat inequalities as if it were an &ldquo;=&rdquo; sign.
                                The goal, like any other problem so far, is to isolate the
                                variable on one side of the inequality.
                              </li>
                              <li>
                                When dividing or multiplying by a negative number, you
                                <strong>MUST</strong> flip the diretion of the inequality
                                sign.
                              </li>
                              <li>
                                When graphing inequalities on a number line, \(\lt\) or
                                \(\gt\) are open circles and \(\le\) or \(\ge\) are closed
                                circles. From there, you will draw an arrow towards the side
                                of the number line that makes the inequality true.
                              </li>
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
                              Solve the inequality and graph the solutions.
                            </p>
                            <p>
                              \(-5x + 2 \le 17 \) \(\qquad\) subtract 2 from both sides<br />
                              \(\qquad\) -2 \(\quad\) -2<br />
                              \(-5x \le 15 \) \(\qquad\) divide both sides by -5<br />
                              \(x \ge -3\) \(\quad\) solved<br />
                            </p>
                            <div id="image-2-1">
                              <img
                                src="https://i.gyazo.com/e468a0381f4062e739f734a3c9e6e9b7.png"
                                alt="ex1-number-line"
                              />
                            </div>
                            <p>
                              Example one is the most basic inequality problem you will
                              find. As you can see, we treated and &ldquo;pretended&rdquo;
                              the inequality sign is an equal sign. However on line 3,
                              notice how the sign <strong>changed</strong> when we divide
                              both sides by a negative number.
                              <strong>Do not forget</strong>! When
                              <strong>dividing or multiplying</strong> both sides by a
                              negative number, it will <strong>change or flip</strong> the
                              inequality sign. Once x is isolated, we can see that x is
                              greater than or equal to -3. On the number line, we would mark
                              where -3 is with a closed dot (because of this sign \(\ge\))
                              and for all values of x that are equal to or greater than -3,
                              we draw an arrow pointing towards the right to make the
                              inequality statement true.
                            </p>
                          </div>
                          <div class="example-two">
                            <h3>
                              Example Two
                            </h3>
                            <p>
                              Solve the inequality and graph the solutions.
                            </p>
                            <p>
                              \(-3(x - 8) + x \lt -4(x - 5) + 12\) \(\qquad\) distributive
                              property<br />
                              \(-3 * x - (-3) * 8 + x \lt -4 * x - (-4) * 5 + 12\)<br />
                              \(-3x + 24 + x \lt -4x + 20 + 12\) \(\qquad\) combine
                              like-terms<br />
                              \(-2x + 24 \lt -4x + 32\) \(\qquad\) subtract both sides by
                              24<br />
                              \(\qquad\) -24 \(\qquad\)\(\qquad\) -24<br />
                              \(-2x \lt -4x + 8\) \(\qquad\) add both sides by 4x<br />
                              + 4x \(\quad\) + 4x<br />
                              \(2x \lt 8\) \(\qquad\) divide by sides by 2<br />
                              \({2x \over 2} \lt {8 \over 2}\)<br />
                              \(x \lt 4\) \(\qquad\) solved<br />
                            </p>
                            <div id="image-2-2">
                              <img
                                src="https://i.gyazo.com/afc7e724ee2b593f41a8dbd069d691ae.png"
                                alt="ex2-number-line"
                              />
                            </div>
                            <p>
                              Example two got a bit harder. No worries, as long as you know
                              your fundamentals of mathematics, this problem will not be so
                              much of a challenge. After doing some distribution and
                              isolating x, we get the answer \(x \lt 4\). Notice for this
                              problem, we did not change the inequality sign. As you can
                              see, we
                              <strong>DID NOT</strong> divide or multiply by a negative
                              number; therefore, we left the inequality sign as is. As for
                              the number line, because it is a less than sign, we must be an
                              open dot to mark where 4 is. From there, we notice that x
                              takes values that are strictly less than 4. As a result, we
                              drew the arrow pointing left to make this inequality statement
                              true.
                            </p>
                          </div>
                          <div class="example-three">
                            <h3>
                              Example Three
                            </h3>
                            <p>
                              Solve the absolute value equation. Be sure to check your
                              solutions.
                            </p>
                            <p>
                              \(2\lvert x + 1 \rvert - 6 = 2\) \(\qquad\) add 6 to both
                              sides<br />
                              \(\qquad\)\(\quad\) + 6 \(\enspace\) + 6<br />
                              \(2\lvert x + 1 \rvert = 8\) \(\qquad\) divide both sides by
                              2<br />
                              \({2\lvert x + 1 \rvert \over 2} = {8 \over 2}\)<br />
                              \(\lvert x + 1 \rvert = 4\) \(\qquad\) split it into
                              equations<br />
                              \(x + 1 = 4\) \(\qquad\) or \(\qquad\) \(x + 1 = -4\)
                              \(\qquad\) find x in both equations<br />
                              \(\quad\) -1 \(\quad\)-1 \(\qquad\) or \(\qquad\) \(\quad\) -1
                              \(\quad\)-1<br />
                              \(x =3\) \(\qquad\) or \(\qquad\) \(x = -5\) \(\quad\) solved
                              <br />
                            </p>
                            <p>
                              In example three, we are dealing with absolute values. We need
                              to isolate the absolute value by getting rid of the
                              &ldquo;-6&rdquo; and the &ldquo;2&rdquo;. Once we isolate the
                              absolute value, we will need to get rid of it. To do that, we
                              would have to create break the equation down into equations
                              containing the positive and negative variant of the
                              nonabsolute value side. By doing that, we are able to remove
                              the absolute values and solve for x. Because you have two
                              equations, you will get two answers. You can plug each answer
                              back into the variable to see if the equation is true.
                              Otherwise, the respective x value has no solution.
                            </p>
                          </div>
                        </div>
                      </div>
                    </article>
                  </main>
                </div>



          
        </div>
      </div>
    </div>

    <?php include_once 'footer.php'; //universal footer ?>
