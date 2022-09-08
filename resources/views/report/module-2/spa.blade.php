@extends('layouts.default')

@section('title', 'SPA Report')

@section('style')
    <link rel="stylesheet" href="{{asset('assets2')}}/css/tre.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body smart">
                    <a href="{{url(route('spa-report.index'))}}"> <div class="hed-btn">Pillars ❭</div></a>
                    <h4 class="card-title">SPA Report</h4>
                    <hr>

                    <p class="card-description"></p>
                    <h2>PROGRAMME</h2>
                    <div id="wrapper-tr">
                        <ol class="organizational-chart">
                            <li class="list">
                                <ol>
                                    <li>
                                        <div>
                                            <h2>PILLER-{{trim($pillar->number)}} : {{ucfirst($pillar->name)}}</h2>
                                        </div>
                                        @if(count($pillarDetails)>0)
                                            <ol>
                                                <!--start impact-->

                                                @foreach($pillarDetails as $pd)
                                                    <li>
                                                        <div>
                                                            <h3>{{$pd->type}} : {{trim($pd->number)}}</h3>
                                                            <p>{{ucfirst($pd->statement)}}</p>
                                                        </div>

                                                        @if(count($indicatorDetails)> 0)
                                                            @php $dids = [];  @endphp
                                                            @foreach($indicatorDetails as $ids)
                                                                @php $dids[$pd->id][] = ($ids->d_id == $pd->id)?$ids->d_id:0; @endphp
                                                            @endforeach
                                                        
                                                            @if(in_array($pd->id, $dids[$pd->id]))
                                                                <ol>
                                                                    <!--start impact-indicator -->
                                                                    @foreach($indicatorDetails as $ids)
                                                                        @if($ids->d_id == $pd->id)
                                                                            <li>
                                                                                <div>
                                                                                    <h4>{{ucfirst($pd->type)}} INDICATOR : {{trim($ids->indicator_number)}}</h4>
                                                                                    <p>{{$ids->indicator_statement}} </p>
                                                                                </div>
                                                                            </li>
                                                                    @endif
                                                                @endforeach
                                                                <!--end impact-indicator -->
                                                                </ol>
                                                            @endif
                                                        @endif
                                                    </li>
                                            @endforeach

                                            <!--end impact-->

                                            </ol>
                                        @endif
                                    </li>
                                </ol>
                            </li>
                        </ol>
                    </div>
                    <button class="btn btn-primary mrbtn" id="next">Show More</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            var list = $(".list li");
            var numToShow = 8;
            var button = $("#next");
            var numInList = list.length;
            list.hide();
            if (numInList > numToShow) {
                button.show();
            }
            list.slice(0, numToShow).show();

            button.click(function(){
                var showing = list.filter(':visible').length;
                list.slice(showing - 1, showing + numToShow).fadeIn();
                var nowShowing = list.filter(':visible').length;
                if (nowShowing >= numInList) {
                    button.hide();
                }
            });

        });
    </script>
@endsection
