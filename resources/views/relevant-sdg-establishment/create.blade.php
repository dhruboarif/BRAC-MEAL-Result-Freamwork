@extends('layouts.default')

@section('title', 'Relevant SDG Establishment')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body smart">
                    <a href="{{url(route('relevant-sdg-establishment.index'))}}"><div class="hed-btn">List ❭</div></a>
                    <h4 class="card-title">Relevant SDG Establishment</h4>
                    <p class="card-description badge badge-danger"></p>
                    <hr>
                    <form class="forms-sample" method="post" action="" name="relevant_sdg" id="relevant_sdg">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">SDG Goal</label>
                            <input type="text" required class="form-control" id="goal" name="goal"  value="{{ old('goal') }}" autocomplete="off" placeholder="SDG goal">
                            <div class="error" id="goal-error" style="display: none">The Goal field is required.</div>
                        </div>
                        <p class="card-hed">Indicator &amp; Target</p>
                        <div class="form-group">
                            <label for="exampleInputName1">SDG Target</label>
                            <input type="text" class="form-control" name="target_temp" id="target" autocomplete="off" placeholder="SDG Target">
                            <div class="error" id="target-error" style="display: none">The Target field is required.</div>
                        </div>
                        <div style="margin-bottom:2%" class="table-responsive">
                            <table class="table" id="table">
                                <tbody>
                                <tr valign="top" id="input-fields">
                                    <td><label for="exampleInputName1">SDG Indicator Number</label>
                                        <input type="text" class="form-control" id="number" autocomplete="off" placeholder="SDG Indicator Number">
                                        <div class="error" id="number-error" style="display: none">The Number field is required.</div>
                                    </td>
                                    <td><label for="exampleInputName1">SDG Indicator Statement</label>
                                        <input type="text" class="form-control" id="statement" autocomplete="off" placeholder="SDG Indicator Statement">
                                        <div class="error" id="statement-error" style="display: none">The Statement field is required.</div>
                                    </td>
                                    <td width="50" align="left" id="del"><label for="exampleSDG-act">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                                        <button type="button" id="btnAdd" style="margin-right:15px" class="btn btn-add">
                                            <img src="{{asset('assets2/images/add.png')}}">
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div>
                            <span class="error" id="number-statement-error" style="display: none; float: left">Please add SDG Indicator Number and  SDG Statement.</span>
                            <button type="button" id="addTarget" class="btn btn-success">Add Target &amp; Indicators</button> <br>
                        </div>

                        <div class="target_contents" style="display: none">
                            <label for="accordion"><span style="padding:5px 15px; border-radius:5px; background-color: rgba(255,48,51,1.00); color: rgba(255,255,255,1.00); font-size:14px">You have added the following set of Target</span></label>
                            <br>
                            <div  id="target_table">
                                {{--<div class="target_table_body" style="border: 1px solid rgba(228,228,228,0.80); background-color:rgba(244,244,244,0.20); padding:1%; margin-bottom:2%">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr style="background-color: rgba(201,201,201,1.00)">
                                                <td colspan="3"><b>Target : 0111</b></td>
                                                <td width="100" align="center">
                                                    <div class="minus" onclick="removeTarget(this)"></div>
                                                </td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr >
                                                <td colspan="1"><b>SDG Indicator Number</b></td>
                                                <td colspan="3"><b>SDG Indicator Statement</b></td>
                                            </tr>
                                            <tr style="background-color: rgba(243,243,243,1.00)">
                                                <td colspan="1">SDG Indicator Number 011</td>
                                                <td colspan="3" style="text-wrap: normal">
                                                    SDG Indicator Statement11
                                                </td>
                                            </tr>

                                            </tbody>
                                        </table>
                                        <br>

                                    </div>
                                </div>--}}
                            </div>

                        </div>
                        <hr>
                        <button  id="submit" type="submit" class="btn btn-primary cusbutton">Submit</button>
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
        //add statement and number on target
        $("#btnAdd").on("click",function(){
            var statement = $('#statement').val();
            var number = $('#number').val();

            $('#number-statement-error').hide();
            if(statement.length == 0){
                $('#statement-error').show();
            }else{
                $('#statement-error').hide();
            }

            if(number.length == 0){
                $('#number-error').show();
            }else{
                $('#number-error').hide();
            }


            if((statement.length > 0) && (number.length > 0) ){
                var $tableBody = $('#table').find("tbody");
                var   $trLast = $tableBody.find("tr:first");
                // var   $trNew = $trLast.clone();

                var   $trNew ='<tr class="temp" style="background-color: rgba(243,243,243,1.00)">\n' +
                    '                                    <td>\n' +
                    '                                        <span>'+number+'</span>\n' +
                    '                                        <input type="hidden" name="number_temp[]" value="'+number+'">\n' +
                    '                                    </td>\n' +
                    '                                    <td>\n' +
                    '                                        <span>'+statement+'</span>\n' +
                    '                                        <input type="hidden" name="statement_temp[]" value="'+statement+'">\n' +
                    '                                    </td> \n' +
                    '                                    <td><div class="minus btnRemove" onclick="removeTr(this)"></div></td>\n' +
                    '                                </tr>';

                // $trLast.after($trNew);
                $trLast.after($trNew);
                $('#number').val('');
                $('#statement').val('');
            }

        });

        //generate uuid
        function uuid() {
            var result           = '';
            var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'+ Date.now();
            var charactersLength = characters.length;
            for ( var i = 0; i < 10; i++ ) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }
            return result;
        }

        //remove statement and number on target
        function removeTr(that) {
            $(that).closest('tr').remove();
        }

        //add target table
        $("#addTarget").on("click",function(){
            var targetId = uuid();
            var target_temp = $("input[name=target_temp]").val();
            var statement_temp =  $("input[name='statement_temp[]']").map(function(){return $(this).val();}).get();
            var number_temp =  $("input[name='number_temp[]']").map(function(){return $(this).val();}).get();


            if(target_temp.length == 0){
                $('#target-error').show();
                return false;
            }else{
                $('#target-error').hide();
            }
            if(statement_temp.length == 0){
                $('#number-statement-error').show();
                return false;
            }else{
                $('#number-statement-error').hide();
            }

            var trs = '';
            $.each(number_temp, function( index, target_number ) {
                var target_statement = statement_temp[index];
                trs += ' <tr style="background-color: rgba(243,243,243,1.00)">\n' +
                    '         <td colspan="1">'+target_number+
                    '               <input type="hidden" name="indicator_id[]" value="">' +
                    '               <input type="hidden" name="number_'+targetId+'[]" value="'+target_number+'">' +
                    '         </td>\n' +
                    '         <td colspan="3" style="text-wrap: normal">'+target_statement+
                    '               <input type="hidden" name="statement_'+targetId+'[]" value="'+target_statement+'">' +
                    '         </td>\n' +
                    '   </tr>';
            });


            var table = '<div  class="target_table_body"  style="border: 1px solid rgba(228,228,228,0.80); background-color:rgba(244,244,244,0.20); padding:1%; margin-bottom:2%">\n' +
                '                                    <div class="table-responsive">\n' +
                '                                        <table class="table">\n' +
                '                                            <thead>\n' +
                '                                            <tr style="background-color: rgba(201,201,201,1.00)">\n' +
                '                                                <td colspan="3">' +
                '                                                   <b>Target : '+target_temp+'</b>' +
                '                                                   <input type="hidden" name="target[]" value="'+target_temp+'">' +
                '                                                   <input type="hidden" name="target_id[]" value="'+targetId+'">' +
                '                                                   <input type="hidden" name="target_type[]" value="NEW">' +
                '                                                 </td>\n' +
                '                                                <td width="100" align="center">\n' +
                '                                                    <div class="minus" onclick="removeTarget(this)"></div>\n' +
                '                                                </td>\n' +
                '                                            </tr>\n' +
                '                                            </thead>\n' +
                '                                            <tbody>\n' +
                '                                            <tr >\n' +
                '                                                <td colspan="1"><b>SDG Indicator Number</b></td>\n' +
                '                                                <td colspan="3"><b>SDG Indicator Statement</b></td>\n' +
                '                                            </tr>\n' +
                                                                trs+'\n' +
                '                                            </tbody>\n' +
                '                                        </table>\n' +
                '                                        <br>\n' +
                '                                    </div>\n' +
                '                                </div>';

            var target_table = $('#target_table');
            var tableDiv = target_table.find(".target_table_body:first");
            if(tableDiv.length == 0){
                target_table.append(table);
            }else{
                tableDiv.after(table);
            }
            $('.target_contents').show();

            //clear old data on temp table in target add form
            $('#table').find(".temp").remove();
            $('#target').val('');
            $('#number').val('');
            $('#statement').val('');


        });

        //remove target table
        function removeTarget(that) {
            $(that).closest('.target_table_body').remove();
            var table = $('#target_table .target_table_body').length;
            if(table == 0){
                $('.target_contents').hide();
            }

        }

        $('#submit').click(function (e) {

            var errorCounter = 0;

            var goal = $('#goal').val();
            if(goal.length == 0){
                $('#goal-error').show();
                errorCounter++;
            }else{
                $('#goal-error').hide();
            }

            var targets =  $("input[name='target[]']").map(function(){return $(this).val();}).get();
            if(targets.length == 0){
                $('#number-statement-error').show();
                errorCounter++;
            }else{
                $('#number-statement-error').hide();
            }

            if(errorCounter == 0){
                $('#relevant_sdg').submit();
            }else{
                e.preventDefault();
            }

        });

    </script>

@endsection
