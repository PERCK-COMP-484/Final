<?php include_once 'header.php'; //universal header ?>



    <div class="sec1 container-fluid p00 m00 p-5 bg-info">
      <div class="row">
        <div class="col-md-12 pt-5 jumbotron ">

                
          <div id="lesson-ten">
            <div class="text-info mb-5" role="banner">
              <h1>
                Lesson Ten: Solving Basic Trignometry
              </h1>
            </div>
            <main role="main">
              <article role="article">
                <div class="terminology-block">
                  <h2>
                    Terminology You Need to Know
                  </h2>
                  <div class="terms">
                    <p>
                      Given a right triangle with \(\angle\)A, \(\angle\)B,
                      \(\angle\)C, \(\overline{\rm a}\), \(\overline{\rm b}\),
                      \(\overline{\rm c}\), or \(\theta\), you can find any sides or
                      angles of the triangle if given two sides, or one side and one
                      angle using sin, cos, and tan.
                    </p>
                    <div id="triangle-image">
                      <img
                        src="https://i.gyazo.com/be4d2f805659971e8332ac3b3bb79e29.png"
                        alt="right triangle with side and angle labels"
                      />
                    </div>
                    <dl>
                      <dt>\(\theta\)</dt>
                      <dd>A variable used to denote an unknown angle.</dd>
                      <dt>sin</dt>
                      <dd>
                        Denoted as \(sin(\theta) = {opposite \over hypotenuse}\) or
                        \(sin(A) = {a \over c}\).
                      </dd>
                      <dt>arcsin</dt>
                      <dd>
                        The opposite of sin and it can find you the missing angle
                        given the two respective sides. It is denoted as
                        \(arcsin({opposite \over hypotenuse}) = \theta\) or
                        \(arcsin({a \over c}) = A\).
                      </dd>
                      <dt>cos</dt>
                      <dd>
                        Denoted as \(cos(\theta) = {adjacent \over hypotenuse}\) or
                        \(cos(A) = {b \over c}\).
                      </dd>
                      <dt>arccos</dt>
                      <dd>
                        The opposite of cos and it can find you the missing angle
                        given the two respective sides. It is denoted as
                        \(arccos({adjacent\over hypotenuse}) = \theta\) or \(arcsin({b
                        \over c}) = A\).
                      </dd>
                      <dt>tan</dt>
                      <dd>
                        Denoted as \(tan(\theta) = {opposite \over adjacent}\) or
                        \(sin(A) = {a \over b}\).
                      </dd>
                      <dt>arctan</dt>
                      <dd>
                        The opposite of tan and it can find you the missing angle
                        given the two respective sides. It is denoted as
                        \(arctan({opposite \over adjacent}) = \theta\) or \(arctan({a
                        \over b}) = A\).
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
                      Find the missing sides. Round to the neartest hundredth.
                    </p>
                    <div id="image-10-1">
                      <img
                        src="https://i.gyazo.com/7d48193f95b0a642c1ea70256d9495b7.png"
                        alt="problem for ex1"
                      />
                    </div>
                    <p>
                      \(sin(\theta) = {opposite \over hypotenuse}\)<br />
                      \(sin(75) = {a \over 15}\)<br />
                      \(15sin(75) = a\)<br />
                      \(a = 14.49\)<br />
                      <br />
                      \(cos(\theta) = {adjacent \over hypotenuse}\)<br />
                      \(cos(75) = {b \over 15}\)<br />
                      \(15cos(75) = b\)<br />
                      \(b = 3.88\)<br />
                    </p>
                  </div>
                  <div class="example-two">
                    <h3>
                      Example Two
                    </h3>
                    <p>
                      Find \(\theta\). Round to the nearest hundredth.
                    </p>
                    <div id="image-10-2">
                      <img
                        src="https://i.gyazo.com/f603747e02ce513b50414d8471a2751a.png"
                        alt="problem for ex2"
                      />
                    </div>
                    <p>
                      \(arcsin({opposite \over hypotenuse}) = \theta\)<br />
                      \(arcsin({4 \over 5}) = \theta\)<br />
                      \(\theta = 53.13^{\circ}\)
                    </p>
                  </div>
                  <div class="example-three">
                    <h3>
                      Example Three
                    </h3>
                    <p>
                      Find the hypotenuse and \(\angle\)B. Round to the nearest
                      hundredth.
                    </p>
                    <div id="image-10-3">
                      <img
                        src="https://i.gyazo.com/8cfbf06c14c63e216fd76f8b9208a6a4.png"
                        alt="problem for ex3"
                      />
                    </div>
                    <p>
                      \(arctan({opposite \over adjacent}) = B\)<br />
                      \(arctan({5 \over 7}) = B\)<br />
                      \(\angle B = 35.54\)<br />
                      <br />
                      \(sin(B) = {opposite \over hypotenuse}\)<br />
                      \(sin(35.54) = {5 \over c}\) <br />
                      \({1 \over sin(35.54)} = {c \over 5}\)<br />
                      \({5 \over sin(35.54)} = c\)<br />
                      \(c = 8.6\)
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