<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResultEntryDetails extends Model
{
    protected $table = 'result_entry_details';

    public function resultEntry()
    {
        return $this->belongsTo(ResultEntry::class);
    }
}
