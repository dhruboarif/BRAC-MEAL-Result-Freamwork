<?php

namespace App\Http\Controllers;

use App\Models\DocumentArchive;
use App\Models\LearningActionArchive;
use App\Models\Program;
use App\Models\StudyArchive;
use App\Models\Thematic;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class SdgReportController extends Controller
{
    public function index()
    {
        $programs =  Program::select(['id', 'name'])
            ->where('status', '=', 'A')
//            ->where('id', '=', 3)
            ->orderBy('name', 'asc')
            ->get();

        $data = [];
        foreach($programs as $key=>$p){
            $regIndics = $this->getRegStatements($p->id);
            $regInds = [];
            foreach($regIndics as $in){
                $regInds[] =$in->statement;
            }

            $indics = $this->getStatements( $p->id);
            $inds = [];
            foreach($indics as $in){
                $inds[] =[
                    'number'=>$in->number,
                    'statement'=>$in->statement,
                    'reg_indicator'=>$regInds
                ];

            }

            $data[] = [
                'sl' => ++$key,
                'id' => $p->id,
                'program_name' =>$p->name,
                'target_counter'=> $this->getTargetCounter( $p->id),
                'indicator_counter'=> $this->getRegStatementCounter( $p->id),
                'statement_counter'=>  $this->getStatementCounter( $p->id),
                'indicator'=>  $inds
            ];
        }
        return view('report.module-2.sdg',['data' => $data]);

        /*$data = [
            [
                'id'=>'1',
                'sl'=>'01',
                'program_name' =>'Program 01',
                'target_counter'=> '2',
                'indicator_counter'=> '32',
                'statement_counter'=> '3',
                'indicator' =>[
                    ['number'=>'1', 'statement'=>'statement-12', 'reg_indicator'=>['2asdasd','2gfett','343434']],
                    ['number'=>'2', 'statement'=>'statement-132','reg_indicator'=>['2asdasd','2gfett','343434']],
                    ['number'=>'3', 'statement'=>'statement-1234','reg_indicator'=>['2asdasd','2gfett','343434']],

                ]
            ],
            [
                'id'=>'2',
                'sl'=>'02',
                'program_name' =>'Program 02',
                'target_counter'=> '2',
                'indicator_counter'=> '562',
                'statement_counter'=> '34',
                'indicator' =>[
                    ['number'=>'1', 'statement'=>'statement-12ead2', 'reg_indicator'=>['2asdasd','2gfett','343434']],
                    ['number'=>'2', 'statement'=>'statement-132','reg_indicator'=>['2asdasd','2gfett','343434']],
                    ['number'=>'3', 'statement'=>'statement-1234','reg_indicator'=>['2asdasd','2gfett','343434']],

                ]
            ]

        ];
        return view('report.module-2.sdg',['data' => $data]);*/
    }

    public function getTargetCounter($programId=0){

        $query = "select count(relevant_indicator_target) as total_target
from indicator_registration ir
where ir.id in(
    select indicator_registration_id
    from indicator_registration_program irp
    where irp.program_id = $programId
    ) group by relevant_indicator_target";

        $result = DB::select($query);
        return isset($result[0])?$result[0]->total_target:0;
    }


    public function getRegStatementCounter($programId=0){

        $query = "select count(indicator_statement) as total_statement
from indicator_registration ir
where ir.id in(
    select indicator_registration_id
    from indicator_registration_program irp
    where irp.program_id = $programId
    )";

        $result = DB::select($query);
        return isset($result[0])?$result[0]->total_statement:0;
    }

    public function getStatementCounter($programId=0){

        $query = "select count(indicator_registration_id) as total_statement
    from indicator_registration_program irp
    where irp.program_id = $programId";

        $result = DB::select($query);
        return isset($result[0])?$result[0]->total_statement:0;

    }

    public function getStatements($programId=0){

        $query = "select indicator_number number, indicator_statement statement
from indicator_registration ir
where ir.id in(
    select indicator_registration_id
    from indicator_registration_program irp
    where irp.program_id = $programId
    )";

        return DB::select($query);

    }

    public function getRegStatements($programId=0){

       $query = "select indicator_id, si.statement, si.number
from indicator_registration_indicators ir, sdg_indicators si
where ir.indicator_registration_id in(
    select indicator_registration_id
    from indicator_registration_program irp
    where irp.program_id = $programId
)
and si.id = ir.indicator_id";

        return DB::select($query);
    }


}
