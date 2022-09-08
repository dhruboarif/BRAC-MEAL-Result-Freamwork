@extends('layouts.default')

@section('title', 'Dashboard')

@section('style')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 stretch-card grid-margin">
            <div class="card">
                <div class="card-body smart">
                    <h4 class="card-title">Archive</h4>
                    <hr>
                    <p class="apr-name">
                        <span class="text-left">Name of Archive: {{$studyArchive->name}}</span>
                        <span class="float-right badge badge-danger" style="margin: 3px">V {{$studyArchive->version}}</span>
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>Program List :</td>
                                <td>{{$studyArchive->program->name}} ({{$studyArchive->program->type}})</td>
                            </tr>
                            <tr>
                                <td>Support Function List :</td>
                                <td>{{$studyArchive->support->name}}</td>
                            </tr>
                            <tr>
                                <td>Study Document Type :</td>
                                <td>{{$studyArchive->documentType->name}}</td>
                            </tr>
                            <tr>
                                <td>Study Period :</td>
                                <td>{{$studyArchive->study_period}}</td>
                            </tr>
                            <tr>
                                <td>Study Area :</td>
                                <td>
                                    @foreach($studyArchive->thematics as $key=>$thematic)
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
                                <td>Study Summary :</td>
                                <td id="txwrap"><div>{{$studyArchive->summary}}</div></td>
                            </tr>
                            <tr>
                                <td>Archived By :</td>
                                <td> {{$studyArchive->studyArchivedBy->name}}</td>
                            </tr>
                            @if($studyArchive->studyArchiveApprovedBy)
                                <tr>
                                    <td>Suppervisor :</td>
                                    <td> {{$studyArchive->studyArchiveApprovedBy->name}}</td>
                                </tr>
                            @endif
                            <tr>
                                <td>Suppervisor :</td>
                                <td>
                                    @if($studyArchive->status=='P')
                                        Pending
                                    @elseif($studyArchive->status=='A')
                                        Active
                                    @elseif($studyArchive->status=='R')
                                        Rejected
                                    @else
                                        Pending
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Attachment :</td>
                                <td>
                                    @foreach($studyArchive->studyArchiveFiles as $files)
                                        <a href="#" data-link="{{asset($files->path)}}" data-name="{{$files->name}}" title="{{$files->name}}" class="open-modal" data-toggle="modal" data-target="#myModal">
                                            <div class="thm-10"></div>
                                        </a>
                                    @endforeach
                                </td>
                            </tr>

                            <tr>
                                <td>Remarks :</td>
                                <td>{{$studyArchive->remarks}} </td>
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
