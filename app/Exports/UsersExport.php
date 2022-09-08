<?php

namespace App\Exports;

use App\Models\IndicatorRegistration;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection,WithHeadings
{
    protected $ids;

    function __construct($ids) {
        $this->ids = $ids;
    }
    public function collection()
    {
        $indcators = DB::table('indicator_registration')
            ->whereIn('indicator_registration.id', $this->ids)
            ->join('pillars','pillars.id','=','indicator_registration.pillar_id')
            ->join('indicator_registration_indicators','indicator_registration_indicators.indicator_registration_id','=','indicator_registration.id')
            ->join('pillar_details','pillar_details.id','=','indicator_registration_indicators.indicator_id')
            ->join('sdg_goals','sdg_goals.id','=','indicator_registration.relevant_goal')
            ->join('sdg_targets','sdg_targets.goal_id','=','sdg_goals.id')
            ->join('sdg_indicators','sdg_indicators.target_id','=','sdg_targets.id')
            ->select('pillars.number','pillars.name','indicator_registration.indicator_number as n',
                'indicator_registration.indicator_statement','sdg_goals.name as sname','sdg_targets.name as tname','sdg_indicators.number as snumber','sdg_indicators.statement as sdSt',
                'indicator_registration.baseline_methodology','indicator_registration.baseline_year','indicator_registration.baseline_source','indicator_registration.definition'
                )
            ->get();
        return $indcators;
    }
    public function headings(): array
    {
        return [
            'Pillar Number',
            'Pillar Statement',
            'Impact/Output/Outcome Number',
            'Impact/Output/Outcome Statement',
            'SDG Goal',
            'SDG SDG Target',
            'Indicator Number',
            'Indicator Statement',
            'Methodology',
            'Baseline Year',
            'Source',
            'Definition',
        ];
    }
}
