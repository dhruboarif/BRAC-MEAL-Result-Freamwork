<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PillarDetails extends Model
{
    protected $fillable = ['type','name', 'statement'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pillar()
    {
        return $this->belongsTo(Pillar::class);
    }
}
