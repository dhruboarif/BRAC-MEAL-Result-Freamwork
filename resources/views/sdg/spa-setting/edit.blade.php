@extends('layouts.default')

@section('title', 'Edit Donor')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body smart">
                    <h4 class="card-title">Edit Donor Information</h4>
                    <hr>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" action="">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputName1">SDG Goal</label>
                            <input type="text" required value="{{ $data->name }}" id="name" name="name"   class="form-control"   autocomplete="off" placeholder="SDG Goal">
                            @if ($errors->has('name'))<div class="error">{{ $errors->first('name') }}</div>@endif
                        </div>


                        <div class="indicators">
                            <input type="hidden" name="deleted-indicators" id="deleted-indicators" value="" >

                            @foreach($data->sdgIndicators as $key=>$val)
                                <div class="new-indicator" id="id{{$key}}">
                                    <p class="card-hed pr-1" >
                                        SDG Indicator
                                        @if($key == 0)
                                            <span class="btn-sm btn-add text-white p-1 add-more" id =''>Add</span>
                                        @else
                                            <span class="btn-sm btn-add text-white p-1 remove" id ={{ $val->id }}>Remove</span>
                                        @endif
                                    </p>
                                    <input type="hidden" value="{{ $val->id }}" id="indicator_id" name="indicator_id[]"   class="form-control"   autocomplete="off" placeholder="SDG Indicator id">


                                    <div class="form-group">
                                        <label for="exampleInputName1">SDG Indicator</label>
                                        <input type="text" required value="{{ $val->indicator_name }}" id="indicator_name" name="indicator_name[]"   class="form-control"   autocomplete="off" placeholder="SDG Indicator">
                                        @if ($errors->has('indicator_name'))<div class="error">{{ $errors->first('indicator_name') }}</div>@endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">SDG Target</label>
                                        <input type="text" requiredp value="{{ $val->sdg_target }}" id="sdg_target" name="sdg_target[]"   class="form-control"   autocomplete="off" placeholder="SDG Target">
                                        @if ($errors->has('sdg_target'))<div class="error">{{ $errors->first('sdg_target') }}</div>@endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-primary cusbutton mr-2">Submit</button>
                        <a href="{{url('/donor')}}"> <button type="button" class="btn btn-dark">Cancel</button></a>
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
            var html = $(".new-indicator").first().clone().attr('id', 'id'+ cloneCount++);
            $(html).find(".add-more").removeClass("add-more").addClass('remove').text('Remove');
            $(html).find("input").val('');
            $(".new-indicator").last().after(html);
        });

        $("body").on("click",".remove",function(){
            var deletedIds = $('#deleted-indicators').val();
            var currentDelete = $(this).attr('id');

            if(deletedIds.length > 0){
                $('#deleted-indicators').val(deletedIds + ','+currentDelete);
            }else{
                $('#deleted-indicators').val(currentDelete);
            }

            $(this).parent().parent().remove();
        });
    </script>
@endsection

