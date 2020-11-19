var correct;
function main(){
    document.getElementById("check").disabled = false;
    hideAll();
    correct=selectRandomTemplate();
	//MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
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
    return input.toFixed(3);
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

    $("#contBut").fadeOut();
    $("#contBut").addClass("invisible");
}

function showAll()
{
    $("#status").fadeIn();
    $("#status").removeClass("invisible");

    $("#section3").delay(500).fadeIn();
    $("#section3").removeClass("invisible");

    $("#section4").delay(1000).fadeIn();
    $("#section4").removeClass("invisible");

    $("#section5").delay(1500).fadeIn();
    $("#section5").removeClass("invisible");

    $("#section6").delay(2000).fadeIn();
    $("#section6").removeClass("invisible");

    $("#section7").delay(2500).fadeIn();
    $("#section7").removeClass("invisible");

    $("#section8").delay(3000).fadeIn();
    $("#section8").removeClass("invisible");

    $("#section9").delay(3500).fadeIn();
    $("#section9").removeClass("invisible");

    $("#section10").delay(4000).fadeIn();
    $("#section10").removeClass("invisible");

    $("#contBut").delay(4000).fadeIn();
    $("#contBut").removeClass("invisible");
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
    if(correct[0]===answer)
    {
        document.getElementById("status").innerHTML = ("Nice Work!");
        $("#status").addClass("nice");
        showAll();
    }
    else
    {
        document.getElementById("status").innerHTML = ("Not Quite...");
        $("#status").addClass("tryAgain");
        showAll();
    }

    //document.getElementById("check").disabled = true;
}

function NextQuestion()
{
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

    $("#status").removeClass("tryAgain");
    $("#status").removeClass("nice");
    document.getElementById("status").innerHTML = ("");

    main();
}
