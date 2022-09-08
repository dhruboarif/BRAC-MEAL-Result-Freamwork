@extends('layouts.default')

@section('title', 'Program')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <a href="{{url(route('indicator-registration.create'))}}"> <div class="hed-btn">Add ❭</div></a>
                    <h4 class="card-title">Indicator Registration  Details</h4>
                    <hr>
                    <div class="row">
                        @php
                            $pillerField = [];
                            $indicatorField = [];
                                foreach($data as $key=>$d){
                                    if(!in_array($d->name, $pillerField)){
                                        $pillerField[] = $d->name;
                                    }
                                    if(!in_array($d->indicator_type, $indicatorField)){
                                        $indicatorField[] = $d->indicator_type;
                                    }
                                }
                        @endphp
                        <div class="col-md-4 form-group">
                            <select  class="form-control" id="pillar" name="pillar">
                                <option value="">Select One Piller</option>
                                @foreach($pillerField as $p)
                                    <option value="{{$p}}">{{$p}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 form-group">

                            <select  class="form-control" id="indicator" name="indicator" >
                                <option value="">Select One Indicator Type</option>
                                @foreach($indicatorField as $p)
                                    <option value="{{$p}}">{{$p}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="button" class="form-control btn btn-sm btn-info text-white" id="searchBtn" name="searchBtn" value="Search">
                        </div>
                    </div>
                    <p class="card-description"></p>
                    <div class="table-responsive smart">
                        <table class="table table-bordered table-hover" id="example">
                            <thead class="hd-bk">
                            <tr>
                                <th>SL</th>
                                <th>Pillar</th>
                                <th>Indicator Type</th>
                                <th>Indicator<br> Number</th>
                                <th>Indicator Statement</th>
                                {{--                                <th>Created At</th>--}}
                                <th style="min-width: 250px">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($data as $key=>$d)
                                <tr>
                                    {{--                                    <td> {{$key + $data->firstItem()}}</td>--}}
                                    <td> {{++$key}}</td>
                                    <td>
                                        <?php
                                        $text = $d->name;
                                        $newtext = wordwrap($text, 35, "<br>", true);
                                        echo "$newtext\n";
                                        ?>
                                    </td>
                                    <td> {{$d->indicator_type}} </td>
                                    <td> {{$d->indicator_number}} </td>
                                    <td>
                                        <?php
                                        $text = $d->indicator_statement;
                                        $newtext = wordwrap($text, 35, "<br>", true);
                                        echo "$newtext\n";
                                        ?>
                                    </td>
                                    {{--                                    <td> {{ date('M d, Y h:i:s A', strtotime($d->created_at))}} </td>--}}
                                    <td>
                                        <a href="{{route('indicator-registration.show',$d->id)}}" class="text-decoration-none">
                                            <button type="button" class="btn btn-sm btn-dark">Details</button>
                                        </a>
                                        &nbsp
                                        <a href="#" class="text-decoration-none"  onclick="deleteRow('{{$d->id}}')" >
                                            <button type="button" class="btn btn-sm btn-danger mr-2">Delete</button>
                                        </a>
                                        <form id="{{$d->id}}" action="{{ route('indicator-registration.destroy', $d->id)}}" method="post" style="display: none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <a href="{{route('indicator-registration.edit',$d->id)}}" class="text-decoration-none">
                                            <button type="button" class="btn btn-sm btn-dark mr-2">Edit</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{--@if ($data->lastPage() > 1)
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
                        @endif--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets2/js/off-canvas.js') }}"></script>
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

    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable(
                // {searching: false, paging: false, info: false, }

                {"columnDefs": [
                        { "targets": 0, "orderable": true },
                        { "targets": 5, "orderable": true },

                    ],}
            );

            $('#searchBtn').on('click', function () {
                table.columns(1).search( $('#pillar').val() ).draw();
                table.columns(2).search( $('#indicator').val() ).draw();
            } );
        } );
    </script>
@endsection
