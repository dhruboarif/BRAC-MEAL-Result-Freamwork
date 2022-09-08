<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class IndicatorRegPrograms extends Model
{
    protected $table = 'indicator_registration_program';
    protected $with = ['indicatorRegProgramArea', 'indicatorRegMilestone', 'programs'];

    public function indicatorRegProgramArea()
    {
        return $this->hasMany(IndicatorRegProgramArea::class);
    }

    public function indicatorRegMilestone()
    {
        return $this->hasMany(IndicatorRegMilestone::class, 'indicator_reg_programs_id', 'id');
    }

    public function programs()
    {
        return $this->hasMany(Program::class, 'id', 'program_id' );
    }

}

