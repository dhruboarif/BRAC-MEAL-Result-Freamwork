@extends('layouts.default')

@section('title', 'Dashboard')

@section('style')
    <link href="{{asset('assets2')}}/css/nv.d3.css" rel="stylesheet" type="text/css">
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">SDG Reports</h4>
                    <hr>
                    <p class="card-description"></p>
                    <p class="card-hed">Report</p>
                    <div class="naccs smart">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-3" style="height: 250px; overflow: scroll;">
                                    <div class="menu">

                                        @foreach($data as $key=>$p)
                                            <div id="{{$p['id']}}" class="{{($key == 0)?'active':''}}">
                                                <span class="light"></span>
{{--                                                <span>Program {{$p['sl']}}</span>--}}
                                                <span>{{$p['program_name']}}</span>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <ul class="nacc" style="height: 108px;">
                                        @foreach($data as $key=>$p)

                                            <li class="{{($key == 0)?'active':''}}">

                                                <div>
                                                    <p>{{$p['program_name']}}</p>
                                                    <div class="fl-con"><span>{{$p['target_counter']}}</span>targets</div>
                                                    <div class="fl-con"><span>{{$p['indicator_counter']}}</span>indicators</div>
                                                    <div class="fl-con"><span>{{$p['statement_counter']}}</span>statment</div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                        @foreach($data as $key=>$p)
                        <div id="accordion" class="details_div details_{{$p['id']}}" style="display: {{($key == 0)?'block':'none'}}">
                            @foreach($p['indicator'] as $pk=>$pi)

                                <h2 class="{{($key == 0 && $pk == 0)?'active':''}}">Indicator Number {{$pi['number']}}</h2>
                                <div class="content" style="display: {{($key == 0)?'block':'none'}};">
{{--                                    <span class="acc-title">{{ucfirst($pi['statement'])}}</span>--}}
                                    <p>{{ucfirst($pi['statement'])}}</p>

                                    <ul>

                                        @foreach($pi['reg_indicator'] as $pik=>$pir)
                                            <li>{{$pir}}</li>
                                        @endforeach

                                    </ul>
                                    <hr>
                                </div>
                            @endforeach
                        </div>
                        @endforeach

                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{asset('assets2')}}/js/stream_layers.js"></script>
    <script>$(document).on("click", ".naccs .menu div", function () {
            var numberIndex = $(this).index();
            if (!$(this).is("active")) {
                $(".naccs .menu div").removeClass("active");
                $(".naccs ul li").removeClass("active");
                $(this).addClass("active");
                $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");
                var listItemHeight = $(".naccs ul").find("li:eq(" + numberIndex + ")").innerHeight();
                $(".naccs ul").height(listItemHeight + "px");

                $('.details_div').hide();
                $('.details_'+$(this).attr('id')).show();
            }
        });</script>
    <script>$(document).ready(function () {
            $(function () {
                $('#accordion .content').hide();
                $('#accordion h2:first').addClass('active').next().slideDown('slow');
                $('#accordion h2').click(function () {
                    if ($(this).next().is(':hidden')) {
                        $('#accordion h2').removeClass('active').next().slideUp('slow');
                        $(this).toggleClass('active').next().slideDown('slow')
                    }
                })
            })
        });</script>
@endsection
