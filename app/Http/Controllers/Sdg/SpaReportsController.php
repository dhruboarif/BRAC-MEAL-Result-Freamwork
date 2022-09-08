<?php

namespace App\Http\Controllers\Sdg;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpaReportsController extends Controller
{
    public function index()
    {
        return view('sdg.indicator-outcome.index');
    }
}
