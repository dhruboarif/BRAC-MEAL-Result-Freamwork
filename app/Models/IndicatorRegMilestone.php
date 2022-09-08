<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class IndicatorRegMilestone extends Model
{
    protected $table = 'indicator_registration_milestone';
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

