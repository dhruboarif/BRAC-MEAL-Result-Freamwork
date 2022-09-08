@extends('layouts.default')

@section('title', 'Create Profile')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body smart">
                    <a href="{{url(route('framework-establishment.index'))}}"><div class="hed-btn">List ❭</div></a>
                    <h4 class="card-title">Framework Establishment Detail</h4>
                    <p style="color:rgba(255,255,255,1.00)" class="card-description badge badge-danger"> Pillar, Impact, Outcome, Output </p>
                    <hr style="margin-top:0">
                    <form class="forms-sample" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputName1">Pillar Number</label>
                            <input type="text" disabled class="form-control" required id="pillar_number" name="pillar_number" value="{{old('pillar_number',  $data->number)}}" autocomplete="off" placeholder="Pillar Number">
                            @if ($errors->has('pillar_number'))<div class="error">{{ $errors->first('pillar_number') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Pillar Statement</label>
                            <input type="text" disabled class="form-control" required id="pillar_name" name="pillar_name" value="{{old('pillar_name',  $data->name)}}" autocomplete="off" placeholder="Pillar Statement">
                            @if ($errors->has('pillar_name'))<div class="error">{{ $errors->first('pillar_name') }}</div>@endif
                        </div>
                        <div class="row" style="background-color:rgba(117,244,255,1.00); margin: 1px;">
                            <div class="col-md-2">
                                Impact Number
                            </div>
                            <div class="col-md-10">
                                Impact Statement
                            </div>
                        </div>
                        <div class="row" style="margin: 1px;font-size: 14px">
                            @foreach($details as $d)
                                @if($d->type == 'IMPACT')
                                    <div class="col-md-2">
                                        {{$d->number}}
                                    </div>
                                    <div class="col-md-10">
                                        {{$d->statement}}
                                    </div>
                                @endif
                            @endforeach
                        </div><br>
                        <div class="row" style="background-color:rgba(117,244,255,1.00); margin: 1px;">
                            <div class="col-md-2">
                                Outcome Number
                            </div>
                            <div class="col-md-10">
                                Outcome Statement
                            </div>
                        </div>
                        <div class="row" style="margin: 1px;font-size: 14px">
                            @foreach($details as $d)
                                @if($d->type == 'OUTCOME')
                                    <div class="col-md-2">
                                        {{$d->number}}
                                    </div>
                                    <div class="col-md-10">
                                        {{$d->statement}}
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <br>
                        <div class="row" style="background-color:rgba(117,244,255,1.00); margin: 1px;">
                            <div class="col-md-2">
                                Outcome Number
                            </div>
                            <div class="col-md-10">
                                Outcome Statement
                            </div>
                        </div>
                        <div class="row" style="margin: 1px;font-size: 14px">
                            @foreach($details as $d)
                                @if($d->type == 'OUTPUT')
                                    <div class="col-md-2">
                                        {{$d->number}}
                                    </div>
                                    <div class="col-md-10">
                                        {{$d->statement}}
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets2/js/off-canvas.js') }}"></script>

@endsection
