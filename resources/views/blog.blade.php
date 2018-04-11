@extends('layouts.web')

@section('title', 'Contact')
@section('content')
<div class="clearfix"></div>

<div class="page_title2">
    <div class="container">

        <h1>BLOGS</h1>
        <div class="pagenation">&nbsp;<a href="{{route('home')}}">Home</a> <i>/</i> Blog</div>

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
