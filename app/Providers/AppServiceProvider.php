<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

use Carbon\Carbon;
use App\Blog;
use App\BlogCategory
;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::creator('components.columnBlog', function ($view) {
            $recentBlogs = Blog::orderBy('publish_date', 'DESC')
                ->whereDate('publish_date', '<', Carbon::today())
                ->limit(3)
                ->get();

            $popular = Blog::orderBy('views_count', 'DESC')
                ->whereDate('publish_date', '<', Carbon::today())
                ->limit(3)
                ->get();

            $siteArchive = Blog::orderBy('publish_date', 'DESC')
                ->whereDate('publish_date', '<', Carbon::today())
                ->limit(12)
                ->get();

            $view->with('recent', $recentBlogs)
                ->with('category', BlogCategory::all())
                ->with('site_archives', $siteArchive)
                ->with('popular', $popular);
            
        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
