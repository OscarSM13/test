<div class="clearfix"></div>

<div class="blog_post">
    <div class="blog_postcontent">
        <div class="image_frame"><a href="{{ route('blogEntry', $blog->id) }}"><img src="{{ $blog->getMedia()->first()->getUrl('thumb-blog') }}" alt="" /></a></div>
        <h3><a href="{{ route('blogEntry', $blog->id) }}">{{ $blog->title }}</a></h3>
        <ul class="post_meta_links">
            <li><a href="#" class="date">{{ $blog->publish_date->format('d/m/Y') }}</a></li>
            @if($blog->category)
                <li class="post_categoty"><i>in:</i> <a href="#">{{ $blog->category->title }}</a></li>
            @endif
            {{--<li class="post_comments"><i>note:</i> <a href="#">18 Comments</a></li>--}}
        </ul>
        <div class="clearfix"></div>
        <div class="margin_top1"></div>
        <p>{{ str_limit($blog->description, 100, '') }} <a href="{{ route('blogEntry', $blog->id) }}">{{ trans('singlePost.read')}}</a></p>
    </div>
</div>

<div class="clearfix divider_line9"></div>

