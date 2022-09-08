@extends('layouts.default')

@section('title', 'Thematic Area')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <a href="{{url('/thematic/create')}}"><span class="hed-btn">Add ❭</span></a>

                    <h4 class="card-title">Thematic Area List</h4>
                    <hr>
                    <p class="card-description"></p>
                    <div class="table-responsive smart">
                        <table class="table table-bordered">
                            <thead  class="hd-bk">
                            <tr>
                                <th>SL</th>
                                <th>Thematic Name</th>
                                <th>Description</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($thematics as $key=>$thematic)
{{--                                <tr class="table-{{($key%4==0)?'info':(($key%4==1)?'warning':(($key%4==2)?'danger':(($key%4==3)?'success':'primary')))}}">--}}
                                <tr>
                                    <td> {{++$key}}</td>
                                    <td> {{$thematic->name}} </td>
                                    <td style="white-space: normal; line-height: normal;"> {{$thematic->description}} </td>
                                    <td> {{ date('M d, Y h:i:s A', strtotime($thematic->created_at))}} </td>
                                    <td style="min-width: 175px">
                                        <a href="{{route('thematic.edit',$thematic->id)}}" class="text-decoration-none">
                                            <button type="button" class="btn btn-sm btn-dark">Edit</button>
                                        </a>
                                        &nbsp
                                        <a href="#" class="text-decoration-none"  onclick="deleteRow('{{$thematic->id}}');" >
                                            <button type="button" class="btn btn-sm btn-danger mr-2">Delete</button>
                                        </a>
                                        <form id="{{$thematic->id}}" action="{{ route('thematic.destroy', $thematic->id)}}" method="post" style="display: none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @if ($thematics->lastPage() > 1)
                            <nav data-pagination>
                                <a href="{{ $thematics->url(1) }}" {{ ($thematics->currentPage() == 1) ? ' disabled' : '' }}>&#10092;&#10092;</a>
                                <ul>
                                    @for ($i = 1; $i <= $thematics->lastPage(); $i++)
                                        <li class="{{ ($thematics->currentPage() == $i) ? ' current' : '' }}">
                                            <a href="{{ $thematics->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                </ul>
                                <a href="{{ $thematics->url($thematics->currentPage()+1) }}" {{ ($thematics->currentPage() == $thematics->lastPage()) ? ' disabled' : '' }}>&#10093;&#10093;</a>
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
