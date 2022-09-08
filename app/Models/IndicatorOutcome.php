<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndicatorOutcome extends Model
{
    protected $fillable = ['indicator_no', 'indicator_description', 'outcome_no', 'outcome_description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
