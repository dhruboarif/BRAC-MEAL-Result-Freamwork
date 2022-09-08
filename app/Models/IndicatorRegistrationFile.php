<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IndicatorRegistrationFile extends Model
{
    protected $table = 'indicator_registration_files';
    protected $fillable = ['indicator_registration_id', 'store_by', 'file_section', 'name', 'path'];

    public function indicatorRegistration()
    {
        return $this->belongsTo(IndicatorRegistration::class);
    }
}
