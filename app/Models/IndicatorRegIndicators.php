<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class IndicatorRegIndicators extends Model
{
    protected $table = 'indicator_registration_indicators';
    protected $with = ['indicatorRegIndicators'];

    public function indicatorRegIndicators()
    {
        return $this->hasMany(PillarDetails::class, 'id', 'indicator_id');
    }

}

