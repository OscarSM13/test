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

    Route::get('test', function() {
        $blog = Blog::find(16);
        $blog
            ->addMediaFromUrl('https://d26a57ydsghvgx.cloudfront.net/content/blog/BlogImage_Chat.jpg')
            ->toMediaCollection();
        dd($blog->getMedia()->first()->getUrl('thumb-blog'));
        dd($blog->getMedia()->first()->getUrl('thumb-column-blog'));
    });
});