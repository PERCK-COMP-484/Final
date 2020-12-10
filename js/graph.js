function drawGraph(values, axisHalf=10, IDName="graph")	//axis half defaults to 10, optional parameter
{
	//adapted from: https://bl.ocks.org/andrewthornton/eb8d67a9820fbd36d1cb
	let value=values;

	var axisHalf=axisHalf;	//The length of half of an axis
	const xDomain = {lower: -1*axisHalf, upper: axisHalf};	//x axis domain lower and upper
	const yDomain = {lower: -1*axisHalf, upper: axisHalf};		//y axis domain lower and upper


    var width = 500;	//width of graph in px
    var height = 500;	//height of graph in px
    var svg = d3.select("#"+IDName).append("svg")
      .attr("width", width)
      .attr("height", height)
    .append("g")

	//recursively solves function at given x value
	var fn = function fun(x, value, rev=0) {
		if(rev===value.length)
		{
			return 0;
		}
		return (value[rev]*Math.pow(x, (value.length-1-rev))+fun(x,value,rev+1));
	};


	//function and axis scale
    var x = d3.scaleLinear()
      .range([0, width]);

    var y = d3.scaleLinear()
      .range([height, 0]);

    var xAxis = d3.axisBottom()
      .scale(x);

    var yAxis = d3.axisLeft()
      .scale(y);

    var line = d3.line()
      .x(function (d) {return x(d.x);})
      .y(function (d) {return y(d.y);});

	//iterate through range of lower d3domain to upper d3Domain with step value of .001 to aid with interpolation between points
    var data = d3.range(xDomain["lower"], xDomain["upper"], .001).map(function (d) {
      return {x:d, y:fn(d,value)};
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

function drawYGraph(values, axisHalf=10, IDName="graph")	//axis half defaults to 10, optional parameter
{
	//adapted from: https://bl.ocks.org/andrewthornton/eb8d67a9820fbd36d1cb
	let value=values;

	var axisHalf=axisHalf;	//The length of half of an axis
	const xDomain = {lower: -1*axisHalf, upper: axisHalf};	//x axis domain lower and upper
	const yDomain = {lower: -1*axisHalf, upper: axisHalf};		//y axis domain lower and upper


    var width = 500;	//width of graph in px
    var height = 500;	//height of graph in px
    var svg = d3.select("#"+IDName).append("svg")
      .attr("width", width)
      .attr("height", height)
    .append("g")

	//recursively solves function at given x value
	var fn = function fun(x, value, rev=0) {
		if(rev===value.length)
		{
			return 0;
		}
		return (value[rev]*Math.pow(x, (value.length-1-rev))+fun(x,value,rev+1));
	};


	//function and axis scale
    var x = d3.scaleLinear()
      .range([0, width]);

    var y = d3.scaleLinear()
      .range([height, 0]);

    var xAxis = d3.axisBottom()
      .scale(x);

    var yAxis = d3.axisLeft()
      .scale(y);

    var line = d3.line()
      .x(function (d) {return x(d.y);})
      .y(function (d) {return y(d.x);});

	//iterate through range of lower d3domain to upper d3Domain with step value of .001 to aid with interpolation between points
    var data = d3.range(xDomain["lower"], xDomain["upper"], .001).map(function (d) {
      return {x:d, y:fn(d,value)};
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

function draw2Graph(values, values2, axisHalf=10, IDName="graph")	//axis half defaults to 10, optional parameter
{
	//adapted from: https://bl.ocks.org/andrewthornton/eb8d67a9820fbd36d1cb
	let value=values;
	let value2=values2;

	var axisHalf=axisHalf;	//The length of half of an axis
	const xDomain = {lower: -1*axisHalf, upper: axisHalf};	//x axis domain lower and upper
	const yDomain = {lower: -1*axisHalf, upper: axisHalf};		//y axis domain lower and upper


    var width = 500;	//width of graph in px
    var height = 500;	//height of graph in px
    var svg = d3.select("#"+IDName).append("svg")
      .attr("width", width)
      .attr("height", height)
    .append("g")

	//recursively solves function at given x value
	var fn = function fun(x, value, rev=0) {
		if(rev===value.length)
		{
			return 0;
		}
		return (value[rev]*Math.pow(x, (value.length-1-rev))+fun(x,value,rev+1));
	};


	//function and axis scale
    var x = d3.scaleLinear()
      .range([0, width]);

    var y = d3.scaleLinear()
      .range([height, 0]);

			var xAxis = d3.axisBottom()
	      .scale(x);

	    var yAxis = d3.axisLeft()
	      .scale(y);

    var line = d3.line()
      .x(function (d) {return x(d.x);})
      .y(function (d) {return y(d.y);});

	//iterate through range of lower d3domain to upper d3Domain with step value of .001 to aid with interpolation between points
    var data = d3.range(xDomain["lower"], xDomain["upper"], .001).map(function (d) {
      return {x:d, y:fn(d,value)};
    });

	var data2 = d3.range(xDomain["lower"], xDomain["upper"], .001).map(function (d) {
      return {x:d, y:fn(d,value2)};
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

	  svg.append('path')
	  .datum(data2)
	  .attr('d', line)
	  .style("stroke","red");
}

function draw2YGraph(values, values2, axisHalf=10, IDName="graph")	//axis half defaults to 10, optional parameter
{
	//adapted from: https://bl.ocks.org/andrewthornton/eb8d67a9820fbd36d1cb
	let value=values;
	let value2=values2;

	var axisHalf=axisHalf;	//The length of half of an axis
	const xDomain = {lower: -1*axisHalf, upper: axisHalf};	//x axis domain lower and upper
	const yDomain = {lower: -1*axisHalf, upper: axisHalf};		//y axis domain lower and upper


    var width = 500;	//width of graph in px
    var height = 500;	//height of graph in px
    var svg = d3.select("#"+IDName).append("svg")
      .attr("width", width)
      .attr("height", height)
    .append("g")

	//recursively solves function at given x value
	var fn = function fun(x, value, rev=0) {
		if(rev===value.length)
		{
			return 0;
		}
		return (value[rev]*Math.pow(x, (value.length-1-rev))+fun(x,value,rev+1));
	};


	//function and axis scale
    var x = d3.scaleLinear()
      .range([0, width]);

    var y = d3.scaleLinear()
      .range([height, 0]);

			var xAxis = d3.axisBottom()
	      .scale(x);

	    var yAxis = d3.axisLeft()
	      .scale(y);

    var line = d3.line()
      .x(function (d) {return x(d.y);})
      .y(function (d) {return y(d.x);});

	//iterate through range of lower d3domain to upper d3Domain with step value of .001 to aid with interpolation between points
    var data = d3.range(xDomain["lower"], xDomain["upper"], .001).map(function (d) {
      return {x:d, y:fn(d,value)};
    });

	var data2 = d3.range(xDomain["lower"], xDomain["upper"], .001).map(function (d) {
      return {x:d, y:fn(d,value2)};
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

	  svg.append('path')
	  .datum(data2)
	  .attr('d', line)
	  .style("stroke","red");
}

function draw2XYGraph(values, values2, axisHalf=10, IDName="graph")	//axis half defaults to 10, optional parameter
{
	//adapted from: https://bl.ocks.org/andrewthornton/eb8d67a9820fbd36d1cb
	let value=values;
	let value2=values2;

	var axisHalf=axisHalf;	//The length of half of an axis
	const xDomain = {lower: -1*axisHalf, upper: axisHalf};	//x axis domain lower and upper
	const yDomain = {lower: -1*axisHalf, upper: axisHalf};		//y axis domain lower and upper


    var width = 500;	//width of graph in px
    var height = 500;	//height of graph in px
    var svg = d3.select("#"+IDName).append("svg")
      .attr("width", width)
      .attr("height", height)
    .append("g")

	//recursively solves function at given x value
	var fn = function fun(x, value, rev=0) {
		if(rev===value.length)
		{
			return 0;
		}
		return (value[rev]*Math.pow(x, (value.length-1-rev))+fun(x,value,rev+1));
	};


	//function and axis scale
    var x = d3.scaleLinear()
      .range([0, width]);

    var y = d3.scaleLinear()
      .range([height, 0]);

			var xAxis = d3.axisBottom()
	      .scale(x);

	    var yAxis = d3.axisLeft()
	      .scale(y);

    var line = d3.line()
      .x(function (d) {return x(d.x);})
      .y(function (d) {return y(d.y);});

	  var line2 = d3.line()
      .x(function (d) {return x(d.y);})
      .y(function (d) {return y(d.x);});

	//iterate through range of lower d3domain to upper d3Domain with step value of .001 to aid with interpolation between points
    var data = d3.range(xDomain["lower"], xDomain["upper"], .001).map(function (d) {
      return {x:d, y:fn(d,value)};
    });

	var data2 = d3.range(xDomain["lower"], xDomain["upper"], .001).map(function (d) {
      return {x:d, y:fn(d,value2)};
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

	  svg.append('path')
	  .datum(data2)
	  .attr('d', line2)
	  .style("stroke","red");
}

function drawNumLine(lowerNum, upperNum, lowerDom, upperDom, IDName="numLine")	//axis half defaults to 10, optional parameter
{
	//adapted from: https://bl.ocks.org/andrewthornton/eb8d67a9820fbd36d1cb

	var xDomain = {lower: lowerDom, upper: upperDom};	//x axis domain lower and upper
	const yDomain = {lower: -2, upper: 2};		//y axis domain lower and upper
	var lower=lowerNum;
	var upper=upperNum;

    var width = 500;	//width of graph in px
    var height = 80;	//height of graph in px
    var svg = d3.select("#"+IDName).append("svg")
      .attr("width", width)
      .attr("height", height)
    .append("g")

	//function and axis scale
    var x = d3.scaleLinear()
      .range([0, width]);

    var y = d3.scaleLinear()
      .range([height, 0]);

			var xAxis = d3.axisBottom()
	      .scale(x);

    var line = d3.line()
      .x(function (d) {return x(d.x);})
      .y(function (d) {return y(d.y);});

	//iterate through range of lower d3domain to upper d3Domain with step value of .001 to aid with interpolation between points
    var data = d3.range(lower, upper, .001).map(function (d) {
      return {x:d, y:0};
    });

    x.domain([xDomain["lower"], xDomain["upper"]]);
    y.domain([yDomain["lower"], yDomain["upper"]]);

	svg.on('.zoom', null);	//https://stackoverflow.com/questions/18788188/how-to-temporarily-disable-the-zooming-in-d3-js

	//draw axis and graph as SVG

    svg.append('g')
      .attr('class', 'axis')
      .attr('transform', 'translate(0,' + height/2 + ')')
      .call(xAxis);

    svg.append('path')
      .datum(data)
      .attr('d', line)
	  .style("stroke-width", "3");
}
