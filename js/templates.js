const radToDeg=180/Math.PI;
/*
=========================================Chose Template=========================================
*/

function selectRandomTemplate()   //randomly selects any template function
{
    var func = ["selectSlopeTemplate","selectQuadraticTemplate","selectSolveXTemplate","selectTrigTemplate"];
    return eval(func[getNumber(0, func.length)]+"()"); //concatinates array value to make function call and evaluates, returns values to main.
}

function selectSlopeTemplate()  //randomly choses a slope intercept template and uses it
{
    slopeIntercept=true;
    var func = ["slopeIntercept1"];
    return eval(func[getNumber(0, func.length)]+"()");
}

function selectQuadraticTemplate()  //randomly choses a quadratic formula template and uses it
{
    trinomial=true;
    var func = ["Quadratic1"];
    return eval(func[getNumber(0, func.length)]+"()");
}

function selectSolveXTemplate() //randomly choses a solve for x template and uses it
{
    solveX=true;
    var func = ["solveX1"];
    return eval(func[getNumber(0, func.length)]+"()");
}

function selectTrigTemplate() //randomly choses a solve for x template and uses it
{
    trig=true;
    var func = ["pythagorean","sin","cos","tan"];
    return eval(func[getNumber(0, func.length)]+"()");
}

/*
=========================================TEMPLATES=========================================
*/

function slopeIntercept1()
{
    //alert("Slope Intercept 1");
    let x=getNumber(1,10);
    let y=getNumber(1,10);
    let b=getNumber(1,10);

    document.getElementById("section1").innerHTML = "Rewrite the following in Slope Intercept Form:";

    let answer = [x, "x", "=", y, "y", "+", b];
    document.getElementById("section2").innerHTML = ("$$"+toString(answer)+"$$");

    answer = [0, "=", "-", x, "x", "+", y, "y", "+", b];
    document.getElementById("section3").innerHTML = ("$$"+toString(answer)+"$$");

    answer = ["-", y, "y", "=", "-", x, "x", "+", b];
    document.getElementById("section4").innerHTML = ("$$"+toString(answer)+"$$");

    answer = ["y", "=", x, "/", y, "x", "-", b, "/", y];
    document.getElementById("section5").innerHTML = ("$$"+toString(answer)+"$$");

    hasGraph=true;
    drawGraph([x/y,-1*b/y]);
    return [toString(answer)];
}

function slopeIntercept2()              //placeholder for second slope intercept template
{
}

function slopeIntercept3()              //placeholder for third slope intercept template
{

}

function Quadratic1()
{
    //alert("Slope Intercept 1");
    let a=getNumber(2,10);
    let b=getNumber(2,10);
    let c=getNumber(2,10);
    while((b*b-4*a*c)<0)
    {
      a=getNumber(2,10);
      b=getNumber(2,10);
      c=getNumber(2,10);
    }

    document.getElementById("section1").innerHTML = "Find the X-Intercepts of the trinomial. Round to 3 Decimal Places.";
    document.getElementById("section2").innerHTML = ("$$"+a+"x^2 + "+b+"x +"+c+"=0$$");
    document.getElementById("section3").innerHTML = ("$$x = \\frac {-b \\pm \\sqrt {b^2 - 4ac}}{2a}$$");
    document.getElementById("section4").innerHTML = ("$$x = \\frac {-"+b+" \\pm \\sqrt {"+b+"^2 - 4("+a+"*"+c+")}}{2*"+a+"}$$");
    document.getElementById("section5").innerHTML = ("$$x = \\frac {-"+b+" \\pm \\sqrt {"+b*b+" - 4("+a+"*"+c+")}}{2*"+a+"}$$");
    document.getElementById("section6").innerHTML = ("$$x = \\frac {-"+b+" \\pm \\sqrt {"+b*b+" - 4("+a*c+")}}{"+2*a+"}$$");
    document.getElementById("section7").innerHTML = ("$$x = \\frac {-"+b+" \\pm \\sqrt {"+b*b+" - "+4*a*c+"}}{"+2*a+"}$$");
    document.getElementById("section8").innerHTML = ("$$x = \\frac {-"+b+" \\pm \\sqrt {"+(b*b-4*a*c)+"}}{"+2*a+"}$$");
    document.getElementById("section9").innerHTML = (
      "<div class=sectionWrapper>$$x = \\frac {-"+b+" + \\sqrt {"+(b*b-4*a*c)+"}}{"+2*a+"}$$</div>"+
      "<div class=sectionWrapper>$$x = \\frac {-"+b+" - \\sqrt {"+(b*b-4*a*c)+"}}{"+2*a+"}$$</div>"); //adds subsections for formatting

    document.getElementById("section10").innerHTML = (
      "<div class=sectionWrapper>$$x = \\frac {-"+b+" + "+Math.sqrt(b*b-4*a*c)+"}{"+2*a+"}$$</div>"+
      "<div class=sectionWrapper>$$x = \\frac {-"+b+" - "+Math.sqrt(b*b-4*a*c)+"}{"+2*a+"}$$</div>"); //adds subsections for formatting

    document.getElementById("section11").innerHTML = (
      "<div class=sectionWrapper>$$x = \\frac {"+(Math.sqrt(b*b-4*a*c)-b)+"}{"+2*a+"}$$</div>"+
      "<div class=sectionWrapper>$$x = \\frac {"+(-1*(Math.sqrt(b*b-4*a*c))-b)+"}{"+2*a+"}$$</div>"); //adds subsections for formatting

      document.getElementById("section12").innerHTML = (
        "<div class=sectionWrapper>$$x = "+round(((Math.sqrt(b*b-4*a*c)-b))/(2*a))+"$$</div>"+
        "<div class=sectionWrapper>$$x = "+round(((-1*(Math.sqrt(b*b-4*a*c))-b))/(2*a))+"$$</div>");  //adds subsections for formatting

        hasGraph=true;
        drawGraph([a,b,c],5);


    answer=round(((Math.sqrt(b*b-4*a*c)-b))/(2*a))+","+round(((-1*(Math.sqrt(b*b-4*a*c))-b))/(2*a));
    let answer2=round(((-1*(Math.sqrt(b*b-4*a*c))-b))/(2*a))+","+round(((Math.sqrt(b*b-4*a*c)-b))/(2*a));
    return [answer,answer2];
}

function solveX1()
{
    let a=getNumber(1,20);
    let b=getNumber(1,20);
    let c=getNumber(1,20);
	  let d=getNumber(1,20);

    document.getElementById("section1").innerHTML = ("Solve for X. Round to 3 Decimal Places.");

	let answer = [a, "-", b, "x", "=", c, "x", "+", d];
	document.getElementById("section2").innerHTML = ("$$"+toString(answer)+"$$");

  answer = [a, "-", b, "x", "=", c, "x", "+", d];
  document.getElementById("section3").innerHTML = ("$$"+toString(answer)+"$$");

	answer = [a, "=", c+b, "x", "+", d];
	document.getElementById("section4").innerHTML = ("$$"+toString(answer)+"$$");

	answer = [a-d, "=", c+b, "x"];
	document.getElementById("section5").innerHTML = ("$$"+toString(answer)+"$$");

	answer = ["x", "=", round((a-d)/(c+b))];
	document.getElementById("section6").innerHTML = ("$$"+toString(answer)+"$$");

	return [String(round((a-d)/(c+b))),a,b,c,d];
}

function pythagorean()
{
  //console.log("pyth");
  let a=getNumber(2,12);
  let b=getNumber(2,12);

  document.getElementById("section1").innerHTML = ("Given a right triangle of sides a and b, find the length of the hypotenuse c (Round&nbspto&nbsp3&nbspDecimals)"); //uses non breaking spaces
  document.getElementById("section2").innerHTML = ("$$a="+a+"\\text{⠀⠀⠀⠀‎‎‎‎‎‎‎‎‎‎‎‎}b="+b+"$$");
  document.getElementById("canvas").innerHTML= ' <img src="assets/right_triangle.png" alt="right triangle" width="150px" height="150px"> ';
  document.getElementById("section3").innerHTML = ("$$a^{2}+b^{2}=c^{2}$$");
  document.getElementById("section4").innerHTML = ("$$"+a+"^{2}+"+b+"^{2}=c^{2}$$");
  document.getElementById("section5").innerHTML = ("$$"+(a*a)+"+"+(b*b)+"=c^{2}$$");
  document.getElementById("section6").innerHTML = ("$$"+((a*a)+(b*b))+"=c^{2}$$");
  document.getElementById("section7").innerHTML = ("$$\\sqrt {"+((a*a)+(b*b))+"}=\\sqrt {c^{2}}$$");
  document.getElementById("section8").innerHTML = ("$$"+round(Math.sqrt((a*a)+(b*b)))+"=c$$");

  return [round(Math.sqrt((a*a)+(b*b)))];
}

function tan()
{
  //console.log("tan");
  let a=getNumber(2,12);
  let b=getNumber(2,12);

  document.getElementById("section1").innerHTML = ("Given a right triangle of sides a and b, use Tangent to find the degree of angle A (Round&nbspto&nbsp3&nbspDecimals)"); //uses non breaking spaces
  document.getElementById("section2").innerHTML = ("$$a="+a+"\\text{⠀⠀⠀⠀‎‎‎‎‎‎‎‎‎‎‎‎}b="+b+"$$");
  document.getElementById("canvas").innerHTML= ' <img src="assets/right_triangle.png" alt="right triangle" width="150px" height="150px"> ';
  document.getElementById("section3").innerHTML = ("$$tan=\\frac{Opposite}{Adjacent}$$");
  document.getElementById("section4").innerHTML = ("$$tan(A)=\\frac{a}{b}$$");
  document.getElementById("section5").innerHTML = ("$$tan(A)=\\frac{"+a+"}{"+b+"}$$");
  document.getElementById("section6").innerHTML = ("$$tan(A)="+a/b+"$$");
  document.getElementById("section7").innerHTML = ("$$A=tan^{-1}\\left("+a/b+"\\right)$$");
  document.getElementById("section8").innerHTML = ("$$A="+round(Math.atan(a/b)*radToDeg)+"$$");

  //return [radToDeg];
  return [round(Math.atan(a/b)*radToDeg)];
}

function sin()
{
  //console.log("sin");
  let a=getNumber(1,11);  //one less so hypotenuse max value is always greater
  let c=getNumber(2,12);
  while(a>=c)
  {
    a=getNumber(1,11);    //one less so hypotenuse max value is always greater
    c=getNumber(2,12);
  }
  document.getElementById("section1").innerHTML = ("Given a right triangle of sides a and c, use Sin to find the degree of angle A (Round&nbspto&nbsp3&nbspDecimals)"); //uses non breaking spaces
  document.getElementById("section2").innerHTML = ("$$a="+a+"\\text{⠀⠀⠀⠀‎‎‎‎‎‎‎‎‎‎‎‎}c="+c+"$$");
  document.getElementById("canvas").innerHTML= ' <img src="assets/right_triangle.png" alt="right triangle" width="150px" height="150px"> ';
  document.getElementById("section3").innerHTML = ("$$sin=\\frac{Opposite}{hypotenuse}$$");
  document.getElementById("section4").innerHTML = ("$$sin(A)=\\frac{a}{c}$$");
  document.getElementById("section5").innerHTML = ("$$sin(A)=\\frac{"+a+"}{"+c+"}$$");
  document.getElementById("section6").innerHTML = ("$$sin(A)="+a/c+"$$");
  document.getElementById("section7").innerHTML = ("$$A=sin^{-1}\\left("+a/c+"\\right)$$");
  document.getElementById("section8").innerHTML = ("$$A="+round(Math.asin(a/c)*radToDeg)+"$$");

  //return [radToDeg];
  return [round(Math.asin(a/c)*radToDeg)];
}

function cos()
{
  //console.log("cos");
  let b=getNumber(1,11);  //one less so hypotenuse max value is always greater
  let c=getNumber(2,12);
  while(b>=c)
  {
    b=getNumber(1,11);    //one less so hypotenuse max value is always greater
    c=getNumber(2,12);
  }
  document.getElementById("section1").innerHTML = ("Given a right triangle of sides b and c, use Cosine to find the degree of angle A (Round&nbspto&nbsp3&nbspDecimals)");  //uses non breaking spaces
  document.getElementById("section2").innerHTML = ("$$a="+b+"\\text{⠀⠀⠀⠀‎‎‎‎‎‎‎‎‎‎‎‎}c="+c+"$$");
  document.getElementById("canvas").innerHTML= ' <img src="assets/right_triangle.png" alt="right triangle" width="150px" height="150px"> ';
  document.getElementById("section3").innerHTML = ("$$cos=\\frac{Adjacent}{hypotenuse}$$");
  document.getElementById("section4").innerHTML = ("$$cos(A)=\\frac{b}{c}$$");
  document.getElementById("section5").innerHTML = ("$$cos(A)=\\frac{"+b+"}{"+c+"}$$");
  document.getElementById("section6").innerHTML = ("$$cos(A)="+b/c+"$$");
  document.getElementById("section7").innerHTML = ("$$A=cos^{-1}\\left("+b/c+"\\right)$$");
  document.getElementById("section8").innerHTML = ("$$A="+round(Math.acos(b/c)*radToDeg)+"$$");

  //return [radToDeg];
  return [round(Math.acos(b/c)*radToDeg)];
}
