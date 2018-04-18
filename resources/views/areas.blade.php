@extends('layouts.web')

@section('title', 'Contact')
@section('content')
<div class="page_title2">
    <div class="container">
        
        <h1>Practice Areas</h1>
        <div class="pagenation">&nbsp;<a href="/">Home</a> <i>/</i> Practice Areas</div>
            
    </div>
    </div><!-- end page title --> 
    
    <div class="clearfix"></div>
    
    <div class="feature_sec4 two">
    <div class="container">
        
        <div id="grid-container" class="cbp-l-grid-fullScreen smallthu">
        
            <ul>
                @each('components.practiceAreas', $areas, 'area')
            </ul>
        </div>
            
        <div class="cbp-l-loadMore-text">
            <div data-href="ajax/loadMore.html" class="cbp-l-loadMore-text-link"></div>
        </div>
        
    </div>
</div>
@endsection