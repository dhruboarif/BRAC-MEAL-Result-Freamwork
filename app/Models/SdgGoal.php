<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SdgGoal extends Model
{
    protected $fillable = ['name'];
    protected $with = ['sdgTargets'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sdgTargets()
    {
        return $this->hasMany(SdgTarget::class, 'goal_id', 'id');
    }
}
