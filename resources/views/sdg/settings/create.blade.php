@extends('layouts.default')

@section('title', 'Create Indicator and Outcome')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('sdg.settings.index')}}"><span class="btn-add text-white">List ❭</span></a>

                    <h4 class="card-title">SDG Settings</h4>
                    <hr>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" action="">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">SDG Goal</label>
                            <input type="text" value="{{ old('name') }}" required id="name" name="name"   class="form-control"   autocomplete="off" placeholder="SDG Goal">
                            @if ($errors->has('name'))<div class="error">{{ $errors->first('name') }}</div>@endif
                        </div>


                        <div class="indicators">
                            <div class="new-indicator" id="id0">
                                <p class="card-hed pr-1" >
                                    SDG Indicator
                                    <span class="btn-sm btn-add text-white p-1 add-more">Add</span>
                                </p>

                                <div class="form-group">
                                    <label for="exampleInputName1">SDG Indicator</label>
                                    <input type="text" required value="{{ old('indicator_name') }}" id="indicator_name" name="indicator_name[]"   class="form-control"   autocomplete="off" placeholder="SDG Indicator">
                                    @if ($errors->has('indicator_name'))<div class="error">{{ $errors->first('indicator_name') }}</div>@endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">SDG Target</label>
                                    <input type="text" required value="{{ old('sdg_target') }}" id="sdg_target" name="sdg_target[]"   class="form-control"   autocomplete="off" placeholder="SDG Target">
                                    @if ($errors->has('sdg_target'))<div class="error">{{ $errors->first('sdg_target') }}</div>@endif
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary cusbutton mr-2">Submit</button>
                        <button type="reset" class="btn btn-dark">Cancel</button>
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
            $(this).parent().parent().remove();
        });
    </script>
@endsection
