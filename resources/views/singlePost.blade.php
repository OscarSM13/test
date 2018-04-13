@extends('layouts.web')

@section('title', 'singlePost')
@section('content')
<div class="clearfix"></div>

<div class="page_title2">
<div class="container">
	
    <h1>{{ trans('singlePost.title')}}</h1>
    <div class="pagenation">&nbsp;<a href="{{ route('home')}}">Home</a> <i>/</i> <a href="{{ route('blog')}}">Blog</a> <i>/</i> {{ trans('singlePost.title')}}</div>
     
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="content_fullwidth">
<div class="container">

<div class="content_left">
        	
        <div class="blog_post">	
            <div class="blog_postcontent">
            <div class="image_frame"><img src="{{ $blog->image }}" alt="" /></div>
            <h3>{{ $blog->title }}</h3>
                <ul class="post_meta_links">
					<li><a href="#" class="date">{{ $blog->publish_date->format('d/m/Y') }}</a></li>
					@if($blog->category)
					<li class="post_categoty"><i>in:</i> <a href="#">{{ $blog->category->title }}</a></li>
					@endif
                    {{--<li class="post_comments"><i>note:</i> <a href="#">18 Comments</a></li>--}}
                </ul>
             <div class="clearfix"></div>
             <div class="margin_top1"></div>
            <p>{{ $blog->description }}</p>
            </div>
        </div><!-- /# end post -->
            
            <div class="clearfix divider_line9 lessm"></div>

            
            <div class="sharepost">
				<h4>{{ trans('singlePost.share')}}</h4>
					<ul>
						<li><a href="#">&nbsp;<i class="fa fa-facebook fa-lg"></i>&nbsp;</a></li>
						<li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin fa-lg"></i></a></li>
					</ul>
				
				</div><!-- end share post links -->
                
                <div class="clearfix"></div>
            
            <div class="clearfix margin_top5"></div>
            
</div><!-- end content left side -->
@include('components.columnBlog')
</div>

@endsection