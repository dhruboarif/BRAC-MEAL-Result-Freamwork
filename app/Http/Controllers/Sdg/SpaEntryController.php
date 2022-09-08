<?php

namespace App\Http\Controllers\Sdg;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpaEntryController extends Controller
{
    public function index()
    {
        return view('sdg.spa-entry.create');
    }

    public function create()
    {
        return view('sdg.spa-entry.create');
    }
}
