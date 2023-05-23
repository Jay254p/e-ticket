<?php

namespace App\Http\Controllers\Inspector;

use App\Http\Controllers\Controller;
use App\Models\Offence;
use Illuminate\Http\Request;

class ReportIndexController extends Controller
{
    //
    public function index(){

        $offences = Offence::all();
        return view('inspector.reports.index', compact('offences'));
    }
}
