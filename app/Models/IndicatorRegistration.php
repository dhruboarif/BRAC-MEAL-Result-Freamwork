<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class IndicatorRegistration extends Model
{
    protected $table = 'indicator_registration';
    protected $fillable = ['pillar_id', 'indicator_type', 'indicator_number', 'indicator_unit'];
    protected $with = ['pillar', 'indicatorRegIndicators', 'indicatorRegPrograms', 'ownerData'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function pillar()
    {
        return $this->belongsTo(Pillar::class);
    }

    public function indicatorRegIndicators()
    {
        return $this->hasMany(IndicatorRegIndicators::class);
    }

    public function indicatorRegistrationFiles()
    {
        return $this->hasMany(IndicatorRegistrationFile::class);
    }
    public function indicatorRegPrograms()
    {
        return $this->hasMany(IndicatorRegPrograms::class);
    }

    public function ownerData()
    {
        return $this->hasOne(SpaOwner::class, 'id', 'owner');
    }
}

