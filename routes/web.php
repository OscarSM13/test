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

Route::get('/', function () {
    return view('home');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/layout', function () {
    return view('layouts.web');
});

Route::get('/singlePost', function () {
    return view('singlePost');
});

Route::get('test', function() {
    $test = \App\Blog::find(1);
    $test->category()->associate(new \App\BlogCategory(['title' => 'Testing']));
    $test->save();
});