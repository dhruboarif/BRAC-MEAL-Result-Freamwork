<?php

namespace App\Http\Controllers\Sdg;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpaSettingController extends Controller
{
    public function create()
    {
        return view('sdg.spa-setting.create');
    }
}
