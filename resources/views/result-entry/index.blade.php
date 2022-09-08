@extends('layouts.default')

@section('title', 'Program')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <a href="{{url(route('result-entry.create'))}}"><div class="hed-btn">Add ❭</div></a>
                    <h4 class="card-title">Result Entry Details</h4>
                    <hr>
                    <div class="row">
                        @php
                            $pillerField = [];
                            $programFiled = [];
                                foreach($data as $key=>$d){
                                    if(isset($d->pillar->name) && !in_array($d->pillar->name, $pillerField)){
                                        $pillerField[] = $d->pillar->name;
                                    }

                                    if(isset($d->program->name) && !in_array($d->program->name, $pillerField)){
                                        $programFiled[] = $d->program->name;
                                    }

                                }
                        @endphp

                        <div class="col-md-4 form-group">
                            <select  class="form-control" id="pilar" name="pilar" >
                                <option value="">Select One Pillar</option>
                                @foreach($pillerField as $p)
                                    <option value="{{$p}}">{{$p}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 form-group">
                            <select  class="form-control"  id="program" name="program"  >
                                <option value="">Select One Program</option>
                                @foreach($programFiled as $p)
                                    <option value="{{$p}}">{{$p}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 form-group">
                            <input type="button" class="form-control btn btn-sm btn-info text-white" id="searchBtn" name="searchBtn" value="Search">
                        </div>
                    </div>
                    <p class="card-description"></p>
                    <div class="table-responsive smart" >
                        <table class="table table-bordered table-hover" id="example">
                            <thead class="hd-bk">
                            <tr>
                                <th>SL</th>
                                <th>Pillar</th>
                                <th>Program</th>
                                <th>Formula</th>
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
{{--                                        {{isset($d->pillar->name)?$d->pillar->name:''}}--}}
                                        <?php
                                        if (isset($d->pillar->name)){
                                            $text = $d->pillar->name;
                                            $newtext = wordwrap($text, 35, "<br>", true);
                                            echo "$newtext\n";
                                        }else{

                                        }

                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                        if (isset($d->program->name)){
                                            $text = $d->program->name;
                                            $newtext = wordwrap($text, 35, "<br>", true);
                                            echo "$newtext\n";
                                        }else{

                                        }

                                        ?>
                                    </td>
                                    <td> {{$d->formula}} </td>
{{--                                    <td> {{ date('M d, Y h:i:s A', strtotime($d->created_at))}} </td>--}}
                                    <td>
                                        <a href="{{route('result-entry.edit',$d->id)}}" class="text-decoration-none">
                                            <button type="button" class="btn btn-sm btn-dark">Edit</button>
                                        </a>
                                        &nbsp
                                       <a href="#" class="text-decoration-none"  onclick="deleteRow('{{$d->id}}')" >
                                            <button type="button" class="btn btn-sm btn-danger mr-2">Delete</button>
                                        </a>
                                        <form id="{{$d->id}}" action="{{ route('result-entry.destroy', $d->id)}}" method="post" style="display: none">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <a href="{{route('result-entry.show',$d->id)}}" class="text-decoration-none">
                                            <button type="button" class="btn btn-sm btn-dark mr-2">Detail</button>
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
                        { "targets": 4, "orderable": true },

                    ],}
            );

            $('#searchBtn').on('click', function () {
                table.columns(1).search( $('#pillar').val() ).draw();
                table.columns(2).search( $('#program').val() ).draw();
            } );
        } );
    </script>
@endsection
