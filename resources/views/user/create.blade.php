@extends('layouts.default')

@section('title', 'Create Donor')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{url('/user')}}"><span class="hed-btn">List ❭</span></a>
                    <h4 class="card-title">User Information</h4>
                    <hr>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" action="">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" value="{{ old('name') }}" class="form-control" id="name" name="name" autocomplete="off" placeholder="Name">
                            @if ($errors->has('name'))<div class="error">{{ $errors->first('name') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="text" value="{{ old('email') }}" class="form-control" id="email" name="email" autocomplete="off" placeholder="Email address">
                            @if ($errors->has('email'))<div class="error">{{ $errors->first('email') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Password</label>
                            <input type="password" value="{{ old('password') }}" class="form-control" id="password" name="password" autocomplete="off" placeholder="Password">
                            @if ($errors->has('password'))<div class="error">{{ $errors->first('password') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="program">Role</label>
                            <select class="form-control" id="role" name="role">
                                <option value="">Select</option>
                                <option value="admin">Admin</option>
                                <option value="supervisor">Supervisor</option>
                                <option value="registered">Registered</option>
                            </select>
                            @if ($errors->has('role'))<div class="error">{{ $errors->first('role') }}</div>@endif
                        </div>

                        <div class="form-group">
                            <label for="parent">Parent</label>
                            <select class="form-control" id="parent" name="parent">
                                <option value="">Select</option>
                                @foreach($parents as $parent)
                                    <option value="{{$parent->id }}" {{ ($parent->id == old('parent'))?'selected':'' }}>{{$parent->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('parent'))<div class="error">{{ $errors->first('parent') }}</div>@endif
                        </div>

                        <div class="form-group">
                            <label for="parent">Program</label>
                            <select class="form-control" id="parent" name="program">
                                <option value="">Select</option>
                                @foreach($programs as $program)
                                    <option value="{{$program->id }}" {{ ($program->id == old('program'))?'selected':'' }}>{{$program->name}}</option>
                                @endforeach
                            </select>
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
