<?php

namespace App\Http\Controllers;

use App\Models\StudyArchive;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    public function newArchives()
    {
        $studyArchives = StudyArchive::where(
            'user_id',User::addSelect('id')->where('parent_id', Auth::id())->pluck('id')
        )->whereNull('seen_at')->count();

        return [
            'studyArchives' =>$studyArchives
        ];
    }
}
