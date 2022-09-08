@extends('layouts.default')

@section('title', 'Create Framework and Indicator Establishment')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="#"><span class="btn-add text-white">List ❭</span></a>

                    <h4 class="card-title">Framework Establishment</h4>
                    <hr>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" action="">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Pillar Number</label>
                            <input type="text" value="{{ old('pillar_number') }}"  id="pillar_number" name="pillar_number"   class="form-control"   autocomplete="off" placeholder="Pillar Number">
                            @if ($errors->has('pillar_number'))<div class="error">{{ $errors->first('pillar_number') }}</div>@endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Pillar Name</label>
                            <input type="text" value="{{ old('pillar_name') }}"  id="pillar_name" name="pillar_name"   class="form-control"   autocomplete="off" placeholder="Pillar Name">
                            @if ($errors->has('pillar_name'))<div class="error">{{ $errors->first('pillar_name') }}</div>@endif
                        </div>


                        <div class="table-responsive">
                            <label for="exampleInputName1">Framework Establishment</label>
                            <table class="table table-bordered table-hover" id="indicator">
                                <thead class="hd-bk">
                                <tr>
                                    <th>Type</th>
                                    <th>Number</th>
                                    <th>Statement</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr id="0">
                                    <td style="width: 25%">
                                        <select class="form-control" id="type" name="type[]" >
                                            <option value="">Select</option>
                                            <option value="IMPACT">Impact</option>
                                            <option value="OUTCOME">Outcome</option>
                                            <option value="OUTPUT">Output</option>
                                        </select>
                                        @if ($errors->has('type'))<div class="error">{{ $errors->first('type') }}</div>@endif
                                    </td>
                                    <td style="width: 25%">
                                        <input type="text"  value="{{ old('number') }}" id="number" name="number[]"   class="form-control"   autocomplete="off" placeholder="Number">
                                        @if ($errors->has('number'))<div class="error">{{ $errors->first('number') }}</div>@endif
                                    </td>

                                    <td style="width: 25%">
                                        <input type="text"  value="{{ old('statement') }}" id="statement" name="statement[]"   class="form-control"   autocomplete="off" placeholder="Statement">
                                        @if ($errors->has('statement'))<div class="error">{{ $errors->first('statement') }}</div>@endif
                                    </td>

                                    <td style="width: 25%">
                                        <button type="button" class="btn btn-sm btn-success mr-2 add-more">Add More</button>
                                        <button type="button" class="btn btn-sm btn-danger mr-2 remove">Remove</button>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
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
    <script>
        var cloneCount = 1;
        $("body").on("click",".add-more",function(){
            var html = $("table tbody tr").first().clone().attr('id',  cloneCount++);
            // $(html).find(".add-more").removeClass("add-more").addClass('remove').text('Remove');
            $(html).find("input").val('');
            $("table tr:last").last().after(html);

            $('html, body').animate({
                scrollTop: ($(html).offset().top)
            }, 500);
        });

        $("body").on("click",".remove",function(){
            if($('#indicator >tbody >tr').length > 1){
                $(this).parent().parent().remove();
            }else{
                swal({
                    icon: 'error',
                    title: '',
                    text: 'Sorry! Minimum one indicator is required',
                })
            }
        });
    </script>
@endsection
