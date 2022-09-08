<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pillar extends Model
{
    protected $fillable = ['name', 'number'];
    protected $with = ['pillarDetails'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pillarDetails()
    {
        return $this->hasMany(PillarDetails::class);
    }

}
