@extends('layouts.default')

@section('title', 'Dashboard')

@section('style')
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Document Archive </h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control" id="name" name="name" value="" placeholder="Program name">
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="text" class="form-control" id="document" name="document" value="" placeholder="Document Type">
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="number" class="form-control" id="year" name="year" value="" placeholder="Year">
                        </div>
                        <div class="col-md-3 form-group">
                            <input type="button" class="form-control btn btn-sm btn-info text-white" id="searchBtn" name="searchBtn" value="Search">
                        </div>
                    </div>
                    <p class="card-description"></p>
                    <div class="table-responsive">
                        <table class="table table-hover" id="example">
                            <thead class="hd-bk">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Program</th>
                                <th>Type</th>
                                <th>Year</th>
                                <th style="width: 5%"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($archives as $key=>$archive)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$archive->name}}</td>
                                    <td>{{$archive->program->name}}</td>
                                    <td>{{$archive->documentType->name}}</td>
                                    <td>{{$archive->year}}</td>

                                    <td class="text-right">
                                        <a href="{{route('report.documents.document-type').'?arch='.$archive->id}}"><button class="btn btn-sm btn-info text-white">Details</button></a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <hr>
                        {{--@if ($archives->lastPage() > 1)
                            <nav data-pagination>
                                <a href="{{ $archives->url(1) }}" {{ ($archives->currentPage() == 1) ? ' disabled' : '' }}>&#10092;&#10092;</a>
                                <ul>
                                    @for ($i = 1; $i <= $archives->lastPage(); $i++)
                                        <li class="{{ ($archives->currentPage() == $i) ? ' current' : '' }}">
                                            <a href="{{ $archives->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                </ul>
                                <a href="{{ $archives->url($archives->currentPage()+1) }}" {{ ($archives->currentPage() == $archives->lastPage()) ? ' disabled' : '' }}>&#10093;&#10093;</a>
                            </nav>
                        @endif--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable(
                {info: false,
                    "columnDefs": [
                        { "targets": 0, "orderable": false },
                        { "targets": 5, "orderable": false },

                    ],}
            );

            $('#searchBtn').on('click', function () {
                table.columns(2).search( $('#name').val() ).draw();
                table.columns(3).search( $('#document').val() ).draw();
                table.columns(4).search( $('#year').val() ).draw();
            } );
        } );
    </script>
@endsection
