@extends('layouts.default')

@section('title', 'Support Function')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <a href="{{url('/support/create')}}"><span class="btn-add text-white">Add ❭</span></a>
                    <h4 class="card-title">Support Function List</h4>
                    <hr>
                    <p class="card-description"></p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="hd-bk">
                            <tr>
                                <th>SL</th>
                                <th>Function Name</th>
                                <th>Description</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($supports as $key=>$support)
{{--                                <tr class="table-{{($key%4==0)?'info':(($key%4==1)?'warning':(($key%4==2)?'danger':(($key%4==3)?'success':'primary')))}}">--}}
                                <tr>
                                    <td> {{++$key}}</td>
                                    <td> {{$support->name}} </td>
                                    <td  style="white-space: normal; line-height: normal;"> {{$support->description}} </td>
                                    <td> {{ date('M d, Y h:i:s A', strtotime($support->created_at))}} </td>
                                    <td>
                                        <a href="{{route('support.edit',$support->id)}}" class="text-decoration-none">
                                            <button type="button" class="btn btn-sm btn-dark">Edit</button>
                                        </a>
                                        &nbsp
                                        <a href="#" class="text-decoration-none"  onclick="document.getElementById('{{$support->id}}').submit();" >
                                            <button type="button" class="btn btn-sm btn-danger mr-2">Delete</button>
                                        </a>
                                        <form id="{{$support->id}}" action="{{ route('support.destroy', $support->id)}}" method="post" style="display: none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
