@extends('layouts.default')

@section('title', 'Relevant SDG Establishment Details')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body smart">

                    <a href="{{url(route('relevant-sdg-establishment.index'))}}"><div class="hed-btn">List ❭</div></a>
                    <h4 class="card-title">Relevant SDG Establishment Details</h4>
                    <p class="card-description badge badge-danger"></p>
                    <hr>

                    <div class="form-group">
                        <b><label for="exampleInputName1">SDG Goal: {{$data->name}}</label></b>
                    </div>
                    <p class="card-hed">Indicator &amp; Target</p>
                    <div id="target_table">

                        @foreach($data->sdgTargets as $target)
                            <div class="target_table_body" style="border: 1px solid rgba(228,228,228,0.80); background-color:rgba(244,244,244,0.20); padding:1%; margin-bottom:2%">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr style="background-color: rgba(201,201,201,1.00)">
                                            <td colspan="3"><b>Target : <?php
                                                    $text = $target->name;
                                                    $newtext = wordwrap($text, 80, "<br>", true);
                                                    echo "$newtext\n";
                                                    ?>
                                            <td width="100" align="center"></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan="1"><b>SDG Indicator Number</b></td>
                                            <td colspan="3"><b>SDG Indicator Statement</b></td>
                                        </tr>
                                        @foreach($target->sdgIndicators as $indicator)
                                            <tr style="background-color: rgba(243,243,243,1.00)">
                                                <td colspan="1">{{$indicator->number}}</td>
                                                <td colspan="3" style="text-wrap: normal">
                                                    <?php
                                                    $text = $indicator->statement;
                                                    $newtext = wordwrap($text, 80, "<br>", true);
                                                    echo "$newtext\n";
                                                    ?>
                                                   </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <br>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets2/js/off-canvas.js') }}"></script>

@endsection
