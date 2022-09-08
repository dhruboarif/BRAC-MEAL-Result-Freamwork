<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $table = 'districts';
    protected $fillable = ['name'];
    protected $with = ['upazilas'];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
    public function upazilas()
    {
        return $this->hasMany(Upazila::class);
    }
}
