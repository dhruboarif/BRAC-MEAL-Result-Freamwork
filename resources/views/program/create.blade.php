@extends('layouts.default')

@section('title', 'Create Profile')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{url('/program')}}"><span class="hed-btn">List ❭</span></a>
                    <h4 class="card-title">Add Program Name</h4><hr>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" action="">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Program/Support Function Name</label>
                            <input type="text" value="{{ old('name') }}" class="form-control" id="name" name="name" autocomplete="off" placeholder="Profile Name">
                            @if ($errors->has('name'))<div class="error">{{ $errors->first('name') }}</div>@endif
                        </div>

                        <div class="form-group">
                            <label for="exampleSelectGender">Program Type</label>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" value="BRAC" {{ ('BRAC' == old('type'))?'checked':'' }} name="type" id="type" class="form-check-input">
                                            BRAC<i class="input-helper"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" value="CROSS" {{ ('CROSS' == old('type'))?'checked':'' }}  name="type" id="type" class="form-check-input">
                                            Cross<i class="input-helper"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" value="DEVEOPMENT" {{ ('DEVEOPMENT' == old('type'))?'checked':'' }}  name="type" id="type" class="form-check-input">
                                            Development<i class="input-helper"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" value="OTHERS" {{ ('OTHERS' == old('type'))?'checked':'' }}  name="type" id="type" class="form-check-input">
                                            Others<i class="input-helper"></i>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-4"></div>
                                @if ($errors->has('type'))<div class="error col-md-2">{{ $errors->first('type') }}</div>@endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleSelectGender">Is Support Function</label>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" value="PROGRAM" {{ ('PROGRAM' == old('category'))?'checked':'' }} name="category" id="category" class="form-check-input">
                                            No<i class="input-helper"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" value="SUPPORT_FUNCTION" {{ ('SUPPORT_FUNCTION' == old('category'))?'checked':'' }}  name="category" id="category" class="form-check-input">
                                            Yes<i class="input-helper"></i>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-8"></div>
                                @if ($errors->has('category'))<div class="error col-md-2">{{ $errors->first('category') }}</div>@endif
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="exampleTextarea1">Program/Support Function Description</label>
                            <textarea class="form-control" id="description" name="description" rows="5" placeholder="Type your text here">{{ old('description') }}</textarea>
                            @if ($errors->has('description'))<div class="error">{{ $errors->first('description') }}</div>@endif
                        </div>
                        <button type="submit" class="btn btn-primary cusbutton mr-2">Add Program</button>
                        <button type="reset" class="btn btn-dark">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
