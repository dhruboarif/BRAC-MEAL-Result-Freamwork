<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    protected $fillable = ['name', 'description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function StudyArchive()
    {
        return $this->hasMany(StudyArchive::class);
    }

    public function LearningActionArchive()
    {
        return $this->hasMany(LearningActionArchive::class, 'support_id', 'id');
    }
}
