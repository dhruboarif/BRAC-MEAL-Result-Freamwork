@extends('layouts.default')

@section('title', 'Indicator Registration')

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

        .ptotal{
            width: max-content;
        }
        .ptotal input{
            padding: 0;
            margin: 0;
            background: transparent;
            border: none;
            width: 100%;
            text-align: center;
            color: white;
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
                    <form class="forms-sample" method="post">
                        @csrf
                        @method('PUT')
                        <p class="card-hed">Periodic Results entry @if(auth()->user()->can('isRegistered'))for {{$program->name}}@endif</p>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="exampleInputPiller">Pillar</label>
                                            <select class="form-control" id="piller" name="piller" onchange="getIndicatorTypeDetails()">
                                                <option selected="selected" value="">Select</option>
                                                @foreach($pillars as $p)
                                                    <option  {{($data->pillar_id == $p->id) ? 'selected':''}} value="{{$p->id}}"  value="{{$p->id}}">{{$p->name}} ({{$p->number}})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="exampleRelevant-outcome">Indicator Type</label>
                                            <select class="form-control" id="indicator_type" name="indicator_type" onchange="getIndicatorTypeDetails()">
                                                <option selected="selected">Select</option>
                                                <option  {{($data->indicator_type == 'IMPACT') ? 'selected':''}} value="IMPACT">Impact</option>
                                                <option {{($data->indicator_type == 'OUTPUT') ? 'selected':''}} value="OUTPUT">Output</option>
                                                <option {{($data->indicator_type == 'OUTCOME') ? 'selected':''}} value="OUTCOME">Outcome</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <div class="col-sm-12">
                                            <label for="exampleInputStat">Indicator Number </label>
                                            <select class="form-control" id="indicator_number" name="indicator_number">
                                                <option value="">Select</option>

                                                @foreach($indicatorRegistrations as $pd)
                                                    <option style="display: {{$data->indicator_number_id == $pd->id ? 'block':'none' }}" {{$data->indicator_number_id == $pd->id ? 'selected':'' }} class="{{$pd->pillar_id}}_{{$pd->indicator_type}} indicator_number_options" value="{{$pd->id}}"> {{$pd->indicator_number}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <div class="col-sm-12">
                                            <label for="exampleInputStat">Indicator Statement</label>
                                            <select class="form-control" id="indicator_statement" name="indicator_statement">
                                                <option value="">Select</option>
                                                {{--@foreach($pillars as $p)
                                                    @foreach($p->pillarDetails as $pd)
                                                            <option style="display: none" class="{{$p->id}}_{{$pd->type}} statement" value="{{$pd->id}}"> {{ucfirst($pd->type)}} {{$pd->statement}} ({{$pd->number}})</option>
                                                    @endforeach
                                                @endforeach--}}

                                                @foreach($indicatorRegistrations as $pd)
                                                    <option  style="display: {{$data->indicator_statement_id == $pd->id ? 'block':'none' }}" {{$data->indicator_statement_id == $pd->id ? 'selected':'' }} class="{{$pd->pillar_id}}_{{$pd->indicator_type}} statement" value="{{$pd->id}}"> {{$pd->indicator_statement}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                @if(auth()->user()->can('isAdmin'))
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <div class="col-sm-12">
                                                <label for="exampleprog">Program</label>
                                                <select class="form-control" id="program" name="program">
                                                    <option value="">Select</option>
                                                    @foreach($programs as $p)
                                                        <option {{$p->id == $data->program_id?'selected':''}} value="{{$p->id}}">{{$p->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                @elseif(auth()->user()->can('isRegistered'))
                                    <input id="program" name="program" type="hidden" value="{{$program->id}}">
                                @endif

                                <div class="col-md-6">
                                    <div class="form-group ">
                                        <div class="col-sm-12">
                                            <label for="exampleInputStat">Baseline Year</label>
                                            <select class="form-control" id="baseline_year" name="baseline_year" onchange="changeBaselineYear()">
                                                <option selected="selected" value="">Select</option>
                                                @foreach($indicatorRegistrations as $pd)
                                                    <option  style="display: {{$data->baseline_year == $pd->baseline_year ? 'block':'none' }}" {{$data->baseline_year == $pd->baseline_year ? 'selected':'' }}  class="{{$pd->pillar_id}}_{{$pd->indicator_type}} baseline_year_options" value="{{$pd->baseline_year}}"> {{$pd->baseline_year}}</option>
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
                                <th style="display: none">Results<br>
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
                                        <span id="mile_year_text_{{$k}}">{{ $i->milestone_year }}</span>
                                        <input  type="hidden" id="{{$i->id}}" value="{{$i->id }}" name="rdid[]" autocomplete="off">
                                        <input  type="hidden" id="mile_year_field_{{$k}}" value="{{$i->milestone_year }}" name="milestone_year[]" autocomplete="off">
                                    </td>
                                    <td style="display: none"><input type="text" class="form-control-mile datepicker" value="{{$i->recorded_to_date}}" name="recorded_to_date[]" autocomplete="off"></td>
                                    <td>
                                        <select  class="form-control-mile-sl" id="period_type" name="period_type[]" style="width: 100%">
                                            @if(isset($i) && !empty($i))
                                                <option value="ANNUAL" {{($i->period_type == 'ANNUAL')?'selected':''}}>Annual</option>
                                                <option value="HALF_YEARLY" {{($i->period_type == 'HALF_YEARLY')?'selected':''}}>Half Yearly</option>
                                                <option value="QUARTERLY" {{($i->period_type == 'QUARTERLY')?'selected':''}}>Quarterly</option>
                                            @endif
                                                <option value="MONTHLY" {{($i->period_type == 'MONTHLY')?'selected':''}}>Monthly</option>
                                        </select>
                                    </td>
                                    <td><input type="text" value="{{$i->achieved}}" class="form-control-mile achieved" autocomplete="off" name="achieved[]" onclick="OpenInputDialog(this, 'number', 'Achieved')"  onkeyup="calculateData()"></td>
                                    <td><input type="text" value="{{$i->disagg_female}}" id="txtBox" class="txtBox form-control-mile disagg_female" autocomplete="off" name="disagg_female[]"  onclick="OpenInputDialog(this, 'number', 'Disagg:Female')" onkeyup="calculateData()"></td>
                                    <td><input type="text" value="{{$i->disagg_disability}}" class="form-control-mile disagg_disability" autocomplete="off" name="disagg_disability[]" onclick="OpenInputDialog(this, 'number', 'Disagg:Disability')"  onkeyup="calculateData()"></td>
                                    <td><input type="text" value="{{$i->disagg_heard_to_reach}}" class="form-control-mile disagg_heard_to_reach" autocomplete="off" name="disagg_heard_to_reach[]" onclick="OpenInputDialog(this, 'number', 'Disagg:Hard to Reach ')"  onkeyup="calculateData()"></td>
                                    <td><input type="text" value="{{$i->source}}" class="form-control-mile" autocomplete="off" name="source[]" onclick="OpenInputDialog(this, 'textarea', 'Source ')" onclick="OpenInputDialog(this)"></td>
                                    <td><input type="text" value="{{$i->methodology}}" class="form-control-mile" autocomplete="off" name="methodology[]" onclick="OpenInputDialog(this, 'textarea', 'Methodology ')"  onclick="OpenInputDialog(this)"></td>
                                    <td><input type="text" value="{{$i->date_of_last_update}}" class="form-control-mile datepicker" name="last_update_date[]"></td>
                                    <td><input type="text" value="{{$i->remarks}}" class="form-control-mile" autocomplete="off" name="remarks[]" onclick="OpenInputDialog(this, 'textarea', 'Remarks ')"  onclick="OpenInputDialog(this)"></td>
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
                                                Summation of yearly achievements <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio"  {{($data->formula == 'CUMULATIVE')?'checked':''}}  class="form-check-input" name="formula" value="CUMULATIVE" onclick="calculateData()">
                                                Latest year achievement for cumulative results <i class="input-helper"></i></label>
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
                                            <input type="text" readonly value="{{$data->achievement_total}}" name="achievement_total" id="achievement_total" >
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
                                            <input type="text" readonly value="{{$data->disagg_female_total}}" name="disagg_female_total" id="disagg_female_total" >
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
                                            <input type="text" readonly value="{{$data->disagg_disability_total}}" name="disagg_disability_total" id="disagg_disability_total" >
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
                                            <input type="text" readonly value="{{$data->disagg_heard_to_reach_total}}" name="disagg_heard_to_reach_total" id="disagg_heard_to_reach_total" >
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
                console.log(pillar, indicatorType);

                $('#indicator_statement').val('');
                $('#indicator_number').val('');
                $('#baseline_year').val('');
                $('.statement').hide();
                $('.indicator_number_options').hide();
                $('.baseline_year_options').hide();
                $('.'+pillar+'_'+indicatorType).show();
            }catch (e) {

            }
        }

        function changeBaselineYear() {
            var baseline_year = $("#baseline_year option:selected" ).val();
            for(var i=4; i>=0; i--){
                try{
                    baseline_year = parseInt(baseline_year)+1;
                }catch {e} {

                }
                if(baseline_year>0){
                    $('#mile_year_text_'+i).html(baseline_year-i);
                    $('#mile_year_field_'+i).val(baseline_year-i);

                    var currentYear = new Date().getFullYear();
                    if((baseline_year == currentYear) && (i == 0)){
                        $('.period_option_'+i).hide();
                        $('.opt_monthly').show();
                        $('#mile_year_field_'+i).closest('tr').find('#period_type').val('MONTHLY')
                    }

                }

            }
        }

        //open dialog box for milstone
        function OpenInputDialog(txtBox, type, title) {
            $("#inputDialog").dialog({
                autoOpen: !1,
                modal: !0,
                title: "Input "+title,
                closeOnEscape: !0,
                open: function(){
                    try{
                        if(type == 'text'){
                            $("#inputDialog").html('<input class="txtInput form-control" Class="txtBox" type="text">');

                        }else if(type == 'number'){
                            $("#inputDialog").html('<input class="txtInput form-control" Class="txtBox" type="number">' +
                                '<small class="error dialog-num-error" style="display: none"></small>');

                        }else{
                            $("#inputDialog").html('<textarea class="txtInput form-control" Class="txtBox"></textarea>');

                        }
                    }catch (e) {
                        $("#inputDialog").html('<textarea class="txtInput form-control" Class="txtBox"></textarea>');
                    }

                    $(".txtInput").val($(txtBox).val());
                },
                buttons: [{
                    text: "Insert", click: function () {
                        var er = 0;
                        if(type=='number'){
                            if ( parseFloat($(".txtInput").val()) || parseInt($(".txtInput").val())) {
                                $('.dialog-num-error').hide();
                                er=0;
                            } else {
                                $('.dialog-num-error').text('Input only number');
                                $('.dialog-num-error').show();
                                er++;
                            }
                        }

                        var achived = $(txtBox).closest('tr').find('input[name="achieved[]"]').val();

                        var disagg_female = $(txtBox).closest('tr').find('input[name="disagg_female[]"]').val();
                        var disagg_disability = $(txtBox).closest('tr').find('input[name="disagg_disability[]"]').val();
                        var disagg_heard_to_reach = $(txtBox).closest('tr').find('input[name="disagg_heard_to_reach[]"]').val();
                        var total_disagg = 0;
                        var currentField = $(txtBox).attr('name');
                        var currentFieldValue = parseFloat($(".txtInput").val());

                        if(currentField == 'disagg_female[]' ) {
                            total_disagg = getTotalDissg(currentFieldValue, disagg_disability, disagg_heard_to_reach);

                            if(achived < total_disagg){
                                $('.dialog-num-error').text('Summation of disaggregated value can not be greater than achievement. ');
                                $('.dialog-num-error').show();
                                er++;
                            }
                        }else if(currentField == 'disagg_disability[]' ){
                            total_disagg = getTotalDissg(disagg_female,currentFieldValue, disagg_heard_to_reach);
                            console.log(total_disagg);
                            if(achived < total_disagg){
                                $('.dialog-num-error').text('Summation of disaggregated value can not be greater than achievement. ');
                                $('.dialog-num-error').show();
                                er++;
                            }

                        } else if(currentField == 'disagg_heard_to_reach[]' ){
                            total_disagg = getTotalDissg(disagg_female,disagg_disability, currentFieldValue);
                            if(achived < total_disagg){
                                $('.dialog-num-error').text('Summation of disaggregated value can not be greater than achievement. ');
                                $('.dialog-num-error').show();
                                er++;
                            }
                        }else if(currentField == 'achieved[]' ){
                            total_disagg = getTotalDissg(disagg_female,disagg_disability, disagg_heard_to_reach);
                            if(currentFieldValue < total_disagg){
                                $('.dialog-num-error').text('Summation of disaggregated value can not be greater than achievement. ');
                                $('.dialog-num-error').show();
                                er++;
                            }
                        }else{
                            $('.dialog-num-error').hide();
                            er=0;
                        }

                        if(er == 0){
                            $(txtBox).val($(".txtInput").val());
                            $(".txtInput").val("");
                            $(this).dialog("close");
                            calculateData()
                        }
                    }
                }],
                close: function () {
                    $(this).dialog("close");
                    $(".txtInput").val("");
                },
                show: {effect: "clip", duration: 200}
            });
            $("#inputDialog").dialog("open");


        }

        function getTotalDissg(disagg_female,disagg_disability,disagg_heard_to_reach) {
            var total = 0;
            if ( parseFloat(disagg_female) || parseInt(disagg_female)) {
                total = total + parseFloat(disagg_female);
            }

            if ( parseFloat(disagg_disability) || parseInt(disagg_disability)) {
                total = total + parseFloat(disagg_disability);
            }

            if ( parseFloat(disagg_heard_to_reach) || parseInt(disagg_heard_to_reach)) {
                total = total + parseFloat(disagg_heard_to_reach);
            }

            return total;
        }

        function calculateData() {
            var formula = $("input[name='formula']:checked").val();
            calculateDataSet(formula, 'achieved', 'achievement_total' );
            calculateDataSet(formula, 'disagg_female', 'disagg_female_total' );
            calculateDataSet(formula, 'disagg_disability', 'disagg_disability_total' );
            calculateDataSet(formula, 'disagg_heard_to_reach', 'disagg_heard_to_reach_total' );
        }

        $(function () {
            calculateData();
        });

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
        $('#indicator_number').on('change', function () {
            var id = $(this).val();
            var csrf = $('meta[name="csrf-token"]').attr('content');
            $('#indicator_statement').empty();
            var item =[];
            var item2 =[];
            var item3 =[];
            console.log(id);
            if(id){
                $.ajax({
                    url: '{{url('module-2/result-entry/statement')}}',
                    type: 'POST',
                    data: {id : id, '_token': csrf},
                    dataType: 'json',
                    success: function( data ) {

                        item.push('<option value=""  selected>Select</option>');
                        item.push('<option value="'+ data.id +'">'+ data.indicator_statement +'</option>');
                        $('#indicator_statement').append(item);
                    }
                });
                $.ajax({
                    url: '{{url('module-2/result-entry/getProgram')}}',
                    type: 'POST',
                    data: {id : id, '_token': csrf},
                    dataType: 'json',
                    success: function( data2 ) {
                        $('#program').empty();
                        $('#baseline_year').empty();
                        item2.push('<option value=""  selected>Select</option>');
                        $.each(data2.data, function (key, val) {
                            item2.push('<option value="'+ val.id +'">'+ val.name +'</option>');
                        });
                        $('#program').append(item2);
                        item3.push('<option value=""  selected>Select</option>');
                        item3.push('<option value="'+ data2.year.baseline_year +'">'+ data2.year.baseline_year +'</option>');
                        $('#baseline_year').append(item3);
                    }
                });
            }else{
                item.push('<option value=""  selected>Select</option>');
                $('#indicator_statement').append(item);
            }


        });
    </script>
@endsection
