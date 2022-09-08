<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SdgIndicator extends Model
{
    protected $fillable = ['number','statement', 'target', 'goal_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sdgTargets()
    {
        return $this->belongsTo(SdgTarget::class, 'target_id', 'id');
    }

}
