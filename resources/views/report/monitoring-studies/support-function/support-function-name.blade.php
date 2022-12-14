@extends('layouts.default')

@section('title', 'Dashboard')

@section('style')
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12 stretch-card grid-margin">
            <div class="card">
                <div class="card-body smart">
                    <h4 class="card-title">Support Function Name</h4>
                    <hr>
                    <p class="card-description"></p>
                    <div class="table-responsive">
                        <div class="card-body">
                            <div class="col-md-12 card-columns">
                                <form class="forms-sample">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Thematic Area Name</label>
                                        <div class="multiselect" id="countries" multiple="multiple" data-target="multi-0">
                                            <div class="title noselect"> <span class="text">Select</span> <span class="close-icon">×</span> <span class="expand-icon">+</span> </div>
                                            <div class="container">
                                                <option value="Thematic-1">Thematic-1</option>
                                                <option value="Thematic-2">Thematic-2</option>
                                                <option value="Thematic-3">Thematic-3</option>
                                                <option value="Thematic-4">Thematic-4</option>
                                                <option value="Thematic-5">Thematic-5</option>
                                                <option value="Thematic-6">Thematic-6</option>
                                                <option value="Thematic-7">Thematic-7</option>
                                                <option value="Thematic-8">Thematic-8</option>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Study Type</label>
                                        <select class="form-control form-control-sm" id="size_select">
                                            <option value="option1">Study Type 01</option>
                                            <option value="option2">Study Type 02</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Study Period</label>
                                        <select class="form-control form-control-sm size_select" id="size_select-2">
                                            <option value="option3">Thematic Area 01</option>
                                            <option value="option4">Thematic Area 02</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="option1" class="size_chart smart" style="display: block;"> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> </div>
                        <div id="option2" class="size_chart smart" style="display: none;"> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> </div>
                        <div id="option3" class="size_chart-2 smart" style="display: none;"> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> </div>
                        <div id="option4" class="size_chart-2 smart" style="display: none;"> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
                                </div>
                            </a> <a href="">
                                <div class="thm-con">
                                    <div class="thm-6"></div>
                                    <p>Document No-01</p>
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

@endsection

@section('script')
@endsection
