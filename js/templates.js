/*
=========================================Chose Template=========================================
*/

function selectRandomTemplate()   //randomly selects any template function
{
    var func = ["selectSlopeTemplate","selectQuadraticTemplate","selectSolveXTemplate"];
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
      "$$x = \\frac {-"+b+" + \\sqrt {"+(b*b-4*a*c)+"}}{"+2*a+"}"+"\\text{⠀⠀⠀⠀⠀⠀‎‎‎‎‎‎‎‎‎‎}      "+
      "x = \\frac {-"+b+" - \\sqrt {"+(b*b-4*a*c)+"}}{"+2*a+"}$$");

    document.getElementById("section10").innerHTML = (
      "$$x = \\frac {-"+b+" + "+Math.sqrt(b*b-4*a*c)+"}{"+2*a+"}"+"\\text{⠀⠀⠀⠀⠀⠀‎‎‎‎‎‎}      "+
      "x = \\frac {-"+b+" - "+Math.sqrt(b*b-4*a*c)+"}{"+2*a+"}$$");

    document.getElementById("section11").innerHTML = (
      "$$x = \\frac {"+(Math.sqrt(b*b-4*a*c)-b)+"}{"+2*a+"}"+"\\text{⠀⠀⠀⠀⠀⠀‎‎‎‎‎‎‎‎‎‎‎‎}      "+
      "x = \\frac {"+(-1*(Math.sqrt(b*b-4*a*c))-b)+"}{"+2*a+"}$$");

      document.getElementById("section12").innerHTML = (
        "$$x = "+round(((Math.sqrt(b*b-4*a*c)-b))/(2*a))+"\\text{⠀⠀⠀⠀⠀⠀‎‎‎‎‎‎‎‎‎‎‎‎}      "+
        "x = "+round(((-1*(Math.sqrt(b*b-4*a*c))-b))/(2*a))+"$$");



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
