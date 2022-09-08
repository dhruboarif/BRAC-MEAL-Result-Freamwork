@extends('layouts.default')

@section('title', 'Program')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Generate Program Report</h4>
                    <hr>
                    <p class="card-description"></p>
                    <div class="row">
                        <div class="col-md-8 offset-2">
                            <form method="post" action="{{url('module-2/reports/excel-report')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <label for="exampleInputGool">Program </label>
                                                <select required style="width:100%" class="form-control" id="contributions_program" name="program">
                                                    @foreach($programs as $p)
                                                        <option value="{{$p->id}}">{{$p->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <button type="submit" class="btn btn-primary" style="margin-top: 30px">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets2/js/off-canvas.js') }}"></script>
@endsection
