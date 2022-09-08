<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Thematic extends Model
{
    protected $fillable = ['name', 'description'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function studies()
    {
        return $this->belongsToMany(StudyArchive::class, 'study_thematics');
    }

    public function learningActions()
    {
        return $this->belongsToMany(LearningActionArchive::class, 'learning_action_thematics');
    }
}
