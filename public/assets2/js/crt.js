// google.load("visualization", "1", {packages:["corechart"]});
// google.setOnLoadCallback(drawChart1);
// function drawChart1() {
//   var data = google.visualization.arrayToDataTable([
//     ['Year', 'Lorm', 'Lorm'],
//     ['2004',  1000,      400],
//     ['2005',  1170,      460],
//     ['2006',  660,       1120],
//     ['2007',  1030,      540]
//   ]);
//
//   var options = {
//     title: 'Title Here',
//     hAxis: {title: 'Year', titleTextStyle: {color: '#333'}},
// 	colors: ['#00a79d','#88d498']
//  };
//
// var chart = new google.visualization.ColumnChart(document.getElementById('chart_div1'));
//   chart.draw(data, options);
// }

// google.load("visualization", "1", {packages:["corechart"]});
// google.setOnLoadCallback(drawChart2);
// function drawChart2() {
//   var data = google.visualization.arrayToDataTable([
//     ['Year', 'Lorm', 'Lorm', 'Lorm'],
//     ['2013',  1000,      400,  855],
//     ['2014',  1170,      460,  1715],
//     ['2015',  660,       1120, 1855],
//     ['2016',  1030,      540,  558]
//   ]);
//
//   var options = {
//     title: 'Title Here',
//     hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
//     vAxis: {minValue: 0},
//   };
//
//   var chart = new google.visualization.AreaChart(document.getElementById('chart_div2'));
//   chart.draw(data, options);
// }

/*------------------------*/

// google.load("visualization", "1", {packages:["corechart"]});
// google.setOnLoadCallback(drawChart3);
//
//       function drawChart3(){
//         // Some raw data (not necessarily accurate)
//         var data = google.visualization.arrayToDataTable([
//           ['Month', 'Bolivia', 'Ecuador', 'Average'],
//           ['2004/05',  865,      938,         614.6],
//           ['2005/06',  635,      1120,        682],
//           ['2006/07',  557,      1167,        623],
//           ['2007/08',  839,      1110,        609.4]
//         ]);
//
//         var options = {
//           title : 'Title Here',
//           vAxis: {title: 'Title'},
//           hAxis: {title: 'Title'},
//           seriesType: 'bars',
//           series: {2: {type: 'line'}},
// 		  colors: ['#ffa45c','#62929a','#ff304f']
// 		  };
//
//         var chart = new google.visualization.ColumnChart(document.getElementById('chart_div3'));
//   		chart.draw(data, options);
// 	    }

		<!--++++++++++++++++++++++++++++++++++++++-->

		google.load("visualization", "1", {packages:["corechart"]});
	  google.setOnLoadCallback(drawChart4);

      function drawChart4(){
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses', 'Lorm'],
          ['2004',  1000,      400,		  50],
          ['2005',  1170,      460,  	 2398],
          ['2006',  660,       1120,	 584],
          ['2007',  1030,      540, 	  78]
        ]);

        var options = {
          title: 'Lorm',
          curveType: 'function',
          legend: { position: 'bottom' }
        };


	  var chart = new google.visualization.LineChart(document.getElementById('chart_div4'));
  		chart.draw(data, options);
	    }

		<!--+++++++++++++++++++++++++++++++++++++-->

		google.load("visualization", "1", {packages:["corechart"]});
	  google.setOnLoadCallback(drawChart5);

      function drawChart5(){
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Lorm',     11],
          ['Lorm',      2],
          ['Comm',      2],
          ['Watch',     2],
          ['Lomm',      7]
        ]);

        var options = {
          title: 'Activities',
          pieHole: 0.4,
        };


	  var chart = new google.visualization.PieChart(document.getElementById('chart_div5'));
  		chart.draw(data, options);
	    }

		<!--++++++++++++++++++++++++++++++++++++++++++++-->

		 google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart6);

      function drawChart6(){
        // Some raw data (not necessarily accurate)

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Lorm',     11],
          ['Lorm',      2],
          ['Comm',      2],
          ['Watch',     2],
          ['Lomm',      7]
        ]);

        var options = {
          title: 'Activities'
        };

	  var chart = new google.visualization.PieChart(document.getElementById('chart_div6'));
  		chart.draw(data, options);
	    }

$(window).resize(function(){
  drawChart1();
  drawChart2();
  drawChart3();
  drawChart4();
  drawChart5();
  drawChart6();
});
