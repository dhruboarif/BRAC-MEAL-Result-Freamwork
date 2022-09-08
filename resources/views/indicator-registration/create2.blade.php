@extends('layouts.default')

@section('title', 'Indicator Registration')

@section('style')
    <link href="{{asset('assets/css/dropzone.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body smart">
                    <a href="{{url(route('indicator-registration.index'))}}"><div class="hed-btn">List ❭</div></a>
                    <h4 class="card-title">Indicator Registration</h4>
                    <hr>
                    <p class="card-description"></p>
                    <form class="forms-sample" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputPillar">Pillar Name</label>
                            <select class="form-control" id="pillar" name="pillar" onchange="pillarChangeEffect()">
                                <option selected="selected" value="">Select</option>
                                @foreach($pillars as $p)
                                    <option value="{{$p->id}}">{{$p->name}} ({{$p->number}})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleIndicator2">Indicator Type</label>
                            <select class="form-control" id="indicator_type" name="indicator_type" onchange="getIndicatorTypeDetails()">
                                <option selected="selected">Select</option>
                                <option value="IMPACT">Impact</option>
                                <option value="OUTPUT">Output</option>
                                <option value="OUTCOME">Outcome</option>
                            </select>
                        </div>

                        @foreach($pillars as $p)
                            <div id="{{$p->id}}-IMPACT" class="myDiv smart">
                                <label for="exampleInputIndecator3">List of registered Impact</label>
                                <table class="table table-responsive-sm" style="background-color: rgba(251,251,251,1.00)">
                                    <tbody>
                                    @foreach($p->pillarDetails as $pd)
                                        @if($pd->type == 'IMPACT')
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" name="indicators[]" value="{{$pd->id}}">
                                                            {{$pd->statement}} ({{$pd->number}})
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div id="{{$p->id}}-OUTCOME" class="myDiv smart">
                                <label for="exampleInputIndecator3">List of registered Outcome</label>
                                <table class="table table-responsive-sm" style="background-color: rgba(251,251,251,1.00)">
                                    <tbody>
                                    @foreach($p->pillarDetails as $pd)
                                        @if($pd->type == 'OUTCOME')
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" name="indicators[]" value="{{$pd->id}}">
                                                            {{ucfirst($pd->type)}} {{$pd->statement}} ({{$pd->number}})
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div id="{{$p->id}}-OUTPUT" class="myDiv smart">
                                <label for="exampleInputIndecator3">List of registered Output</label>
                                <table class="table table-responsive-sm" style="background-color: rgba(251,251,251,1.00)">
                                    <tbody>
                                    @foreach($p->pillarDetails as $pd)
                                        @if($pd->type == 'OUTPUT')
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" name="indicators[]" value="{{$pd->id}}">
                                                            {{ucfirst($pd->type)}} {{$pd->statement}} ({{$pd->number}})
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endforeach



                        <div class="form-group">
                            <label for="exampleInputiIndicator-Number">Indicator Number</label>
                            <input type="text" class="form-control" id="exampleIndicator-number" autocomplete="off" placeholder="Indicator Number" name="indicator_number">
                        </div>
                        <div class="form-group">
                            <label for="exampleiiIndicator-Statement">Indicator Statement</label>
                            <input type="text" class="form-control" id="exampleIIndicator-Statement" autocomplete="off" placeholder="Indicator Statement" name="indicator_statement">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputOwner">Owner</label>
                            <select class="form-control" id="ddlbrac" name="owner">
                                <option>Select</option>
                                @foreach($owners as $w)
                                    <option value="{{$w->id}}">{{$w->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Assumption</label>
                            <textarea class="form-control" id="exampleTextarea1" rows="5" placeholder="Type your text here" name="assumption"></textarea>
                        </div>
                        <p class="card-hed">Relevant SDG</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="exampleInputGool">Goal</label>
                                        <select class="form-control" id="goal" name="goal" onchange="showGoalIndicator()">
                                            <option value="">Select</option>
                                            @foreach($goals as $g)
                                                <option value="{{$g->id}}">{{$g->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="exampleInputSDG-in">SDG Indicator</label>
                                        <select class="form-control" id="goal_indicator" name="goal_indicator">
                                            <option value="">Select</option>
                                            @foreach($goals as $g)
                                                @foreach($g->sdgIndicators as $gi)
                                                    <option class="goal-{{$g->id}} goal_indicator_hide" value="{{$gi->id}}" style="display: none">{{$gi->statement}} ({{$gi->number}})</option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <p class="card-hed">Chain Result</p>
                            <div class="row">
                                <div class="col-md-6" >
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <label for="exampleInputRelevant-out">Relevant Output</label>
                                            <select class="form-control" id="relevant_output" name="relevant_output">
                                                <option value="">Select</option>
                                                @foreach($pillars as $p)
                                                    @foreach($p->pillarDetails as $pd)
                                                        @if($pd->type == 'OUTPUT')
                                                            <option class="relevant_{{$p->id}} hide_relevant" value="{{$pd->id}}" style="display: none">{{$pd->statement}} ({{$pd->number}})</option>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6" >
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <label for="exampleInputRelevant-out">Relevant Outcome</label>
                                            <select class="form-control" id="relevant_outcome" name="relevant_outcome">
                                                <option value="">Select</option>
                                                @foreach($pillars as $p)
                                                    @foreach($p->pillarDetails as $pd)
                                                        @if($pd->type == 'OUTCOME')
                                                            <option class="relevant_{{$p->id}} hide_relevant"  value="{{$pd->id}}" style="display: none">{{$pd->statement}} ({{$pd->number}})</option>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputImpact">Impact</label>
                                <select class="form-control" id="relevant_impact" name="relevant_impact">
                                    <option value="">Select</option>
                                    @foreach($pillars as $p)
                                        @foreach($p->pillarDetails as $pd)
                                            @if($pd->type == 'IMPACT')
                                                <option class="relevant_{{$p->id}} hide_relevant"  value="{{$pd->id}}" style="display: none">{{$pd->statement}} ({{$pd->number}})</option>
                                            @endif
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <p class="card-hed">Indicator Baseline <span id="show_baseline_year" class="dateDiv"></span></p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="exampleyear" >Year of Baseline</label>
                                        <select class="form-control" id="baseline_year" name="baseline_year" onchange="changeBaselineYear()">
                                            <option>Select</option>
                                            @for($i = date('Y')-4; $i<=date('Y'); $i++)
                                                <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="exampleresult">Result</label>
                                        <input type="text" class="form-control" id="baseline_result" autocomplete="off" placeholder="Result" name="baseline_result">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleSource">Source</label>
                            <input type="text" class="form-control" id="baseline_source" autocomplete="off" placeholder="Source" name="baseline_source">
                        </div>
                        <div class="form-group">
                            <label for="exampleMethode">Methodology</label>
                            <input type="text" class="form-control" id="baseline_methodology" autocomplete="off" placeholder="Methodology" name="baseline_methodology">
                        </div>
                        <p class="card-hed">Contributions from Various BRAC Programs</p>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="exampleInputGool">Program</label>
                                <select class="form-control" id="exampleSelectprog" name="contributions_program">
                                    <option selected="selected" value="">Select</option>
                                    @foreach($programs as $p)
                                        <option value="{{$p->id}}">{{$p->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <p class="card-hed">Coverage Area</p>
                        <div class="table-responsive">
                            <input type="hidden" name="outcome_deleted_ids" value="">
                            <table style="margin-bottom:2.5%" class="table" id="outcomeTable">
                                <tbody>
                                <tr>
                                    <td width="490"><label for="exampledis">District</label>
                                        <select class="form-control" id="district_field" name="district_field" onchange="getPoliceStation()">
                                            <option value="">Select</option>
                                            @foreach($districts as $d)
                                                <option value="{{$d->id}}">{{$d->name}}</option>
                                            @endforeach
                                        </select>
                                        <div class="error" id="district_field_error" style="display: none">The District field is required.</div>
                                    </td>
                                    <td width="490">
                                        <label for="examplePolicestation">Police station</label>
                                        <select class="form-control" id="police_station_field" name="police_station_field">
                                            <option value="">Select</option>
                                            @foreach($districts as $p)
                                                @foreach($p->upazilas as $pd)
                                                    <option class="area_{{$p->id}} hide_area" style="display: none" value="{{$pd->id}}">{{$pd->name}}</option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                        <div class="error" id="police_station_field_error" style="display: none">The police station field is required.</div>
                                    </td>
                                    <td width="100">
                                        <label for="exampleSDG-act">&nbsp;</label>
                                        <button type="button" class="btn btn-success" id="btnAddOutcome">ADD</button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <p class="card-hed">Milestones</p>
                        <table class="table table-responsive table-striped" style="margin-bottom:25px">
                            <thead style="background-color: rgba(0,139,197,1.00); color:rgba(255,255,255,1.00)">
                            <tr>
                                <th width="50" class="align-middle"> Year </th>
                                <th class="align-middle"> Planned </th>
                                <th class="align-middle"> Source </th>
                                <th class="align-middle"> Rationale </th>
                                <th class="align-middle"> Date of Last Update: </th>
                                <th class="align-middle"> Revisions latest approved
                                    <select style="width:70px; border: 1px solid; background: transparent; color: white; margin-left:5px" id="milestone_approved_year" name="milestone_approved_year">
                                        @for($i = date('Y')-4; $i<=date('Y')+4; $i++)
                                            <option value="{{$i}}" {{($i==date('Y'))?'selected':''}} >{{$i}}</option>
                                        @endfor
                                    </select>
                                </th>
                                <th class="align-middle"> Remarks </th>
                            </tr>
                            </thead>
                            <tbody>
                            @for($i =4; $i>=0; $i--)
                                <tr>
                                    <td class="py-1">
                                        <span id="mile_year_text_{{$i}}">{{ date('Y') - $i }}</span>
                                        <input type="hidden" id="mile_year_field_{{$i}}" value="{{date('Y') - $i }}" name="milestone_year[]" autocomplete="off">
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <input type="number" required min="0" class="form-control-mile-per milestone_planned" value="" autocomplete="off" name="milestone_planned[]" onkeyup="calculateMilestoneTotalTarget()" style="width: 60%">
                                            <div class="input-group-append"> <span class="input-group-text">%</span> </div>
                                        </div>
                                    </td>
                                    <td><input type="text" required class="form-control-mile" autocomplete="off" name="milestone_source[]"></td>
                                    <td><input type="text" required class="form-control-mile" autocomplete="off" name="milestone_rationale[]"></td>
                                    <td><input type="text"  class="form-control-mile datepicker" readonly id="datepicker{{$i}}" name="milestone_last_update[]"></td>
                                    <td><input type="text"  class="form-control-mile" autocomplete="off" name="milestone_revision_last_approved[]"></td>
                                    <td><input type="text"  class="form-control-mile" autocomplete="off" name="milestone_remarks[]"></td>
                                </tr>
                            @endfor

                            <tr>
                                <td>Select Formula :</td>
                                <td><div class="row">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="milestone_formula" id="milestone_formula" checked value="SUMMATION" onclick="calculateMilestoneTotalTarget()">
                                                Summation </label>
                                        </div>
                                        <div style="margin-top:5px" class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="milestone_formula" id="milestone_formula" value="CUMULATIVE" onclick="calculateMilestoneTotalTarget()">
                                                Cumulative</label>
                                        </div>
                                    </div></td>
                            </tr>
                            <tr style=" border-bottom: 1px solid rgba(212,212,212,1.00)">
                                <td class="py-1">Total Target (to <span id="total_target_year">{{date('Y')}}</span>) </td>
                                <td>
                                    <div style="padding:10px 25px; display:inline-block; background-color: rgba(255,142,0,0.80)">
                                        <input type="text" readonly value="00" name="milestone_total_target" id="milestone_total_target" style="background: transparent; border: none; width: 25px">%
                                    </div>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>

                        <p class="card-hed">Upload</p>
                        <div id="indicator_registration_file"><!--input files--></div>

                        <div class="form-group">
                            <label>Detailed framework</label>
                            <div class="input-group col-xs-12">
                                <div class="dropzone form-control text-center" id="DETAILS_FRAMEWORK_FILE" style="padding:0; height: auto;">
                                    <span class="input-group-append add-file" id="add-file" style="float: right">
                                      <button id="uploadfiles" class="file-upload-browse btn btn-primary cusbutton" type="button">
                                          <i class="icon-cloud-upload btn-icon-prepend"></i> Click here to upload
                                      </button>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <p style="margin:2px 0 0 10px">Select file type : </p>
                                <div class="form-check" style="margin: 5px 0px 0 12px">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="framework_file_type[]" value="PDF">
                                        PDF
                                    </label>
                                </div>
                                <div class="form-check" style="margin: 5px 0px 0 12px">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="framework_file_type[]" value="DOC">
                                        DOC
                                    </label>
                                </div>
                            </div>
                            <hr style="margin-top:0; padding-top:0">
                        </div>
                        <div class="form-group">
                            <label>M&amp;E Plan</label>
                            <div class="input-group col-xs-12">
                                <div class="dropzone form-control text-center" id="ME_PLAN_FILE" style="padding:0; height: auto;">
                                    <span class="input-group-append add-file" id="add-file" style="float: right">
                                      <button id="uploadfiles" class="file-upload-browse btn btn-primary cusbutton" type="button">
                                          <i class="icon-cloud-upload btn-icon-prepend"></i> Click here to upload
                                      </button>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <p style="margin:2px 0 0 10px">Select file type : </p>
                                <div class="form-check" style="margin: 5px 0px 0 12px">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="me_file_type[]" value="PDF">
                                        PDF
                                    </label>
                                </div>
                                <div class="form-check" style="margin: 5px 0px 0 12px">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="me_file_type[]" value="DOC">
                                        DOC
                                    </label>
                                </div>
                            </div>
                            <hr style="margin-top:0; padding-top:0">
                        </div>
                        <div class="form-group">
                            <label>Methodology Note</label>
                            <div class="input-group col-xs-12">
                                <div class="dropzone form-control text-center" id="METHODOLOGY_NOTE_FILE" style="padding:0; height: auto;">
                                    <span class="input-group-append add-file" id="add-file" style="float: right">
                                      <button id="uploadfiles" class="file-upload-browse btn btn-primary cusbutton" type="button">
                                          <i class="icon-cloud-upload btn-icon-prepend"></i> Click here to upload
                                      </button>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <p style="margin:2px 0 0 10px">Select file type : </p>
                                <div class="form-check" style="margin: 5px 0px 0 12px">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="methodology_note_file_type[]" value="PDF">
                                        PDF
                                    </label>
                                </div>
                                <div class="form-check" style="margin: 5px 0px 0 12px">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="methodology_note_file_type[]" value="DOC">
                                        DOC
                                    </label>
                                </div>
                            </div>
                            <hr style="margin-top:0; padding-top:0">
                        </div>
                        <div class="form-group">
                            <label>SMART Guide</label>
                            <div class="input-group col-xs-12">
                                <div class="dropzone form-control text-center" id="SMART_GUIDE_FILE" style="padding:0; height: auto;">
                                    <span class="input-group-append add-file" id="add-file" style="float: right">
                                      <button id="uploadfiles" class="file-upload-browse btn btn-primary cusbutton" type="button">
                                          <i class="icon-cloud-upload btn-icon-prepend"></i> Click here to upload
                                      </button>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <p style="margin:2px 0 0 10px">Select file type : </p>
                                <div class="form-check" style="margin: 5px 0px 0 12px">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="smart_guide_file_type[]" value="PDF">
                                        PDF
                                    </label>
                                </div>
                                <div class="form-check" style="margin: 5px 0px 0 12px">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="smart_guide_file_type[]" value="DOC">
                                        DOC
                                    </label>
                                </div>
                            </div>
                            <hr style="margin-top:0; padding-top:0">
                        </div>
                        <div class="form-group">
                            <label>SDG Relevance</label>

                            <div class="input-group col-xs-12">
                                <div class="dropzone form-control text-center" id="SDG_RELEVANCE_FILE" style="padding:0; height: auto;">
                                    <span class="input-group-append add-file" id="add-file" style="float: right">
                                      <button id="uploadfiles" class="file-upload-browse btn btn-primary cusbutton" type="button">
                                          <i class="icon-cloud-upload btn-icon-prepend"></i> Click here to upload
                                      </button>
                                    </span>
                                </div>
                            </div>

                            <div class="row">
                                <p style="margin:2px 0 0 10px">Select file type : </p>
                                <div class="form-check" style="margin: 5px 0px 0 12px">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="sdg_relevance_file_type[]" value="PDF">
                                        PDF
                                    </label>
                                </div>
                                <div class="form-check" style="margin: 5px 0px 0 12px">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="sdg_relevance_file_type[]" value="DOC">
                                        DOC
                                    </label>
                                </div>
                            </div>
                            <hr style="margin-top:0; padding-top:0">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary cusbutton">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')


    <script>
        onload=function() {
            var t = document.getElementsByTagName("textarea");
            for(var i = 0; i < t.length; i++){
                t[i].value='';
            }
        }
    </script>
    <script>
        /*$(document).ready(function(){
            $('#myselection').on('change', function(){
                var demovalue = $(this).val();
                $("div.myDiv").slideUp();
                $("#show"+demovalue).slideDown();
            });
        });*/

        /*$(document).ready(function(){
            $('#dateselection').on('change', function(){
                var demovalue = $(this).val();
                $("span.dateDiv").hide();
                $("#show"+demovalue).fadeIn();
            });
        });*/
    </script>
    <script>
        $(document).ready(function() {
            $('.min').click(function () {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });
            $('.plus').click(function () {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });
        });
    </script>
    <script type="text/javascript">
        var replaceWith = $('<input name="temp" type="text" />'),
            connectWith = $('input[name="hiddenField"]');

        $('.ab').inlineEdit(replaceWith, connectWith);
    </script>

    <!----------start js for this page only ------------->

    <script src="{{asset('assets/js/dropzone.js')}}"></script>
    <script type="text/javascript">
        Dropzone.autoDiscover = false;

        //SDG Relevance files
        $.each($(".dropzone"), function (index, blockDiv) {
            var myDropzone = new Dropzone("#"+blockDiv.id, {
                dictDefaultMessage: 'Drop here to upload file.',
                parallelUploads: 100,
                url: "{{route('indicator-registration..upload-file')}}",
                params: { _token: $('meta[name="csrf-token"]').attr('content') },
                success : function(file, response){
                    $('#indicator_registration_file').append('<input type="hidden" name="file_name[]" value="'+ response.original_file +'">');
                    $('#indicator_registration_file').append('<input type="hidden" name="file_path[]" value="'+ response.path +'">');
                    $('#indicator_registration_file').append('<input type="hidden" name="file_section[]" value="'+ myDropzone.element.id +'">');
                },
                clickable: '#'+blockDiv.id+' .add-file',
            }).on("error", function(file,response) {
                $(file.previewElement).find('.dz-error-message').text(response.errors.file[0]);
                $(file.previewElement).click(function () {  myDropzone.removeFile(file);  });
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


    <script>

        $( function() {
            $( ".datepicker" ).datepicker();
        } );

        function pillarChangeEffect() {
            getIndicatorTypeDetails();
            changeChainResult();
        }

        function getIndicatorTypeDetails() {
            try{
                var pillar = $("#pillar option:selected" ).val();
                var indicatorType = $("#indicator_type option:selected" ).val();
                $("div.myDiv").find('input').prop("checked", false);
                $("div.myDiv").slideUp();
                $("#"+pillar+'-'+indicatorType).slideDown();

            }catch (e) {
                $("div.myDiv").find('input').prop("checked", false);
                $("div.myDiv").slideUp();

            }
        }

        function showGoalIndicator() {
            try{
                var goalIndicator = $("#goal option:selected" ).val();
                // var indicatorType = $("#goal_indicator option:selected" ).val();
                $('.goal_indicator_hide').hide();
                $("#goal_indicator").val("").change();
                $('.goal-'+goalIndicator).show();
            }catch (e) {
                $("#goal_indicator").val("").change();
                $('.goal_indicator_hide').hide();
            }
        }

        function changeChainResult() {
            try{
                var pillar = $("#pillar option:selected" ).val();

                //chain result
                $('.hide_relevant').hide();
                $("#relevant_output").val("").change();
                $("#relevant_outcome").val("").change();
                $("#relevant_impact").val("").change();
                $('.relevant_'+pillar).show();
            }catch (e) {

                //chain result
                $('.hide_relevant').hide();
                $("#relevant_output").val("").change();
                $("#relevant_outcome").val("").change();
                $("#relevant_impact").val("").change();
            }
        }

        function changeBaselineYear() {
            var baseline_year = $("#baseline_year option:selected" ).val();
            $('#show_baseline_year').text(baseline_year).fadeIn();
            $('#total_target_year').html(baseline_year).fadeIn();

            for(var i=4; i>=0; i--){
                $('#mile_year_text_'+i).html(baseline_year-i);
                $('#mile_year_field_'+i).val(baseline_year-i);
            }
        }

        function getPoliceStation() {
            try{
                var district = $("#district_field option:selected" ).val();

                $('.hide_area').hide();
                $("#police_station_field").val("").change();
                $('.area_'+district).show();
            }catch (e) {

                $('.hide_area').hide();
                $("#police_station_field").val("").change();
            }
        }

        function calculateMilestoneTotalTarget(){
            var formula = $("input[name='milestone_formula']:checked").val();

            if('CUMULATIVE' == formula){
                $.each($(".milestone_planned"), function (index, inputField) {
                    if($(inputField).val().length !=0){
                        $('#milestone_total_target').val($(inputField).val());
                    }

                });


            }

            if('SUMMATION' == formula){
                var milestone_total_target = 0;
                $.each($(".milestone_planned"), function (index, inputField) {
                    if($(inputField).val().length !=0){
                        milestone_total_target += parseInt($(inputField).val());
                    }
                });
                $('#milestone_total_target').val(milestone_total_target);

            }
        }


        //coverage area block
        $("#btnAddOutcome").on("click",function(){
            var district_field = $("#district_field option:selected" ).val();
            var district_field_text = $("#district_field option:selected" ).text();
            var police_station_field = $("#police_station_field option:selected" ).val();
            var police_station_field_text = $("#police_station_field option:selected" ).text();

            if(district_field.length == 0){
                $('#district_field_error').show();
            }else{
                $('#district_field_error').hide();
            }

            if(police_station_field.length == 0){
                $('#police_station_field_error').show();
            }else{
                $('#police_station_field_error').hide();
            }


            if((district_field.length > 0) && (police_station_field.length > 0)){
                var $tableBody = $('#outcomeTable').find("tbody");
                var   $trLast = $tableBody.find("tr:last");

                var   $trNew ='<tr style="background-color: rgba(243,243,243,1.00)">\n' +
                    '                                    <td>' +
                    '                                        <input type="hidden" name="id[]" value="">\n' +
                    '                                        <span>'+district_field_text+'</span>\n' +
                    '                                        <input type="hidden" name="district[]" value="'+district_field+'">\n' +
                    '                                    </td>\n' +
                    '                                    <td>\n' +
                    '                                        <span>'+police_station_field_text+'</span>\n' +
                    '                                        <input type="hidden" name="police_station[]" value="'+police_station_field+'">\n' +
                    '                                    </td> \n' +
                    '                                    <td width="100" align="center"><div class="minus btnRemove" onclick="removeTr(this)"></div></td>\n' +
                    '                                </tr>';
                $trLast.after($trNew);
                $('.input-fields').find('input').val('');
            }

        });
        function removeTr(that, id = 0, i='x') {

            try{
                var deleted_id_for = $('#'+i+'_deleted_ids');
                var deleted_ids = deleted_id_for.val();
                if(id!= 0 && i!='x'){
                    if(deleted_ids.length == 0){
                        deleted_id_for.val(id);
                    }else{
                        deleted_id_for.val(deleted_ids+','+id);
                    }
                }
            }catch (e) {

            }

            $(that).closest('tr').remove();

        }

    </script>
    <!----------end js for this page only ------------->

@endsection
