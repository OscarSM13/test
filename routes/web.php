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

    Route::get('/area', function () {
        return view('area');
    });

    Route::get('test', function() {
        $blog = Blog::create([
            'image' => 'http://via.placeholder.com/800x600',
            'title' => 'Test',
            'description' => 'Test',
            'publish_date' => Carbon::now()
        ]);
    });
});