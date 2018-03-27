@extends('layouts.web')

@section('title', 'singlePost')
@section('content')
<div class="clearfix"></div>

<div class="page_title2">
<div class="container">
	
    <h1>Single Post</h1>
    <div class="pagenation">&nbsp;<a href="index.html">Home</a> <i>/</i> <a href="#">Blog</a> <i>/</i> Single Post</div>
     
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="content_fullwidth">
<div class="container">

<div class="content_left">
        	
        <div class="blog_post">	
            <div class="blog_postcontent">
            <div class="image_frame"><a href="#"><img src="http://placehold.it/1170x520" alt="" /></a></div>
            <h3><a href="blog-post.html">Many web sites still in their infancy</a></h3>
                <ul class="post_meta_links">
                    <li><a href="#" class="date">27 October 2014</a></li>
                    <li class="post_by"><i>by:</i> <a href="#">Adam Harrison</a></li>
                    <li class="post_categoty"><i>in:</i> <a href="#">Web tutorials</a></li>
                    <li class="post_comments"><i>note:</i> <a href="#">18 Comments</a></li>
                </ul>
             <div class="clearfix"></div>
             <div class="margin_top1"></div>
            <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years <a href="#">read more...</a></p>
            </div>
        </div><!-- /# end post -->
            
            <div class="clearfix divider_line9 lessm"></div>

            
            <div class="sharepost">
				<h4>Share this Post</h4>
					<ul>
						<li><a href="#">&nbsp;<i class="fa fa-facebook fa-lg"></i>&nbsp;</a></li>
						<li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a></li>
						<li><a href="#"><i class="fa fa-flickr fa-lg"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
						<li><a href="#"><i class="fa fa-html5 fa-lg"></i></a></li>
						<li><a href="#"><i class="fa fa-skype fa-lg"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube fa-lg"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin fa-lg"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest fa-lg"></i></a></li>
                        <li><a href="#"><i class="fa fa-linux fa-lg"></i></a></li>
                        <li><a href="#"><i class="fa fa-android fa-lg"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss fa-lg"></i></a></li>
					</ul>
				
				</div><!-- end share post links -->
                
                <div class="clearfix"></div>
                
            <h4>About the Author</h4>
            <div class="about_author">
            
                <img src="images/blog/avatar.jpg" alt="" />
                
                <a href="http://themeforest.net/user/gsrthemes9/portfolio" target="_blank">GSR Themes</a><br />
               I'm a freelance designer with satisfied clients worldwide. I design simple, clean websites and develop easy-to-use applications. Web Design is not just my job it's my passion. You need professional web designer you are welcome.
            </div><!-- end about author -->
            
            <div class="clearfix margin_top5"></div>
          
      <div class="one_half"> 
         <div class="popular-posts-area">
            <h4>Recent Posts</h4>
				<ul class="recent_posts_list">
					<li>
					  	<span><a href="#"><img src="http://placehold.it/50x50" alt="" /></a></span>
						<a href="#">Many desktop uncure publish package webpages simple on internet</a>
						 <i>October 18, 2014</i> 
					</li>
                    
					<li>
					  	<span><a href="#"><img src="http://placehold.it/50x50" alt="" /></a></span>
						<a href="#">Many desktop uncure publish package webpages simple on internet</a>
						 <i>October 17, 2014</i> 
					</li>
					
					<li>
					  	<span><a href="#"><img src="http://placehold.it/50x50" alt="" /></a></span>
						<a href="#">Many desktop uncure publish package webpages simple on internet</a>
						 <i>October 16, 2014</i> 
					</li>
				</ul>
				
			</div>
       </div><!-- end recent posts -->
       
       
       <div class="one_half last"> 
         <div class="popular-posts-area">
            <h4>Popular Posts</h4>
				<ul class="recent_posts_list">
					<li>
					  	<span><a href="#"><img src="http://placehold.it/50x50" alt="" /></a></span>
						<a href="#">Many desktop uncure publish package webpages simple on internet</a>
						 <i>October 13, 2014</i> 
					</li>
                    
					<li>
					  	<span><a href="#"><img src="http://placehold.it/50x50" alt="" /></a></span>
						<a href="#">Many desktop uncure publish package webpages simple on internet</a>
						 <i>October 12, 2014</i> 
					</li>
					
					<li>
					  	<span><a href="#"><img src="http://placehold.it/50x50" alt="" /></a></span>
						<a href="#">Many desktop uncure publish package webpages simple on internet</a>
						 <i>October 11, 2014</i> 
					</li>
				</ul>
				
			</div>
       </div><!-- end popular posts -->	
            
	<div class="clearfix mar_top2"></div>  
            
</div><!-- end content left side -->
@include('components.columnBlog')
</div>

@endsection