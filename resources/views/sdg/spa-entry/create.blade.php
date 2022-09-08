@extends('layouts.default')

@section('title', 'Create Indicator and Outcome')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('sdg.indicator-outcome.index')}}"><span class="btn-add text-white">List ❭</span></a>

                    <h4 class="card-title">SPA Entry</h4>
                    <hr>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" action="">
                        <input type="hidden" name="_token" value="Iy5XgdCLF0eEv1hy8TgVgL6CUTHZortpSiAm7tsj">
                        <div class="tab smart" style="display: block;">
                            <div class="form-group">
                                <label for="exampleInputPillar">Baseline Year</label>
                                <select class="form-control" id="exampleSelectPillar" name="pillar">
                                    <option value="">Select</option>
                                    <option value="2015">2015</option>
                                </select>
                            </div>




                            <div class="milestone">
                                @for($i=1; $i<=5; $i++ )
                                    <input type="hidden"  value="{{$i}}">
                                    <p class="card-hed">Milestone : {{2015+$i}}</p>

                                    <div class="form-row">
                                        <div class="form-group col">
                                            <label for="exampleInputMil_plan">Plan</label>
                                            <input type="text" value="" id="pillar_name" name="pillar_name" class="bg-white form-control" autocomplete="off" placeholder="Pillar Name">
                                        </div>
                                        <div class="form-group col">
                                            <label for="exampleInputMil_plan">Achievement</label>
                                            <input type="text" value="" id="pillar_name" name="pillar_name" class="bg-white form-control" autocomplete="off" placeholder="Pillar Name">
                                        </div>
                                    </div>

                                <div class="form-row">
                                    <div class="form-group col">
                                        <label for="exampleInputMil_plan">Source</label>
                                        <input type="text" value="" id="pillar_name" name="pillar_name" class="bg-white form-control" autocomplete="off" placeholder="Pillar Name">
                                    </div>

                                    <div class="form-group col">
                                        <label for="exampleInputMil_plan">Date</label>
                                        <input type="text" value="" id="date{{$i}}" name="pillar_name" class="datepicker bg-white form-control" autocomplete="off" placeholder="Pillar Name">
                                    </div>
                                </div>

                                    <div class="form-group">
                                        <label for="exampleInputName1">Methodology</label>
                                        <textarea class="form-control" id="indicator_description" name="indicator_description" rows="5" placeholder="Type your text here"></textarea>
                                        @if ($errors->has('pillar_number'))<div class="error">{{ $errors->first('pillar_number') }}</div>@endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Division made approve version</label>
                                        <textarea class="form-control" id="indicator_description" name="indicator_description" rows="5" placeholder="Type your text here"></textarea>
                                        @if ($errors->has('pillar_number'))<div class="error">{{ $errors->first('pillar_number') }}</div>@endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Remarks</label>
                                        <textarea class="form-control" id="indicator_description" name="indicator_description" rows="5" placeholder="Type your text here"></textarea>
                                        @if ($errors->has('pillar_number'))<div class="error">{{ $errors->first('pillar_number') }}</div>@endif
                                    </div>

                                @endfor
                            </div>



                            <div style="width:100%; height:70px; color: rgba(0,193,172,1.00); font-size:14px">
                                Total target : 80% [NB: (sum of total achievement+ sum of total plan)/number ot milestone]
                            </div>
                        </div>

                        <div class=" mt-3">
                            <button type="submit" class="btn btn-primary cusbutton mr-2 ">Submit</button>
                            <button type="reset" class="btn btn-dark">Reset</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $( function() {
            $( ".datepicker" )
                .datepicker({
                    dateFormat: 'M d, yy',
                    defaultDate: "+1w",
                    changeMonth: true,
                    changeYear: true,
                    numberOfMonths: 1
                });
        } );
    </script>

@endsection
