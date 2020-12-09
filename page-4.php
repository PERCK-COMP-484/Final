<?php include_once 'header.php'; //universal header ?>



    <div class="sec1 container-fluid p00 m00 p-5 bg-info">
      <div class="row">
        <div class="col-md-12 pt-5 jumbotron ">

                
          <div id="lesson-four">
            <div class="text-info mb-5" role="banner">
              <h1>
                Lesson Four: Functions
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
                      <dt>Relation</dt>
                      <dd>a set of inputs, x, and outputs, y, in an ordered pair</dd>
                      <dt>Domain</dt>
                      <dd>
                        The set of all possible inputs of a function. In this case,
                        its the set of all possible x-values.
                      </dd>
                      <dt>Range</dt>
                      <dd>
                        The set of all possible outputs of a function. In this case,
                        its the set of all possible y-values.
                      </dd>
                      <dt>Function</dt>
                      <dd>
                        The set of ordered pairs where multiple unique domain values
                        are paired with only one range value.
                      </dd>
                      <div id="function-image">
                        <img
                          src="https://i.gyazo.com/1576969c5d048c211c3111540b99aa22.png"
                          alt="function diagram"
                        />
                      </div>
                      <dt>Vertical Line Test</dt>
                      <dd>
                        A test to determine whether the graph is a function or not. A
                        vertical line is drawn and if the line intersects at more than
                        one point on the graph, then it is <strong>NOT</strong> a
                        function.
                      </dd>
                      <dt>Function Notation a.k.a \(f(x)\)</dt>
                      <dd>
                        A special non-operational notation that defines a function, f,
                        in respect to the variable x. Basically, its a fancy way of
                        saying what &ldquo;y&rdquo; is when x is equal to some number.
                      </dd>
                    </dl>
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
                      Use the vertical line test to determine whether each graph is a
                      function.
                    </p>
                    <div id="image-4-1-a">
                      <script>
                      drawYGraph([1,2,4], 10,"image-4-1-a");
                        </script>
                    </div>
                    <p>
                      Answer: Not a function
                    </p>
                    <div id="image-4-1-b">
                      <script>
                      draw2YGraph([1,2,4],[5], 20,"image-4-1-b");
                        </script>
                    </div>
                    <p>
                      Using the vertical line test, we can see that the red line
                      intersects more than one point on the graph; therefore, the
                      graph above is not a function. At any point where the vertical
                      line test intersects more than one point in any part of the
                      graph will determine the graph to not be a function.
                    </p>
                  </div>
                  <div class="example-two">
                    <h3>
                      Example Two
                    </h3>
                    <p>
                      Find the domain and range of the following set of ordered pairs.
                      Determine if the set is a function.
                    </p>
                    <p>
                      {(-9, 12), (0, 8), (12, -15), (3, 15), (1, 8)}
                    </p>
                    <p>
                      Domain: -9, 0, 1, 12, 3<br />
                      Range: -15, -9, 8, 15<br />
                      The set is a function
                    </p>
                    <p>
                      This relation/set is a function because each x-value is unique
                      to every y-value. In other words, you do not see the same
                      x-value appear again in the ordered pair. We do not care whether
                      the y-values are unique, it can repeat. The domain are all the
                      x-values from each ordered pair in the set. The range are all
                      the y-values from each ordered pair in the set. Therefore, the
                      best way to display all the domain and range of the set is to
                      list them as shown above. Notice how I have two 8&sbquo;s, but I
                      listed only one. This method is the correct way to do it as
                      listing two of the same number in the range is redundant.
                    </p>
                  </div>
                  <div class="example-three">
                    <h3>
                      Example Three
                    </h3>
                    <p>
                      Determine whether the equation describes a function:
                    </p>
                    <p>
                      \(y = 2x + 3\)
                    </p>
                    <p>
                      Answer: A Function
                    </p>
                    <div id="image-4-3">
                      <script>
                      draw2XYGraph([2,3],[1], 10,"image-4-3");
                        </script>
                    </div>
                    <p>
                      There are two ways to easily tell whether the equation is a
                      function or not. First, we know that any equation that takes the
                      form of \(Ax + By = C\) or \(y = mx + b\) is a linear equation.
                      Most of the time, a line is usually a function. The only
                      exception is when the line is a vertical line. Alternatively,
                      you can plug in x and y values to plot onto the graph. Once the
                      graph is plotted, you can use the vertical line test to
                      determine whether the equation is a function or not. As shown
                      above, you can see no matter where we put the vertical line on
                      the graph, it will only intersect the line only once. Therefore,
                      the equation is a function.
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
