@extends('layouts.default')

@section('title', 'Program')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">SPA Report</h4>
                    <hr>
                    <p class="card-description"></p>
                    <div class="table-responsive smart">
                        <table class="table table-bordered table-hover">
                            <thead class="hd-bk">
                            <tr>
                                <th class="w-25">SL</th>
                                <th class="w-25">Pillar Number</th>
                                <th class="w-25">Pillar Statement</th>
                                <th class="w-25 text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key=>$d)
                                <tr>
                                    <td> {{++$key}}</td>
                                    <td> {{$d->number}} </td>
                                    <td> {{$d->name}} </td>
                                    <td>
                                        <a href="{{route('spa-report.index')}}?pillar={{$d->id}}" class="text-decoration-none">
                                            <button type="button" class="btn btn-sm btn-dark">Details</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @if ($data->lastPage() > 1)
                            <nav data-pagination>
                                <a href="{{ $d->url(1) }}" {{ ($data->currentPage() == 1) ? ' disabled' : '' }}>&#10092;&#10092;</a>
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
    <script src="{{ asset('assets2/js/off-canvas.js') }}"></script>
@endsection
