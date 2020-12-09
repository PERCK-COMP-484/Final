<?php include_once 'header.php'; //universal header ?>
<script>  //Script to perform pages on load function keep blank if no function required on load
	function pageLoad()
	{
	}
</script>


    <div class="sec1 container-fluid p00 m00 p-5 bg-info">
      <div class="row">
        <div class="col-md-12 pt-5 jumbotron ">

          
          <div id="lesson-six">
            <div class="text-info mb-5" role="banner">
              <h1>
                Lesson Six: Exponents and Polynomials
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
                      <dt>Exponential Expression</dt>
                      <dd>
                        Takes the form of \(x^n = x * x * x * x...\) where x is the
                        base, n is the exponent and also is the number of x's that are
                        being multiplied. If there is no exponent, by default, \(n =
                        1\).
                      </dd>
                      <p>
                        Let a and b \(\in\) \(\mathbb{Z}\). Let x and y \(\in\)
                        \(\mathbb{R}\) where \(x, y \ne 0\). We have...
                      </p>
                      <dt>Product Rule</dt>
                      <dd>\(x^a * x^b = x^{a + b}\)</dd>
                      <dt>Quotient Rule</dt>
                      <dd>\({x^a \over x^b} = x^{a - b}\)</dd>
                      <dt>Power Rule</dt>
                      <dd>\((x^a)^b = x^{a * b}\)</dd>
                      <dt>Power of a Product Rule</dt>
                      <dd>\((xy)^a = x^ay^a\)</dd>
                      <dt>Power of a Quotient Rule</dt>
                      <dd>\(({x \over y})^a = {x^a \over y^a}\)</dd>
                      <dt>Zero Exponent</dt>
                      <dd>\(x^0 = 1\) where x \(\in\) \(\mathbb R_{\ne 0}\)</dd>
                      <dt>Negative Exponent</dt>
                      <dd>\(x^{-a} = {1 \over x^a}\)</dd>
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
                      Evaluate the Expression
                    </p>
                    <p>
                      \(3 * 4^2\)<br />
                      \(3 * 16\)<br />
                      \(48\)
                    </p>
                    <p>
                      By using the order of operations or PEMDAS, we would have to
                      evaluate the exponent first. By the definition of exponential
                      expression, the numbers of 4's we would be multiplying together
                      is 2. Therefore, it will be \(4 * 4 = 16\).
                    </p>
                  </div>
                  <div class="example-two">
                    <h3>
                      Example Two
                    </h3>
                    <p>
                      Simplify the Expression
                    </p>
                    <p>
                      \({(2x^2y^3z)^4 \over -8x^5yz^2}\)<br />
                      \({2^4x^8y^{12}z^4 \over -8x^5yz^2}\)<br />
                      \({16x^3y^{11}z^2 \over -8}\)<br />
                      \(-2x^3y^{11}z^2\)
                    </p>
                    <p>
                      First, we would need to simplify the numerator first to make the
                      entire fraction less messy. By the power of a product rule, we
                      can distribute the exponent to each number and variable inside
                      of the parenthesis. Since the denominator is already in its
                      simplest form, we do not need to do anything to it. From there
                      we would need to use the quotient rule and subtract the
                      exponents based on their respective bases. Once accomplished,
                      simplify the remaning coefficient by reducing the fraction.
                    </p>
                  </div>
                  <div class="example-three">
                    <h3>
                      Example Three
                    </h3>
                    <p>
                      Simplify the Expression
                    </p>
                    <p>
                      \((-3x^3y^2)(-5x^4y^6)\)<br />
                      \(-3 * -5x^{3 + 4}y^{2 + 6}\)<br />
                      \(15x^7y^8\)
                    </p>
                    <p>
                      By using the product rule, we can multiply the coefficients and
                      add the exponents based on their respective bases together. From
                      there, you will get your answer after some arithemtic.
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