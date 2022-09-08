@extends('layouts.default')

@section('title', 'Dashboard')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 stretch-card grid-margin">
            <div class="card">
                <div class="card-body smart"><span class="btn-add"><a href="{{route('user.profile_edit')}}">Edit</a></span>
                    <h4 class="card-title">User Profile</h4>
                    <hr>
                    <!--<p class="apr-name"></p>-->
                    <div class="table-responsive">
                        <div class="upic">
                            <img src="{{asset('assets/images/avatar.png')}}" alt="User" width="200">
                            <span class="unam">{{$user->name}}</span>
                        </div>
                        <table class="table">
                            <tbody>

                            <tr>
                                <td>Role : </td>
                                <td> {{$user->role}}</td>
                            </tr>
                            <tr>
                                <td>E-mail:</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td>Status :</td>
                                <td>{{($user->status == 'A')?'Active':'inactive'}}</td>
                            </tr>
                            <tr>
                                <td>Created At :</td>
                                <td>{{$user->created_at}}</td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
