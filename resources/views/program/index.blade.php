@extends('layouts.default')

@section('title', 'Program')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <a href="{{url('/program/create')}}"><span class="hed-btn">Add ❭</span></a>
                    <h4 class="card-title">Program Details</h4>
                    <hr>
                    <p class="card-description"></p>
                    <div class="table-responsive smart">
                        <table class="table table-bordered table-hover">
                            <thead class="hd-bk">
                            <tr>
                                <th>SL</th>
                                <th>Program Name</th>
                                <th>Program Type</th>
                                <th>Support Function</th>
                                <th>Description</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($programs as $key=>$program)
{{--                                <tr class="table-{{($key%4==0)?'info':(($key%4==1)?'warning':(($key%4==2)?'danger':(($key%4==3)?'success':'primary')))}}">--}}
                                <tr>
                                    <td> {{++$key}}</td>
                                    <td> {{$program->name}} </td>
                                    <td> {{$program->type}} </td>
                                    <td> {{($program->category == 'SUPPORT_FUNCTION')?'Yes': 'No'}} </td>
                                    <td style="white-space: normal; line-height: normal;"> {{$program->description}} </td>
                                    <td> {{ date('M d, Y h:i:s A', strtotime($program->created_at))}} </td>
                                    <td style="white-space: normal; line-height: normal; min-width: 175px">
                                        <a href="{{route('program.edit',$program->id)}}" class="text-decoration-none">
                                            <button type="button" class="btn btn-sm btn-dark">Edit</button>
                                        </a>
                                        &nbsp
                                        <a href="#" class="text-decoration-none"  onclick="deleteRow('{{$program->id}}')" >
                                            <button type="button" class="btn btn-sm btn-danger mr-2">Delete</button>
                                        </a>
                                        <form id="{{$program->id}}" action="{{ route('program.destroy', $program->id)}}" method="post" style="display: none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @if ($programs->lastPage() > 1)
                            <nav data-pagination>
                                <a href="{{ $programs->url(1) }}" {{ ($programs->currentPage() == 1) ? ' disabled' : '' }}>&#10092;&#10092;</a>
                                <ul>
                                    @for ($i = 1; $i <= $programs->lastPage(); $i++)
                                        <li class="{{ ($programs->currentPage() == $i) ? ' current' : '' }}">
                                            <a href="{{ $programs->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                </ul>
                                <a href="{{ $programs->url($programs->currentPage()+1) }}" {{ ($programs->currentPage() == $programs->lastPage()) ? ' disabled' : '' }}>&#10093;&#10093;</a>
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
