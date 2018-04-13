<!-- right sidebar starts -->
<div class="right_sidebar">
   <div class="sidebar_widget">
      <div class="sidebar_title">
         <h4><i>{{trans('columnBlog.categories')}}</i></h4>
      </div>
        <ul class="arrows_list1">
        @foreach($category as $categories)
            <li><a href="#"><i class="fa fa-caret-right"></i> {{ $categories->title }}</a></li>
        @endforeach
      </ul>
   </div>
   <!-- end section -->
   <div class="margin_top4"></div>
   <div class="clearfix"></div>
   <div class="sidebar_widget">
      <div id="tabs">
         <ul class="tabs">
            <li class="active"><a href="#tab1">{{trans('columnBlog.popular')}}</a></li>
            <li><a href="#tab2">{{trans('columnBlog.recent')}}</a></li>
            <li class="last"><a href="#tab3">{{trans('columnBlog.tags')}}</a></li>
         </ul>
         <!-- /# end tab links -->
         <div class="tab_container">
            <div id="tab1" class="tab_content">
               <ul class="recent_posts_list">
                   @foreach($popular as $populars)
                  <li>
                     <span><a href="{{ route('blogEntry',$populars->id )}}"><img src="{{$populars->image}}" alt="" with="50px" height="50px" /></a></span>
                     <a href="{{ route('blogEntry', $populars->id )}}">{{ $populars->title }}</a>
                     <i>October 13, 2014</i>
                  </li>
                  @endforeach
               </ul>
            </div>
            <!-- end popular posts -->
            <div id="tab2" class="tab_content">
               <ul class="recent_posts_list">
                   @foreach($recent as $item)
                    <li>
                        <span><a href="{{ route('blogEntry', $item->id) }}"><img src="{{ $item->image }}" alt="" height="50" width="50" /></a></span>
                        <a href="{{ route('blogEntry', $item->id) }}">{{ $item->title }}</a>
                        <i>October 18, 2014</i>
                    </li>
                  @endforeach
               </ul>
            </div>
            <!-- end popular articles -->
            <div id="tab3" class="tab_content">
               <ul class="tags">
                  <li><a href="#">2014</a></li>
                  <li><a href="#"><b>Amazing</b></a></li>
                  <li><a href="#">Animation</a></li>
                  <li><a href="#">Beautiful</a></li>
                  <li><a href="#"><b>Cartoon</b></a></li>
                  <li><a href="#">Comedy</a></li>
                  <li><a href="#"><b>Cool</b></a></li>
                  <li><a href="#">Dance</a></li>
                  <li><a href="#">Drive</a></li>
                  <li><a href="#"><b>Family</b></a></li>
                  <li><a href="#"><b>Fantasy</b></a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#"><b>Friends</b></a></li>
                  <li><a href="#">Funny</a></li>
                  <li><a href="#"><b>Games</b></a></li>
                  <li><a href="#">Love</a></li>
                  <li><a href="#"><b>Music</b></a></li>
                  <li><a href="#">Nature</a></li>
                  <li><a href="#"><b>Party</b></a></li>
                  <li><a href="#">Pictures</a></li>
                  <li><a href="#">Sports</a></li>
                  <li><a href="#"><b>Best</b></a></li>
                  <li><a href="#">Wedding</a></li>
                  <li><a href="#">Weight</a></li>
                  <li><a href="#"><b>Youtube</b></a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <!-- end section -->
   <div class="clearfix margin_top4"></div>
   <div class="sidebar_widget">
      <div class="sidebar_title">
         <h4><i>{{trans('columnBlog.archives')}}</i></h4>
      </div>
      <ul class="list2">
          @foreach ($site_archives as $archive)
         <li><a href="#"><i class="fa fa-long-arrow-right"></i> {{$archive->publish_date->format('F Y')}} </a></li>
         @endforeach
      </ul>
   </div>
   <!-- end section -->
</div>
<!-- end right sidebar -->
</div>
</div><!-- end content area -->

@push('scripts')
	<!-- tab widget -->
	<script type="text/javascript" src="{{ asset('js/tabs/tabwidget/tabwidget.js') }}"></script>
@endpush

@push('styles')
<!-- accordion -->
<link rel="stylesheet" type="text/css" href="{{ asset('js/accordion/style.css') }}" />

<!-- tabs -->
<link rel="stylesheet" type="text/css" href="{{ asset('js/tabs/tabwidget/tabwidget.css') }}" />

<link rel="stylesheet" href="{{ asset('js/imghovereffects/ihover.css') }}"/>
@endpush