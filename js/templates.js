function selectRandomTemplate()   //add each new template to the array to randomly select the next problem
{
    //var func = ["slopeIntercept1"];
    var func = ["slopeIntercept1","solveX"];   //for testing to demonstrate random function selection
    return eval(func[getNumber(0, func.length)]+"()");                      //concatinates array value to make function call and evaluates, returns values to main.
}

function slopeIntercept1()
{
    //alert("Slope Intercept 1");
    let x=getNumber(1,10);
    let y=getNumber(1,10);
    let b=getNumber(1,10);

    document.getElementById("section1").innerHTML = "Rewrite the following in Slope Intercept Form:";

    let answer = [x, "x", "=", y, "y", "+", b];
    document.getElementById("section2").innerHTML = (toString(answer));

    answer = [0, "=", "-", x, "x", "+", y, "y", "+", b];
    document.getElementById("section3").innerHTML = (toString(answer));

    answer = ["-", y, "y", "=", "-", x, "x", "+", b];
    document.getElementById("section4").innerHTML = (toString(answer));

    answer = ["y", "=", x, "/", y, "x", "-", b, "/", y];
    document.getElementById("section5").innerHTML = (toString(answer));

    return [toString(answer),x,y,b,];
}

function slopeIntercept2()              //placeholder for second slope intercept template
{
    //alert("Slope Intercept 2");
}

function slopeIntercept3()              //placeholder for third slope intercept template
{
    //alert("Slope Intercept 3");
}

/*
function slopeInterceptAlt()            //template attempt #1
{
    alert("alt");
    let x=getNumber(1,10);
    let b=getNumber(1,10);
    let y=getNumber(1,10);

    document.getElementById("section1").innerHTML = (x+"x = "+y+"y + " + b);
    document.getElementById("section2").innerHTML = ("0 = "+y+"y - "+x+"x + " + b);
    document.getElementById("section3").innerHTML = ("-"+y+"y = -"+x+"x + "+b);
    document.getElementById("section4").innerHTML = ("y = "+x/y+"x - "+b/y);

    let dec_answer=("y="+parseFloat((x/y).toFixed(3))+"x-"+parseFloat((b/y).toFixed(3)));
    let frac_answer=("y="+x+"/"+y+"x-"+b+"/"+y);

    document.getElementById("section6").innerHTML = (dec_answer);
    document.getElementById("section7").innerHTML = (frac_answer);
}
*/


function solveX()
{
    let a=getNumber(1,20);
    let b=getNumber(1,20);
    let c=getNumber(1,20);
	  let d=getNumber(1,20);

    document.getElementById("section1").innerHTML = ("Solve for X");

	let answer = [a, "-", b, "x", "=", c, "x", "+", d];
	document.getElementById("section2").innerHTML = (toString(answer));

  answer = [a, "-", b, "x", "=", c, "x", "+", d];
  document.getElementById("section3").innerHTML = (toString(answer));

	answer = [a, "=", c+b, "x", "+", d];
	document.getElementById("section4").innerHTML = (toString(answer));

	answer = [a-d, "=", c+b, "x"];
	document.getElementById("section5").innerHTML = (toString(answer));

	answer = ["x", "=", round((a-d)/(c+b))];
	document.getElementById("section6").innerHTML = (toString(answer));

	return [String(round((a-d)/(c+b))),a,b,c,d];
}
