<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BRAC | Choose Module</title>
    <link rel="icon" href="{{ asset('images/icon.png') }}" type="icon.png">
    <link rel="stylesheet" href="{{ asset('assets2/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/vendors/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/vendors/chartist/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/tool.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<div class="container-scroller">
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center"> <a class="navbar-brand brand-logo" href="#">
                <img src="{{ asset('assets2/images/brac-logo-trn.png')}}" alt="logo" class="logo-dark" /> </a>
            <a class="navbar-brand brand-logo-mini" href="#">
                <img src="{{ asset('assets2/images/brac-logo-mini.png')}}" alt="logo" /></a> </div>
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
            <h5 class="mb-0 mr-3 font-weight-medium d-none d-lg-flex">{{ config('app.name', 'BRAC Archiving System') }}</h5>
            <ul class="navbar-nav navbar-nav-right ml-auto">


                <li class="nav-item">
                    <a href="#" class="nav-link" data-title="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class=" icon-logout"></i>
                    </a>
                </li>
                <li class="nav-item dropdown d-none d-xl-inline-flex ">
                    <a class="nav-link "href="#" data-toggle="dropdown" aria-expanded="false">
                        <img class="img-xs rounded-circle ml-2" src="{{ asset((!empty(Auth::user()->image) && file_exists(Auth::user()->image)?Auth::user()->image : 'assets/images/avatar.png')) }}" alt="Profile image">
                        &nbsp;&nbsp;<span class="font-weight-normal capitalize"> {{ Auth::user()->name }} </span>
                    </a>

                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas"> <span class="icon-menu"></span> </button>
        </div>
    </nav>
    <div class="container-fluid page-body-wrapper" >
        <div class="main-panel-2 smt">
            <div class="content-wrapper" style="background-color:rgba(251,251,251,1.00)">
                <div class="row">
                    <div class="col-md-6 grid-margin" style="margin: 8% auto 0 auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="d-sm-flex align-items-baseline report-summary-header">
                                            <h5 class="font-weight-semibold">Choose Your Desired Module</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="row report-inner-cards-wrapper">
                                    <div class="col-md-4 mr fade-in one"> <a href="{{route('module', '1')}}">
                                            <div class="ico"></div>
                                        </a>
                                        <h5>Module 01</h5>
                                    </div>
                                    <div class="col-md-4 mr fade-in two"> <a href="{{route('module', '2')}}">
                                            <div class="ico"></div>
                                        </a>
                                        <h5>Module 02</h5>
                                    </div>
                                    <div class="col-md-4 mr fade-in three"> <a href="{{route('module', '3')}}">
                                            <div class="ico"></div>
                                        </a>
                                        <h5>Module 03</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between"><span class="text-muted text-center text-sm-left d-block d-sm-inline-block" style="padding-top:25px">Copyright © 2019 <a href="https://www.brac.net" target="_blank">BRAC</a>. All rights reserved.</span> </div>
            </footer>
        </div>
    </div>
</div>
<script src="{{ asset('assets2/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('assets2/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('assets2/vendors/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets2/vendors/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets2/vendors/chartist/chartist.min.js') }}"></script>
<script src="{{ asset('assets2/js/off-canvas.js') }}"></script>
<script src="{{ asset('assets2/js/misc.js') }}"></script>
<script src="{{ asset('assets2/js/dashboard.js') }}"></script>
</body>
</html>
