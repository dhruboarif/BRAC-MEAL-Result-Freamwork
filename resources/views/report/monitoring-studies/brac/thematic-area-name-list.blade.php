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
                    <h4 class="card-title">Archives</h4>
                    <hr>
                    <p class="card-description"></p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="hd-bk">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Program/Support Function</th>
                                <th>Version</th>
                                <th>Status</th>
                                <th style="width: 5%"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($studyArchives as $key=>$archive)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$archive->name}}</td>
                                    <td>{{$archive->program->name}} ( {{$archive->program->type}}: {{str_replace('_', ' ', $archive->program->category)}})</td>
                                    <td>{{($archive->version_status == 'NEW')?$archive->version:$archive->version_status}}</td>
                                    <td>
                                        @if($archive->status == 'A')
                                            <label class="badge badge-info pnd">Approved</label>
                                        @elseif($archive->status == 'R')
                                            <label class="badge badge-danger pnd">Rejected</label>
                                        @elseif($archive->status == 'D')
                                            <label class="badge badge-primary pnd">Draft</label>
                                        @else
                                            <label class="badge badge-busy pnd">Pending</label>

                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <a href="{{route('report.monitoring-studies.brac.thematic-area-name').'?arch='.$archive->id}}"><button class="btn btn-sm btn-info text-white">Details</button></a>

                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <hr>
                        @if ($studyArchives->lastPage() > 1)
                            <nav data-pagination>
                                <a href="{{ $studyArchives->url(1) }}" {{ ($studyArchives->currentPage() == 1) ? ' disabled' : '' }}>&#10092;&#10092;</a>
                                <ul>
                                    @for ($i = 1; $i <= $studyArchives->lastPage(); $i++)
                                        <li class="{{ ($studyArchives->currentPage() == $i) ? ' current' : '' }}">
                                            <a href="{{ $studyArchives->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                </ul>
                                <a href="{{ $studyArchives->url($studyArchives->currentPage()+1) }}" {{ ($studyArchives->currentPage() == $studyArchives->lastPage()) ? ' disabled' : '' }}>&#10093;&#10093;</a>
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
