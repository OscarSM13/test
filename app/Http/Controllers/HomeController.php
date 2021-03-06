<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PracticeArea;

class HomeController extends Controller
{
    public function index() {
        $areas = PracticeArea::all();

        return view('home')->with('areas', $areas);
    }
}
