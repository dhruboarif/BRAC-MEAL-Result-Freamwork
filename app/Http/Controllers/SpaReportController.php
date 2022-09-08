<?php

namespace App\Http\Controllers;

use App\Models\Pillar;
use App\Models\PillarDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpaReportController extends Controller
{
    public function index(Request $request)
    {
        $pillarId = $request->get('pillar');
        if(!empty($pillarId)){
            $pillar = Pillar::findOrFail($pillarId);
            $pillarDetails = PillarDetails::where('pillar_id', $pillarId)->orderBy('type','asc')->orderBy('number', 'asc')->get();

            try {
                $indicatorDetailsQuery = <<<QUERY
                select ir.id, ir.pillar_id, ir.indicator_type, ir.indicator_number, ir.indicator_statement,
                                    iri.indicator_id, d.id d_id, d.type d_indicator_type, d.statement d_statmenet, d.number d_number
                                    from indicator_registration ir, indicator_registration_indicators iri, pillar_details d
                                    where ir.pillar_id = :pid
                                    and ir.id = iri.indicator_registration_id
                                    and iri.indicator_id = d.id
                                    order by indicator_type asc
QUERY;
                $indicatorDetails = DB::select(DB::raw($indicatorDetailsQuery), ['pid'=>$pillarId]);
            } catch (\Exception $e) {
                $indicatorDetails = [];
            }

            return view('report.module-2.spa', ['pillar'=>$pillar, 'pillarDetails'=>$pillarDetails, 'indicatorDetails'=>$indicatorDetails]);
        }else{
            $data = Pillar::orderBy('created_at', 'desc')->paginate(5);
            return view('report.module-2.spa-pillar',['data' => $data]);

        }

    }
}
