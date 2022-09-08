@extends('layouts.default')

@section('title', 'Edit Donor')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body smart">
                    <h4 class="card-title">Edit Indicator & Outcome</h4>
                    <hr>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" action="">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputName1">Indicator No</label>
                            <input type="text" value="{{ $data->indicator_no }}" id="indicator_no" name="indicator_no"   class="form-control"   autocomplete="off" placeholder="Indicator Number">
                            @if ($errors->has('indicator_no'))<div class="error">{{ $errors->first('indicator_no') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Indicator Details</label>
                            <textarea class="form-control" id="indicator_description" name="indicator_description" rows="5" placeholder="Type your text here">{{ $data->indicator_description }} </textarea>
                            @if ($errors->has('indicator_description'))<div class="error">{{ $errors->first('indicator_description') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Outcome No</label>
                            <input type="text" value="{{ $data->outcome_no }}" id="outcome_no" name="outcome_no"   class="form-control"   autocomplete="off" placeholder="Outcome Number">
                            @if ($errors->has('outcome_no'))<div class="error">{{ $errors->first('outcome_no') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Outcome Details</label>
                            <textarea class="form-control" id="outcome_description" name="outcome_description" rows="5" placeholder="Type your text here">{{ $data->outcome_description }}</textarea>
                            @if ($errors->has('outcome_description'))<div class="error">{{ $errors->first('outcome_description') }}</div>@endif
                        </div>
                        <button type="submit" class="btn btn-primary cusbutton mr-2">Submit</button>
                        <a href="{{route('sdg.indicator-outcome.index')}}"> <button type="button" class="btn btn-dark">Cancel</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
