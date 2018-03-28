@extends('layouts.web')

@section('title', 'Contact')
@section('content')
<div class="clearfix"></div>

<div class="page_title2">
    <div class="container">

        <h1>With Medium Image</h1>
        <div class="pagenation">&nbsp;<a href="index.html">Home</a> <i>/</i> <a href="#">Blog</a> <i>/</i> With Medium Image</div>

    </div>
</div><!-- end page title -->

    @include('components.blogListItem')

    <div class="pagination">
    <b>Page 2 of 18</b>
    <a href="#" class="navlinks">&lt; Previous</a>
        <a href="#" class="navlinks">1</a>
        <a href="#" class="navlinks current">2</a>
        <a href="#" class="navlinks">3</a>
        <a href="#" class="navlinks">4</a>
        <a href="#" class="navlinks">Next ></a>
    </div><!-- /# end pagination -->

    </div>
</div><!-- end content left side -->

@include('components.columnBlog')
        </div>
@endsection
