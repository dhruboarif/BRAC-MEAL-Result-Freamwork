<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyFile extends Model
{
    protected $table = 'study_archive_files';
    protected $fillable = ['study_id', 'store_by', 'update_by', 'status', 'remarks', 'name', 'path', 'version'];

    public function StudyArchive()
    {
        return $this->belongsTo(StudyArchive::class);
    }


}
