<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index() {
        $recentBlogs = Blog::orderBy('publish_date', 'DESC')
                ->whereDate('publish_date', '<', Carbon::today())
                ->limit(2)
                ->get();

        return view('home')->with('recent', $recentBlogs);
    }
}
