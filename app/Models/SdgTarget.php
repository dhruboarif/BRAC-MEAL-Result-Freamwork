<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SdgTarget extends Model
{
    protected $fillable = ['number', 'goal_id'];
    protected $with = ['sdgIndicators'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sdgGoal()
    {
        return $this->belongsTo(SdgGoal::class, 'goal_id', 'id');
    }

    public function sdgIndicators()
    {
        return $this->hasMany(SdgIndicator::class, 'target_id', 'id');
    }
}
