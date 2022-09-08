@extends('layouts.default2')

@section('title', 'Dashboard')

@section('style')

        <link rel="stylesheet" href="{{ asset('assets2/vendors/simple-line-icons/css/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets2/vendors/flag-icon-css/css/flag-icon.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets2/vendors/css/vendor.bundle.base.css') }}">
        <link rel="stylesheet" href="{{ asset('assets2/vendors/daterangepicker/daterangepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets2/css/tool.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <style>.chart{width:100%;min-height:450px}.row{margin:0!important}.lazy{width:100$;height:100%;display:block;background-image:url(../images/load.gif);background-repeat:no-repeat;background-position:50% 50%}</style>

@endsection

@section('content')
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="d-sm-flex align-items-baseline report-summary-header">
                                    <h5 class="font-weight-semibold">Report Summary</h5>
                                    <span class="ml-auto">Updated Report</span>
                                    <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="row report-inner-cards-wrapper">
                            <div class="col-md-12 lazy">
                                <div id="chart_div1" class="chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12 lazy">
                            <div id="chart_div3" class="chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12 lazy">
                            <div id="chart_div2" class="chart"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('script')

    <script src="{{ asset('assets2/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets2/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets2/vendors/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets2/vendors/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets2/vendors/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets2/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets2/js/misc.js') }}"></script>
    <script src="{{ asset('assets2/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets2/js/stream_layers.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>$(function(){$('.lazy').lazy({});});</script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="{{ asset('assets2/js/crt.js') }}"></script>
    <script>
        var csrf = $('meta[name="csrf-token"]').attr('content');
        var y4 = 0;
        var y4_p = 0;
        var y4_d = 0;
        var y3 = 0;
        var y3_p = 0;
        var y3_d = 0;
        var y2 = 0;
        var y2_p = 0;
        var y2_d = 0;
        var y1 = 0;
        var y1_p = 0;
        var y1_d = 0;
        var impact1 = 0;
        var impact2 = 0;
        var impact3 = 0;
        var impact4 = 0;
        var output1 = 0;
        var output2 = 0;
        var output3 = 0;
        var output4 = 0;
        var outcome1 = 0;
        var outcome2 = 0;
        var outcome3 = 0;
        var outcome4 = 0;
        $.ajax({
            url: '{{url('program-chart-data')}}',
            type: 'POST',
            data: {'_token': csrf},
            dataType: 'json',
            success: function( data ) {
                console.log(data);
                $.each(data , function(index, val) {
                    if (index === 0){
                        y4 = val.baseline_year;
                        y4_p = val.number_p;
                        y4_d = val.number_indicator;
                        impact4 = val.impact;
                        outcome4 = val.outcome;
                        output4 = val.outputn;
                    }else if(index === 1){
                        y3 = val.baseline_year;
                        y3_p = val.number_p;
                        y3_d = val.number_indicator;
                        impact3 = val.impact;
                        outcome3 = val.outcome;
                        output3 = val.outputn;
                    }else if(index === 2){
                        y2 = val.baseline_year;
                        y2_p = val.number_p;
                        y2_d = val.number_indicator;
                        impact2 = val.impact;
                        outcome2 = val.outcome;
                        output2 = val.outputn;
                    }else if(index === 3){
                        y1 = val.baseline_year;
                        y1_p = val.number_p;
                        y1_d = val.number_indicator;
                        impact1 = val.impact;
                        outcome1 = val.outcome;
                        output1 = val.outputn;
                    }


                });
                console.log(y1);
                google.load("visualization", "1", {packages:["corechart"]});
                google.setOnLoadCallback(drawChart1);
                function drawChart1() {
                    var data = google.visualization.arrayToDataTable([
                        ['Year', 'Number of Program', 'Number of Indicator'],
                        [y1,  y1_p,      y1_d],
                        [y2,  y2_p,      y2_d],
                        [y3,  y3_p,       y3_d],
                        [y4,  y4_p,      y4_d]
                    ]);

                    var options = {
                        title: 'Indicator Registration',
                        hAxis: {title: 'Year', titleTextStyle: {color: '#333'}},
                        colors: ['#00a79d','#88d498']
                    };

                    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div1'));
                    chart.draw(data, options);
                }
                // char-2
                google.load("visualization", "1", {packages:["corechart"]});
                google.setOnLoadCallback(drawChart3);

                function drawChart3(){
                    // Some raw data (not necessarily accurate)
                    var data = google.visualization.arrayToDataTable([
                        ['Month', 'Program', 'Number of Indicator', 'Average'],
                        [y1,  y1_p,      y1_d,         1],
                        [y2,  y2_p,      y2_d,        2],
                        [y3,  y3_p,      y3_d,        3],
                        [y4,  y4_p,      y4_d,        4]
                    ]);

                    var options = {
                        title : 'Average Based',
                        vAxis: {title: ''},
                        hAxis: {title: ''},
                        seriesType: 'bars',
                        series: {2: {type: 'line'}},
                        colors: ['#ffa45c','#62929a','#ff304f']
                    };

                    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div3'));
                    chart.draw(data, options);
                }
                // chart-3
                google.load("visualization", "1", {packages:["corechart"]});
                google.setOnLoadCallback(drawChart2);
                function drawChart2() {
                    var data = google.visualization.arrayToDataTable([
                        ['Year', 'Impact', 'Output', 'Outcome'],
                        [y1,  impact1,      output1,  outcome1],
                        [y2,  impact2,      output2,  outcome2],
                        [y3,  impact3,      output3,  outcome3],
                        [y4,  impact4,      output4,  outcome4]
                    ]);

                    var options = {
                        title: 'Indicator Types',
                        hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
                        vAxis: {minValue: 0},
                    };

                    var chart = new google.visualization.AreaChart(document.getElementById('chart_div2'));
                    chart.draw(data, options);
                }

            }
        });
    </script>
@endsection
