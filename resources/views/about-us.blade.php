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
	
    <h1>{{ trans('about.about') }}</h1>
    
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="container tbp">

	<h4>{{ trans('about.title') }} <span class="color">{{ trans('about.titleColor') }}</span> {{ trans('about.title2') }}</h4>
    
    <p class="big_text3">{{ trans('about.explanation') }}</p>
    
</div><!-- end section -->

<div class="clearfix"></div>

<div class="feature_sec7">
<div class="container">
	
	<div class="title11">
    	<h2>{{ trans('about.meet') }} <strong>{{ trans('about.team') }}</strong>
        <span class="line4"></span></h2>
	</div>
    
    <br />
    
    <div class="one_fourth">
    	
        <img src="http://placehold.it/190x190" alt="" class="cirimg" />
        
        <div class="cinfo">
        	
            <img src="/storage/images/shape1.jpg" alt="" class="shape1" />
            
        	<h5>Alex Jacobson</h5>
			<em>Founder and Manager</em>
            <b>{{ trans('about.areas') }}</b>
            Corporate and Securities<br />
            Commercial Lending,<br />
            Real Estate<br />

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <br />
            <a href="attorneys-fullbio.html" class="button1">{{ trans('about.bio') }}</a>
                 
        </div>
	
    </div><!-- end section -->
    
    <div class="one_fourth">
    	
        <img src="http://placehold.it/190x190" alt="" class="cirimg" />
        
        <div class="cinfo">
        	
            <img src="/storage/images/shape1.jpg" alt="" class="shape1" />
            
        	<h5>Marcos Heriberto</h5>
			<em>Partner</em>
            <b>{{ trans('about.areas') }}</b>
            Corporate and Securities<br />
            Commercial Lending,<br />
            Real Estate<br />

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <br />
            <a href="attorneys-fullbio.html" class="button1">{{ trans('about.bio') }}</a>
                 
        </div>
        
    </div><!-- end section -->
    

</div>
</div><!-- end features section 7 -->

<div class="clearfix"></div>

<div class="feature_sec11">
<div class="container">

	<h1 class="white"> {{ trans('about.description') }} <strong class="color">{{ trans('about.descriptionColor') }}</strong> {{ trans('about.description2') }}</h1>
    
</div>
</div><!-- end features section 11 -->

@endsection
