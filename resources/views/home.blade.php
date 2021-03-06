@extends('layouts.web')

@section('title', 'Home')

@push('styles')
<!-- MasterSlider -->
<link rel="stylesheet" href="{{ asset('js/masterslider/style/masterslider.css') }}" />
<link rel="stylesheet" href="{{ asset('js/masterslider/skins/default/style.css') }}" />

@endpush

@section('content')
<div class="mstslider">

            <!-- masterslider -->
            <div class="master-slider ms-skin-default" id="masterslider">

                <!-- slide -->
                <div class="ms-slide slide-1" data-delay="7">

                    <!-- slide background -->
                    <img src="{{ asset('masterslider/blank.gif') }}" data-src="http://placehold.it/1920x580" alt="" />

                    <img src="{{ asset('masterslider/blank.gif') }}" data-src="http://placehold.it/550x580" alt="" class="ms-layer" style="bottom:0; right:120px" data-effect="right(72)" data-delay="0" data-duration="300" data-type="image" />

                    <div class="ms-layer text1" style="left:116px; top:123px" data-effect="bottom(50)" data-duration="900" data-delay="300" data-ease="easeOutExpo">NEED LEGAL <br /> ASSISTANCE?</div>

                    <div class="ms-layer text2" style="left:116px; top:305px" data-effect="left(100)" data-duration="2000" data-delay="500" data-ease="easeOutExpo">Get immediate free information and advice confidential from the <br /> experienced attorneys on most common legal issues.</div>

                    <div class="ms-layer sldbut1" style="left:116px; top:455px" data-effect="right(50)" data-duration="2000" data-delay="500" data-ease="easeOutExpo"><a href="#">Learn More</a></div>

                </div>
                <!-- end slide -->

                <!-- slide -->
                <div class="ms-slide slide-2" data-delay="7">

                    <!-- slide background -->
                    <img src="{{ asset('masterslider/blank.gif') }}" data-src="http://placehold.it/1920x580" alt="" />

                    <img src="{{ asset('masterslider/blank.gif') }}" data-src="http://placehold.it/735x580" alt="" class="ms-layer" style="bottom:0; right:30px" data-effect="bottom(72)" data-delay="0" data-duration="300" data-type="image" />

                    <div class="ms-layer text1" style="left:116px; top:120px" data-effect="bottom(50)" data-duration="900" data-delay="600" data-ease="easeOutExpo">Making <br /> Your <br /> Priorities <br /> Ours</div>

                    <div class="ms-layer sldbut1" style="left:120px; top:466px" data-effect="right(50)" data-duration="2000" data-delay="900" data-ease="easeOutExpo"><a href="#">Learn More</a></div>

                </div>
                <!-- end slide -->
            </div>
            <!-- end of masterslider -->
        </div>
        <!-- end slider -->
        <div class="clearfix"></div>

<div class="feature_sec1">
    <div class="container">

        <div class="title11">
            <h2>{{ trans('home.title') }}
                <em>{{ trans('home.subtitle') }}</em>
                <span class="line"></span></h2>
        </div>

        <p>{{ trans('home.explanation') }}</p>

        <h5>{{ trans('home.consultation') }} <strong class="animate" data-anim-type="fadeIn" data-anim-delay="300">{{ trans('home.numberPhone') }}</strong> {{ trans('home.available') }} </h5>

    </div>
</div>
<!-- end features section 1 -->
<div class="clearfix"></div>

        <div class="feature_sec4">
            <div class="container">

                <div class="title11">

                    <h2>{{ trans('home.practice') }} <strong>{{ trans('home.areas') }}</strong>
                        <span class="line2"></span></h2>

                </div>

                <br />

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

    <div class="clearfix"></div>

        <div class="feature_sec3">

            <div class="container">

                <div class="one">
                    <h2 class="small">{{ trans('home.client1') }} <strong>{{ trans('home.client2') }}</strong></h2>
                </div>

                <div class="one_third hpeosays">
                    <div>
                        <img src="http://placehold.it/116x126" alt="" />
                        
                        <p><strong>Lorem that more</strong> less normal distribution of letters as opposed to using content here content making it look like readable english many web page editors now used model structure looks Ipsum always and a of model sentence structures to generate which looks.</p>
                        
                        <b>- Ricky Holness, <em>additional info</em></b>
                        
                        <div class="divider_line21 last"></div>
                        
                    </div><!-- end section -->
                </div>
                
                <div class="one_third hpeosays">

                        <div>
                            <img src="http://placehold.it/116x126" alt="" />
                            
                            <p><strong>Lorem that more</strong> less normal distribution of letters as opposed to using content here content making it look like readable english many web page editors now used model structure looks Ipsum always and a of model sentence structures to generate which looks.</p>
                            
                            <b>- Ricky Holness, <em>additional info</em></b>
                            
                            <div class="divider_line21 last"></div>
                            
                        </div><!-- end section -->

                </div>

                <div class="one_third hpeosays last" >

                        <div>
                            <img src="http://placehold.it/116x126" alt="" />
                            
                            <p><strong>Lorem that more</strong> less normal distribution of letters as opposed to using content here content making it look like readable english many web page editors now used model structure looks Ipsum always and a of model sentence structures to generate which looks.</p>
                            
                            <b>- Ricky Holness, <em>additional info</em></b>
                            
                            <div class="divider_line21 last"></div>
                            
                        </div><!-- end section -->

                </div>
            </div><!-- end all section -->
        </div>

@endsection