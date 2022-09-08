@extends('layouts.default')

@section('title', 'Indicator Registration')

@section('style')

@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body smart">
                    <a href="{{url(route('result-entry.index'))}}"><div class="hed-btn">List ❭</div></a>

                    <h4 class="card-title">Result Entry</h4>
                    <hr>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post">
                        @csrf
                        <p class="card-hed">
                            Periodic Results entry for {{$program->name}}
                            <input type="hidden" value="{{$program->id}}" name="program_id">
                        </p>
                        <table class="table table-responsive table-striped" style="margin-bottom:25px">
                            <thead style="background-color: rgba(0,139,197,1.00); color:rgba(255,255,255,1.00)">
                            <tr>
                                <th class="align-middle"> Year
                                    <select  style="width:70px; border: 1px solid; background: transparent; color: white; margin-left:5px" id="milestone_approved_year" name="milestone_approved_year" onchange="changeBaselineYear()">
                                        @for($i = date('Y')-4; $i<=date('Y'); $i++)
                                            <option value="{{$i}}" {{($i==date('Y'))?'selected':''}} >{{$i}}</option>
                                        @endfor
                                    </select>
                                </th>
                                <th class="align-middle">Half Yearly/ Annual</th>
                                <th class="align-middle"> Achieved</th>
                                <th class="align-middle"> Source </th>
                                <th class="align-middle"> Methodology </th>
                                <th class="align-middle"> Date of Last Update </th>
                                <th class="align-middle"> Remarks </th>
                            </tr>
                            </thead>
                            <tbody>
                            @for($i =4; $i>=0; $i--)
                            <tr>
                                <td class="py-1">
                                    <span id="mile_year_text_{{$i}}">{{ date('Y') - $i }}</span>
                                    <input  type="hidden" id="mile_year_field_{{$i}}" value="{{date('Y') - $i }}" name="milestone_year[]" autocomplete="off">
                                </td>
                                <td>
                                    <select  class="form-control-mile-sl" id="period_type" name="period_type[]" style="width: 75%">
                                        <option value="ANNUAL">Annual</option>
                                        <option value="HALF_YEARLY">Half Yearly</option>
                                        <option value="MONTHLY">Monthly</option>
                                    </select>
                                </td>
                                <td><div class="input-group">
                                        <input  type="number" min="0" class="form-control-mile-per achieved" value="" autocomplete="off" name="achieved[]" onkeyup="calculateAchievedTotalTarget()" style="width: 60%">
                                        <div class="input-group-append"> <span class="input-group-text">%</span> </div>
                                    </div></td>
                                <td><input  type="text" class="form-control-mile" autocomplete="off" name="source[]" onclick="OpenInputDialog(this)"></td>
                                <td><input  type="text" class="form-control-mile" autocomplete="off" name="methodology[]" onclick="OpenInputDialog(this)"></td>
                                <td><input  type="text" class="form-control-mile datepicker" id="datepicker{{$i}}" name="date_of_last_update[]"></td>
                                <td><input type="text" class="form-control-mile" autocomplete="off" name="remarks[]" onclick="OpenInputDialog(this)"></td>
                            </tr>
                            @endfor

                            <tr>
                                <td>Select Formula :</td>
                                <td><div class="row">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="formula" id="formula" checked value="SUMMATION" onclick="calculateAchievedTotalTarget()">
                                                Summation </label>
                                        </div>
                                        <div style="margin-top:5px" class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="formula" id="formula" value="CUMULATIVE" onclick="calculateAchievedTotalTarget()">
                                                Cumulative</label>
                                        </div>
                                    </div></td>
                            </tr>
                            <tr style=" border-bottom: 1px solid rgba(212,212,212,1.00)">
                                <td class="py-1">Total Achievement <br>
                                    (latest report period)</td>
                                <td>
                                    <div style="padding:10px 25px; display:inline-block; background-color: rgba(255,142,0,0.80)">
                                        <input type="text" readonly value="00" name="achievement_total" id="achievement_total" style="background: transparent; border: none; width: 25px">%
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>

                    <br>
                    <button type="submit" class="btn btn-primary cusbutton">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script>function calculateAchievedTotalTarget() {

        }

        $(document).ready(function() {
            $('.min').click(function () {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.plus').click(function () {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });
        });
    </script>


    <!--code-->
    <script>
        $( function() {
            $( ".datepicker" ).datepicker();
        } );
        function calculateAchievedTotalTarget(){
            var formula = $("input[name='formula']:checked").val();

            if('CUMULATIVE' == formula){
                $.each($(".achieved"), function (index, inputField) {
                    if($(inputField).val().length !=0){
                        $('#achievement_total').val($(inputField).val());
                    }

                });


            }

            if('SUMMATION' == formula){
                var achievement_total = 0;
                $.each($(".achieved"), function (index, inputField) {
                    if($(inputField).val().length !=0){
                        achievement_total += parseInt($(inputField).val());
                    }
                });
                $('#achievement_total').val(achievement_total);

            }
        }

        function changeBaselineYear() {
            var baseline_year = $("#milestone_approved_year option:selected" ).val();
            for(var i=4; i>=0; i--){
                $('#mile_year_text_'+i).html(baseline_year-i);
                $('#mile_year_field_'+i).val(baseline_year-i);
            }
        }
    </script>
@endsection
