   historicalBarChart = [
        {
            key: "Cumulative Return",
            values: [
                {
                    "label" : "A" ,
                    "value" : 29.765957771107
                } ,
                {
                    "label" : "B" ,
                    "value" : 0
                } ,
                {
                    "label" : "C" ,
                    "value" : 32.807804682612
                } ,
                {
                    "label" : "D" ,
                    "value" : 196.45946739256
                } ,
                {
                    "label" : "E" ,
                    "value" : 0.19434030906893
                } ,
                {
                    "label" : "F" ,
                    "value" : 98.079782601442
                } ,
                {
                    "label" : "G" ,
                    "value" : 13.925743130903
                } ,
                {
                    "label" : "H" ,
                    "value" : 5.1387322875705
                }
            ]
        }
    ];

    nv.addGraph(function() {
        var chart = nv.models.discreteBarChart()
            .x(function(d) { return d.label })
            .y(function(d) { return d.value })
            .staggerLabels(true)
            //.staggerLabels(historicalBarChart[0].values.length > 8)
            .showValues(true)
            .duration(250)
            ;

        d3.select('#chart1 svg')
            .datum(historicalBarChart)
            .call(chart);

        nv.utils.windowResize(chart.update);
        return chart;
    });

<!-- chart 02-->

    nv.addGraph(function() {
        var chart = nv.models.lineWithFocusChart();

        chart.brushExtent([50,70]);

        chart.xAxis.tickFormat(d3.format(',f')).axisLabel("Stream - 3,128,.1");
        chart.x2Axis.tickFormat(d3.format(',f'));

        chart.yTickFormat(d3.format(',.2f'));

        chart.useInteractiveGuideline(true);

        d3.select('#chart svg')
            .datum(testData())
            .call(chart);

        nv.utils.windowResize(chart.update);

        return chart;
    });

    function testData() {
        return stream_layers(3,128,.1).map(function(data, i) {
            return {
                key: 'Stream' + i,
                area: i === 1,
                values: data
            };
        });
    }

<!--chart 03-->

historicalBarChart = [
        {
            key: "Cumulative Return",
            values: [
                {
                    "label" : "A" ,
                    "value" : 29.765957771107
                } ,
                {
                    "label" : "B" ,
                    "value" : 0
                } ,
                {
                    "label" : "C" ,
                    "value" : 32.807804682612
                } ,
                {
                    "label" : "D" ,
                    "value" : 196.45946739256
                } ,
                {
                    "label" : "E" ,
                    "value" : 15.19434030906893
                } ,
                {
                    "label" : "F" ,
                    "value" : 98.079782601442
                } ,
                {
                    "label" : "G" ,
                    "value" : 13.925743130903
                } ,
                {
                    "label" : "H" ,
                    "value" : 100.1387322875705
                }
            ]
        }
    ];

    nv.addGraph(function() {
        var chart = nv.models.discreteBarChart()
            .x(function(d) { return d.label })
            .y(function(d) { return d.value })
            .staggerLabels(true)
            //.staggerLabels(historicalBarChart[0].values.length > 8)
            .showValues(true)
            .duration(250)
            ;

        d3.select('#chart2 svg')
            .datum(historicalBarChart)
            .call(chart);

        nv.utils.windowResize(chart.update);
        return chart;
    });
	
	<!--chart 4-->
	
	nv.addGraph(function() {
      var chart = nv.models.boxPlotChart()
          .x(function(d) { return d.label })
          .staggerLabels(true)
          .maxBoxWidth(75) // prevent boxes from being incredibly wide
          .yDomain([0, 500])
          ;

      d3.select('#chart4 svg')
          .datum(exampleData())
          .call(chart);

      nv.utils.windowResize(chart.update);

      return chart;
    });

    function exampleData() {
     return  [
        {
          label: "Sample A",
          values: {
            Q1: 120,
            Q2: 150,
            Q3: 200,
            whisker_low: 115,
            whisker_high: 210,
            outliers: [50, 100, 225]
          },
        },
        {
          label: "Sample B",
          values: {
            Q1: 300,
            Q2: 350,
            Q3: 400,
            whisker_low: 225,
            whisker_high: 425,
            outliers: [175]
          },
        },
        {
          label: "Sample C",
          values: {
            Q1: 50,
            Q2: 100,
            Q3: 125,
            whisker_low: 25,
            whisker_high: 175,
            outliers: [0]
          },
        },
		{
          label: "Sample D",
          values: {
            Q1: 120,
            Q2: 150,
            Q3: 200,
            whisker_low: 115,
            whisker_high: 210,
            outliers: [50, 100, 225]
          },
        }
      ];
    }

