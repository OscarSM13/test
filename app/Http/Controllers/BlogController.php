<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::paginate(10);

        return view('blog')
            ->with('blogs', $blogs);
    }

    public function single($id) {
        $singleBlog = Blog::find($id);

        return view('singlePost')
            ->with('blog', $singleBlog);
    }
}
