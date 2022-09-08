<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LearningActionArchive extends Model
{
    protected $table = 'learning_action_archive';
    protected $fillable = ['type','program_id', 'support_id', 'name', 'year', 'remarks', 'version', 'version_ref_id', 'status', 'user_id', 'approved_user_id', 'approved_at'];

    public function learningActionArchivedBy()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function learningActionFiles()
    {
        return $this->hasMany(LearningActionFiles::class);
    }
    public function program()
    {
        return $this->belongsTo(Program::class);
    }
    public function thematics()
    {
        return $this->belongsToMany(Thematic::class, 'learning_action_thematics');
    }
    public function support()
    {
        return $this->belongsTo(Support::class, 'support_id', 'id');
    }
}
