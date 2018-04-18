<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Blog;
use App\PracticeArea;
use Carbon\Carbon;

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function()
{
	Route::name('home')->get('/', 'HomeController@index');

    Route::name('blog')->get('/blog', 'BlogController@index');
    Route::name('blogEntry')->get('/blog/{id}', 'BlogController@single');

    Route::name('about-us')->get('/about-us','AboutUsController@index');

    Route::name('contact')->get('/contact', 'ContactController@index');

    Route::name('areas')->get('/areas', 'PracticeAreasController@index');

    Route::name('area')->get('/area/{id}', 'PracticeAreasController@single');
    
    Route::get('test', function() {
        $blog = Blog::find(16);
        $blog
            ->addMediaFromUrl('https://d26a57ydsghvgx.cloudfront.net/content/blog/BlogImage_Chat.jpg')
            ->toMediaCollection();
        dd($blog->getMedia()->first()->getUrl('thumb-blog'));
        dd($blog->getMedia()->first()->getUrl('thumb-column-blog'));
    });

    Route::get('test2', function() {
        $area = PracticeArea::find(44);
        $area
            ->addMediaFromUrl('https://d26a57ydsghvgx.cloudfront.net/content/blog/BlogImage_Chat.jpg')
            ->toMediaCollection();
            dd($area->getMedia()->first()->getUrl('thumb-single-practice-area'));
        dd($area->getMedia()->first()->getUrl('thumb-practice-areas'));
    });
});