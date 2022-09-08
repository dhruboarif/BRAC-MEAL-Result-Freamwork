@extends('layouts.default')

@section('title', 'Donor')

@section('style')

@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <a href="{{url('/user/create')}}"><span class="hed-btn">Add ❭</span></a>
                    <h4 class="card-title">User List</h4>
                    <hr>
                    <p class="card-description"></p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead  class="hd-bk">
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Parent</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key=>$user)
{{--                                <tr class="table-{{($key%4==0)?'info':(($key%4==1)?'warning':(($key%4==2)?'danger':(($key%4==3)?'success':'primary')))}}">--}}
                                <tr>
                                    <td> {{ ($users->currentpage()-1) * $users->perpage() + $key + 1 }}</td>
                                    <td> {{$user->name}} </td>
                                    <td> {{$user->email}} </td>
                                    <td> {{ucwords(str_replace('-', ' ', $user->role))}} </td>
                                    <td> {{ucwords(str_replace('-', ' ', $user->parent->name))}} </td>
                                    <td> {{ date('M d, Y h:i:s A', strtotime($user->created_at))}} </td>
                                    <td style="min-width: 175px">
                                        <a href="{{route('user.edit',$user->id)}}" class="text-decoration-none">
                                            <button type="button" class="btn btn-sm btn-dark">Edit</button>
                                        </a>
                                        &nbsp
                                        <a href="#" class="text-decoration-none"  onclick="deleteRow('{{$user->id}}');" >
                                            <button type="button" class="btn btn-sm btn-danger mr-2">Delete</button>
                                        </a>
                                        <form id="{{$user->id}}" action="{{ route('user.destroy', $user->id)}}" method="post" style="display: none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        @if ($users->lastPage() > 1)
                            <nav data-pagination>
                                <a href="{{ $users->url(1) }}" {{ ($users->currentPage() == 1) ? ' disabled' : '' }}>&#10092;&#10092;</a>
                                <ul>
                                    @for ($i = 1; $i <= $users->lastPage(); $i++)
                                        <li class="{{ ($users->currentPage() == $i) ? ' current' : '' }}">
                                            <a href="{{ $users->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                </ul>
                                <a href="{{ $users->url($users->currentPage()+1) }}" {{ ($users->currentPage() == $users->lastPage()) ? ' disabled' : '' }}>&#10093;&#10093;</a>
                            </nav>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function deleteRow(formId){
            swal({
                    title: "Are you sure?",
                    text: "Your will not be able to recover this data!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                },
                function(){
                    document.getElementById(formId).submit();
                });

        }
    </script>
@endsection
