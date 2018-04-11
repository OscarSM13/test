<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::paginate(6);

        return view('blog')
            ->with('blogs', $blogs);
    }

    public function single($id) {
        $singleBlog = Blog::find($id);

        $singleBlog->views_count += 1;
        $singleBlog->save();

        return view('singlePost')
            ->with('blog', $singleBlog);
    }
}
