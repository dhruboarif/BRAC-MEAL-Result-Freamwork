@extends('layouts.default')

@section('title', 'Result Entry')

@section('style')
    <style>
        table tr th {
            line-height: 20px !important;
            text-align: center
        }

        .ui-widget-content {
            border: 1px solid rgba(237, 237, 237, 1);
            color: #222
        }

        .ui-dialog {
            left: 0;
            outline: 0 none;
            padding: 0 !important;
            position: absolute;
            top: 0;
            width: 60% !important;
            box-shadow: 1px 2px 10px rgba(173, 173, 173, 1)
        }

        #success {
            padding: 0;
            margin: 0
        }

        .ui-dialog .ui-dialog-content {
            background: none repeat scroll 0 0 transparent;
            border: 0 none;
            overflow: auto;
            position: relative;
            padding: 15px !important
        }

        .ui-widget-header {
            background: #ec008c;
            border: 0;
            color: #fff;
            font-weight: 400
        }

        .ui-dialog .ui-dialog-titlebar {
            padding: 2% 2%;
            position: relative;
            font-size: 1em
        }
    </style>

@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body smart">
                    <a href="{{url(route('result-entry.index'))}}"><div class="hed-btn">List ❭</div></a>
                    <h4 class="card-title">Edit Result Entry</h4>
                    <hr>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" action="">
                        @csrf
                        @method('PUT')
                        <p class="card-hed">Periodic Results entry for {{$program->name}}</p>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <div class="col-sm-12">
                                            <label for="exampleInputPiller">Pillar</label>
                                            <select class="form-control" id="piller" name="piller" onchange="getIndicatorTypeDetails()">
                                                <option selected="selected" value="">Select</option>
                                                @foreach($pillars as $p)
                                                    <option {{($data->pillar_id == $p->id) ? 'selected':''}} value="{{$p->id}}">{{$p->name}} ({{$p->number}})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <div class="col-sm-12">
                                            <label for="exampleRelevant-outcome">Indicator Type</label>
                                            <select class="form-control" id="indicator_type" name="indicator_type" onchange="getIndicatorTypeDetails()">
                                                <option selected="selected">Select</option>
                                                <option value="IMPACT" {{($data->indicator_type == 'IMPACT') ? 'selected':''}}>Impact</option>
                                                <option value="OUTPUT" {{($data->indicator_type == 'OUTPUT') ? 'selected':''}}>Output</option>
                                                <option value="OUTCOME" {{($data->indicator_type == 'OUTCOME') ? 'selected':''}}>Outcome</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <label for="exampleInputStat">Indicator Statement</label>
                                            <select class="form-control" id="indicator_statement" name="indicator_statement">
                                                <option selected="selected" value="">Select</option>
                                                @foreach($pillars as $p)
                                                    @foreach($p->pillarDetails as $pd)
                                                        <option  {{($data->indicator_statement_id == $pd->id) ? 'selected':''}} style="display: {{($data->pillar_id.'_'.$data->indicator_type == $p->id.'_'.$pd->type)?'':'none'}}" class="{{$p->id}}_{{$pd->type}} statement" value="{{$pd->id}}"> {{ucfirst($pd->type)}} {{$pd->statement}} ({{$pd->number}})</option>
                                                    @endforeach
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <label for="exampleprog">Program</label>
                                            <select class="form-control" id="program" name="program">
                                                <option selected="selected" value="">Select</option>
                                                @foreach($programs as $p)
                                                    <option {{($data->program_id == $p->id) ? 'selected':''}} value="{{$p->id}}">{{$p->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="inputDialog" style="display: none">
                            <textarea class="txtInput form-control" Class="txtBox"></textarea>
                        </div>
                        <table class="table table-responsive table-striped" style="margin-bottom:25px">
                            <thead style="background-color: rgba(0,139,197,1.00); color:rgba(255,255,255,1.00)">
                            <tr>
                                <th>
                                    Year </th>
                                <th>Results<br>
                                    recorded<br>
                                    to date</th>
                                <th>Half Yearly/<br>
                                    Annual</th>
                                <th> Achieved</th>
                                <th> Disagg : <br>
                                    Female </th>
                                <th> Disagg :<br>
                                    Disability </th>
                                <th> Disagg :<br>
                                    Hard to Reach </th>
                                <th> Source </th>
                                <th> Methodology </th>
                                <th> Date of <br>
                                    Last Update: </th>
                                <th> Remarks </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data->resultEntryDetails as $k=>$i)
                                <tr>
                                    <td class="py-1">
                                        <span id="mile_year_text_{{$i->id}}">{{ $i->milestone_year }}</span>
                                        <input  type="hidden" id="{{$i->id}}" value="{{$i->id }}" name="rdid[]" autocomplete="off">
                                        <input  type="hidden" id="mile_year_field_{{$i->id}}" value="{{$i->milestone_year }}" name="milestone_year[]" autocomplete="off">
                                    </td>
                                    <td><input type="text" class="form-control-mile datepicker" value="{{$i->recorded_to_date}}" name="recorded_to_date[]" autocomplete="off"></td>
                                    <td>
                                        <select  class="form-control-mile-sl" id="period_type" name="period_type[]" style="width: 100%">
                                            <option value="ANNUAL" {{($i->period_type == 'ANNUAL')?'selected':''}}>Annual</option>
                                            <option value="HALF_YEARLY" {{($i->period_type == 'HALF_YEARLY')?'selected':''}}>Half Yearly</option>
                                            <option value="MONTHLY" {{($i->period_type == 'MONTHLY')?'selected':''}}>Monthly</option>
                                        </select>
                                    </td>
                                    <td><input type="text" value="{{$i->achieved}}" class="form-control-mile achieved" autocomplete="off" name="achieved[]" onkeyup="calculateData()"></td>
                                    <td><input type="text" value="{{$i->disagg_female}}" id="txtBox" class="txtBox form-control-mile disagg_female" autocomplete="off" name="disagg_female[]"  onkeyup="calculateData()"></td>
                                    <td><input type="text" value="{{$i->disagg_disability}}" class="form-control-mile disagg_disability" autocomplete="off" name="disagg_disability[]"  onkeyup="calculateData()"></td>
                                    <td><input type="text" value="{{$i->disagg_heard_to_reach}}" class="form-control-mile disagg_heard_to_reach" autocomplete="off" name="disagg_heard_to_reach[]"  onkeyup="calculateData()"></td>
                                    <td><input type="text" value="{{$i->source}}" class="form-control-mile" autocomplete="off" name="source[]"  onclick="OpenInputDialog(this)"></td>
                                    <td><input type="text" value="{{$i->methodology}}" class="form-control-mile" autocomplete="off" name="methodology[]"  onclick="OpenInputDialog(this)"></td>
                                    <td><input type="text" value="{{$i->date_of_last_update}}" class="form-control-mile datepicker" name="last_update_date[]"></td>
                                    <td><input type="text" value="{{$i->remarks}}" class="form-control-mile" autocomplete="off" name="remarks[]"  onclick="OpenInputDialog(this)"></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody><tr style=" border-bottom: 1px solid rgba(212,212,212,1.00)">
                                    <td width="100%"><div style="width:100%" class="ptotal">Total Achievement (to latest report period)</div></td>
                                    <td style="font-weight:600;">Select Formula :</td>
                                    <td><div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" {{($data->formula == 'SUMMATION')?'checked':''}} class="form-check-input" name="formula" checked value="SUMMATION" onclick="calculateData()">
                                                Summation of yearly milestones <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio"  {{($data->formula == 'CUMULATIVE')?'checked':''}}  class="form-check-input" name="formula" value="CUMULATIVE" onclick="calculateData()">
                                                Latest year milestone for cumulative resultss <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio"  {{($data->formula == 'AVERAGE')?'checked':''}}  class="form-check-input"  name="formula" value="AVERAGE" onclick="calculateData()">
                                                Average results <i class="input-helper"></i></label>
                                        </div></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr style=" border-bottom: 1px solid rgba(212,212,212,1.00)">
                                    <td style="font-weight:600; width:10%">Achieved</td>
                                    <td style="width:10%">
                                        <div class="ptotal" style="padding:10px 25px; display:inline-block;">
                                            <input type="text" readonly value="{{$data->achievement_total}}" name="achievement_total" id="achievement_total" style="color:white;background: transparent; border: none; width: 25px">
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr style=" border-bottom: 1px solid rgba(212,212,212,1.00)">
                                    <td style="font-weight:600">Disagg : Female </td>
                                    <td>
                                        <div class="ptotal" style="padding:10px 25px; display:inline-block;">
                                            <input type="text" readonly value="{{$data->disagg_female_total}}" name="disagg_female_total" id="disagg_female_total" style="color:white;background: transparent; border: none; width: 25px">
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr style=" border-bottom: 1px solid rgba(212,212,212,1.00)">
                                    <td style="font-weight:600">Disagg : Disability </td>
                                    <td>
                                        <div class="ptotal" style="padding:10px 25px; display:inline-block;">
                                            <input type="text" readonly value="{{$data->disagg_disability_total}}" name="disagg_disability_total" id="disagg_disability_total" style="color:white;background: transparent; border: none; width: 25px">
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr style=" border-bottom: 1px solid rgba(212,212,212,1.00)">
                                    <td style="font-weight:600">Disagg : Hard-to-Reach </td>
                                    <td style="width:10%">
                                        <div class="ptotal" style="padding:10px 25px; display:inline-block;">
                                            <input type="text" readonly value="{{$data->disagg_heard_to_reach_total}}" name="disagg_heard_to_reach_total" id="disagg_heard_to_reach_total" style="color:white;background: transparent; border: none; width: 25px">
                                        </div>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                </tbody></table>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary cusbutton">Update</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets2/js/off-canvas.js') }}"></script>
    <script>
        $( function() {
            $( ".datepicker" ).datepicker();
        } );

        function getIndicatorTypeDetails() {
            try{
                var pillar = $("#piller option:selected" ).val();
                var indicatorType = $("#indicator_type option:selected" ).val();

                $('.statement').hide();
                $('.'+pillar+'_'+indicatorType).show();
                $('#indicator_statement').val('');

            }catch (e) {

            }
        }

        //open dialog box for milstone
        function OpenInputDialog(txtBox) {
            $("#inputDialog").dialog({
                autoOpen: !1,
                modal: !0,
                title: "Input value",
                closeOnEscape: !0,
                open: function(){
                    $(".txtInput").val($(txtBox).val());
                },
                buttons: [{
                    text: "Insert", click: function () {
                        $(txtBox).val($(".txtInput").val());
                        $(".txtInput").val("");
                        $(this).dialog("close")
                    }
                }],
                close: function () {
                    $(this).dialog("close");
                    $(".txtInput").val("")
                },
                show: {effect: "clip", duration: 200}
            });
            $("#inputDialog").dialog("open")
        }

        function calculateData() {
            var formula = $("input[name='formula']:checked").val();
            calculateDataSet(formula, 'achieved', 'achievement_total' );
            calculateDataSet(formula, 'disagg_female', 'disagg_female_total' );
            calculateDataSet(formula, 'disagg_disability', 'disagg_disability_total' );
            calculateDataSet(formula, 'disagg_heard_to_reach', 'disagg_heard_to_reach_total' );
        }

        function calculateDataSet(formula, inputFieldClass, totalId ) {

            if('CUMULATIVE' == formula){
                $.each($("."+inputFieldClass), function (index, inputField) {
                    if($(inputField).val().length !=0){
                        $('#'+totalId).val($(inputField).val());
                    }

                });
            }

            if('SUMMATION' == formula){
                var achievement_total = 0;
                $.each($("."+inputFieldClass), function (index, inputField) {
                    if($(inputField).val().length !=0){
                        achievement_total += parseInt($(inputField).val());
                    }
                });
                $('#'+totalId).val(achievement_total);

            }

            if('AVERAGE' == formula){
                var counterVal = 0;
                var milestone_total_target = 0;
                $.each($("."+inputFieldClass), function (index, inputField) {
                    if($(inputField).val().length !=0){
                        milestone_total_target += parseInt($(inputField).val());
                    }
                    counterVal++;
                });
                $('#'+totalId).val(milestone_total_target/counterVal);

            }

        }
    </script>
@endsection
