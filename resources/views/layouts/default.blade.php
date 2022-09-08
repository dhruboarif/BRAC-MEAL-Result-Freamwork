<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'BRAC Archiving System') }} : @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'BRAC Archiving System') }}</title>
    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="icon.png">
    <link rel="stylesheet" href="{{ asset('assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('assets/vendors/daterangepicker/daterangepicker.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('assets/vendors/chartist/chartist.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('assets/vendors/daterangepicker/daterangepicker.css') }}">--}}

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet"/> <link href="https://cdn.jsdelivr.net/sweetalert2/6.4.3/sweetalert2.min.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> <script src="https://cdn.jsdelivr.net/sweetalert2/latest/sweetalert2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/yearpicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tool.css') }}">
    <link href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet">

    <style>
        .lowercase {
            text-transform: lowercase;
        }
        .uppercase {
            text-transform: uppercase;
        }
        .capitalize {
            text-transform: capitalize;
        }
        .error{
            color: red;
            font-size: small;
        }
    </style>
    <style>
        .dataTables_length, .dataTables_filter, .dataTables_info{
            display: none;
        }
    </style>
    @yield('style')
</head>
<body>

<div class="container-scroller">
    @include('layouts.partials.topbar')
    <div class="container-fluid page-body-wrapper">
        @include('layouts.partials.sidebar')
        <div class="main-panel smt">

            <div class="content-wrapper">
                @if (session('type'))
                <div id="alert" class="alert alert-{{ (session('type')=='success')?'success':'danger' }} alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('msg') }}
                </div>
                @endif

                @yield('content')
            </div>
            @include('layouts.partials.footer')
        </div>
    </div>
</div>


<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
{{--<script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>--}}
<script src="{{ asset('assets/vendors/moment/moment.min.js') }}"></script>
{{--<script src="{{ asset('assets/vendors/daterangepicker/daterangepicker.js') }}"></script>--}}
<script src="{{ asset('assets/vendors/chartist/chartist.min.js') }}"></script>
{{--<script src="{{ asset('assets/js/off-canvas.js') }}"></script>--}}
<script src="{{ asset('assets/js/misc.js') }}"></script>

<script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.js') }}"></script>
{{--<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>--}}
<script src="{{ asset('assets/js/jquery-1.11.2.min.js') }}"></script>
{{--<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>--}}
<script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.mtz.monthpicker.js') }}"></script>
{{--<script src="{{ asset('assets/js/yearpicker.js') }}"></script>--}}
<script src="{{ asset('assets/js/custom.js') }}"></script>
{{--<script src="{{ asset('assets/js/dashboard.js') }}"></script>--}}

<script>
    $(document).ready(function() {
        $("#alert").fadeTo(2000, 500).slideUp(500, function(){
            $("#alert").slideUp(500);
        });
    });
</script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

@yield('script')
</body>
</html>
