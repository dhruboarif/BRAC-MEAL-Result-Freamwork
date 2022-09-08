@extends('layouts.default')

@section('title', 'Indicator Registration Details')

@section('style')
    <link href="{{asset('assets/css/dropzone.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/jquery-ui.css')}}" rel="stylesheet">
    {{--    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">--}}
    <style>
        table tr th {
            line-height: 20px !important;
            text-align: center
        }

        .ui-widget-content {
            border: 1px solid rgba(237, 237, 237, 1);
            color: #222
        }

        .ui-dialog {
            left: 0;
            outline: 0 none;
            padding: 0 !important;
            position: absolute;
            top: 0;
            width: 60% !important;
            box-shadow: 1px 2px 10px rgba(173, 173, 173, 1)
        }

        #success {
            padding: 0;
            margin: 0
        }

        .ui-dialog .ui-dialog-content {
            background: none repeat scroll 0 0 transparent;
            border: 0 none;
            overflow: auto;
            position: relative;
            padding: 15px !important
        }

        .ui-widget-header {
            background: #ec008c;
            border: 0;
            color: #fff;
            font-weight: 400
        }

        .ui-dialog .ui-dialog-titlebar {
            padding: 2% 2%;
            position: relative;
            font-size: 1em
        }

        .ptotal{
            width: max-content;
        }
        .ptotal input{
            padding: 0;
            margin: 0;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body smart">
                    <a href="{{url(route('indicator-registration.index'))}}"><div class="hed-btn">List ❭</div></a>
                    <h4 class="card-title">Indicator Registration Details</h4>
                    <hr>
                    <p class="card-description"></p>

                    @csrf
                    <div class="form-group">
                        <label for="exampleInputPillar">Pillar Name</label>
                        <select class="form-control" id="pillar" required name="pillar" onchange="pillarChangeEffect()">
                            <option selected="selected" value="">Select</option>
                            @foreach($pillars as $p)
                                <option value="{{$p->id}}" @if($p->id == $data->pillar_id) selected @endif>{{$p->name}} ({{$p->number}})</option>
                            @endforeach
                        </select>
                        @if ($errors->has('pillar'))<div class="error">{{ $errors->first('pillar') }}</div>@endif

                    </div>
                    <div class="form-group">
                        <label for="exampleIndicator2">Indicator Type</label>
                        <select class="form-control" required id="indicator_type" name="indicator_type" onchange="getIndicatorTypeDetails()">
                            <option selected="selected">Select</option>
                            <option value="IMPACT" @if($data->indicator_type == 'IMPACT') selected @endif>Impact</option>
                            <option value="OUTPUT" @if($data->indicator_type == 'OUTPUT') selected @endif>Output</option>
                            <option value="OUTCOME" @if($data->indicator_type == 'OUTCOME') selected @endif>Outcome</option>
                        </select>
                        @if ($errors->has('indicator_type'))<div class="error">{{ $errors->first('indicator_type') }}</div>@endif

                    </div>
                    @foreach($pillars as $p)
                        <div id="{{$p->id}}-IMPACT" class="myDiv smart">
                            <label for="exampleInputIndecator3">List of registered Impact</label>
                            <table class="table table-responsive" style="background-color: rgba(251,251,251,1.00)">
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
                            <table class="table table-responsive" style="background-color: rgba(251,251,251,1.00)">
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
                            <table class="table table-responsive" style="background-color: rgba(251,251,251,1.00)">
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

                    <div  class="myDiv smart" style="display:block">
                        <label for="exampleInputIndecator3">List of registered {{ucfirst(strtolower( $data->indicator_type))}}</label>
                        <table class="table table-responsive" style="background-color: rgba(251,251,251,1.00)">
                            <tbody>
                            @foreach($data->indicatorRegIndicators as $pd)
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" checked class="form-check-input" name="indicators[]" value="{{$pd->indicatorRegIndicators[0]->id}}">
                                                {{$pd->indicatorRegIndicators[0]->statement}} ({{$pd->indicatorRegIndicators[0]->number}})
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputiIndicator-Number">Indicator Number</label>
                        <input type="text" class="form-control" id="exampleIndicator-number" value="{{$data->indicator_number}}" autocomplete="off" placeholder="Indicator Number" name="indicator_number">
                        @if ($errors->has('indicator_number'))<div class="error">{{ $errors->first('indicator_number') }}</div>@endif
                    </div>
                    <div class="form-group">
                        <label for="exampleiiIndicator-Statement">Indicator Statement</label>
                        <input type="text" class="form-control" value="{{$data->indicator_statement}}" id="exampleIIndicator-Statement" autocomplete="off" placeholder="Indicator Statement" name="indicator_statement">
                    </div>
                    <div class="form-group">
                        <label for="exampleiiIndicator-Unit">Unit of Indicator</label>
                        <input type="text" class="form-control" value="{{$data->indicator_unit}}" id="exampleIIndicator-Unit" autocomplete="off" placeholder="Unit of Indicator" name="indicator_unit">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputOwner">SPA Partners</label>
                        <div style="margin-bottom:3%" class="row">
                            <?php $ow_id = unserialize($ownerData->owner_id);
                            $value = unserialize($ownerData->value);
                            ?>
                            @foreach($owners as $k=>$w)
                                <div class="col-md-2">
                                    <?php
                                    $check= '';
                                    $ow_val = '';
                                    foreach ($ow_id as $key=>$val){
                                        if ($w->id == $val){
//                                                echo $value[$key];
                                            $check = 'checked';
                                            $ow_val = $value[$k];

                                        }

                                    }
                                    ?>
                                    <div class="form-check" style="margin: 5px 0px 0 12px">
                                        <label class="form-check-label">
                                            <input type="checkbox" value="{{$w->id}}" id="checkbox_one" name="owner[]" data-trigger="hidden_fields_{{$w->id}}" class="trigger" {{$check}}>
                                            {{$w->name}}</label>
                                    </div>
                                    <div id="hidden_fields_{{$w->id}}" class="hidden">
                                        <input type="text" class="form-control" id="hidden_one" name="owner_value[]" value="{{$ow_val}}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Definition</label>
                        <textarea class="form-control" id="definition" rows="5" placeholder="Type your text here" name="definition">{{$data->definition}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Assumption</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="5" placeholder="Type your text here" name="assumption">{{$data->assumption}}</textarea>
                    </div>
                    <p class="card-hed">Relevant SDG</p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group ">
                                <div class="col-sm-12">
                                    <label for="exampleInputGool">SDG Goal <span style="color:#e12f2f; font-weight: 700">*</span></label>
                                    <select required class="form-control" id="goal" name="goal" onchange="showTargets()">
                                        <option value="">Select</option>
                                        @foreach($goals as $g)
                                            <option value="{{$g->id}}" @if($data->relevant_goal == $g->id) selected @endif>{{$g->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <div class="col-sm-12">
                                    <label for="exampleInputSDG-in">SDG Target <span style="color:#e12f2f; font-weight: 700">*</span></label>
                                    <select required class="form-control" id="goal_target" name="goal_target" onchange="showIndicators()">
                                        <option value="">Select</option>
                                        @foreach($goals as $g)
                                            @foreach($g->sdgTargets as $gt)
                                                <option @if($data->relevant_indicator_target == $gt->id) selected @endif class="goal-{{$g->id}} goal_target_hide" value="{{$gt->id}}" style="display: none">{{$gt->name}}</option>
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <div class="col-sm-12">
                                    <label for="exampleInputSDG-in">SDG Indicator <span style="color:#e12f2f; font-weight: 700">*</span></label>
                                    <select required class="form-control" id="goal_indicator" name="goal_indicator">
                                        <option value="">Select</option>

                                        @foreach($goals as $g)
                                            @foreach($g->sdgTargets as $gt)
                                                @foreach($gt->sdgIndicators as $gi)
                                                    <option class="goal-target-{{$gt->id}} goal_indicator_hide" @if($data->relevant_indicator == $gi->id) selected @endif value="{{$gi->id}}" style="display: none">{{$gi->statement}} ({{$gi->number}})</option>
                                                @endforeach
                                            @endforeach
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <p class="card-hed">Planned Number Format</p>
                        <div class="form-group">
                            <label for="exampleInputType">Select Planned </label>
                            <select required class="form-control" id="plan_number_type" name="plan_number_type">
                                <option value="NUMBER" @if($data->plan_number_type == 'NUMBER') selected @endif>Number</option>
                                <option value="PERCENTAGE" @if($data->plan_number_type == 'PERCENTAGE') selected @endif>Percentage (%)</option>
                            </select>

                        </div>
                    </div>

                    <p class="card-hed">Indicator Baseline <span id="show_baseline_year" class="dateDiv"></span></p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="exampleyear" >Year of Baseline</label>
                                    <select required class="form-control" id="baseline_year" name="baseline_year" onchange="changeBaselineYear()">
                                        @for($i = date('Y')-5; $i<=date('Y'); $i++)
                                            <option value="{{$i}}" @if($data->baseline_year == $i) selected @endif>{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="exampleresult">Result</label>
                                    <input type="text" value="{{$data->baseline_result}}" class="form-control" id="baseline_result" autocomplete="off" placeholder="Result" name="baseline_result">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleSource">Source</label>
                        <input type="text" value="{{$data->baseline_source}}" class="form-control" id="baseline_source" autocomplete="off" placeholder="Source" name="baseline_source">
                    </div>
                    <div class="form-group">
                        <label for="exampleMethode">Methodology</label>
                        <input type="text" value="{{$data->baseline_methodology}}" class="form-control" id="baseline_methodology" autocomplete="off" placeholder="Methodology" name="baseline_methodology">
                    </div>
                    <p class="card-hed">Contributions from Various BRAC Programs</p>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label for="exampleInputGool">Program</label>
                            <select style="background-color: white; width: 100%" class="form-control js-example-basic-multiple" multiple="" id="contributions_program" name="contributions_program[]" onchange="changePrograms()">
                                @foreach($programs as $p)
                                    @if($data->contribution_program != 'null')
                                        <option {{in_array( $p->id, json_decode($data->contribution_program))?'selected':''}} value="{{$p->id}}">{{$p->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div id="P">
                        <div id="inputDialog" style="display: none">
                            <textarea class="txtInput form-control" Class="txtBox"></textarea>
                        </div>

                        @foreach($data->indicatorRegPrograms as $p)
                            <div id="P-{{$p->programs[0]->id}}" class="PChild" style="border: 1px solid rgba(228,228,228,0.80); background-color:rgba(244,244,244,0.20); padding:1%; margin-bottom:2%">
                                <p class="card-hed"> Coverage Area of {{$p->programs[0]->name}} </p>
                                <div class="table-responsive">

                                    <table style="margin-bottom:2.5%" class="table" id="outcomeTable">
                                        <input type="hidden" name="outcome_deleted_ids" value="">
                                        <tbody>
                                        {{--                                            <tr>--}}
                                        {{--                                                <td>Districts</td>--}}
                                        {{--                                                <td>Upazila</td>--}}
                                        {{--                                                <td></td>--}}
                                        {{--                                            </tr>--}}
                                        <tr>
                                            <td width="490"><label for="exampledis">District</label>
                                                <select class="form-control" id="district_field" name="district_field[]" onchange="getPoliceStation(this)">
                                                    <option value="">Select</option>
                                                    @foreach($districts as $d)
                                                        <option value="{{$d->id}}">{{$d->name}}</option>
                                                    @endforeach
                                                </select>
                                                <div class="error" id="district_field_error" style="display: none">The District field is required.</div>
                                            </td>
                                            <td width="490">
                                                <label for="examplePolicestation">Upazila</label>
                                                <select class="form-control" id="police_station_field" name="police_station_field[]">
                                                    <option value="">Select</option>
                                                    @foreach($districts as $d)
                                                        @foreach($d->upazilas as $pd)
                                                            <option class="area_{{$d->id}} hide_area" style="display: none" value="{{$pd->id}}">{{$pd->name}}</option>
                                                        @endforeach
                                                    @endforeach
                                                </select>
                                                <div class="error" id="police_station_field_error" style="display: none">The Upazila field is required.</div>
                                            </td>
                                            <td width="100">
                                                <label for="exampleSDG-act">&nbsp;</label>
                                                <button type="button" class="btn btn-success" id="btnAddOutcome" onclick="addTr(this)">ADD</button>
                                            </td>
                                        </tr>
                                        @foreach($p->indicatorRegProgramArea as $area)
                                            <tr style="background-color: rgba(243,243,243,1.00);">
                                                <td>{{ $area->district->name}}</td>
                                                <td>{{$area->upazila->name}}</td>
                                                <td>
                                                    <button type="button" class="minus btnRemove" onclick="removeTd(this)" style="border: none;cursor: pointer;padding: 5px"></button>
                                                    <input type="hidden" name="police_station_{{$p->programs[0]->id}}[]" value="{{$area->upazila->id}}">
                                                    <input type="hidden" class="district_2" name="district_{{$p->programs[0]->id}}[]" value="{{$area->district->id}}">
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <p class="card-hed">Milestones  of  {{$p->programs[0]->name}}  </p>
                                <table class="table table-responsive table-striped" style="margin-bottom:25px">
                                    <thead style="background-color: rgba(0,139,197,1.00); color:rgba(255,255,255,1.00)">
                                    <tr>
                                        <th> Year </th>
                                        <th> Planned </th>
                                        <th> Disagg : <br> Female </th>
                                        <th> Disagg :<br>  Disability </th>
                                        <th> Disagg :<br> Hard to Reach </th>
                                        <th> Source</th>
                                        <th> Rationale </th>
                                        <th> Date of<br> Last Update: </th>
                                        <th> Revisions latest<br> approved
                                        </th>
                                        <th> Remarks </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($p->indicatorRegMilestone as $i)
                                        <tr>
                                            <td>
                                                <span>{{ $i->milestone_year }}</span>
                                                <input class="mile_year_field_" type="hidden" id="mile_year_field_" value="{{date('Y') - $i->milestone_year }}" name="milestone_year_{{$p->programs[0]->id}}[]" autocomplete="off">
                                            </td>
                                            <td><input type="text" class="form-control-mile milestone_planned" autocomplete="off" value="{{ $i->milestone_planned }}" name="milestone_planned_{{$p->programs[0]->id}}[]"  onkeyup="calculateMilestoneTotalTarget(this, 'milestone_formula_', '.milestone_planned', '#milestone_total_target')"></td>
                                            <td><input type="text" class="form-control-mile milestone_disagg_female" autocomplete="off"  value="{{ $i->milestone_female_disaggregation }}" name="milestone_disagg_female_{{$p->programs[0]->id}}[]" onkeyup="calculateMilestoneTotalTarget(this, 'milestone_formula_', '.milestone_disagg_female', '#milestone_disagg_female_total_target')"> </td>
                                            <td><input type="text" class="form-control-mile milestone_disagg_disability" autocomplete="off"  value="{{ $i->milestone_disability_disaggregation }}" name="milestone_disagg_disability_{{$p->programs[0]->id}}[]" onkeyup="calculateMilestoneTotalTarget(this, 'milestone_formula_', '.milestone_disagg_disability', '#milestone_disagg_disability_total_target')"></td>
                                            <td><input type="text" class="form-control-mile milestone_disagg_reach_heard" autocomplete="off" value="{{ $i->milestone_hard_disability }}" name="milestone_disagg_reach_heard_{{$p->programs[0]->id}}[]"  onkeyup="calculateMilestoneTotalTarget(this, 'milestone_formula_', '.milestone_disagg_reach_heard', '#milestone_disagg_reach_heard_total_target')"></td>
                                            <td><input type="text" class="form-control-mile" autocomplete="off"  value="{{ $i->milestone_source }}" name="milestone_source_{{$p->programs[0]->id}}[]" onclick="OpenInputDialog(this)"></td>
                                            <td><input type="text" class="form-control-mile" autocomplete="off"  value="{{ $i->milestone_rationale }}" name="milestone_rationale_{{$p->programs[0]->id}}[]" onclick="OpenInputDialog(this)"></td>
                                            <td><input type="text" class="form-control-mile datepicker" value="{{ $i->milestone_last_update }}"  id="datepicker{{$i}}" name="milestone_last_update_{{$p->programs[0]->id}}[]"></td>
                                            <td><input type="text" class="form-control-mile" autocomplete="off"  value="{{ $i->milestone_revision_last_approved }}" name="milestone_revision_last_approved_{{$p->programs[0]->id}}[]" onclick="OpenInputDialog(this)"></td>
                                            <td><input type="text" class="form-control-mile" autocomplete="off" value="{{ $i->milestone_remarks }}"   name="milestone_remarks_{{$p->programs[0]->id}}[]" onclick="OpenInputDialog(this)"></td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                                <div class="table-responsive">
                                    <table style="margin-bottom:3%" class="table">
                                        <tr style=" border-bottom: 1px solid rgba(212,212,212,1.00)">
                                            <td width="100%"><div style="width:100%" class="ptotal">Total</div></td>
                                            <td style="font-weight:600;">Select Formula :</td>
                                            <td>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="milestone_formula_{{$p->programs[0]->id}}" id="milestone_formula_{{$p->programs[0]->id}}"  value="SUMMATION"  {{($p->plan_formula == 'SUMMATION')?'checked':''}} onclick="changeFormula(this)">
                                                        Summation of yearly milestones
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="milestone_formula_{{$p->programs[0]->id}}" id="milestone_formula_{{$p->programs[0]->id}}" value="CUMULATIVE" {{($p->plan_formula == 'CUMULATIVE')?'checked':''}} onclick="changeFormula(this)">
                                                        Latest year milestone for cumulative results
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="milestone_formula_{{$p->programs[0]->id}}" id="milestone_formula_{{$p->programs[0]->id}}" value="AVERAGE" {{($p->plan_formula == 'AVERAGE')?'checked':''}} onclick="changeFormula(this)">
                                                        Average results
                                                    </label>
                                                </div>
                                            </td>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                        <tr style=" border-bottom: 1px solid rgba(212,212,212,1.00)">
                                            <td style="font-weight:600">Planned Total </td>
                                            <td style="width:10%">
                                                <div class="ptotal">
                                                    <input type="text" readonly value="{{$p->plan_total}}" name="milestone_total_target_{{$p->programs[0]->id}}" id="milestone_total_target" style="background: transparent; border: none; width: 100%; text-align: center; color: white">

                                                </div>
                                            </td>
                                            <td style="font-weight:600">

                                            </td>
                                            <td>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                        <tr style=" border-bottom: 1px solid rgba(212,212,212,1.00)">
                                            <td style="font-weight:600">Disagg : Female  </td>
                                            <td style="width:10%">
                                                <div class="ptotal">
                                                    <input type="text" readonly value="{{$p->female_disaggregation_total}}" name="milestone_disagg_female_total_target_{{$p->programs[0]->id}}" id="milestone_disagg_female_total_target" style="background: transparent; border: none; width: 100%; text-align: center; color: white">
                                                </div>
                                            </td>
                                            <td style="font-weight:600"></td>
                                            <td>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                        <tr style=" border-bottom: 1px solid rgba(212,212,212,1.00)">
                                            <td style="font-weight:600">Disagg : Disability   </td>
                                            <td style="width:10%">
                                                <div class="ptotal">
                                                    <input type="text" readonly value="{{$p->disability_disaggregation_total}}" name="milestone_disagg_disability_total_target_{{$p->programs[0]->id}}" id="milestone_disagg_disability_total_target" style="background: transparent; border: none; width: 100%; text-align: center; color: white">
                                                </div>
                                            </td>
                                            <td style="font-weight:600"></td>
                                            <td>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                        <tr style=" border-bottom: 1px solid rgba(212,212,212,1.00)">
                                            <td style="font-weight:600">Disagg : Hard-to-Reach    </td>
                                            <td style="width:10%">
                                                <div class="ptotal">
                                                    <input type="text" readonly value="{{$p->milestone_disagg_reach_heard_total}}" name="milestone_disagg_reach_heard_total_target_{{$p->programs[0]->id}}" id="milestone_disagg_reach_heard_total_target" style="background: transparent; border: none; width: 100%; text-align: center; color: white">
                                                </div>
                                            </td>
                                            <td style="font-weight:600"></td>
                                            <td>
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        @endforeach
                        <div id="P-0" class="PChild" style="display: none; border: 1px solid rgba(228,228,228,0.80); background-color:rgba(244,244,244,0.20); padding:1%; margin-bottom:2%">
                            <p class="card-hed">Coverage Area <span class="area-text"></span> </p>
                            <div class="table-responsive">

                                <table style="margin-bottom:2.5%" class="table" id="outcomeTable">
                                    <input type="hidden" name="outcome_deleted_ids" value="">
                                    <tbody>
                                    <tr>
                                        <td width="490"><label for="exampledis">District</label>
                                            <select class="form-control" id="district_field" name="district_field[]" onchange="getPoliceStation(this)">
                                                <option value="">Select</option>
                                                @foreach($districts as $d)
                                                    <option value="{{$d->id}}">{{$d->name}}</option>
                                                @endforeach
                                            </select>
                                            <div class="error" id="district_field_error" style="display: none">The District field is required.</div>
                                        </td>
                                        <td width="490">
                                            <label for="examplePolicestation">Upazila</label>
                                            <select class="form-control" id="police_station_field" name="police_station_field[]">
                                                <option value="">Select</option>
                                                @foreach($districts as $p)
                                                    @foreach($p->upazilas as $pd)
                                                        <option class="area_{{$p->id}} hide_area" style="display: none" value="{{$pd->id}}">{{$pd->name}}</option>
                                                    @endforeach
                                                @endforeach
                                            </select>
                                            <div class="error" id="police_station_field_error" style="display: none">The Upazila field is required.</div>
                                        </td>
                                        <td width="100">
                                            <label for="exampleSDG-act">&nbsp;</label>
                                            <button type="button" class="btn btn-success" id="btnAddOutcome" onclick="addTr(this)">ADD</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <p class="card-hed">Milestones <span class="mileston-text"></span></p>
                            <table class="table table-responsive table-striped" style="margin-bottom:25px">
                                <thead style="background-color: rgba(0,139,197,1.00); color:rgba(255,255,255,1.00)">
                                <tr>
                                    <th> Year </th>
                                    {{--                                        <th> Select Planned <br>  Number Type </th>--}}
                                    <th> Planned </th>
                                    <th> Disagg : <br> Female </th>
                                    <th> Disagg :<br>  Disability </th>
                                    <th> Disagg :<br> Hard to Reach </th>
                                    <th> Source</th>
                                    <th> Rationale </th>
                                    <th> Date of<br> Last Update: </th>
                                    <th> Revisions latest<br> approved
                                        <select style="width:50px; border: 1px solid; background: transparent; color: white; margin-left:0; font-size: smaller;" id="milestone_approved_year" name="milestone_approved_year">
                                            @for($i = date('Y')-4; $i<=date('Y')+4; $i++)
                                                <option value="{{$i}}" {{($i==date('Y'))?'selected':''}} >{{$i}}</option>
                                            @endfor
                                        </select>
                                    </th>
                                    <th> Remarks </th>
                                </tr>
                                </thead>
                                <tbody>
                                @for($i =4; $i>=0; $i--)
                                    <tr>
                                        <td>
                                            <span class="mile_year_text_{{$i}}" id="mile_year_text_{{$i}}">{{ date('Y') - $i }}</span>
                                            <input class="mile_year_field_{{$i}}" type="hidden" id="mile_year_field_{{$i}}" value="{{date('Y') - $i }}" name="milestone_year[]" autocomplete="off">
                                        </td>
                                        {{--<td>
                                            <select class="form-control-mile-sl" name="input_type[]">
                                                <option>Fixed</option>
                                                <option>Percentage</option>
                                            </select>
                                        </td>--}}
                                        <td><input type="text" class="form-control-mile milestone_planned" autocomplete="off" value="" name="milestone_planned[]" onclick="OpenInputDialog(this, 'number', 'Planned')" onkeyup="calculateMilestoneTotalTarget(this, 'milestone_formula_', '.milestone_planned', '#milestone_total_target')"></td>
                                        <td><input type="text" class="form-control-mile milestone_disagg_female" autocomplete="off"  value="" name="milestone_disagg_female[]"  onclick="OpenInputDialog(this, 'number', 'Disagg: Female')" onkeyup="calculateMilestoneTotalTarget(this, 'milestone_formula_', '.milestone_disagg_female', '#milestone_disagg_female_total_target')"> </td>
                                        <td><input type="text" class="form-control-mile milestone_disagg_disability" autocomplete="off"  value="" name="milestone_disagg_disability[]"  onclick="OpenInputDialog(this, 'number', 'Disagg: Disability')" onkeyup="calculateMilestoneTotalTarget(this, 'milestone_formula_', '.milestone_disagg_disability', '#milestone_disagg_disability_total_target')"></td>
                                        <td><input type="text" class="form-control-mile milestone_disagg_reach_heard" autocomplete="off" value="" name="milestone_disagg_reach_heard[]"  onclick="OpenInputDialog(this, 'number', 'Disagg: Hard to Reach')" onkeyup="calculateMilestoneTotalTarget(this, 'milestone_formula_', '.milestone_disagg_reach_heard', '#milestone_disagg_reach_heard_total_target')"></td>
                                        <td><input type="text" class="form-control-mile" autocomplete="off"  value=""name="milestone_source[]" onclick="OpenInputDialog(this, 'textarea', 'Source')"></td>
                                        <td><input type="text" class="form-control-mile" autocomplete="off"  value=""name="milestone_rationale[]" onclick="OpenInputDialog(this, 'textarea', 'Rationale')"></td>
                                        <td><input type="text" class="form-control-mile datepicker" value="" id="datepicker{{$i}}" name="milestone_last_update[]"></td>
                                        <td><input type="text" class="form-control-mile" autocomplete="off"  value="" name="milestone_revision_last_approved[]" onclick="OpenInputDialog(this, 'textarea', 'Revisions latest approved ')"></td>
                                        <td><input type="text" class="form-control-mile" autocomplete="off"  value=""  name="milestone_remarks[]" onclick="OpenInputDialog(this, 'textarea', 'Remarks')"></td>
                                    </tr>
                                @endfor

                                </tbody>
                            </table>
                            <div class="table-responsive">
                                <table style="margin-bottom:3%" class="table">
                                    <tr style=" border-bottom: 1px solid rgba(212,212,212,1.00)">
                                        <td width="100%"><div style="width:100%" class="ptotal">Total</div></td>
                                        <td style="font-weight:600;">Select Formula :</td>
                                        <td>
                                        <td>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="milestone_formula" id="milestone_formula" checked value="SUMMATION" onclick="changeFormula(this)">
                                                    Summation of yearly milestones
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="milestone_formula" id="milestone_formula" value="CUMULATIVE" onclick="changeFormula(this)">
                                                    Latest year milestone for cumulative results
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="milestone_formula" id="milestone_formula" value="AVERAGE" onclick="changeFormula(this)">
                                                    Average results
                                                </label>
                                            </div>
                                        </td>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr style=" border-bottom: 1px solid rgba(212,212,212,1.00)">
                                        <td style="font-weight:600">Planned Total </td>
                                        <td style="width:10%">
                                            <div class="ptotal">
                                                <input type="text" readonly value="00" name="milestone_total_target" id="milestone_total_target" style="background: transparent; border: none; width: 100%; text-align: center; color: white">
                                            </div>
                                        </td>
                                        <td style="font-weight:600">

                                        </td>
                                        <td>
                                            {{--<div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="milestone_formula" id="milestone_formula" checked value="SUMMATION" onclick="calculateMilestoneTotalTarget(this, 'milestone_formula_', '.milestone_planned', '#milestone_total_target')">
                                                    Summation of yearly milestones
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="milestone_formula" id="milestone_formula" value="CUMULATIVE" onclick="calculateMilestoneTotalTarget(this, 'milestone_formula_', '.milestone_planned', '#milestone_total_target')">
                                                    Latest year milestone for cumulative results
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="milestone_formula" id="milestone_formula" value="AVERAGE" onclick="calculateMilestoneTotalTarget(this, 'milestone_formula_', '.milestone_planned', '#milestone_total_target')">
                                                    Average results
                                                </label>
                                            </div>--}}
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr style=" border-bottom: 1px solid rgba(212,212,212,1.00)">
                                        <td style="font-weight:600">Disagg : Female  </td>
                                        <td style="width:10%">
                                            <div class="ptotal">
                                                <input type="text" readonly value="00" name="milestone_disagg_female_total_target" id="milestone_disagg_female_total_target" style="background: transparent; border: none; width: 100%; text-align: center; color: white">
                                            </div>
                                        </td>
                                        <td style="font-weight:600"></td>
                                        <td>
                                            {{--<div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="milestone_disagg_female_formula" id="milestone_disagg_female_formula" checked value="SUMMATION" onclick="calculateMilestoneTotalTarget(this, 'milestone_disagg_female_formula_', '.milestone_disagg_female', '#milestone_disagg_female_total_target')">
                                                    Summation of yearly milestones
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="milestone_disagg_female_formula" id="milestone_disagg_female_formula" value="CUMULATIVE" onclick="calculateMilestoneTotalTarget(this, 'milestone_disagg_female_formula_', '.milestone_disagg_female', '#milestone_disagg_female_total_target')">
                                                    Latest year milestone for cumulative results
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="milestone_disagg_female_formula" id="milestone_disagg_female_formula" value="AVERAGE" onclick="calculateMilestoneTotalTarget(this, 'milestone_disagg_female_formula_', '.milestone_disagg_female', '#milestone_disagg_female_total_target')">
                                                    Average results
                                                </label>
                                            </div>--}}
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr style=" border-bottom: 1px solid rgba(212,212,212,1.00)">
                                        <td style="font-weight:600">Disagg : Disability   </td>
                                        <td style="width:10%">
                                            <div class="ptotal">
                                                <input type="text" readonly value="00" name="milestone_disagg_disability_total_target" id="milestone_disagg_disability_total_target" style="background: transparent; border: none; width: 100%; text-align: center; color: white">
                                            </div>
                                        </td>
                                        <td style="font-weight:600"></td>
                                        <td>
                                            {{--<div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="milestone_disagg_disability_formula" id="milestone_disagg_disability_formula" checked value="SUMMATION" onclick="calculateMilestoneTotalTarget(this, 'milestone_disagg_disability_formula_', '.milestone_disagg_disability', '#milestone_disagg_disability_total_target')">
                                                    Summation of yearly milestones
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="milestone_disagg_disability_formula" id="milestone_disagg_disability_formula" value="CUMULATIVE" onclick="calculateMilestoneTotalTarget(this,'milestone_disagg_disability_formula_', '.milestone_disagg_disability', '#milestone_disagg_disability_total_target')">
                                                    Latest year milestone for cumulative results
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="milestone_disagg_disability_formula" id="milestone_disagg_disability_formula" value="AVERAGE" onclick="calculateMilestoneTotalTarget(this, 'milestone_disagg_disability_formula_', '.milestone_disagg_disability', '#milestone_disagg_disability_total_target')">
                                                    Average results
                                                </label>
                                            </div>--}}
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr style=" border-bottom: 1px solid rgba(212,212,212,1.00)">
                                        <td style="font-weight:600">Disagg : Hard-to-Reach    </td>
                                        <td style="width:10%">
                                            <div class="ptotal">
                                                <input type="text" readonly value="00" name="milestone_disagg_reach_heard_total_target" id="milestone_disagg_reach_heard_total_target" style="background: transparent; border: none; width: 100%; text-align: center; color: white">
                                            </div>
                                        </td>
                                        <td style="font-weight:600"></td>
                                        <td>
                                            {{--<div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="milestone_disagg_reach_heard_formula" id="milestone_disagg_reach_heard_formula" checked value="SUMMATION" onclick="calculateMilestoneTotalTarget(this, 'milestone_disagg_reach_heard_formula_', '.milestone_disagg_reach_heard', '#milestone_disagg_reach_heard_total_target')">
                                                    Summation of yearly milestones
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="milestone_disagg_reach_heard_formula" id="milestone_disagg_reach_heard_formula" value="CUMULATIVE" onclick="calculateMilestoneTotalTarget(this, 'milestone_disagg_reach_heard_formula_', '.milestone_disagg_reach_heard', '#milestone_disagg_reach_heard_total_target')">
                                                    Latest year milestone for cumulative results
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="milestone_disagg_reach_heard_formula" id="milestone_disagg_reach_heard_formula" value="AVERAGE" onclick="calculateMilestoneTotalTarget(this, 'milestone_disagg_reach_heard_formula_', '.milestone_disagg_reach_heard', '#milestone_disagg_reach_heard_total_target')">
                                                    Average results
                                                </label>
                                            </div>--}}
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>



                    <p class="card-hed">Upload</p>
                    <div style="margin-bottom:3%" class="row">
                        <p style="margin:2px 0 0 10px">Select upload option : </p>
                        <div class="form-check" style="margin: 5px 0px 0 12px">
                            <label class="form-check-label">
                                <input type="checkbox" {{($data->framework == 'Y')?'checked':''}} class="form-check-input" name="dfr" value="Y" onclick="showUploader(this.checked, 'DF')">
                                Detail Framework
                            </label>
                        </div>
                        <div class="form-check" style="margin: 5px 0px 0 12px">
                            <label class="form-check-label">
                                <input type="checkbox" {{($data->me == 'Y')?'checked':''}}  class="form-check-input" name="mep"  value="Y" onclick="showUploader(this.checked, 'MP')">
                                M &amp;E Plan</label>
                        </div>
                        <div class="form-check" style="margin: 5px 0px 0 12px">
                            <label class="form-check-label">
                                <input type="checkbox"  {{($data->methodology_note == 'Y')?'checked':''}} class="form-check-input" name="mn"  value="Y" onclick="showUploader(this.checked, 'MN')">
                                Methodology Note</label>
                        </div>
                        <div class="form-check" style="margin: 5px 0px 0 12px">
                            <label class="form-check-label">
                                <input type="checkbox"  {{($data->smart_guide == 'Y')?'checked':''}} class="form-check-input" name="sg" value="Y" onclick="showUploader(this.checked, 'SG')">
                                SMART Guide</label>
                        </div>
                        <div class="form-check" style="margin: 5px 0px 0 12px">
                            <label class="form-check-label">
                                <input type="checkbox" {{($data->sdg_relevance == 'Y')?'checked':''}}  class="form-check-input" name="sr" value="Y" onclick="showUploader(this.checked, 'SR')">
                                SDG Relevance</label>
                        </div>
                    </div>
                    <hr>

                    <div id="indicator_registration_file"><!--input files--></div>

                    <div class="form-group" id="DF" style="display: {{($data->framework == 'Y')?'block':'none'}}">
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
                            <p style="margin:2px 0 0 10px">Selected file type : </p>
                            @foreach($fileTypeTitles as $ftt)
                                <div class="form-check" style="margin: 5px 0px 0 12px">
                                    <label class="form-check-label">
                                        <input type="checkbox"  {{(($data->framework == 'Y') && in_array($ftt, json_decode($data->framework_file_type)))?'checked':''}}  class="form-check-input" name="framework_file_type[]" value="{{$ftt}}">
                                        {{$ftt}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <hr style="margin-top:0; padding-top:0">
                    </div>
                    <div class="form-group" id="MP" style="display: {{($data->me == 'Y')?'block':'none'}}">
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
                            <p style="margin:2px 0 0 10px">Selected file type : </p>

                            @foreach($fileTypeTitles as $ftt)
                                <div class="form-check" style="margin: 5px 0px 0 12px">
                                    <label class="form-check-label">
                                        <input type="checkbox" {{(($data->me == 'Y') && in_array($ftt, json_decode($data->me_file_type)))?'checked':''}}  class="form-check-input" name="me_file_type[]" value="{{$ftt}}">
                                        {{$ftt}}
                                    </label>
                                </div>
                            @endforeach


                        </div>
                        <hr style="margin-top:0; padding-top:0">
                    </div>
                    <div class="form-group" id="MN" style="display: {{($data->methodology_note == 'Y')?'block':'none'}}">
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
                            <p style="margin:2px 0 0 10px">Selected file type : </p>
                            @foreach($fileTypeTitles as $ftt)
                                <div class="form-check" style="margin: 5px 0px 0 12px">
                                    <label class="form-check-label">
                                        <input type="checkbox"  {{(($data->methodology_note == 'Y') && in_array($ftt, json_decode($data->methodology_note_file_type)))?'checked':''}}  class="form-check-input" name="methodology_note_file_type[]" value="{{$ftt}}">
                                        {{$ftt}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <hr style="margin-top:0; padding-top:0">
                    </div>
                    <div class="form-group" id="SG" style="display: {{($data->smart_guide == 'Y')?'block':'none'}}">
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
                            <p style="margin:2px 0 0 10px">Selected file type : </p>

                            @foreach($fileTypeTitles as $ftt)
                                <div class="form-check" style="margin: 5px 0px 0 12px">
                                    <label class="form-check-label">
                                        <input type="checkbox" {{(($data->smart_guide == 'Y') && in_array($ftt, json_decode($data->smart_guide_file_type)))?'checked':''}}   class="form-check-input" name="smart_guide_file_type[]" value="{{$ftt}}">
                                        {{$ftt}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <hr style="margin-top:0; padding-top:0">
                    </div>
                    <div class="form-group" id="SR" style="display: {{($data->sdg_relevance == 'Y')?'block':'none'}}">
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
                            <p style="margin:2px 0 0 10px">Selected file type : </p>

                            @foreach($fileTypeTitles as $ftt)
                                <div class="form-check" style="margin: 5px 0px 0 12px">
                                    <label class="form-check-label">
                                        <input type="checkbox" {{(($data->sdg_relevance == 'Y') && in_array($ftt, json_decode($data->sdg_relevance_file_type)))?'checked':''}}  class="form-check-input" name="sdg_relevance_file_type[]" value="{{$ftt}}">
                                        {{$ftt}}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <hr style="margin-top:0; padding-top:0">
                    </div>
                    <br>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets2/js/off-canvas.js') }}"></script>
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
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
        function removeTd(that){
            $(that).closest('tr').remove();
        }

    </script>


    <script>

        $( function() {
            $( ".datepicker" ).datepicker();
        } );
        // $(document).ready(function() {
        //     pillarChangeEffect();
        // });
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
        function showTargets() {
            try{
                var goal = $("#goal option:selected" ).val();
                $('.goal_target_hide').hide();
                $("#goal_target").val("").change();
                $('.goal-'+goal).show();
            }catch (e) {
                $("#goal_target").val("").change();
                $("#goal_indicator").val("").change();
                $('.goal_target_hide').hide();
                $('.goal_indicator_hide').hide();
            }
        }

        function showIndicators() {
            try{
                var goalTarget = $("#goal_target option:selected" ).val();
                $('.goal_indicator_hide').hide();
                $("#goal_indicator").val("").change();
                $('.goal-target-'+goalTarget).show();
            }catch (e) {
                $("#goal_indicator").val("").change();
                $('.goal_indicator_hide').hide();
            }
        }
        function changeChainResult() {
            try{
                var pillar = $("#pillar option:selected" ).val();
                // console.log(pillar);
                //Results Chain
                $('.hide_relevant').hide();
                $("#relevant_output").val("").change();
                $("#relevant_outcome").val("").change();
                $("#relevant_impact").val("").change();
                $('.relevant_'+pillar).show();
            }catch (e) {

                //Results Chain
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
                try{
                    baseline_year = parseInt(baseline_year)+1;
                }catch {e} {

                }
                // $('#mile_year_text_'+i).html(baseline_year-i);
                // $('#mile_year_field_'+i).val(baseline_year-i);
                $('.mile_year_text_'+i).html(baseline_year);
                $('.mile_year_field_'+i).val(baseline_year);
            }
        }

        function getPoliceStation(that) {
            try{
                var district = $(that).val();
                $(that).closest('table').find('#police_station_field').val("").change();
                $(that).closest('table').find('.hide_area').hide();
                $(that).closest('table').find('.area_'+district).show();
            }catch (e) {
                $(that).closest('table').find('.hide_area').hide();
                $(that).closest('table').find("#police_station_field").val("").change();
            }
        }

        function changeFormula(that) {
            console.log(that);
            calculateMilestoneTotalTarget(that, 'milestone_formula_', '.milestone_planned', '#milestone_total_target');
            calculateMilestoneTotalTarget(that, 'milestone_formula_', '.milestone_disagg_female', '#milestone_disagg_female_total_target');
            calculateMilestoneTotalTarget(that, 'milestone_formula_', '.milestone_disagg_disability', '#milestone_disagg_disability_total_target');
            calculateMilestoneTotalTarget(that, 'milestone_formula_', '.milestone_disagg_reach_heard', '#milestone_disagg_reach_heard_total_target');
        }
        // calculateMilestoneTotalTarget(this, 'milestone_formula_', '.milestone_planned', '#milestone_total_target')
        function calculateMilestoneTotalTarget(that, formula_name, input_class, target_field_id){

            var blockId =  $(that).closest('.PChild').attr('id').split('-');
            blockId = blockId[1];

            var formulaName = formula_name+blockId;
            var formula = $(that).closest('.PChild').find("input[name='"+formulaName+"']:checked").val();

            console.log(blockId);
            console.log(formula);
            console.log(formulaName);
            console.log(input_class+' s');

            if('CUMULATIVE' == formula){
                $.each($(that).closest('.PChild').find(input_class), function (index, inputField) {
                    if($(inputField).val().length !=0){
                        $(that).closest('.PChild').find(target_field_id).val($(inputField).val());
                    }
                });
            }

            if('SUMMATION' == formula){
                var milestone_total_target = 0;
                $.each($(that).closest('.PChild').find(input_class), function (index, inputField) {
                    if($(inputField).val().length !=0){
                        milestone_total_target += parseInt($(inputField).val());
                    }
                });
                $(that).closest('.PChild').find(target_field_id).val(milestone_total_target);

            }

            if('AVERAGE' == formula){
                var counterVal = 0;
                var milestone_total_target = 0;
                $.each($(that).closest('.PChild').find(input_class), function (index, inputField) {
                    if($(inputField).val().length !=0){
                        milestone_total_target += parseInt($(inputField).val());
                    }
                    counterVal++;
                });
                $(that).closest('.PChild').find(target_field_id).val(milestone_total_target/counterVal);

            }



        }


        //coverage area block
        function addTr(that) {
            var blockId =  $(that).closest('.PChild').attr('id').split('-');
            blockId = blockId[1];
            console.log(blockId);
            var table = $(that).closest('table');

            var district_field = table.find("#district_field option:selected" ).val();
            var district_field_text = table.find("#district_field option:selected" ).text();
            var police_station_field =table.find("#police_station_field option:selected" ).val();
            var police_station_field_text = table.find("#police_station_field option:selected" ).text();

            if(district_field.length == 0){
                table.find('#district_field_error').show();
            }else{
                table.find('#district_field_error').hide();
            }

            if(police_station_field.length == 0){
                table.find('#police_station_field_error').show();
            }else{
                table.find('#police_station_field_error').hide();
            }


            if((district_field.length > 0) && (police_station_field.length > 0)){
                var $tableBody = table.find("tbody");
                var   $trLast = $tableBody.find("tr:last");

                var   $trNew ='<tr style="background-color: rgba(243,243,243,1.00)">\n' +
                    '                                    <td>' +
                    '                                        <input type="hidden" name="id[]" value="">\n' +
                    '                                        <span>'+district_field_text+'</span>\n' +
                    '                                        <input type="hidden" name="district_'+blockId+'[]" value="'+district_field+'">\n' +
                    '                                    </td>\n' +
                    '                                    <td>\n' +
                    '                                        <span>'+police_station_field_text+'</span>\n' +
                    '                                        <input type="hidden" name="police_station_'+blockId+'[]" value="'+police_station_field+'">\n' +
                    '                                    </td> \n' +
                    '                                    <td width="100" align="center"><div class="minus btnRemove" onclick="removeTr(this)"></div></td>\n' +
                    '                                </tr>';
                $trLast.after($trNew);
                table.find('.input-fields').find('input').val('');
            }

        }
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

        //show file uploader
        function showUploader(selected, id){
            if (selected) {
                $('#'+id).show();
            } else {
                $('#'+id).hide();
            }
        }

        //open dialog box for milstone
        function OpenInputDialog(txtBox) {
            $("#inputDialog").dialog({
                autoOpen: !1,
                modal: !0,
                title: "Input value",
                closeOnEscape: !0,
                open: function(){
                    $(".txtInput").val($(txtBox).val());
                },
                buttons: [{
                    text: "Insert", click: function () {
                        $(txtBox).val($(".txtInput").val());
                        $(".txtInput").val("");
                        $(this).dialog("close")
                    }
                }],
                close: function () {
                    $(this).dialog("close");
                    $(".txtInput").val("")
                },
                show: {effect: "clip", duration: 200}
            });
            $("#inputDialog").dialog("open")
        }

        function changePrograms() {

            //update milestone year based on baseline year
            changeBaselineYear();

            //show selected programs
            $("#selectedPrograms").html(''); //set selected programs empty
            var sp = $("#contributions_program option:selected");
            if(sp.length > 0){
                sp.each(function () {
                    $('<tr><td>' + $(this).text() + '</td></tr>').appendTo('#selectedPrograms'); //show selected programs
                });
                $('.sp').show();
            }else{
                $('.sp').hide();
            }


            //clone
            try{
                $('#P-0').find(':input').prop("disabled", true);
                var selectedPrograms = $("#contributions_program option:selected");
                selectedPrograms.each(function () {
                    var $this = $(this);
                    var cloneDiv = $('#P-0').clone().attr('id', 'P-'+ $this.val());
                    $(cloneDiv).find('.area-text').html($this.text());
                    $(cloneDiv).find('.mileston-text').html($this.text());

                    //rename all input field
                    cloneDiv.find(':input').each(function() {
                        try {
                            if (this.name.indexOf('[]') != -1) {
                                this.name = this.name.replace('[]', '_' + $this.val() + '[]');
                            } else {
                                this.name = this.name + '_' + $this.val();
                            }

                        }catch{}

                    });

                    //datepicker init
                    cloneDiv.find('.datepicker').each(function() {
                        try {
                            this.id = this.id + '_' + $this.val();
                            $(this).removeClass('hasDatepicker');
                            $(this).removeClass('datepicker');
                            $(this).datepicker();
                        }catch{}
                    });


                    //append cloned html
                    var alreadyIn = 0;
                    $('.PChild').each(function () {
                        var idArray = this.id.split("-");
                        if($this.val() == idArray[1]) {
                            alreadyIn++;
                        }
                    });

                    if(alreadyIn == 0){
                        cloneDiv.find(':input').prop("disabled", false);
                        cloneDiv.insertAfter('#P').show();

                    }

                });

            }catch{

            }


            //remove clone
            try{
                if($("#contributions_program").val() != null){
                    $('.PChild').each(function () {
                        var idArray = this.id.split("-");
                        if((idArray[1] != 0) && ($("#contributions_program").val().indexOf(idArray[1]) == -1)) {
                            $('#'+this.id).remove();
                        }

                    });
                }else{
                    $('.PChild').each(function () {
                        var idArray = this.id.split("-");
                        if((idArray[1] != 0) ) {
                            $('#'+this.id).remove();
                        }

                    });
                }

            }catch{

            }

        }

        $(function() {
            // $('.hidden').hide();
            $('.trigger').change(function() {
                var hiddenId = $(this).attr("data-trigger");
                if ($(this).is(':checked')) {
                    $("#" + hiddenId +" :input").prop('required', true);
                    // $("#" + hiddenId).slideDown();
                } else {
                    $("#" + hiddenId +" :input").removeAttr('required');
                    // $("#" + hiddenId).slideUp();
                }
            });
        });

    </script>
    <!----------end js for this page only ------------->

@endsection
