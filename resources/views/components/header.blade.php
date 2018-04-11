<header id="header">

	<!-- Top header bar -->
	<div id="topHeader">
    
	<div class="wrapper">
         
        <div class="top_nav3">
        <div class="container">
        	
            <div class="left">
            
            	<!-- Logo -->
				<div class="logo3">
                    <a href="" id="logo3"></a>
                </div>
                
            </div><!-- end left -->
            
            <div class="right">
            	
                
                <ul class="topsocial">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            	
                <a href="{{route('contact')}}" class="smbut">Free Consultations</a>
                   
                <div class="clearfix"></div>
                
                <p>Call Us Confidentially Now: <strong>(888) 123-456-7890</strong></p>
                
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
        <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  > <span></span>
          <button type="button" > <i class="fa fa-bars"></i></button>
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
            <a href="{{ route('about-us') }}" class="@if(Route::getCurrentRoute()->getName() == 'about-us') active @endif">About Us</a>
        </li>
        
        <li class="dropdown">
            <a href="{{ route('contact') }}" class="@if(Route::getCurrentRoute()->getName() == 'contact') active @endif">Contact</a>
        </li>
        
        
        
        </ul>
        
      </div>
      </div>
     </div>
     
	</nav><!-- end Navigation Menu -->


	</div>
    
	</div>
    
</header>