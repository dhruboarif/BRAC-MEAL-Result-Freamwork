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
                    <a href="{{url('/archive/learning-action')}}"><span class="hed-btn">List ❭</span></a>

                    <h4 class="card-title">Upload Learning & Action Document</h4>
                    <hr>
                    <p class="card-description"></p>
                    <form class="forms-sample" action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleSelectGender">LA Type</label>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" value="INDIVIDUAL" {{ ('INDIVIDUAL' == old('type'))?'checked':'' }} name="type" id="type" class="form-check-input">
                                            Individual<i class="input-helper"></i></label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" value="ANNUAL" {{ ('ANNUAL' == old('type'))?'checked':'' }}  name="type" id="type" class="form-check-input">
                                            Annual<i class="input-helper"></i></label>
                                    </div>
                                </div>
                                <div class="col-md-8"></div>
                                @if ($errors->has('type'))<div class="error col-md-2">{{ $errors->first('type') }}</div>@endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="program-support">Program/Support Function Name</label>
                            <select class="form-control" id="program-support" name="program-support">
                                <option value="">Select</option>
                                @foreach($programs as $program)
                                    <option value="{{$program->id }}" {{ ($program->id == old('program'))?'selected':'' }}>{{$program->name}}  ( {{$program->type}}: {{str_replace('_', ' ', $program->category)}})</option>
                                @endforeach
                            </select>
                            @if ($errors->has('program-support'))<div class="error">{{ $errors->first('program-support') }}</div>@endif
                        </div>

                        <div class="form-group">
                            <label>Learning & Action Area</label>
                            <select style="width:100%" name="thematic[]" id="thematic" class="js-example-basic-multiple" multiple="multiple">
                                @foreach($thematics as $thematic)
                                    <option value="{{$thematic->id }}" {{ ($thematic->id == old('thematic'))?'selected':'' }}>{{$thematic->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('thematic'))<div class="error">{{ $errors->first('thematic') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="name">LA Document Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="LA Document Name">
                            @if ($errors->has('name'))<div class="error">{{ $errors->first('name') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Year</label>
                            <select class="form-control" id="year" name="year">
                                <option value="">Select</option>
                                @foreach($years as $key=>$year)
                                    <option value="{{$key }}" {{ ($key == old('year'))?'selected':'' }}>{{$year}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('year'))<div class="error">{{ $errors->first('year') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label>Upload Learning Document</label>

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
                        <button type="submit" class="btn btn-primary cusbutton mr-2">Upload</button>
                        <button type="reset" class="btn btn-dark">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('assets/js/dropzone.js')}}"></script>
    <script type="text/javascript">
        var uploaded = [];
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("div#dropzoneFileUpload", {
            dictDefaultMessage: 'Drop here to upload file.',
            // autoProcessQueue: false,
            parallelUploads: 100, // Number of files process at a time (default 2)
            url: "{{route('archive.learning-action.upload-file')}}",
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

    </script>
@endsection
