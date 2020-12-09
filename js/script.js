var correct;  //correct answers in a list
var slopeIntercept; //true if current problem is slope Intercept
var trinomial;  //true if current problem is solve trinomial
var solveX; //true if current problem is solve X
var trig; //true if current problem is trig
var hasGraph=false;

function main()
{
    slopeIntercept=false;
    trinomial=false;
    solveX=false;
    document.getElementById("check").disabled = false;  //rezctivate submit button
    hideAll();  //hide all sections
    getProblem(); //gets problem based on query string
	//MathJax.typesetPromise();  //refresh mathjax view
    var answerArea = document.querySelector("#answer");
    answerArea.addEventListener('keyup',updateButton);
}

function updateButton()
{
  if(document.getElementById("answer").value==="")
  {
    document.getElementById("check").innerHTML="Give Up";
  }
  else
  {
    document.getElementById("check").innerHTML="Check Answer";
  }
}
function getProblem() //calls corresponding templet based off query string info
{
    if(window.location.search==="?type=all")
    {
      correct=selectRandomTemplate();
    }
    else if(window.location.search==="?type=slope")
    {
      correct=selectSlopeTemplate();
    }
    else if(window.location.search==="?type=trinomial")
    {
      correct=selectQuadraticTemplate();
    }
    else if(window.location.search==="?type=solveX")
    {
      correct=selectSolveXTemplate();
    }
    else if(window.location.search==="?type=trig")
    {
      correct=selectTrigTemplate();
    }

}

function getNumber(min, max) //random number between min and max(non-inclusive)
{
  return Math.floor(Math.random() * (max - min) ) + min;
}

function clean(input)
{
    let answer=input;

	for(i=0;i<answer.length; i++)	//flawed logic makes problem incorrect sometimes; likely caused by making parts null
	{
		if(answer[i]==="/")
		{
			if(answer[i-1]===answer[i+1]) //add fraction simply clause e.g. 2/4 = 1/2
			{
				console.log("first if");
				answer[i-1]=null;
				answer[i+1]=null;
				answer[i]=1;
			}
			else if(answer[i-1]%answer[i+1]===0)
			{
				console.log("second if");
				answer[i]=(answer[i-1]/answer[i+1]);
				answer[i-1]=null;
				answer[i+1]=null;
			}
			else
			{
				console.log("Last else");
				let temp=reduce(answer[i-1],answer[i+1]);
				answer[i-1]=temp[0];
				answer[i+1]=temp[1];
			}
		}

	}

	answer=removeNull(answer);
	console.log(answer);
	for(i=0;i<answer.length; i++)	//remove leading ones in front of vars
	{
		if(isLetter(answer[i])===true)
		{
			if(i>0)
			{
				if(answer[i-1]===1)
				{
					answer[i-1]=null;
				}
			}
		}

	}

	answer=removeNull(answer);
    return answer;
}

function round(input)
{
  console.log(typeof input);
  if(input.toString().includes("."))
  {
    return parseFloat(input.toFixed(3));
  }
  else
  {
      return input;
  }

}

function reduce(numer,denomin){
  var gcd = function gcd(a,b){
    return b ? gcd(b, a%b) : a;
  };
  gcd = gcd(numer,denomin);
  return [numer/gcd, denomin/gcd];
}

function isLetter(input)
{
	//console.log(input+" "+/^[a-zA-Z]+$/.test(input));
	return /^[a-zA-Z]+$/.test(input);
}

function removeNull(input)
{
	let cleaned = [];
    for(i=0;i<input.length; i++)
    {
        if(input[i] !== null)
        {
            cleaned.push(input[i]);
        }
    }

    return cleaned;
}

function toString(input)
{
    let answer=clean(input);
    ansString="";
    //ansString="\\( ";
    for(i=0;i<answer.length; i++)
    {
        ansString+=answer[i];
    }
	//ansString+=" \\)";
	//alert(ansString);
	console.log("answer "+ansString);
    return ansString;
}
function hideAll()
{
    $("#status").fadeOut();
    $("#status").addClass("invisible");

    $("#section3").fadeOut();
    $("#section3").addClass("invisible");

    $("#section4").fadeOut();
    $("#section4").addClass("invisible");

    $("#section5").fadeOut();
    $("#section5").addClass("invisible");

    $("#section6").fadeOut();
    $("#section6").addClass("invisible");

    $("#section7").fadeOut();
    $("#section7").addClass("invisible");

    $("#section8").fadeOut();
    $("#section8").addClass("invisible");

    $("#section9").fadeOut();
    $("#section9").addClass("invisible");

    $("#section10").fadeOut();
    $("#section10").addClass("invisible");

    $("#section11").fadeOut();
    $("#section11").addClass("invisible");

    $("#section12").fadeOut();
    $("#section12").addClass("invisible");

    $("#section13").fadeOut();
    $("#section13").addClass("invisible");

    $("#graph").fadeOut();
    $("#graph").addClass("invisible");

    $("#contBut").fadeOut();
    $("#contBut").addClass("invisible");
}

function showAll()
{
    $("#status").fadeIn();
    $("#status").removeClass("invisible");

    $("#section3").delay().fadeIn();
    $("#section3").removeClass("invisible");

    $("#section4").delay().fadeIn();
    $("#section4").removeClass("invisible");

    $("#section5").delay().fadeIn();
    $("#section5").removeClass("invisible");

    $("#section6").delay().fadeIn();
    $("#section6").removeClass("invisible");

    $("#section7").delay().fadeIn();
    $("#section7").removeClass("invisible");

    $("#section8").delay().fadeIn();
    $("#section8").removeClass("invisible");

    $("#section9").delay().fadeIn();
    $("#section9").removeClass("invisible");

    $("#section10").delay().fadeIn();
    $("#section10").removeClass("invisible");

    $("#section11").delay().fadeIn();
    $("#section11").removeClass("invisible");

    $("#section12").delay().fadeIn();
    $("#section12").removeClass("invisible");

    $("#section13").delay().fadeIn();
    $("#section13").removeClass("invisible");

    if(hasGraph===true)
    {
      $("#graph").delay().fadeIn();
      $("#graph").removeClass("invisible");
    }

    $("#contBut").fadeIn();
    $("#contBut").removeClass("invisible");
}

function check(input)
{
  for(i=0;i<correct.length; i++)
  {
    console.log("Correct: "+correct[i]);
    console.log("Input: "+input);
    console.log(correct[i]==input);
    if(input==correct[i])
    {

      return true;
    }
  }
  return false;
}

function updateCorrect()
{
  if(slopeIntercept===true)
  {
    //alert("slope correct");
    Cookies.set('slopeCorrect','true', { sameSite: 'Lax' }) //uses js cookie to simplify cookie managing
  }
  else if(trinomial===true)
  {
    //alert("trinomial correct");
    Cookies.set('quadraticCorrect','true', { sameSite: 'Lax' }) //uses js cookie to simplify cookie managing
  }
  else if(solveX===true)
  {
    //alert("solveX correct");
    Cookies.set('solveXCorrect','true', { sameSite: 'Lax' })  //uses js cookie to simplify cookie managing
  }
  else if(trig===true)
  {
    //alert("solveX correct");
    Cookies.set('trigCorrect','true', { sameSite: 'Lax' })  //uses js cookie to simplify cookie managing
  }
}

function updateIncorrect()
{
  if(slopeIntercept===true)
  {
    //alert("slope incorrect");
    Cookies.set('slopeIncorrect','true', { sameSite: 'Lax' }) //uses js cookie to simplify cookie managing
  }
  else if(trinomial===true)
  {
    //alert("trinomial incorrect");
    Cookies.set('quadraticIncorrect','true', { sameSite: 'Lax' }) //uses js cookie to simplify cookie managing
  }
  else if(solveX===true)
  {
    //alert("solveX incorrect");
    Cookies.set('solveXIncorrect','true', { sameSite: 'Lax' })  //uses js cookie to simplify cookie managing
  }
  else if(trig===true)
  {
    //alert("solveX incorrect");
    Cookies.set('trigIncorrect','true', { sameSite: 'Lax' })  //uses js cookie to simplify cookie managing
  }
}

function checkAns()
{
    $("#status").removeClass("tryAgain");
    $("#status").removeClass("nice");

    //alert(correct[3]);
    let answer=document.getElementById("answer").value;
    answer = answer.replace(/\s/g,'');
    //answer= clean(answer);
	  //alert("correct: "+correct[0]+" Input: "+answer);
    if(check(answer))
    {
        document.getElementById("status").innerHTML = ("Nice Work!");
        $("#status").addClass("nice");
        showAll();
        updateCorrect();
    }
    else
    {
        document.getElementById("status").innerHTML = ("Not Quite...");
        $("#status").addClass("tryAgain");
        showAll();
        updateIncorrect();
    }

    document.getElementById("check").disabled = true;
}

function NextQuestion()
{
    window.location.href = "includes/updateDB_inc.php";
    /*  Old code may revisit
    hideAll();
    document.getElementById("section1").innerHTML = ("");
    document.getElementById("section2").innerHTML = ("");
    document.getElementById("section3").innerHTML = ("");
    document.getElementById("section4").innerHTML = ("");
    document.getElementById("section5").innerHTML = ("");
    document.getElementById("section6").innerHTML = ("");
    document.getElementById("section7").innerHTML = ("");
    document.getElementById("section8").innerHTML = ("");
    document.getElementById("section9").innerHTML = ("");
    document.getElementById("section10").innerHTML = ("");
    document.getElementById("section11").innerHTML = ("");
    document.getElementById("section12").innerHTML = ("");
    document.getElementById("section13").innerHTML = ("");

    $("#status").removeClass("tryAgain");
    $("#status").removeClass("nice");
    document.getElementById("status").innerHTML = ("");
    document.getElementById("answer").value="";
    main();
    */
}
function cheat()
{
  document.getElementById("answer").value=correct[0];
}
