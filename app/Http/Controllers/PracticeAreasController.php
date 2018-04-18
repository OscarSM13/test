<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PracticeArea;

class PracticeAreasController extends Controller
{
    public function index() {
        $areas = PracticeArea::all();

        return view('areas')->with('areas', $areas);
    }

    public function single($id) {
        $singleArea = PracticeArea::find($id);

        $singleArea->save();
        return view('singleArea')
            ->with('area', $singleArea);
    }
    
}
