@extends('layouts.default')

@section('title', 'Create Support Function')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{url('/support')}}"><span class="btn-add text-white">List ❭</span></a>
                    <h4 class="card-title">Support Function</h4>
                    <hr>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" action="">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" value="{{ old('name') }}" class="form-control" id="name" name="name" autocomplete="off" placeholder="Support Function Name">
                            @if ($errors->has('name'))<div class="error">{{ $errors->first('name') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="5" placeholder="Type your text here">{{ old('description') }}</textarea>
                            @if ($errors->has('description'))<div class="error">{{ $errors->first('description') }}</div>@endif
                        </div>
                        <button type="submit" class="btn btn-primary cusbutton mr-2">Submit</button>
                        <button type="reset" class="btn btn-dark">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
