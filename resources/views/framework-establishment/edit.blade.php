@extends('layouts.default')

@section('title', 'Create Profile')

@section('style')
    <style>
        #txwrap35{
            width:35%;
            /*white-space: pre-wrap;*/
            white-space: -moz-pre-wrap;
            white-space: -pre-wrap;
            white-space: -o-pre-wrap;
            word-wrap: break-word;
            line-height: 20px;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body smart">
                    <a href="{{url(route('framework-establishment.index'))}}"><div class="hed-btn">List ❭</div></a>
                    <h4 class="card-title">Framework Establishment Edit</h4>
                    <p style="color:rgba(255,255,255,1.00)" class="card-description badge badge-danger"> Pillar, Impact, Outcome, Output </p>
                    <hr style="margin-top:0">
                    <form class="forms-sample" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputName1">Pillar Number</label>
                            <input type="text" class="form-control" required id="pillar_number" name="pillar_number" value="{{old('pillar_number',  $data->number)}}" autocomplete="off" placeholder="Pillar Number">
                            @if ($errors->has('pillar_number'))<div class="error">{{ $errors->first('pillar_number') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Pillar Statement</label>
                            <input type="text" class="form-control" required id="pillar_name" name="pillar_name" value="{{old('pillar_name',  $data->name)}}" autocomplete="off" placeholder="Pillar Statement">
                            @if ($errors->has('pillar_name'))<div class="error">{{ $errors->first('pillar_name') }}</div>@endif
                        </div>

                        <div style="margin-bottom:2%" class="table-responsive">
                            <input type="hidden" name="deleted_ids" id="deleted_ids" value="">
                            <input type="hidden" name="edited_ids" id="edited_ids" value="">
                            <table class="table" id="impactTable">
                                <tbody>
                                <tr style=" background-color:rgba(117,244,255,1.00)">
                                    <td id="txwrap35">Impact Number</td>
                                    <td>Impact Statement</td>
                                    <td ></td>
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
                                @foreach($details as $d)
                                    @if($d->type == 'IMPACT')
                                    <tr style="background-color: rgba(243,243,243,1.00)">
                                        <td >
                                            <span>{{$d->number}}</span>
                                            <input type="hidden" name="number[]" value="{{$d->number}}">
                                        </td>
                                        <td >
                                            <input type="hidden" name="id[]" value="{{$d->id}}" class="{{$d->id}}">
                                            <?php
                                            $text = $d->statement;
                                            $newtext = wordwrap($text, 110, "<br>", true);
                                            ?>
                                            <?php echo "$newtext\n"; ?>
                                            <input type="hidden" name="type[]" value="IMPACT">
                                            <input type="hidden" name="statement[]" value="{{$d->statement}}">

                                        </td>

                                        <td width="300" align="center">
                                            <button type="button" class="minus btnRemove"  onclick="removeTr(this, {{$d->id}}, 'impact')" style="border: none;cursor: pointer;padding: 5px"></button>
                                            <button type="button" class=""  onclick="editDiv(this, '{{$d->id}}', 'impact','{{$d->number}}','{{$d->statement}}')" style="border: none;cursor: pointer;padding: 5px"><i class="icon-pencil"></i></button>
                                        </td>
                                    </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>


                        <div style="margin-bottom:2%" class="table-responsive">
                            <input type="hidden" name="outcome_deleted_ids" id="outcome_deleted_ids" value="">
                            <input type="hidden" name="outcome_edit_ids" id="outcome_edit_ids" value="">
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
                                @foreach($details as $d)
                                    @if($d->type == 'OUTCOME')
                                        <tr style="background-color: rgba(243,243,243,1.00)">
                                            <td>
                                                <span>{{$d->number}}</span>
                                                <input type="hidden" name="number[]" value="{{$d->number}}">
                                            </td>
                                            <td>
                                                <input type="hidden" name="id[]" value="{{$d->id}}">
                                                <?php
                                                $text = $d->statement;
                                                $newtext = wordwrap($text, 100, "<br>", true);
                                                ?>
                                                <?php echo "$newtext\n"; ?>
                                                <input type="hidden" name="type[]" value="OUTCOME">
                                                <input type="hidden" name="statement[]" value="{{$d->statement}}">

                                            </td>
                                            <td width="100" align="center">
                                                <button type="button" class="minus btnRemove"  onclick="removeTr(this, {{$d->id}}, 'outcome')" style="border: none;cursor: pointer;padding: 5px"></button>
                                                <button type="button" class=""  onclick="editDiv(this, '{{$d->id}}', 'outcome','{{$d->number}}','{{$d->statement}}')" style="border: none;cursor: pointer;padding: 5px">
                                                    <i class="icon-pencil"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>


                        <div style="margin-bottom:3%" class="table-responsive">
                            <input type="hidden" name="output_deleted_ids" value="" id="output_deleted_ids">
                            <input type="hidden" name="output_edit_ids" value="" id="output_edit_ids">
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
                                @foreach($details as $d)
                                    @if($d->type == 'OUTPUT')
                                        <tr style="background-color: rgba(243,243,243,1.00)">
                                            <td>
                                                <span>{{$d->number}}</span>
                                                <input type="hidden" name="number[]" value="{{$d->number}}">
                                            </td>
                                            <td>
                                                <input type="hidden" name="id[]" value="{{$d->id}}">
                                                <?php
                                                $text = $d->statement;
                                                $newtext = wordwrap($text, 100, "<br>", true);
                                                ?>
                                                <?php echo "$newtext\n"; ?>
                                                <input type="hidden" name="type[]" value="OUTPUT">
                                                <input type="hidden" name="statement[]" value="{{$d->statement}}">

                                            </td>
                                            <td width="100" align="center">
                                                <button type="button" class="minus btnRemove"  onclick="removeTr(this, {{$d->id}}, 'output')" style="border: none;cursor: pointer;padding: 5px"></button>
                                                <button type="button" class=""  onclick="editDiv(this, '{{$d->id}}', 'output','{{$d->number}}','{{$d->statement}}')" style="border: none;cursor: pointer;padding: 5px">
                                                    <i class="icon-pencil"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary cusbutton mr-2">Update</button>
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
            var st = addNewlines(impact_statement);

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
                    '                                        <span>'+st+'</span>\n' +
                    '                                        <input type="hidden" name="statement[]" value="'+impact_statement+'">\n' +
                    '                                    </td> \n' +
                    '                                    <td width="100" align="center">' +
                    '                                          ' +
                    '                                           <button type="button" class="minus btnRemove" onclick="removeTr(this)" style="border: none;cursor: pointer;padding: 5px;float: right"></button>' +
                    '                                           <button type="button" class="" onclick="editDiv(this)" style="border: none;cursor: pointer;padding: 5px"><i class="icon-pencil"></i></button>' +
                    '                                    </td>\n' +
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

            var st = addNewlines(outcome_statement);

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
                    '                                        <span>'+st+'</span>\n' +
                    '                                        <input type="hidden" name="statement[]" value="'+outcome_statement+'">\n' +
                    '                                    </td> \n' +

                    '                                    <td width="100" align="center">' +
                    '                                           <button type="button" class="minus btnRemove" onclick="removeTr(this)" style="border: none;cursor: pointer;padding: 5px;float: right"></button>' +
                    '                                           <button type="button" class="" onclick="editDiv(this)" style="border: none;cursor: pointer;padding: 5px"><i class="icon-pencil"></i></button>' +
                    '                                    </td>\n' +
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
           var st = addNewlines(output_statement);

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
                    '                                        <span>'+st+'</span>\n' +
                    '                                        <input type="hidden" name="statement[]" value="'+output_statement+'">\n' +
                    '                                    </td> \n' +
                    '                                    <td width="100" align="center">' +
                    '                                           <button type="button" class="minus btnRemove" onclick="removeTr(this)" style="border: none;cursor: pointer;padding: 5px;float: right"></button>' +
                    '                                           <button type="button" class="" onclick="editDiv(this)" style="border: none;cursor: pointer;padding: 5px"><i class="icon-pencil"></i></button>' +
                    '                                    </td>\n' +
                    '                                </tr>';
                $trLast.after($trNew);
                $('.input-fields').find('input').val('');
            }

        });



        function removeTr(that, id = 0) {

            try{
                var deleted_ids = $('#deleted_ids').val();
                if(id!= 0){
                    if(deleted_ids.length == 0){
                        $('#deleted_ids').val(id);
                    }else{
                        $('#deleted_ids').val(deleted_ids+','+id);
                    }
                }
            }catch (e) {

            }

            $(that).closest('tr').remove();

        }
        function editDiv(that, id = 0, type, num, statement){
            try {
                if (type == 'impact'){
                    if (id != 0){
                        var edited_ids = $('#edited_ids').val();
                        if(edited_ids.length == 0){
                            $('#edited_ids').val(id);
                        }else{
                            $('#edited_ids').val(edited_ids+','+id);
                        }
                        $('#impact_number').val(num);
                        $('#impact_statement').val(statement);
                        $(that).closest('tr').remove();
                    }
                }else if(type == 'outcome'){
                    if (id != 0){
                        var outcome_edit_ids = $('#outcome_edit_ids').val();
                        if(outcome_edit_ids.length == 0){
                            $('#outcome_edit_ids').val(id);
                        }else{
                            $('#outcome_edit_ids').val(outcome_edit_ids+','+id);
                        }
                        $('#outcome_number').val(num);
                        $('#outcome_statement').val(statement);
                        $(that).closest('tr').remove();
                    }
                }else if(type == 'output'){
                    if (id != 0){
                        var output_edit_ids = $('#output_edit_ids').val();
                        if(output_edit_ids.length == 0){
                            $('#output_edit_ids').val(id);
                        }else{
                            $('#output_edit_ids').val(output_edit_ids+','+id);
                        }
                        $('#output_number').val(num);
                        $('#output_statement').val(statement);
                        $(that).closest('tr').remove();
                    }
                }

            }catch (e){

            }


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
