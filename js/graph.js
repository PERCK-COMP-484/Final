function drawGraph(power, a, b, c, axisHalf=10)	//axis half defaults to 10, optional parameter
{
	var power=power;	//degree of equation	e.g. x^1, x^2 X^3
	var a=a;			//equation term a		e.g. ax^2+bx+c=0
	var b=b;			//equation term b		e.g. ax^2+bx+c=0
	var c=c;			//equation term c		e.g. ax^2+bx+c=0

	var axisHalf=axisHalf;	//The length of half of an axis
	const xDomain = {lower: -1*axisHalf, upper: axisHalf};	//x axis domain lower and upper
	const yDomain = {lower: -1*axisHalf, upper: axisHalf};		//y axis domain lower and upper


    var width = 500;	//width of graph in px
    var height = 500;	//height of graph in px
    var svg = d3.select("#graph").append("svg")
      .attr("width", width)
      .attr("height", height)
    .append("g")

	//function to be graphed
	var fn = function (x) {
	  return (a*Math.pow(x, power))+(b*x)+c;
	};


	//function and axis scale
    var x = d3.scale.linear()
      .range([0, width]);

    var y = d3.scale.linear()
      .range([height, 0]);

    var xAxis = d3.svg.axis()
	  .orient('bottom')
      .scale(x);

    var yAxis = d3.svg.axis()
      .orient('left')
      .scale(y);

    var line = d3.svg.line()
      .x(function (d) {return x(d.x);})
      .y(function (d) {return y(d.y);});

	//iterate through range of lower d3domain to upper d3Domain with step value of .001 to aid with interpolation between points
    var data = d3.range(xDomain["lower"], xDomain["upper"], 0.001).map(function (d) {
      return {x:d, y:fn(d)};
    });

    x.domain(d3.extent(data, function (d) {return d.x;}));
    y.domain([yDomain["lower"], yDomain["upper"]]);

	svg.on('.zoom', null);	//https://stackoverflow.com/questions/18788188/how-to-temporarily-disable-the-zooming-in-d3-js


	//draw axis and graph as SVG

    svg.append('g')
      .attr('class', 'axis')
      .attr('transform', 'translate(0,' + height/2 + ')')
      .call(xAxis);

    svg.append('g')
      .attr('class', 'axis')
      .attr('transform', 'translate(' + width*((axisHalf)/(2*axisHalf)) + ',0)')
      .call(yAxis);

    svg.append('path')
      .datum(data)
      .attr('d', line);
}
