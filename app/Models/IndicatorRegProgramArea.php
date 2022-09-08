<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class IndicatorRegProgramArea extends Model
{
    protected $table = 'indicator_registration_program_area';
    protected $with = ['district', 'upazila'];

    public function district()
    {
        return $this->hasOne(District::class, 'id', 'district_id' );
    }

    public function upazila()
    {
        return $this->hasOne(Upazila::class, 'id', 'upazila_id' );
    }

}

