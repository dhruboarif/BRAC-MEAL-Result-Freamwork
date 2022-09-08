@extends('layouts.default')

@section('title', 'Program')

@section('style')
    <style>


    #txwrap50{
    width:50%;
    white-space: pre-wrap;
    white-space: -moz-pre-wrap;
    white-space: -pre-wrap;
    white-space: -o-pre-wrap;
    word-wrap: break-word;
    line-height: 20px;
    }
    #txwrap20{
    width:20%;
    white-space: pre-wrap;
    white-space: -moz-pre-wrap;
    white-space: -pre-wrap;
    white-space: -o-pre-wrap;
    word-wrap: break-word;
    line-height: 20px;
    }
    #txwrap15{
        width:20%;
        white-space: pre-wrap;
        white-space: -moz-pre-wrap;
        white-space: -pre-wrap;
        white-space: -o-pre-wrap;
        word-wrap: break-word;
        line-height: 20px;
    }
    #txwrap10{
        width:10%;
        white-space: pre-wrap;
        white-space: -moz-pre-wrap;
        white-space: -pre-wrap;
        white-space: -o-pre-wrap;
        word-wrap: break-word;
        line-height: 20px;
    }
    #txwrap5{
        width:5%;
        white-space: pre-wrap;
        white-space: -moz-pre-wrap;
        white-space: -pre-wrap;
        white-space: -o-pre-wrap;
        word-wrap: break-word;
        line-height: 20px;
    }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <a href="{{url(route('framework-establishment.create'))}}"> <div class="hed-btn">Add ❭</div></a>
                    <h4 class="card-title">Framework Establishment Details</h4>
                    <hr>
                    <p class="card-description"></p>
                    <div class="table-responsive smart">
                        <table class="table table-bordered table-hover">
                            <thead class="hd-bk">
                            <tr>
                                <th id="txwrap5">SL</th>
                                <th id="txwrap5">Pillar Number</th>
                                <th id="txwrap10">Pillar Statement</th>
                                <th id="txwrap10">Impact</th>
                                <th id="txwrap10">Outcome</th>
                                <th id="txwrap10">Output</th>
                                <th id="txwrap15" style="min-width: 250px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key=>$d)
                                <tr>
                                    <td > {{$key + $data->firstItem()}}</td>
                                    <td> {{$d->number}} </td>
                                    <td >
                                    <?php
                                        $text = $d->name;
                                        $newtext = wordwrap($text, 35, "<br>", true);
                                        echo "$newtext\n";
                                        ?>
                                    </td>
                                    <td >
                                        @if(isset($d->details) && !empty($d->details))
                                            <?php $details = $d->details;
                                            $i=0;
                                            $list = [];
                                            ?>
                                            @foreach($details as $detail)
                                                @if($detail->type == 'IMPACT')
                                                    <?php array_push($list, $detail->number); ?>
                                                @endif

                                            @endforeach
                                            <?php $len = count($list); ?>
                                            @if(isset($list) && !empty($list))
                                                @foreach($list as $l)
                                                    {{$l }}
                                                    <?php

                                                        if ($i == $len-1){

                                                        }else{
                                                            echo ",";
                                                        }
                                                        $j = $i;
                                                        if (($j+1) % 2 == 0){
                                                            echo '<br>';
                                                        }
                                                        $i++;
                                                    ?>
                                                @endforeach
                                            @endif
                                        @endif
                                    </td>
                                    <td>

                                            @if(isset($d->details) && !empty($d->details))
                                                <?php $details = $d->details;
                                                $i=0;
                                                $list = [];
                                                ?>
                                                @foreach($details as $detail)
                                                    @if($detail->type == 'OUTCOME')
                                                        <?php array_push($list, $detail->number); ?>
                                                    @endif

                                                @endforeach
                                                <?php $len = count($list); ?>
                                                @if(isset($list) && !empty($list))
                                                    @foreach($list as $l)
                                                        {{$l }}
                                                        <?php

                                                            if ($i == $len-1){

                                                            }else{
                                                                echo ",";
                                                            }
                                                            $j = $i;
                                                            if (($j+1) % 2 == 0){
                                                                echo '<br>';
                                                            }
                                                            $i++;
                                                        ?>
                                                    @endforeach
                                                @endif
                                            @endif

                                    </td>
                                    <td >
                                        @if(isset($d->details) && !empty($d->details))
                                            <?php $details = $d->details;
                                            $i=0;
                                            $list = [];
                                            ?>
                                            @foreach($details as $detail)
                                                @if($detail->type == 'OUTPUT')
                                                    <?php array_push($list, $detail->number); ?>
                                                @endif

                                            @endforeach
                                            <?php $len = count($list); ?>
                                            @if(isset($list) && !empty($list))
                                                @foreach($list as $l)
                                                        {{$l }}
                                                        <?php if ($i == $len-1){

                                                        }else{
                                                            echo ",";
                                                        }
                                                        $j = $i;
                                                        if (($j+1) % 2 == 0){
                                                            echo '<br>';
                                                        }
                                                        $i++;
                                                        ?>
                                                @endforeach
                                            @endif
                                        @endif
                                    </td>
                                    <td style="min-width: 175px">
                                        <a href="{{route('framework-establishment.show',$d->id)}}" class="text-decoration-none">
                                            <button type="button" class="btn btn-sm btn-dark" style="margin-left: 5px">Detail</button>
                                        </a>
                                        &nbsp;
                                        <a href="{{route('framework-establishment.edit',$d->id)}}" class="text-decoration-none">
                                            <button type="button" class="btn btn-sm btn-dark">Edit</button>
                                        </a>
                                        &nbsp
                                        <a href="#" class="text-decoration-none"  onclick="deleteRow('{{$d->id}}')" >
                                            <button type="button" class="btn btn-sm btn-danger mr-2">Delete</button>
                                        </a>
                                        <form id="{{$d->id}}" action="{{ route('framework-establishment.destroy', $d->id)}}" method="post" style="display: none">
                                            @csrf
                                            @method('DELETE')
                                        </form>


                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @if ($data->lastPage() > 1)
                            <nav data-pagination>
                                <a href="{{ url(1) }}" {{ ($data->currentPage() == 1) ? ' disabled' : '' }}>&#10092;&#10092;</a>
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
@endsection
