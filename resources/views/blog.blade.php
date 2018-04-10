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

<div>
    <div class="content_fullwidth">
        <div class="container">
            <div class="content_left">
                @each('components.blogListItem', $blogs, 'blog')

                {{ $blogs->links() }}
            </div>
        </div>

        @include('components.columnBlog')
    </div>
</div>
@endsection
