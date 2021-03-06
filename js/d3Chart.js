// Array for dataset
function getPercent(num1, num2) //get percentage of num1 compared to num2
{
  if(num1===0 && num2===0)
  {
    return "No Problems Completed";
  }
  return Math.ceil(num1/(num1+num2)*100)+"% Correct";
}

function drawPie(number1, number2, title, ID, percent)  //draw pichart of number1 and number 2 with a title and append to ID and append percent to percent id
{
  document.getElementById(percent).innerHTML=getPercent(number1,  number2);
  let nothing=0;
  if(number1===0 && number2===0)  //if numbers are both zero make nothing only visible arch
  {
    nothing=1;
  }
  if(number1===number2)
  {
    number1=number1-.0001;  //error when both numbers are the same so small difference is made
  }

  const data = [
    {
      userAttempt: "Correct",
      value: number1
    },
    {
      userAttempt: "Incorrect",
      value: number2
    },
    {
      userAttempt: "Nothing",
      value: nothing
    }
  ];
  const m = { top: 20, right: 20, bottom: 20, left: 20 };

  var width = 275;	//width of graph in px
  var height = width;	//height of graph in px
  const svg = d3.select("#"+ID).select("svg")
    .attr("viewBox", `0 0 500 500`)
    .attr("viewBox", [0, 0, width, height]);
  const radius = width*4/10;


  const titleWidth = svg.attr("width", width + m.left + m.right);
  const titleHeight = svg.attr("height", height + m.top + m.bottom);

  const g = svg
    .append("g")
    .attr("transform", `translate(${width / 2}, ${height / 2})`);


  const color = d3.scaleOrdinal(["#99ff99", "#ffb399", "#bfbfbf"]);

  const pie = d3.pie().value(d => d.value);

  const path = d3
    .arc()
    .outerRadius(radius)
    .innerRadius(radius/2);

  const label = d3
    .arc()
    .outerRadius(radius)
    .innerRadius(radius/2);

  const pies = g.selectAll(".arc")
              .data(pie(data))
              .enter()
              .append("g")
              .attr("class", "arc");



  pies.append("path")
      .attr("d", path)
      .attr("fill", d => color(d.data.value));

  pies.append("text")
    .attr("class","title")
    .attr("x", titleWidth)
    .attr("y", 0)  // <-- zero for center of chart
    .attr("font-family", "Saira")
    .attr("fill", "black")
    .attr("text-anchor", "middle")
    .text(title);
}

function drawBars()
  {
  const testArray = [10,51,25,67]

  // crated const width and height for scaleability, margin is a object
  const height = 500;
  const width = 900;
  const margin = { top: 50, bottom: 50, left: 50, right: 50 };

  //trying to make a container


  //creates scaleable x and y

  const x = d3.scaleBand()
    .domain(d3.range(correctScore.length))
    .range([margin.left, width - margin.right])
    .padding(0.1);
  const y = d3.scaleLinear()
    .domain([0, max])
    .range([height - margin.bottom, margin.top]);



  //select d3 element 'svg' and append it with new attribute values width and height
  const svg = d3.select("#svg")
    .append("svg")
    .attr("viewBox", [0, 0, width, height]);

  const svg2 = d3.select("#svg2")
    .append("svg")
    .attr("viewBox", [0, 0, width, height]);



  //sorts array and displays it in SVG element called 'rect'
  //appends 'g' group element | selects all 'rect' | sorts through 'myData' | takes values from array and creates rects based on # of values in array | sets class called bar to all parent 'g' | sets attrite of each value of svg elements to the value of array


  //display as is

  svg.append("g")
    .selectAll("rect")
    .data(correctScore)
      .enter().append("rect")
            .join("rect")
            .attr("class", "bar")
            .attr("height", d => y(0) - y(d.userScore))
            .attr("width", x.bandwidth())
             .attr("x", (d, i) => x(i))
             .attr("y", d => y(d.userScore))
            .style("fill","#9BFE9A");


  //2nd bar chart
  svg2.append("g")
    .selectAll("rect")
    .data(incorrectScore)
      .enter().append("rect")
            .join("rect")
            .attr("class", "bar")
            .attr("height", d => y(0) - y(d.userScore))
            .attr("width", x.bandwidth())
             .attr("x", (d, i) => x(i))
             .attr("y", d => y(d.userScore))
            .style("fill","#FFB39A");

  //function creates axis
  function yAxis(g) {
    g.attr("transform", `translate(${margin.left}, 0)`)
      .call(d3.axisLeft(y).ticks(null, correctScore.format))
      .attr("font-size", "30px");
  }


  function xAxis(g) {
    g.attr("transform", `translate(0,${height - margin.bottom})`)
      .call(d3.axisBottom(x).tickFormat(i => correctScore[i].userAttempt))
      .attr("font-size", "30px");
  }

  function yAxis2(g) {
    g.attr("transform", `translate(${margin.left}, 0)`)
      .call(d3.axisLeft(y).ticks(null, correctScore.format))
      .attr("font-size", "30px");
  }


  function xAxis2(g) {
    g.attr("transform", `translate(0,${height - margin.bottom})`)
      .call(d3.axisBottom(x).tickFormat(i => correctScore[i].userAttempt))
      .attr("font-size", "30px");
  }

  svg.append("g").call(xAxis);
  svg.append("g").call(yAxis);

  svg2.append("g").call(xAxis);
  svg2.append("g").call(yAxis);

  var columnColor;


  svg.node();

  //SOURCE CODE

  //bar chart tutorial
  //https://www.youtube.com/watch?v=BDpBAFvdjYo

  //source code
  //https://github.com/kriscfoster/d3-barchart  --

  //https://blog.risingstack.com/d3-js-tutorial-bar-charts-with-javascript/#d3jsgridsystem -- bar chart tutorial
  //https://jsfiddle.net/matehu/w7h81xz2/ -- source code

  //https://www.digitalocean.com/community/tutorials/getting-started-with-data-visualization-using-javascript-and-the-d3-libraryh
}
