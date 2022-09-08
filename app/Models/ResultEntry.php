<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ResultEntry    extends Model
{
    protected $table = 'result_entry';
    protected $with = ['program', 'pillar', 'resultEntryDetails'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function resultEntryDetails()
    {
        return $this->hasMany(ResultEntryDetails::class);
    }
    public function pillar()
    {
        return $this->belongsTo(Pillar::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}

