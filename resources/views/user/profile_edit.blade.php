@extends('layouts.default')

@section('title', 'Edit Donor')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body smart">
                    <h4 class="card-title">Edit User Profile</h4>
                    <hr>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" value="{{ $user->name }}" class="form-control" id="name" name="name" autocomplete="off" placeholder="Name">
                            @if ($errors->has('name'))<div class="error">{{ $errors->first('name') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" value="{{ $user->email }}" class="form-control" id="email" name="email" autocomplete="off" placeholder="Email address">
                            @if ($errors->has('email'))<div class="error">{{ $errors->first('email') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="name">Profile Image</label>
                            <input type="file" value="" class="form-control" id="image" name="image" autocomplete="off" placeholder="Select image">
                            @if ($errors->has('image'))<div class="error">{{ $errors->first('image') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Password</label>
                            <input type="password" value="{{ old('password') }}" class="form-control" id="password" name="password" autocomplete="off" placeholder="Password">
                            @if ($errors->has('password'))<div class="error">{{ $errors->first('password') }}</div>@endif
                        </div>
                        <button type="submit" class="btn btn-primary cusbutton mr-2">Submit</button>
                        <a href="{{url('/user/profile')}}"><button type="button" class="btn btn-dark">Cancel</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
