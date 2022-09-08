@extends('layouts.default')

@section('title', 'Edit Document Type')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body smart">
                    <h4 class="card-title">Edit Document Type</h4>
                    <hr>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" action="">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" value="{{ $documentType->name  }}" class="form-control" id="name" name="name" autocomplete="off" placeholder="Document Type Name">
                            @if ($errors->has('name'))<div class="error">{{ $errors->first('name') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control"  id="description" name="description" rows="5" placeholder="Type your text here">{{ $documentType->description  }}</textarea>
                            @if ($errors->has('description'))<div class="error">{{ $errors->first('description') }}</div>@endif
                        </div>
                        <button type="submit" class="btn btn-primary cusbutton mr-2">Submit</button>
                        <a href="{{url('/document-type/create')}}"><button type="button" class="btn btn-dark">Cancel</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
