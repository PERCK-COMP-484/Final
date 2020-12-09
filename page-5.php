<?php include_once 'header.php'; //universal header ?>



    <div class="sec1 container-fluid p00 m00 p-5 bg-info">
      <div class="row">
        <div class="col-md-12 pt-5 jumbotron ">

          
          <div id="lesson-five">
            <div class="text-info mb-5" role="banner">
              <h1>
                Lesson Five: Systems of Linear Equation
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
                      <dt>System of Linear Equation</dt>
                      <dd>
                        A set or collection of two or more linear equations that
                        determines the number of solutions a.k.a ordered pairs to make
                        the set of equations true.
                      </dd>
                      <dt>One Solution</dt>
                      <dd>
                        A type of system of linear equation with
                        <strong>exactly one solution</strong> will have one ordered
                        pair, x and y, to make the set of equations true. Graphically,
                        the two lines will intersect at that ordered pair.
                      </dd>
                      <dt>Infinitely Many Solutions</dt>
                      <dd>
                        A type of system of linear equation with
                        <strong>an infinite number of solutions</strong> will have any
                        number of ordered pairs to make the the set of equations true.
                        Basically, the collection of equations will be the same
                        equation, meaning all of them will have the same slope and
                        y-intercept. Graphically, it will be just one line.
                      </dd>
                      <dt>No Solution</dt>
                      <dd>
                        A type of system of linear equation with
                        <strong>no solution</strong> will not have any ordered pairs
                        to make the set of equations true. Graphically, the two lines
                        will <strong>never</strong> intersect at any point on the
                        graph. These lines are also known as parallel lines.
                      </dd>
                    </dl>
                  </div>
                </div>
                <div id="sub-block">
                  <h2>
                    Substitution Method
                  </h2>
                  <div id="sub-steps">
                    <ol>
                      <li>
                        To prevent confusion, we are going to refer to the two
                        equations as equation 1 and equation 2.
                      </li>
                      <li>
                        Solve for one of the variables in equation 1 (you can solve
                        for one of the variables in equation 2 if its easier)
                      </li>
                      <li>
                        Plug in the variable you isolated/solved for from equation 1
                        into equation 2.
                      </li>
                      <li>Solve for the variable in equation 2.</li>
                      <li>
                        Once you get some number as your answer for equation 2, plug
                        it back into the respective variable in equation 1.
                      </li>
                      <li>
                        Once you get the answers for both of the variables, plug those
                        variables back into both equation 1 and equation 2 to double
                        check your work.
                      </li>
                    </ol>
                  </div>
                </div>
                <div id="elim-block">
                  <h2>
                    Elimination Method
                  </h2>
                  <div id="elim-steps">
                    <ol>
                      <li>
                        To prevent confusion, we are going to refer to the two
                        equations as equation 1 and equation 2.
                      </li>
                      <li>
                        If the equation is not in the standard form: \(Ax + By = C\),
                        then do so.
                      </li>
                      <li>
                        Select a variable, x or y, you want to eliminate. From there,
                        multiply either equation 1 or equation 2 by some number to
                        ensure the selected variable are opposites of one another in
                        equation 1 and equation 2.
                      </li>
                      <li>Add equation 1 and equation 2 together.</li>
                      <li>
                        By adding the two equations together, you should be able to
                        cancel out one variable and be able to solve for the other.
                        From there, plug the solved variable back into the original
                        equation to find the canceled variable.
                      </li>
                      <li>
                        Once you found both of your variables, plug it back into both
                        of your equations to double check your answer.
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
                      Solve each system of linear equations by using substitution or
                      elimination method. State if the system has one solution, no
                      solution, or infinitely many solutions.
                    </p>
                    <p>
                      \(2x + y = 1\) \(\qquad\) solve for y<br />
                      \(x + 3y = 3\)
                    </p>
                    <p>
                      \(y = -2x + 1\) \(\qquad\) substitute y into the second equation
                      with \(-2x + 1\)<br />
                      \(x + 3(-2x + 1) = 3\)<br />
                      <br />
                      \(y = -2x + 1\) \(\qquad\) solve for x in the second equation<br />
                      \(x - 6x + 3 = 3\)<br />
                      \(-5x + 3 = 3\)<br />
                      \(-5x = 0\)<br />
                      \(x = 0\)<br />
                      <br />
                      \(y = -2(0) + 1\) \(\qquad\) plug the value of x back into the
                      first equation<br />
                      \(y = 1\)<br />
                      <br />
                      Answer: By using the Substitution method, we found one solution,
                      (0, 1)
                    </p>
                  </div>
                  <div class="example-two">
                    <h3>
                      Example Two
                    </h3>
                    <p>
                      \(5x - 3y = -11\)<br />
                      \(x - 2y = 2\)
                    </p>
                    <p>
                      \(5x - 3y = -11\) \(\qquad\) multiply the second equation by
                      -5<br />
                      \(-5(x - 2y = 2)\) <br />
                      <br />
                      \(5x - 3y = -11\) \(\qquad\) Add both the equations together by
                      combining liked terms<br />
                      \(-5x + 10y = -10\)<br />
                      \(0x + 7y = -21\)<br />
                      \(y = -3\)<br />
                      <br />
                      \(5x - 3(-3) = -11\) \(\qquad\) plug in -3 into y to the first
                      equation and solve for x <br />
                      \(5x + 9 = -11\)<br />
                      \(5x = -20\)<br />
                      \(x = -4\)<br />
                      <br />
                      Answer: By using the Elimination method, we found one solution,
                      (-4, -3)
                    </p>
                  </div>
                  <div class="example-three">
                    <h3>
                      Example Three
                    </h3>
                    <p>
                      \(x + 2y = 8\)<br />
                      \(y = -{1 \over 2}x + 4\)
                    </p>
                    <p>
                      \(x + 2(-{1 \over 2}x + 4) = 8\) \(\qquad\) plug in \(-{1 \over
                      2}x + 4\) from the second equation into y to the first equation
                      and solve for x<br />
                      \(x - x + 8 = 8\)<br />
                      \(8 = 8\) \(\qquad\) true statement<br />
                      <br />
                      Answer: By using the Substitution method, we found infiinitely
                      many solutions.
                    </p>
                  </div>
                </div>
              </article>
            </main>



    
        </div>
      </div>
    </div>

    <?php include_once 'footer.php'; //universal footer ?>