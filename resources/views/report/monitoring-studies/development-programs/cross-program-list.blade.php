@extends('layouts.default')

@section('title', 'Dashboard')

@section('style')
@endsection

@section('content')

    <div class="row">
        <div class="col-lg-12 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Cross Program List</h4>
                    <hr>
                    <p class="card-description"></p>
                    <div class="table-responsive smart">

                        @foreach($data as $d)
                            <a href="{{route('report.monitoring-studies.development-programs.cross-program-list').'?trace='.$d->id}}">
                                <div class="thm-con">
                                    <div class="thm-4"></div>
                                    <p>{{$d->name}}</p>
                                </div>
                            </a>
                        @endforeach

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
@endsection
