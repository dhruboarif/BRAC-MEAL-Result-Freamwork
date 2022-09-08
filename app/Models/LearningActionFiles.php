<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LearningActionFiles extends Model
{
    protected $table = 'learning_action_archive_files';
    protected $fillable = ['learning_action_archive_id', 'store_by', 'update_by', 'status', 'remarks', 'name', 'path', 'version'];

    public function LearningActionArchive()
    {
        return $this->belongsTo(LearningActionArchive::class);
    }
}
