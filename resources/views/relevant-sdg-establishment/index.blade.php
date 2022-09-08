@extends('layouts.default')

@section('title', 'Program')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <a href="{{url(route('relevant-sdg-establishment.create'))}}"> <div class="hed-btn">Add ❭</div></a>
                    <h4 class="card-title">Relevant SDG Establishment Details</h4>
                    <hr>
                    <p class="card-description"></p>
                    <div class="table-responsive smart">
                        <table class="table table-bordered table-hover">
                            <thead class="hd-bk">
                            <tr>
                                <th>SL</th>
                                <th>Goal</th>
                                <th>Target</th>
                                <th style="min-width: 250px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key=>$d)
                                <tr>
                                    <td>{{$key + $data->firstItem()}}
                                    </td>
                                    <td>
                                        <?php
                                        $text = $d->name;
                                        $newtext = wordwrap($text, 35, "<br>", true);
                                        echo "$newtext\n";
                                        ?>
                                       </td>
                                    <td>
                                    @if(isset($d->targets) && !empty($d->targets))
                                        @foreach($d->targets as $target)
                                                <?php
                                                $text = $target->name;
                                                $newtext = wordwrap($text, 35, "<br>", true);
                                                echo "$newtext\n";
                                                ?>
                                            <br>
                                        @endforeach
                                    @endif
                                    </td>
                                    <td width="20%" style="padding-left: 2px; padding-right: 2px">
                                        <a href="{{route('relevant-sdg-establishment.show',$d->id)}}" class="text-decoration-none">
                                            <button type="button" class="btn btn-xs btn-dark" style="margin-left: 5px">Details</button>
                                        </a>
                                        <a href="{{route('relevant-sdg-establishment.edit',$d->id)}}" class="text-decoration-none">
                                            <button type="button" class="btn btn-xs btn-dark">Edit</button>
                                        </a>
                                        &nbsp
                                        <a href="#" class="text-decoration-none"  onclick="deleteRow('{{$d->id}}')" >
                                            <button type="button" class="btn btn-xs btn-danger mr-2">Delete</button>
                                        </a>
                                        <form id="{{$d->id}}" action="{{ route('relevant-sdg-establishment.destroy', $d->id)}}" method="post" style="display: none">
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
