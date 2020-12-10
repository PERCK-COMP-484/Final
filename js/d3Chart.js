// Array for dataset




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


  // sort by decending or decending
/*
svg
  .append("svg")
  .attr("fill", "orange")
  .selectAll("rect")
  .data(correctScore.sort((a, b) => d3.descending(a.userScore, b.userScore)))  //decending
  //.data(correctScore.sort((a, b) => d3.ascending(a.userScore, b.userScore)))   //acending
  .join("rect")
  .attr("x", (d, i) => x(i))
  .attr("y", d => y(d.userScore))
  .attr("title", d => d.userScore)
  .attr("class", "rect")
  .attr("height", d => y(0) - y(d.userScore))
  .attr("width", x.bandwidth())
  .attr("stroke", "black")
  .attr("stroke-width", "8");
*/

// adding label to barpgrah -- not working
/*
svg.selectAll("text")
    .data(testArray)
    .enter().append("text")
    .text(function(d) {return d})
          .attr("class", "text")
          .attr("x", function(d, i) {return 500})    //{return (i * 60) + 12})
          .attr("y", function(d, i) {return 100});   //{return 400 - (d * 4)});
*/

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
