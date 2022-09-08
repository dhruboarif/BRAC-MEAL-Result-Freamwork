<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upazila extends Model
{
    protected $table = 'upazilas';
    protected $fillable = ['name'];

    public function district()
    {
        return $this->belongsTo(District::class);
    }

}
