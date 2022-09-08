<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpaOwner extends Model
{
    protected $table = 'spa_owner';
    protected $fillable = ['name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
