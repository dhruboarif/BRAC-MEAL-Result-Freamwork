<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentArchive extends Model
{
    protected $table = 'document_archive';
    protected $fillable = ['program_id', 'document_type_id', 'name', 'year', 'summary', 'remarks', 'version', 'version_ref_id', 'status', 'user_id', 'approved_user_id', 'approved_at'];

    public function documentArchivedBy()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function documentArchiveFiles()
    {
        return $this->hasMany(DocumentFile::class);
    }

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
