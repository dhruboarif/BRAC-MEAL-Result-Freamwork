<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pillar;
use App\Models\PillarDetails;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Models\Program;
class ExcelReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::all();
        return view('report.module-2.excel',['programs' => $programs]);
    }

    public function downlaod(Request  $request)
    {
        $program_id = $request->program;
        $data_program = DB::table('indicator_registration_program')
            ->where('indicator_registration_program.program_id',$program_id)
            ->join('programs','programs.id','=','indicator_registration_program.program_id')
            ->select('indicator_registration_program.*','programs.name')
            ->get();
        $ext_name = '';
        $ids = array();
        foreach ($data_program as $d){
            array_push($ids, $d->indicator_registration_id);
            $ext_name = $d->name;
        }
        if (empty($ext_name)){
            $ext_name = 'No-data-found';
        }
        $ids = array_unique($ids);
        return Excel::download(new UsersExport($ids), $ext_name.'.xlsx');

    }



    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
