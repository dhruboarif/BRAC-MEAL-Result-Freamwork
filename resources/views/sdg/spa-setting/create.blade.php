@extends('layouts.default')

@section('title', 'Create Framework and Indicator Establishment')

@section('style')

    <link href="{{asset('assets/css/dropzone.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="#"><span class="btn-add text-white">List ❭</span></a>

                    <h4 class="card-title">SPA Settings</h4>
                    <hr>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post" action="">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Impact Indicator</label>
                            <input type="text" value="{{ old('pillar_number') }}" required id="pillar_number" name="pillar_number"   class="form-control"   autocomplete="off" placeholder="Pillar Number">
                            @if ($errors->has('pillar_number'))<div class="error">{{ $errors->first('pillar_number') }}</div>@endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputOwner">Owner</label>
                            <select class="form-control" id="ddlbrac" name="owner">
                                <option>Select</option>
                                <option value="Y">DFID</option>
                                <option value="N">BRAC</option>
                                <option value="Y">BFAT</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Assumption</label>
                            <textarea class="form-control" id="indicator_description" name="indicator_description" rows="5" placeholder="Type your text here"></textarea>
                            @if ($errors->has('pillar_number'))<div class="error">{{ $errors->first('pillar_number') }}</div>@endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Framework Details</label>
                            <textarea class="form-control" id="indicator_description" name="indicator_description" rows="5" placeholder="Type your text here"></textarea>
                            @if ($errors->has('pillar_number'))<div class="error">{{ $errors->first('pillar_number') }}</div>@endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Methodology</label>
                            <textarea class="form-control" id="indicator_description" name="indicator_description" rows="5" placeholder="Type your text here"></textarea>
                            @if ($errors->has('pillar_number'))<div class="error">{{ $errors->first('pillar_number') }}</div>@endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Methodology  Note</label>
                            <textarea class="form-control" id="indicator_description" name="indicator_description" rows="5" placeholder="Type your text here"></textarea>
                            @if ($errors->has('pillar_number'))<div class="error">{{ $errors->first('pillar_number') }}</div>@endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Smart Guide</label>
                            <textarea class="form-control" id="indicator_description" name="indicator_description" rows="5" placeholder="Type your text here"></textarea>
                            @if ($errors->has('pillar_number'))<div class="error">{{ $errors->first('pillar_number') }}</div>@endif
                        </div>

                        <div class="form-group">
                            <label>M&E Plan</label>

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

                        <div class="relevant-sdg">
                            <p class="card-hed pr-1">
                                Relevant SDG
                            </p>

                            <div class="form-group">
                                <label for="exampleInputName1">Goal</label>
                                <select class="form-control" id="type" name="type[]" required="">
                                    <option value="">Select</option>
                                    <option value="">SDG Settings Goal 1</option>
                                    <option value="">SDG Settings Goal 2</option>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="exampleInputName1">SDG Target</label>
                                    <select class="form-control" id="type" name="type[]" required="">
                                        <option value="">Select</option>
                                        <option value="">SDG Settings Goal 1 target 1</option>
                                        <option value="">SDG Settings Goal 1 target 2</option>
                                    </select>
                                </div>

                                <div class="form-group col">
                                    <label for="exampleInputName1">SDG Indicator</label>
                                    <input type="text" value="{{ old('pillar_name', 'SDG Settings Goal 1 target 1 Indicator 1 readonly') }}" readonly id="pillar_name" name="pillar_name"   class="bg-white form-control"   autocomplete="off" placeholder="Pillar Name">
                                    @if ($errors->has('pillar_name'))<div class="error">{{ $errors->first('pillar_name') }}</div>@endif
                                </div>
                            </div>

                        </div>


                        <div class="chain-result">
                            <p class="card-hed pr-1">
                                Chain Result
                            </p>

                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="exampleInputName1">Pillar Number</label>
                                    <select class="form-control" id="type" name="type[]" required="">
                                        <option value="">Select</option>
                                        <option value="">Pillar 1</option>
                                        <option value="">Pillar 2</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label for="exampleInputName1">Pillar Name</label>
                                    <input type="text" value="{{ old('pillar_name', 'Pillar Number 1 Pillar name 1 readonly') }}" readonly id="pillar_name" name="pillar_name"   class="bg-white form-control"   autocomplete="off" placeholder="Pillar Name">
                                    @if ($errors->has('pillar_name'))<div class="error">{{ $errors->first('pillar_name') }}</div>@endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="exampleInputName1">Output Number</label>
                                    <select class="form-control" id="type" name="type[]" required="">
                                        <option value="">Select</option>
                                        <option value="">Pillar 1 output number 1</option>
                                        <option value="">Pillar 1 output number 2</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label for="exampleInputName1">Output Name</label>
                                    <input type="text" value="{{ old('pillar_name', 'Pillar Number 1 Pillar  1 output 1 readonly') }}" readonly id="pillar_name" name="pillar_name"   class="bg-white form-control"   autocomplete="off" placeholder="Pillar Name">
                                    @if ($errors->has('pillar_name'))<div class="error">{{ $errors->first('pillar_name') }}</div>@endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="exampleInputName1">Outcome Number</label>
                                    <select class="form-control" id="type" name="type[]" required="">
                                        <option value="">Select</option>
                                        <option value="">Pillar 1 Outcome number 1</option>
                                        <option value="">Pillar 1 Outcome number 2</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label for="exampleInputName1">Outcome Name</label>
                                    <input type="text" value="{{ old('pillar_name', 'Pillar Number 1   Outcome 1 readonly') }}" readonly id="pillar_name" name="pillar_name"   class="bg-white form-control"   autocomplete="off" placeholder="Pillar Name">
                                    @if ($errors->has('pillar_name'))<div class="error">{{ $errors->first('pillar_name') }}</div>@endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="exampleInputName1">Impact Number</label>
                                    <select class="form-control" id="type" name="type[]" required="">
                                        <option value="">Select</option>
                                        <option value="">Pillar 1 Impact number 1</option>
                                        <option value="">Pillar 1 Impact number 2</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label for="exampleInputName1">Impact Name</label>
                                    <input type="text" value="{{ old('pillar_name', 'Pillar Number 1 Impact 1 readonly') }}" readonly id="pillar_name" name="pillar_name"   class="bg-white form-control"   autocomplete="off" placeholder="Pillar Name">
                                    @if ($errors->has('pillar_name'))<div class="error">{{ $errors->first('pillar_name') }}</div>@endif
                                </div>
                            </div>

                        </div>

                        <div class="relevant-sdg">
                            <p class="card-hed pr-1">
                                Indicator Baseline
                            </p>

                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="exampleInputName1">Baseline Year</label>
                                    <select class="form-control" id="type" name="type[]" required="">
                                        <option value="">Select</option>
                                        <option value="">2015</option>
                                        <option value="">2016</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label for="exampleSelectGender"></label>
                                    <input type="text" required="" value="Number of milestone year" id="number" readonly name="number[]" class="form-control bg-white" autocomplete="off" placeholder="Number">
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="exampleInputName1">Result</label>
                                <input type="text" required="" value="" id="number" name="number[]" class="form-control" autocomplete="off" placeholder="Number">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Source</label>
                                <input type="text" value="" id="pillar_name" name="pillar_name" class="bg-white form-control" autocomplete="off" placeholder="Pillar Name">
                            </div>

                        </div>

                        <div class="relevant-sdg">
                            <p class="card-hed pr-1">
                                Coverage Area
                            </p>
                            <div class="form-row">
                                <div class="form-group col">
                                    <label for="exampleInputName1">District</label>
                                    <select class="form-control" id="type" name="type[]" required="">
                                        <option value="">Select</option>
                                        <option value="">2015</option>
                                        <option value="">2016</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label for="exampleInputName1">Thana</label>
                                    <select class="form-control" id="type" name="type[]" required="">
                                        <option value="">Select</option>
                                        <option value="">2015</option>
                                        <option value="">2016</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="table-responsive">
                            <label for="exampleInputName1">BRAC Program Contribution </label>
                            <table class="table table-bordered table-hover" id="indicator">
                                <thead class="hd-bk">
                                <tr>
                                    <th>Program</th>
                                    <th>Result</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr id="0">


                                    <td style="width: 40%">
                                        <select class="form-control" id="type" name="type[]" required>
                                            <option value="">Select</option>
                                            <option value="IMPACT">Impact</option>
                                            <option value="OUTCOME">Outcome</option>
                                            <option value="OUTPUT">Output</option>
                                        </select>
                                        @if ($errors->has('type'))<div class="error">{{ $errors->first('type') }}</div>@endif
                                    </td>

                                    <td style="width: 40%">
                                        <input type="text" required value="{{ old('number') }}" id="number" name="number[]"   class="form-control"   autocomplete="off" placeholder="Number">
                                        @if ($errors->has('number'))<div class="error">{{ $errors->first('number') }}</div>@endif
                                    </td>

                                    <td style="width: 20%">
                                        <button type="button" class="btn btn-sm btn-success mr-2 add-more">Add More</button>
                                        <button type="button" class="btn btn-sm btn-danger mr-2 remove">Remove</button>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>



                        <div class=" mt-3">
                            <button type="submit" class="btn btn-primary cusbutton mr-2 ">Submit</button>
                            <button type="reset" class="btn btn-dark">Reset</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        var cloneCount = 1;
        $("body").on("click",".add-more",function(){
            var html = $("table tbody tr").first().clone().attr('id',  cloneCount++);
            // $(html).find(".add-more").removeClass("add-more").addClass('remove').text('Remove');
            $(html).find("input").val('');
            $("table tr:last").last().after(html);

            $('html, body').animate({
                scrollTop: ($(html).offset().top)
            }, 500);
        });

        $("body").on("click",".remove",function(){
            if($('#indicator >tbody >tr').length > 1){
                $(this).parent().parent().remove();
            }else{
                swal({
                    icon: 'error',
                    title: '',
                    text: 'Sorry! Minimum one indicator is required',
                })
            }
        });
    </script>



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





    </script>
@endsection
