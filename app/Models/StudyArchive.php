<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudyArchive extends Model
{
    protected $table = 'study_archive';
    protected $fillable = ['program_id', 'support_id', 'document_type_id', 'name', 'study_period', 'summary', 'remarks', 'version', 'version_status', 'version_ref_id', 'status', 'user_id', 'approved_user_id', 'seen_at','approved_at'];

    public function studyArchivedBy()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function studyArchiveApprovedBy()
    {
        return $this->belongsTo(User::class, 'approved_user_id', 'id');
    }
    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function support()
    {
        return $this->belongsTo(Support::class);
    }

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }

    public function studyArchiveFiles()
    {
        return $this->hasMany(StudyFile::class);
    }

    public function thematics()
    {
        return $this->belongsToMany(Thematic::class, 'study_thematics');
    }
}
