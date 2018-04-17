<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PracticeArea;
use Carbon\Carbon;

class PracticeAreasController extends Controller
{
    public function index() {
        $areas = PracticeArea::all();

        return view('areas')->with('areas', $areas);
    }
}
