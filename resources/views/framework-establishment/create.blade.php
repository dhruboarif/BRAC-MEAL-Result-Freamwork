@extends('layouts.default')

@section('title', 'Create Profile')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body smart">
                    <a href="{{url(route('framework-establishment.index'))}}"><div class="hed-btn">List ❭</div></a>
                    <h4 class="card-title">Framework Establishment</h4>
                    <p style="color:rgba(255,255,255,1.00)" class="card-description badge badge-danger"> Pillar, Impact, Outcome, Output </p>
                    <hr style="margin-top:0">
                    <form class="forms-sample" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Pillar Number</label>
                            <input type="text" class="form-control" required id="pillar_number" name="pillar_number" value="{{old('pillar_number')}}" autocomplete="off" placeholder="Pillar Number">
                            @if ($errors->has('pillar_number'))<div class="error">{{ $errors->first('pillar_number') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Pillar Statement</label>
                            <input type="text" class="form-control" required id="pillar_name" name="pillar_name" value="{{old('pillar_name')}}" autocomplete="off" placeholder="Pillar Statement">
                            @if ($errors->has('pillar_name'))<div class="error">{{ $errors->first('pillar_name') }}</div>@endif
                        </div>

                        <div style="margin-bottom:2%" class="table-responsive">
                            <input type="hidden" name="impact_deleted_ids" value="">
                            <table class="table" id="impactTable">
                                <tbody>
                                <tr style=" background-color:rgba(117,244,255,1.00)">
                                    <td>Impact Number</td>
                                    <td>Impact Statement</td>
                                    <td></td>
                                </tr>
                                <tr class="input-fields">
                                    <td width="500">
                                        <input type="hidden" class="form-control" id="impact_type" name="impact_type" value="IMPACT">
                                        <input type="text" class="form-control" id="impact_number" name="impact_number" autocomplete="off" placeholder="Impact Number">
                                        <div class="error" id="impact-number-error" style="display: none">The Impact Number field is required.</div>
                                    </td>
                                    <td width="800">
                                        <input type="text" class="form-control" id="impact_statement" name="impact_statement" autocomplete="off" placeholder="Impact Statement">
                                        <div class="error" id="impact-statement-error" style="display: none">The Impact Statement field is required.</div>
                                    </td>
                                    <td width="100">
                                        <button type="button" class="btn btn-success" id="btnAddImpact">ADD</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>


                        <div style="margin-bottom:2%" class="table-responsive">
                            <input type="hidden" name="outcome_deleted_ids" value="">
                            <table class="table" id="outcomeTable">
                                <tbody>
                                <tr style=" background-color:rgba(117,244,255,1.00)">
                                    <td>Outcome Number</td>
                                    <td>Outcome Statement</td>
                                    <td></td>
                                </tr>
                                <tr class="input-fields">
                                    <td width="500">
                                        <input type="hidden" class="form-control" id="outcome_type" name="outcome_type" value="OUTCOME">
                                        <input type="text" class="form-control" id="outcome_number" name="outcome_number" autocomplete="off" placeholder="Outcome Number">
                                        <div class="error" id="outcome-number-error" style="display: none">The Outcome Number field is required.</div>
                                    </td>
                                    <td width="800">
                                        <input type="text" class="form-control" id="outcome_statement" name="outcome_statement" autocomplete="off" placeholder="Outcome Statement">
                                        <div class="error" id="outcome-statement-error" style="display: none">The Impact Statement field is required.</div>
                                    </td>
                                    <td width="100">
                                        <button type="button" class="btn btn-success" id="btnAddOutcome">ADD</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>


                        <div style="margin-bottom:3%" class="table-responsive">
                            <input type="hidden" name="output_deleted_ids" value="">
                            <table class="table" id="outputTable">
                                <tbody>
                                <tr style=" background-color:rgba(117,244,255,1.00)">
                                    <td>Output Number</td>
                                    <td>Output Statement</td>
                                    <td></td>
                                </tr>
                                <tr class="input-fields">
                                    <td width="500">
                                        <input type="hidden" class="form-control" id="output_type" name="output_type" value="OUTPUT">
                                        <input type="text" class="form-control" id="output_number" name="output_number" autocomplete="off" placeholder="Output Number">
                                        <div class="error" id="output-number-error" style="display: none">The Output Number field is required.</div>
                                    </td>
                                    <td width="800">
                                        <input type="text" class="form-control" id="output_statement" name="output_statement" autocomplete="off" placeholder="Output Statement">
                                        <div class="error" id="output-statement-error" style="display: none">The Output Statement field is required.</div>
                                    </td>
                                    <td width="100">
                                        <button type="button" class="btn btn-success" id="btnAddOutput">ADD</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary cusbutton mr-2">Submit</button>
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

        //impact block
        $("#btnAddImpact").on("click",function(){
            var impact_statement = $('#impact_statement').val();
            var impact_number = $('#impact_number').val();

            if(impact_statement.length == 0){
                $('#impact-statement-error').show();
            }else{
                $('#impact-statement-error').hide();
            }

            if(impact_number.length == 0){
                $('#impact-number-error').show();
            }else{
                $('#impact-number-error').hide();
            }
            var impact_st = addNewlines(impact_statement);

            if((impact_statement.length > 0) && (impact_number.length > 0)){
                var $tableBody = $('#impactTable').find("tbody");
                var   $trLast = $tableBody.find("tr:last");

                var   $trNew ='<tr style="background-color: rgba(243,243,243,1.00)">\n' +
                    '                                    <td>' +
                    '                                        <input type="hidden" name="id[]" value="">\n' +
                    '                                        <input type="hidden" name="type[]" value="IMPACT">\n' +
                    '                                        <span>'+impact_number+'</span>\n' +
                    '                                        <input type="hidden" name="number[]" value="'+impact_number+'">\n' +
                    '                                    </td>\n' +
                    '                                    <td>\n' +
                    '                                        <span>'+impact_st+'</span>\n' +
                    '                                        <input type="hidden" name="statement[]" value="'+impact_statement+'">\n' +
                    '                                    </td> \n' +
                    '                                    <td width="100" align="center"><div class="minus btnRemove" onclick="removeTr(this)"></div></td>\n' +
                    '                                </tr>';
                $trLast.after($trNew);
                $('.input-fields').find('input').val('');
            }

        });

        //outcome block
        $("#btnAddOutcome").on("click",function(){
            var outcome_statement = $('#outcome_statement').val();
            var outcome_number = $('#outcome_number').val();

            if(outcome_statement.length == 0){
                $('#outcome-statement-error').show();
            }else{
                $('#outcome-statement-error').hide();
            }

            if(outcome_number.length == 0){
                $('#outcome-number-error').show();
            }else{
                $('#outcome-number-error').hide();
            }
            var outcome_sta = addNewlines(outcome_statement);

            if((outcome_statement.length > 0) && (outcome_number.length > 0)){
                var $tableBody = $('#outcomeTable').find("tbody");
                var   $trLast = $tableBody.find("tr:last");

                var   $trNew ='<tr style="background-color: rgba(243,243,243,1.00)">\n' +
                    '                                    <td>' +
                    '                                        <input type="hidden" name="id[]" value="">\n' +
                    '                                        <input type="hidden" name="type[]" value="OUTCOME">\n' +
                    '                                        <span>'+outcome_number+'</span>\n' +
                    '                                        <input type="hidden" name="number[]" value="'+outcome_number+'">\n' +
                    '                                    </td>\n' +
                    '                                    <td>\n' +
                    '                                        <span>'+outcome_sta+'</span>\n' +
                    '                                        <input type="hidden" name="statement[]" value="'+outcome_statement+'">\n' +
                    '                                    </td> \n' +
                    '                                    <td width="100" align="center"><div class="minus btnRemove" onclick="removeTr(this)"></div></td>\n' +
                    '                                </tr>';
                $trLast.after($trNew);
                $('.input-fields').find('input').val('');
            }

        });

        //output block
        $("#btnAddOutput").on("click",function(){
            var output_statement = $('#output_statement').val();
            var output_number = $('#output_number').val();

            if(output_statement.length == 0){
                $('#output-statement-error').show();
            }else{
                $('#output-statement-error').hide();
            }

            if(output_number.length == 0){
                $('#output-number-error').show();
            }else{
                $('#output-number-error').hide();
            }

            var output_sta = addNewlines(output_statement);

            if((output_statement.length > 0) && (output_number.length > 0)){
                var $tableBody = $('#outputTable').find("tbody");
                var   $trLast = $tableBody.find("tr:last");

                var   $trNew ='<tr style="background-color: rgba(243,243,243,1.00)">\n' +
                    '                                    <td>' +
                    '                                        <input type="hidden" name="id[]" value="">\n' +
                    '                                        <input type="hidden" name="type[]" value="OUTPUT">\n' +
                    '                                        <span>'+output_number+'</span>\n' +
                    '                                        <input type="hidden" name="number[]" value="'+output_number+'">\n' +
                    '                                    </td>\n' +
                    '                                    <td>\n' +
                    '                                        <span>'+output_sta+'</span>\n' +
                    '                                        <input type="hidden" name="statement[]" value="'+output_statement+'">\n' +
                    '                                    </td> \n' +
                    '                                    <td width="100" align="center"><div class="minus btnRemove" onclick="removeTr(this)"></div></td>\n' +
                    '                                </tr>';
                $trLast.after($trNew);
                $('.input-fields').find('input').val('');
            }

        });


        function removeTr(that, id = 0, i='x') {

            try{
                var deleted_id_for = $('#'+i+'_deleted_ids');
                var deleted_ids = deleted_id_for.val();
                if(id!= 0 && i!='x'){
                    if(deleted_ids.length == 0){
                        deleted_id_for.val(id);
                    }else{
                        deleted_id_for.val(deleted_ids+','+id);
                    }
                }
            }catch (e) {

            }

            $(that).closest('tr').remove();

        }

        function addNewlines(str) {
            var result = '';
            while (str.length > 0) {
                result += str.substring(0, 100) + '<br>';
                str = str.substring(100);
            }
            return result;
        }
    </script>

@endsection
