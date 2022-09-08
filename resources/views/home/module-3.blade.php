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
                        <div id="chart_div4" class="chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 lazy">
                            <div id="chart_div5" class="chart"></div>
                        </div>
                        <div class="col-md-6 lazy">
                            <div id="chart_div6" class="chart"></div>
                        </div>
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
    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sessions by channel</h4>
                    <div class="aligner-wrapper">
                        <canvas id="sessionsDoughnutChart" height="210"></canvas>
                        <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">
                            <h2 class="text-center mb-0 font-weight-bold">8.234</h2>
                            <small class="d-block text-center text-muted  font-weight-semibold mb-0">Total Leads</small> </div>
                    </div>
                    <div class="wrapper mt-4 d-flex flex-wrap align-items-cente">
                        <div class="d-flex"> <span class="square-indicator bg-danger ml-2"></span>
                            <p class="mb-0 ml-2">Assigned</p>
                        </div>
                        <div class="d-flex"> <span class="square-indicator bg-success ml-2"></span>
                            <p class="mb-0 ml-2">Not Assigned</p>
                        </div>
                        <div class="d-flex"> <span class="square-indicator bg-warning ml-2"></span>
                            <p class="mb-0 ml-2">Reassigned</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body performane-indicator-card">
                    <div class="d-sm-flex">
                        <h4 class="card-title flex-shrink-1">Performance Indicator</h4>
                        <p class="m-sm-0 ml-sm-auto flex-shrink-0"> <span class="data-time-range ml-0">7d</span> <span class="data-time-range active">2w</span> <span class="data-time-range">1m</span> <span class="data-time-range">3m</span> <span class="data-time-range">6m</span> </p>
                    </div>
                    <div class="d-sm-flex flex-wrap">
                        <div class="d-flex align-items-center"> <span class="dot-indicator bg-primary ml-2"></span>
                            <p class="mb-0 ml-2 text-muted font-weight-semibold">Complaints (2098)</p>
                        </div>
                        <div class="d-flex align-items-center"> <span class="dot-indicator bg-info ml-2"></span>
                            <p class="mb-0 ml-2 text-muted font-weight-semibold"> Task Done (1123)</p>
                        </div>
                        <div class="d-flex align-items-center"> <span class="dot-indicator bg-danger ml-2"></span>
                            <p class="mb-0 ml-2 text-muted font-weight-semibold">Attends (876)</p>
                        </div>
                    </div>
                    <div id="performance-indicator-chart" class="ct-chart mt-4"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets2/vendors/js/vendor.bundle.base.js')}}"></script>
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
@endsection
