<header id="header">

	<!-- Top header bar -->
	<div id="topHeader">
    
	<div class="wrapper">
         
        <div class="top_nav3">
        <div class="container">
        	
            <div class="left">
            
            	<!-- Logo -->
				<div class="logo3">
                    <a href="/" id="logo3"></a>
                </div>
                
            </div><!-- end left -->
            
            <div class="right">


                <ul class="topsocial">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
                
                <div class="dropdown" style="display:inline-block; z-index:10000";>
                    <button class="btn btn-default dropdown-toggle" type="button" id="lang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ LaravelLocalization::getCurrentLocaleName() }}
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu button-languages" aria-labelledby="lang">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                    </ul>
                </div>

                <a href="{{route('contact')}}" class="smbut">{{ trans('header.consultation') }}</a>
                
                <div class="clearfix"></div>
                
                <p>{{ trans('header.call') }}<strong>{{ trans('header.numberPhone') }}</strong></p>
                
			</div><!-- end right -->
        
        </div>
        </div>
            
 	</div>
    
	</div><!-- end top navigations -->
	
    
	<div id="trueHeader">
    
	<div class="wrapper">
        	
	<!-- Navigation Menu -->
	<nav class="menu_main2">
        
	<div class="navbar yamm navbar-default">
    
    <div class="container">
      <div class="navbar-header">
        <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"> <span></span>
          <button type="button" > <i class="fa fa-bars"></i></button></i></button>
        </div>
      </div>
      
      <div id="navbar-collapse-1" class="navbar-collapse collapse">
      
        <ul class="nav navbar-nav three">
        
        <li class="dropdown" >
            <a href="/" class="@if(Route::getCurrentRoute()->getName() == 'home') active @endif">Home</a>
        </li>
            
        <li class="dropdown">
            <a href="{{ route('blog') }}" class="@if(Route::getCurrentRoute()->getName() == 'blog') active @endif">Blog</a>
        </li>
        
        <li class="dropdown">
            <a href="{{ '/areas' }}" class="@if(Route::getCurrentRoute()->getName() == 'areas') active @endif">{{trans('header.areas')}}</a>
        </li>
        
        <li class="dropdown">
            <a href="{{ route('about-us') }}" class="@if(Route::getCurrentRoute()->getName() == 'about-us') active @endif">{{trans('header.about')}}</a>
        </li>
        
        <li class="dropdown">
            <a href="{{ route('contact') }}" class="@if(Route::getCurrentRoute()->getName() == 'contact') active @endif">{{trans('header.contact')}}</a>
        </li>       
        
        </ul>
        
      </div>
      </div>
     </div>
     
	</nav><!-- end Navigation Menu -->


	</div>
    
	</div>
    
</header>