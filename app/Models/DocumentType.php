<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
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

    public function DocumentArchive()
    {
        return $this->hasMany(DocumentArchive::class);
    }
}
