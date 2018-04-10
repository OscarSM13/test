@extends('layouts.web')

@section('title', 'Contact')

@push('styles')
<!-- accordion -->
<link rel="stylesheet" type="text/css" href="{{asset('js/accordion/style.css') }}" />
@endpush

@section('content')
<div class="clearfix"></div>

<div class="page_title">
<div class="container">
	
    <h1>About Firm</h1>
    
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="container tbp">

	<h4>Many desktop publishing packages and <span class="color">web page editors</span> now use Lorem Ipsum as their default model text, and a search for will many web sites still in their infancy various versions have evolved over the years.</h4>
    
    <p class="big_text3">Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the  first true generator on the Internet It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable generated Lorem Ipsum is therefore always.</p>
    
</div><!-- end section -->

<div class="clearfix"></div>

<div class="feature_sec7">
<div class="container">
	
	<div class="title11">
    	<h2>Meet our <strong>Team</strong>
        <span class="line4"></span></h2>
	</div>
    
    <br />
    
    <div class="one_fourth">
    	
        <img src="http://placehold.it/190x190" alt="" class="cirimg" />
        
        <div class="cinfo">
        	
            <img src="/storage/images/shape1.jpg" alt="" class="shape1" />
            
        	<h5>Alex Jacobson</h5>
			<em>Founder and Manager</em>
            <b>Practice Areas:</b>
            Corporate and Securities<br />
            Commercial Lending,<br />
            Real Estate<br />

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <br />
            <a href="attorneys-fullbio.html" class="button1">Read Full Bio</a>
                 
        </div>
	
    </div><!-- end section -->
    
    <div class="one_fourth">
    	
        <img src="http://placehold.it/190x190" alt="" class="cirimg" />
        
        <div class="cinfo">
        	
            <img src="/storage/images/shape1.jpg" alt="" class="shape1" />
            
        	<h5>Marcos Heriberto</h5>
			<em>Partner</em>
            <b>Practice Areas:</b>
            Corporate and Securities<br />
            Commercial Lending,<br />
            Real Estate<br />

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <br />
            <a href="attorneys-fullbio.html" class="button1">Read Full Bio</a>
                 
        </div>
        
    </div><!-- end section -->
    

</div>
</div><!-- end features section 7 -->

<div class="clearfix"></div>

<div class="feature_sec11">
<div class="container">

	<h1 class="white">We are Experienced and Deal with Most Aspects of <strong class="color">Commercial and Private</strong> Client Laws</h1>
    
</div>
</div><!-- end features section 11 -->

@endsection
