@extends('layouts.default')

@section('title', 'Dashboard')

@section('style')
    <link href="{{asset('assets/css/dropzone.min.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{url('/archive/study')}}"><span class="hed-btn">List ❭</span></a>

                    <h4 class="card-title">Study Archive</h4>
                    <hr>
                    <p class="card-description"></p>
                    <form class="forms-sample" action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="program">Program List</label>
                            <select class="form-control" id="program" name="program">
                                <option value="">Select</option>
                                @foreach($programs as $program)
                                    <option value="{{$program->id }}" {{ ($program->id == old('program'))?'selected':'' }}>{{$program->name}} ( {{$program->type}})</option>
                                @endforeach
                            </select>
                            @if ($errors->has('program'))<div class="error">{{ $errors->first('program') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="support">Support Function List</label>
                            <select class="form-control" id="support" name="support">
                                <option value="">Select</option>
                                @foreach($supports as $support)
                                    <option value="{{$support->id }}" {{ ($support->id == old('support'))?'selected':'' }}>{{$support->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('support'))<div class="error">{{ $errors->first('support') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="document_type">Study Document Type</label>
                            <select class="form-control" id="document_type" name="document_type">
                                <option value="">Select</option>
                                @foreach($documentTypes as $documentType)
                                    <option value="{{$documentType->id }}" {{ ($documentType->id == old('document_type'))?'selected':'' }}>{{$documentType->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('document_type'))<div class="error">{{ $errors->first('document_type') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="name">Study Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Study Name">
                            @if ($errors->has('name'))<div class="error">{{ $errors->first('name') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label>Study Area (Multiple selection)</label>
                            <select style="width:100%" name="thematic[]" id="thematic" class="js-example-basic-multiple" multiple="multiple">
                                @foreach($thematics as $thematic)
                                    <option value="{{$thematic->id }}" {{ ($thematic->id == old('thematic'))?'selected':'' }}>{{$thematic->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('thematic'))<div class="error">{{ $errors->first('thematic') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="dpik">Study Period</label>
                            {{--<div class="input-group input-daterange">
                                <input type="text" class="form-control" value="">
                                <div class="input-group-addon p-1 m-auto">To</div>
                                <input type="text" class="form-control" value="">
                            </div>--}}

                            <input class="form-control" type="text" id="dpik" autocomplete="off" name="study_period" value="{{old('study_period')}}">
                            @if ($errors->has('study_period'))<div class="error">{{ $errors->first('study_period') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="exampleSelectGender">Version</label>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" value="NEW" {{ ('NEW' == old('version_status'))?'checked':(('FINAL' != old('version_status'))?'checked':'') }} name="version_status" id="version_status" class="form-check-input">
                                            Draft<i class="input-helper"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" value="FINAL" {{ ('FINAL' == old('version_status'))?'checked':'' }}  name="version_status" id="version_status" class="form-check-input">
                                            Final<i class="input-helper"></i>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-8"></div>
                                @if ($errors->has('version_status'))<div class="error col-md-2">{{ $errors->first('version_status') }}</div>@endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="summary">Study Summary</label>
                            <textarea class="form-control" id="summary" name="summary" rows="4">{{old('summary')}}</textarea>
                            @if ($errors->has('summary'))<div class="error">{{ $errors->first('summary') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label>Study Upload</label>

                            <div id="upload-files"><!--input files--></div>

                            <div class="input-group col-xs-12">
                                <div class="dropzone form-control text-center" id="dropzoneFileUpload" style="padding:0; height: auto;">

                                    <span class="input-group-append" id="add-file" style="float: right">
                                      <button id="uploadfiles" class="file-upload-browse btn btn-primary cusbutton" type="button">
                                          <i class="icon-cloud-upload btn-icon-prepend"></i> Click here to upload
                                      </button>
                                    </span>

                                </div>
                            </div>
                            @if ($errors->has('file_names'))<div class="error">{{ $errors->first('file_names') }}</div>@endif
                        </div>

                        <button type="submit" class="btn btn-primary cusbutton mr-2">Submit</button>
                        <button type="reset" class="btn btn-dark">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/dropzone.js"></script>--}}
    <script src="{{asset('assets/js/dropzone.js')}}"></script>
    <script type="text/javascript">
        var uploaded = [];
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("div#dropzoneFileUpload", {
            dictDefaultMessage: 'Drop here to upload file.',
            // autoProcessQueue: false,
            parallelUploads: 100, // Number of files process at a time (default 2)
            url: "{{route('archive.study.upload-file')}}",
            params: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            success : function(file, response){
                uploaded.push(response);
                console.log(uploaded);
                $('#upload-files').append('<input type="hidden" name="file_names[]" value="'+ response.original_file +'">');
                $('#upload-files').append('<input type="hidden" name="file_paths[]" value="'+ response.path +'">');
            },
            clickable: '#add-file',
        });
        myDropzone.on("error", function(file,response) {
            $(file.previewElement).find('.dz-error-message').text(response.errors.file[0]);
            $(file.previewElement).click(function () {
                myDropzone.removeFile(file);
            });
        });
        Dropzone.options.myAwesomeDropzone = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize:900, // MB
            addRemoveLinks: true,
            accept: function(file, done) {

            }
        };

        /* $('.input-daterange').find('input').each(function () {
             $(this).datepicker({dateFormat: 'dd/mm/yy'});
         });*/
    </script>
@endsection
