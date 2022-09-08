<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Program extends Model
{
    protected $fillable = ['name', 'type', 'category','description'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function StudyArchive()
    {
        return $this->hasMany(StudyArchive::class);
    }

    public function DocumentArchive()
    {
        return $this->hasMany(DocumentArchive::class);
    }

    public function LearningActionArchive()
    {
        return $this->hasMany(LearningActionArchive::class);
    }
}

