@extends('layouts.default')

@section('title', 'Indicator and Outcome')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <a href="{{route('sdg.indicator-outcome.create')}}"><span class="btn-add text-white">Add ❭</span></a>

                    <h4 class="card-title">Indicator & Outcome List</h4>
                    <hr>
                    <p class="card-description"></p>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="hd-bk">
                            <tr>
                                <th>SL</th>
                                <th>Indicator No</th>
                                <th>Indicator Description</th>
                                <th>Outcome No</th>
                                <th>Outcome Description</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key=>$d)
                                <tr>
                                    <td> {{++$key}}</td>
                                    <td> {{$d->indicator_no}} </td>
                                    <td  style="white-space: normal; line-height: normal;"> {{$d->indicator_description}} </td>
                                    <td> {{$d->outcome_no}} </td>
                                    <td  style="white-space: normal; line-height: normal;"> {{$d->outcome_description}} </td>
                                    <td> {{ date('M d, Y h:i:s A', strtotime($d->created_at))}} </td>
                                    <td>
                                        <a href="{{route('sdg.indicator-outcome.edit',$d->id)}}" class="text-decoration-none">
                                            <button type="button" class="btn btn-sm btn-dark">Edit</button>
                                        </a>
                                        &nbsp
                                        <a href="#" class="text-decoration-none"  onclick="deleteRow('{{$d->id}}');" >
                                            <button type="button" class="btn btn-sm btn-danger mr-2">Delete</button>
                                        </a>
                                        <form id="{{$d->id}}" action="{{ route('sdg.indicator-outcome.destroy', $d->id)}}" method="post" style="display: none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        @if ($data->lastPage() > 1)
                            <nav data-pagination>
                                <a href="{{ $data->url(1) }}" {{ ($data->currentPage() == 1) ? ' disabled' : '' }}>&#10092;&#10092;</a>
                                <ul>
                                    @for ($i = 1; $i <= $data->lastPage(); $i++)
                                        <li class="{{ ($data->currentPage() == $i) ? ' current' : '' }}">
                                            <a href="{{ $data->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                </ul>
                                <a href="{{ $data->url($data->currentPage()+1) }}" {{ ($data->currentPage() == $data->lastPage()) ? ' disabled' : '' }}>&#10093;&#10093;</a>
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
