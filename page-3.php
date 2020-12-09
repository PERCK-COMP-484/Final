<?php include_once 'header.php'; //universal header ?>



    <div class="sec1 container-fluid p00 m00 p-5 bg-info">
      <div class="row">
        <div class="col-md-12 pt-5 jumbotron ">


          <div id="lesson-three">
            <div class="text-info mb-5" role="banner">
              <h1>
                Lesson Three: Graphing Linear Equations
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
                      <dt>Linear Equation with Two Variable</dt>
                      <dd>
                        There are two forms for Linear Equations with two variable.
                        The standard form of a linear equation with two variables is
                        denoted as \(Ax + By = C\) and the slope-intercept form of a
                        linear equation with two variables is denoted as \(y = mx +
                        b\), where A, B, C, b, and m \(\in\) \(\mathbb{R}\), m is your
                        slope and b is your y-intercept.
                      </dd>
                      <dt>Solutions of Equations in Two Variables</dt>
                      <dd>
                        A solution to a linear equation can be denoted as an ordered
                        pair (x, y). The value of these ordered pairs can be plugged
                        back into their respective variable in the linear equation to
                        yield a true statement.
                      </dd>
                      <dt>x-intercept</dt>
                      <dd>
                        A point of a graph that crosses or intersects the x-axis. To
                        find the x-intercept, set \(y = 0\) and solve for x. The
                        resulting ordered pair must be in the syntax of (x, 0)
                      </dd>
                      <dt>y-intercept</dt>
                      <dd>
                        A point of a graph that crosses or intersects the y-axis. To
                        find the x-intercept, set \(x = 0\) and solve for y. The
                        resulting ordered pair must be in the syntax of (0, y).
                      </dd>
                      <dt>Vertical Line</dt>
                      <dd>
                        A line that has the syntax of \(x = a\) where a \(\in\)
                        \(\mathbb{R}\). A vertical line has an undefined slope with a
                        x-intercept denoted as (x, 0).
                      </dd>
                      <dt>Horizontal Line</dt>
                      <dd>
                        A line that has the syntax of \(y = b\) where b \(\in\)
                        \(\mathbb{R}\). A horizontal line always has a slope of 0 with
                        a y-intercept denoted as (0, y).
                      </dd>
                      <dt>Slope</dt>
                      <dd>
                        A number denoted as \(m\) in which determines the steepness
                        and direction of the line. The formula for the slope is \(m =
                        {{y_2 - y_1} \over {x_2 - x_1}}\) or \(m = {{y_1 - y_2} \over
                        {x_1 - x_2}}\) where (\(x_1, y_1)\) and (\(x_2, y_2)\) are
                        solutions to the given linear equation.
                      </dd>
                      <div id="slope-graphs-container">
                        <img
                          src="https://i.gyazo.com/a8af9c555c6adcfce83dd20c9cfe8628.png"
                          alt="different-slope-graphs"
                        />
                      </div>
                      <dt>Parrallel Lines</dt>
                      <dd>
                        Two Lines that will never intersect one another. Both lines
                        will have the same slope, but different y-intercepts.
                      </dd>
                      <dt>Parallel Lines</dt>
                      <dd>
                        Two Lines that intersect one another at a 90\(^{\circ}\). The
                        slope of the two lines must be negative reciporcal of one
                        another. You can check if two lines are perpendicular if and
                        only if \(m_1 * m_2 = -1\).
                      </dd>
                    </dl>
                  </div>
                </div>
                .
                <div class="example-block">
                  <h2>
                    Examples
                  </h2>
                  <div class="example-one">
                    <h3>
                      Example One
                    </h3>
                    <p>
                      Graph the linear equation by finding x and y-intercepts. Find
                      the slope of the line.
                    </p>
                    <p>
                      \(3x - 6y = 18\) \(\qquad\) subtract -3x from both sides.<br />
                      -3x\(\qquad\)\(\quad\) -3x<br />
                      \(-6y = -3x + 18\) \(\qquad\) divide both sides by -6<br />
                      \({-6y \over -6} = {{-3x + 18} \over -6}\)<br />
                      \(y = {1 \over 2}x -3\) \(\qquad\) slope-intercept form<br />
                    </p>
                    <p>
                      Our slope, m, is \(1 \over 2\).
                    </p>
                    <p>
                      To find the x-intercept, set y = 0 and solve for x.<br />
                      \(3x - 6(0) = 18\)<br />
                      \(3x = 18\)<br />
                      \(x = 6\)<br />
                      Our x-intercept is (6, 0)
                    </p>
                    <p>
                      To find the y-intercept, set x =0 and solve for y.<br />
                      \(3(0) - 6y = 18\)<br />
                      \(-6y = 18\)<br />
                      \(y = -3\)<br />
                      Our y-intercept is (0, -3)
                    </p>
                    <div id="image-3-1">
                      <script>
                        drawGraph([0.5, -3], 10, "image-3-1");
                      </script>
                    </div>
                  </div>
                  <div class="example=two">
                    <h3>
                      Example Two
                    </h3>
                    <p>
                      Graph the line with ordered pairs (-8, 0) and (0, 6). Find the
                      slope.
                    </p>
                    <p>
                      Let \((x_1, y_1)\) = (-8, 0) and let \((x_2, y_2)\) = (0, 6)<br />
                      \(m = {{y_2 - y_1} \over {x_2 - x_1}}\)<br />
                      \(m = {{6 - 0} \over {0 - (-8)}}\)<br />
                      \(m = {{6 - 0} \over {0 + 8}}\)<br />
                      \(m = {6 \over 8}\)<br />
                      \(m = {3 \over 4}\)<br />
                      Our slope, m, is \({3 \over 4}\).
                    </p>
                    <div id="image-3-2">
                      <script>
                        drawGraph([0.75, 6], 10, "image-3-2");
                      </script>
                    </div>
                  </div>
                  <div class="example-three">
                    <h3>
                      Example Three
                    </h3>
                    <p>
                      Determine whether the lines are parallel, perpendicular, or
                      neither. Graph both lines.
                    </p>
                    <p>
                      \(2x + y = 4\) \(\qquad\) and \(\qquad\) \(x - 2y = 1\)<br />
                      \(y = -2x + 4\) \(\qquad\) and \(\qquad\) \(-2y = -x + 1\)<br />
                      \(y = -2x + 4\) \(\qquad\) and \(\qquad\) \(y = {1 \over 2}x +
                      1\)<br />
                      Answer: Perpendicular
                    </p>
                    <div id="image-3-3">
                      <script>
                        draw2Graph([-2, 4], [0.5, 1], 10, "image-3-3");
                      </script>
                    </div>
                    <p>
                      As you can see here, it is easier to visualize the slope by
                      converting standard form to the slope-intercept form. The
                      definition of a perpendicular line is when the two slopes are
                      negative reciporcals of one another or you can multiply the
                      slopes together and it should be equal to -1. If so, then your
                      two lines are perpendicular to one another.
                    </p>
                  </div>
                </div>
              </article>
            </main>
          </div>


        </div>
      </div>
    </div>

    <?php include_once 'footer.php'; //universal footer ?>
