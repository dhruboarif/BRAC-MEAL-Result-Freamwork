@extends('layouts.default')

@section('title', 'Dashboard')

@section('style')

@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 stretch-card grid-margin">
            <div class="card">
                <div class="card-body smart">
                    <a href="{{url('/archive/learning-action')}}"><span class="hed-btn">List ❭</span></a>
                    <h4 class="card-title">Learning Action Archive</h4>
                    <hr>
                    <p class="apr-name">
                        <span class="text-left">Name of Archive: {{$archive->name}}</span>
                        <span class="float-right badge badge-danger" style="margin: 3px">V {{$archive->version}}</span>
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Type :</td>
                                <td>{{$archive->type}}</td>
                            </tr>
                            <tr>
                                <td>Program/Support Function  :</td>
                                <td>
                                    {{($archive->program)?$archive->program->name:''}} ( {{$archive->program->type}}: {{str_replace('_', ' ', $archive->program->category)}})
                                </td>
                            </tr>
                            <tr>
                                <td>Year :</td>
                                <td>{{$archive->year}}</td>
                            </tr>
                            <tr>
                                <td>Learning & Action Area :</td>
                                <td>
                                    @foreach($archive->thematics as $key=>$thematic)
                                        @if($key%3 == 0)
                                            <span class="badge badge-dark">{{$thematic->name}}</span>
                                        @elseif($key%3 == 1)
                                            <span class="badge badge-info">{{$thematic->name}}</span>
                                        @elseif($key%3 == 2)
                                            <span class="badge badge-success">{{$thematic->name}}</span>
                                        @elseif($key%3 == 3)
                                            <span class="badge badge-dark">{{$thematic->name}}</span>
                                        @else
                                            <span class="badge badge-warning">{{$thematic->name}}</span>
                                        @endif
                                    @endforeach
                                </td>
                            </tr>


                            <tr>
                                <td>Archived By :</td>
                                <td> {{$archive->learningActionArchivedBy->name}}</td>
                            </tr>

                            <tr>
                                <td>Attachment :</td>
                                <td>
                                    @foreach($archive->learningActionFiles as $files)
                                        <a href="#" data-link="{{asset($files->path)}}" data-name="{{$files->name}}" title="{{$files->name}}" class="open-modal" data-toggle="modal" data-target="#myModal">
                                            <div class="thm-10"></div>
                                        </a>
                                    @endforeach
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>


                </div>
            </div>
        </div>
    </div>

    <!-- Modal start -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog  modal-lg" role="document" style="margin-top: 5px">
            <div class="modal-content">
                <div class="modal-header">
                    <div id="media-header"></div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="overflow: hidden; ">
                    <div id="media-content" style="height: 510px; overflow-y: scroll"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

@endsection

@section('script')

    <script>
        $('.open-modal').click(function () {
            var link = $(this).data('link');
            var name = $(this).data('name');

            $('#media-header').empty();
            $('#media-content').empty();

            $('#media-header').html('<h5 class="text-center">If the content (<span class="text-info"> '+name+'</span> ) is now showing in browser. Please download from <a href="'+link+'">here</a>.</h5>');
            $("#media-content").html('<iframe class="doc" src="'+link+'" style="border: none; height:500px; width: 100% "></iframe>');
        });
    </script>
@endsection
