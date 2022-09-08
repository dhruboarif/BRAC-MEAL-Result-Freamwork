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
                    <h4 class="card-title">Search Archive  {{($search && !empty($search))?'Results for \''.$search.'\'':''}}</h4>
                    <hr>
                    <p class="card-description"></p>
                    <div class="table-responsive" style="display: {{($search && !empty($search))?'':'none'}}">
                        <table class="table table-hover" id="example" >
                            <thead class="hd-bk">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Program/Support Function</th>
                                <th>Archive Type</th>
                                <th style="width: 5%"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key=>$archive)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$archive['name']}}</td>
                                    <td>{{$archive['program']}}</td>
                                    <td>{{$archive['archive_type']}}</td>
                                    <td class="text-right">
                                        <a href="{{($archive['archive_type'] == 'STUDY')?route('archive.study.show', $archive['id']):'#'}}">
                                            <button class="btn btn-sm btn-info text-white">Details</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <hr>
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
                {"columnDefs": [
                        { "targets": 0, "orderable": true },
                        { "targets": 3, "orderable": true },
                    ],}
            );

            table.columns(1).search( '{{$search}}' ).draw();
            {{--table.columns(2).search( '{{$search}}' ).draw();--}}
        } );
    </script>
@endsection
