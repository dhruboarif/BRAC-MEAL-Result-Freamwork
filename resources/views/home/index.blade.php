@extends('layouts.default')

@section('title', 'Dashboard')

@section('style')
        <link rel="stylesheet" href="{{ asset('assets/vendors/daterangepicker/daterangepicker.css') }}">


@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="d-sm-flex align-items-baseline report-summary-header">
                                <h5 class="font-weight-semibold">Active Archive Summary</h5>
                                <span class="ml-auto">Updated Report</span>
                                <a href="{{url('/home')}}">
                                    <button class="btn btn-icons border-0 p-2"><i class="icon-refresh"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row report-inner-cards-wrapper">
                        <div class=" col-md -6 col-xl report-inner-card">
                            <div class="inner-card-text">
                                <span class="report-title">Study Archive</span>
                                <h4>{{$summary['study']}}</h4>
                            </div>
                            <div class="inner-card-icon bg-success">
                                <i class="icon-book-open"></i>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl report-inner-card">
                            <div class="inner-card-text">
                                <span class="report-title">Document Archive</span>
                                <h4>{{$summary['document']}}</h4>
                            </div>
                            <div class="inner-card-icon bg-danger">
                                <i class="icon-briefcase"></i>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl report-inner-card">
                            <div class="inner-card-text">
                                <span class="report-title">Learning & Action Archive</span>
                                <h4>{{$summary['la']}}</h4>
                            </div>
                            <div class="inner-card-icon bg-warning">
                                <i class="icon-globe-alt"></i>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Study Archive</h4>
                    <div class="aligner-wrapper">
                        <canvas id="sessionsDoughnutChart" height="210"></canvas>
                        <div class="wrapper d-flex flex-column justify-content-center absolute absolute-center">
                            <h2 class="text-center mb-0 font-weight-bold">{{$studyArchivePieChart['pending'] + $studyArchivePieChart['approved'] + $studyArchivePieChart['rejected']}}</h2>
                            <small class="d-block text-center text-muted  font-weight-semibold mb-0">Total Study Archive</small> </div>
                    </div>

                    <div class="wrapper mt-4 d-flex flex-wrap align-items-cente">
                        <div class="d-flex"> <span class="square-indicator bg-warning ml-2"></span>
                            <p class="mb-0 ml-2">Pending</p>
                        </div>
                        <div class="d-flex"> <span class="square-indicator bg-success ml-2"></span>
                            <p class="mb-0 ml-2">Approved</p>
                        </div>
                        <div class="d-flex"> <span class="square-indicator bg-danger ml-2"></span>
                            <p class="mb-0 ml-2">Rejected</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                        <h4 class="card-title mb-sm-0">Performance Indicator</h4>
{{--                        <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Products</a> --}}
                    </div>
                    <div class="table-responsive border rounded p-1">
                        <table class="table" >
                            <thead>
                            <tr>
                                <th class="font-weight-bold">User</th>
                                <th class="font-weight-bold">Study Archive</th>
                                <th class="font-weight-bold">Document Archive</th>
                                <th class="font-weight-bold">LA Archive</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($performanceIndicator as $key=>$user)
                            <tr>
                                <td style="cursor: pointer">
                                    <img class="img-sm rounded-circle" src="{{ asset((!empty($user->image) && file_exists($user->image)?$user->image : 'assets/images/avatar.png'))  }}" alt="profile image">
                                   <span title="{{$user->email}}">{{$user->name}}</span>
                                </td>
                                <td>  {{$user->total_sa}} </td>
                                <td>{{$user->total_da}}</td>
                                <td>{{$user->total_la}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex mt-0 flex-wrap">

                        @if ($performanceIndicator->lastPage() > 1)
                            <nav data-pagination>
                                <a href="{{ $performanceIndicator->url(1) }}&i=user" {{ ($performanceIndicator->currentPage() == 1) ? ' disabled' : '' }}>&#10092;&#10092;</a>
                                <ul>
                                    @for ($i = 1; $i <= $performanceIndicator->lastPage(); $i++)
                                        <li class="{{ ($performanceIndicator->currentPage() == $i) ? ' current' : '' }}">
                                            <a href="{{ $performanceIndicator->url($i) }}&i=user">{{ $i }}</a>
                                        </li>
                                    @endfor
                                </ul>
                                <a href="{{ $performanceIndicator->url($performanceIndicator->currentPage()+1) }}&i=user" {{ ($performanceIndicator->currentPage() == $performanceIndicator->lastPage()) ? ' disabled' : '' }}>&#10093;&#10093;</a>
                            </nav>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script>
        (function ($) {
            'use strict';
            $(function () {

                //doughnut chart
                var doughnutChartCanvas = $("#sessionsDoughnutChart").get(0).getContext("2d");
                var doughnutPieData = {
                    datasets: [{
                        data: [
                            `{{$studyArchivePieChart['pending']}}`,
                            `{{$studyArchivePieChart['approved']}}`,
                            `{{$studyArchivePieChart['rejected']}}`
                        ],
                        backgroundColor: [
                            '#ffca00',
                            '#38ce3c',
                            '#ff4d6b'
                        ],
                        borderColor: [
                            '#ffca00',
                            '#38ce3c',
                            '#ff4d6b'
                        ],
                    }],

                    // These labels appear in the legend and in the tooltips when hovering different arcs
                    labels: [
                        'Pending',
                        'Approved',
                        'Rejected'
                    ]
                };
                var doughnutPieOptions = {
                    cutoutPercentage: 75,
                    animationEasing: "easeOutBounce",
                    animateRotate: true,
                    animateScale: false,
                    responsive: true,
                    maintainAspectRatio: true,
                    showScale: true,
                    legend: {
                        display: false
                    },
                    layout: {
                        padding: {
                            left: 0,
                            right: 0,
                            top: 0,
                            bottom: 0
                        }
                    }
                };
                var doughnutChart = new Chart(doughnutChartCanvas, {
                    type: 'doughnut',
                    data: doughnutPieData,
                    options: doughnutPieOptions
                });


            });
        })(jQuery);

    </script>

@endsection
