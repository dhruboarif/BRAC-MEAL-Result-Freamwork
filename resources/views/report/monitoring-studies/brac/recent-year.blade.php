@extends('layouts.default')

@section('title', 'Dashboard')

@section('style')
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('assets/css/jload.css')}}">
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recent Year</h4>
                    <hr>
                    <p class="card-description"></p>
                    <div class="table-responsive">
                        <div class="smart ui-tabs ui-corner-all ui-widget ui-widget-content" style="background-color: rgba(255,255,255,1.00); border: 1px solid rgba(245,245,245,1.00)" id="tabs">
                            <ul style=" background-color:rgba(244,244,244,1.00); border:none; border-bottom: 1px solid #CFCFCF" role="tablist" class="ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header">
                                <li style="background-color:#EC008C; border:none" role="tab" tabindex="0" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true"><a href="#tabs-1" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-1">2018</a></li>
                                <li style="background-color:#EC008C; border:none" role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false"><a href="#tabs-2" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-2">2019</a></li>
                            </ul>
                            <div id="tabs-1" aria-labelledby="ui-id-1" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" aria-hidden="false">
                                <div class="card-body">
                                    <div class="col-md-6 card-columns">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Study Type</label>
                                            <select class="form-control form-control-sm" id="size_select">
                                                <option value="option1">Study Type 01</option>
                                                <option value="option2">Study Type 02</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Thematic Area</label>
                                            <select class="form-control form-control-sm size_select" id="size_select-2">
                                                <option value="option3">Thematic Area 01</option>
                                                <option value="option4">Thematic Area 02</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="option1" class="size_chart smart" style="display: block;"> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> </div>
                                <div id="option2" class="size_chart smart" style="display: none;"> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> </div>
                                <div id="option3" class="size_chart-2 smart" style="display: none;"> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> </div>
                                <div id="option4" class="size_chart-2 smart" style="display: none;"> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> </div>
                                <nav data-pagination=""> <a href="" disabled="">❬❬</a>
                                    <ul>
                                        <li class="current"><a href="">1</a></li>
                                        <li><a href="">2</a></li>
                                        <li><a href="">3</a></li>
                                        <li><a href="">4</a></li>
                                        <li><a href="">5</a></li>
                                        <li><a href="">…</a></li>
                                        <li><a href="">41</a></li>
                                    </ul>
                                    <a href="">❭❭</a> </nav>
                            </div>
                            <div id="tabs-2" aria-labelledby="ui-id-2" role="tabpanel" class="ui-tabs-panel ui-corner-bottom ui-widget-content" style="display: none;" aria-hidden="true">
                                <div class="card-body">
                                    <div class="col-md-6 card-columns">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Study Type</label>
                                            <select class="form-control form-control-sm" id="">
                                                <option value="option1">Study Type 01</option>
                                                <option value="option2">Study Type 02</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Thematic Area</label>
                                            <select class="form-control form-control-sm size_select" id="">
                                                <option value="option3">Thematic Area 01</option>
                                                <option value="option4">Thematic Area 02</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div id="option5" class="size_chart-3 smart"> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> <a href="">
                                        <div class="thm-con">
                                            <div class="thm"></div>
                                            <p>Project No-01</p>
                                        </div>
                                    </a> </div>
                                <nav data-pagination=""> <a href="" disabled="">❬❬</a>
                                    <ul>
                                        <li class="current"><a href="">1</a></li>
                                        <li><a href="">2</a></li>
                                        <li><a href="">3</a></li>
                                        <li><a href="">4</a></li>
                                        <li><a href="">5</a></li>
                                        <li><a href="">…</a></li>
                                        <li><a href="">41</a></li>
                                    </ul>
                                    <a href="">❭❭</a> </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{asset('assets/js/jload.js')}}"></script>
    <script src="{{asset('assets/js/option.js')}}"></script>
@endsection
