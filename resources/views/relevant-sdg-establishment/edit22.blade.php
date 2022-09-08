@extends('layouts.default')

@section('title', 'Edit Donor')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body smart">

                    <a href="{{url(route('relevant-sdg-establishment.index'))}}"><div class="hed-btn">List ❭</div></a>
                    <h4 class="card-title">Edit Relevant SDG Establishment</h4>
                    <p class="card-description badge badge-danger"></p>
                    <hr>
                    <form class="forms-sample" method="post" action="">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputName1">SDG Goal</label>
                            <input type="text" required class="form-control" id="name" name="name"  value="{{ old('name', $data->name) }}" autocomplete="off" placeholder="SDG goal">
                            @if ($errors->has('name'))<div class="error">{{ $errors->first('name') }}</div>@endif
                        </div>
                        <p class="card-hed">Indicator &amp; Target</p>
                        <div class="table-responsive">
                            <input type="hidden" name="deleted_ids" id="deleted_ids" value="">
                            <table class="table" id="table">
                                <tbody>
                                <tr id="input-fields">
                                    <td>
                                        <label for="exampleInputName1">SDG Indicator Statement</label>
                                        <input type="text" class="form-control" id="statement" autocomplete="off" placeholder="SDG Indicator Statement">
                                        <div class="error" id="statement-error" style="display: none">The Statement field is required.</div>
                                    </td>

                                    <td>
                                        <label for="exampleInputName1">SDG Indicator Number</label>
                                        <input type="text" class="form-control" id="number" autocomplete="off" placeholder="SDG Indicator">
                                        <div class="error" id="number-error" style="display: none">The Number field is required.</div>

                                    </td>
                                    <td>
                                        <label for="exampleInputName1">SDG Target</label>
                                        <input type="text" class="form-control" id="target" autocomplete="off" placeholder="SDG Target">
                                        <div class="error" id="target-error" style="display: none">The Target field is required.</div>

                                    </td>
                                    <td width="100">
                                        <label for="exampleSDG-act">&nbsp;</label>
                                        <button type="button" class="btn btn-success" id="btnAdd">ADD</button>
                                    </td>
                                </tr>




                                @foreach($dataIndicator as $indicator)
                                    <tr>
                                        <td>
                                            <label for="exampleInputName1">SDG Target</label>
                                            <input type="text" class="form-control" id="target" autocomplete="off" placeholder="SDG Target" value="{{$indicator->target}}">
                                        </td>
                                    </tr>
                                    @if(isset($indicator->indicators) && !empty($indicator->indicators))
                                        @foreach($indicator->indicators as $indica)
                                            <tr style="background-color: rgba(243,243,243,1.00)">
                                                <td>
                                                    <input type="hidden" name="indicator_id[]" value="{{$indica->id}}">
                                                    <span>{{$indica->statement}}</span>
                                                    <input type="hidden" name="statement[]" value="{{$indica->statement}}">

                                                </td>
                                                <td>
                                                    <span>{{$indica->number}}</span>
                                                    <input type="hidden" name="number[]" value="{{$indica->number}}">
                                                </td>
                                                <td>
                                                    {{--                                                <span>{{$indicator->target}}</span>--}}
                                                    {{--                                                <input type="hidden" name="target[]" value="{{$indicator->target}}">--}}
                                                </td>
                                                <td width="100" align="center"><div class="minus btnRemove"  onclick="removeTr(this, {{$indica->id}})"></div></td>
                                            </tr>
                                        @endforeach
                                    @endif

                                @endforeach
                                </tbody>
                            </table>
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
        $("#btnAdd").on("click",function(){
            var statement = $('#statement').val();
            var number = $('#number').val();
            var target = $('#target').val();


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

            if(target.length == 0){
                $('#target-error').show();
            }else{
                $('#target-error').hide();
            }

            if((statement.length > 0) && (number.length > 0) && (target.length > 0)){
                var $tableBody = $('#table').find("tbody");
                var   $trLast = $tableBody.find("tr:first");
                // var   $trNew = $trLast.clone();

                var   $trNew ='<tr style="background-color: rgba(243,243,243,1.00)">\n' +
                    '                                    <td>' +
                    '                                        <input type="hidden" name="indicator_id[]" value="">\n' +
                    '                                        <span>'+statement+'</span>\n' +
                    '                                        <input type="hidden" name="statement[]" value="'+statement+'">\n' +
                    '                                    </td>\n' +
                    '                                    <td>\n' +
                    '                                        <span>'+number+'</span>\n' +
                    '                                        <input type="hidden" name="number[]" value="'+number+'">\n' +
                    '                                    </td> \n' +
                    '                                    <td>\n' +
                    '                                        <span>'+target+'</span>\n' +
                    '                                        <input type="hidden" name="target[]" value="'+target+'">\n' +
                    '                                    </td> \n' +
                    '                                    <td width="100" align="center"><div class="minus btnRemove" onclick="removeTr(this)"></div></td>\n' +
                    '                                </tr>';

                // $trLast.after($trNew);
                $trLast.after($trNew);
                $('#input-fields').find('input').val('');
            }

        });


        function removeTr(that, id = 0) {
            var deleted_ids = $('#deleted_ids').val();
            if(id!= 0){
                if(deleted_ids.length == 0){
                    $('#deleted_ids').val(id);
                }else{
                    $('#deleted_ids').val(deleted_ids+','+id);
                }
            }

            $(that).closest('tr').remove();

        }
    </script>
@endsection
