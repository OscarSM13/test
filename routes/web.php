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

Route::name('home')->get('/', 'HomeController@index');

Route::name('blog')->get('/blog', 'BlogController@index');
Route::name('blogEntry')->get('/blog/{id}', 'BlogController@single');

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/layout', function () {
    return view('layouts.web');
});