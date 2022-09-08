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
                    <h4 class="card-title">Learning Action Archive</h4>
                    <hr>
                    <p class="card-description"></p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="hd-bk">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Program</th>
                                <th>Year</th>
                                <th style="width: 5%"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($archives as $key=>$archive)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$archive->name}}</td>
                                    <td>{{$archive->type}}</td>
                                    <td>{{$archive->program->name}}</td>
                                    <td>{{$archive->year}}</td>
                                    <td class="text-right">
                                        <a href="{{route('report.learning-actions.program-list').'?arch='.$archive->id}}">
                                            <button class="btn btn-sm btn-info text-white">Details</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <hr>
                        @if ($archives->lastPage() > 1)
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
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
