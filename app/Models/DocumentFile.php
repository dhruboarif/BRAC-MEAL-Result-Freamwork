<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentFile extends Model
{
    protected $table = 'document_archive_files';
    protected $fillable = ['document_archive_id', 'store_by', 'update_by', 'status', 'remarks', 'name', 'path', 'version'];

    public function DocumentArchive()
    {
        return $this->belongsTo(DocumentArchive::class);
    }
}
