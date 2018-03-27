@extends('layouts.web')

@section('title', 'Home')

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
            <h2>Welcome to Law Firm - Providing Legal Help
                <em>Experience .Reliability .Ethics</em>
                <span class="line"></span></h2>
        </div>

        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour or randomised words which looks anitime even believable. If you are going to use passage of lorem
            Ipsum you need to be sure there is anything works lorem ipsum as their default model text and search for loremipsum will uncover many web sites still in their infancy various versions have evolved over the years.</p>

        <h5>Get your Free Consultation <strong class="animate" data-anim-type="fadeIn" data-anim-delay="300">(888) 123-456-7890</strong> Available 24/7 </h5>

    </div>
</div>
<!-- end features section 1 -->
<div class="clearfix"></div>

        <div class="feature_sec4">
            <div class="container">

                <div class="title11">

                    <h2>Practice <strong>Areas</strong>
                        <span class="line2"></span></h2>

                </div>

                <br />

                <div id="grid-container" class="cbp-l-grid-fullScreen smallthu">

                    <ul>

                        <li class="cbp-item flips1">
                            <a href="#" class="cbp-caption flips1_front flipscont1">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="http://placehold.it/280x210" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><i class="fa fa-briefcase"></i> <br /> <strong>Business &amp; Financial</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="flips1_back flipscont1">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent efficitur porttitor urna, fringilla auctor diam vulputate id. Mauris eget justo orci. Praesent eu diam eros. Nulla imperdiet libero non tellus rutrum, ac dictum nibh tempor. Aliquam rutrum risus mauris, eget condimentum sapien placerat vel. Donec eu placerat tellus, a euismod dolor. Ut non posuere ligula. Ut id lectus in nisi maximus ultricies nec eu erat. Aenean sem tellus, interdum eget felis sed, malesuada suscipit leo. Vivamus suscipit blandit magna, ac cursus erat ultricies quis. Cras et mauris id tortor pretium auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <p>
                            </div>
                        </li>
                        <!-- end item -->

                        <li class="cbp-item flips1">
                            <a href="#" class="cbp-caption flips1_front flipscont1">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="http://placehold.it/280x210" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><i class="fa fa-home"></i> <br /> <strong>Real Estate &amp; Land</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="flips1_back flipscont1">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent efficitur porttitor urna, fringilla auctor diam vulputate id. Mauris eget justo orci. Praesent eu diam eros. Nulla imperdiet libero non tellus rutrum, ac dictum nibh tempor. Aliquam rutrum risus mauris, eget condimentum sapien placerat vel. Donec eu placerat tellus, a euismod dolor. Ut non posuere ligula. Ut id lectus in nisi maximus ultricies nec eu erat. Aenean sem tellus, interdum eget felis sed, malesuada suscipit leo. Vivamus suscipit blandit magna, ac cursus erat ultricies quis. Cras et mauris id tortor pretium auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <p>
                            </div>
                        </li>
                        <!-- end item -->

                        <li class="cbp-item flips1">
                            <a href="#" class="cbp-caption flips1_front flipscont1">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="http://placehold.it/280x210" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><i class="fa fa-medkit"></i> <br /> <strong>Medical Malpractice</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="flips1_back flipscont1">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent efficitur porttitor urna, fringilla auctor diam vulputate id. Mauris eget justo orci. Praesent eu diam eros. Nulla imperdiet libero non tellus rutrum, ac dictum nibh tempor. Aliquam rutrum risus mauris, eget condimentum sapien placerat vel. Donec eu placerat tellus, a euismod dolor. Ut non posuere ligula. Ut id lectus in nisi maximus ultricies nec eu erat. Aenean sem tellus, interdum eget felis sed, malesuada suscipit leo. Vivamus suscipit blandit magna, ac cursus erat ultricies quis. Cras et mauris id tortor pretium auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <p>
                            </div>
                        </li>
                        <!-- end item -->

                        <li class="cbp-item flips1">
                            <a href="#" class="cbp-caption flips1_front flipscont1">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="http://placehold.it/280x210" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><i class="fa fa-car"></i> <br /> <strong>Vehicle Accidents</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="flips1_back flipscont1">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent efficitur porttitor urna, fringilla auctor diam vulputate id. Mauris eget justo orci. Praesent eu diam eros. Nulla imperdiet libero non tellus rutrum, ac dictum nibh tempor. Aliquam rutrum risus mauris, eget condimentum sapien placerat vel. Donec eu placerat tellus, a euismod dolor. Ut non posuere ligula. Ut id lectus in nisi maximus ultricies nec eu erat. Aenean sem tellus, interdum eget felis sed, malesuada suscipit leo. Vivamus suscipit blandit magna, ac cursus erat ultricies quis. Cras et mauris id tortor pretium auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <p>
                            </div>
                        </li>
                        <!-- end item -->

                        <li class="cbp-item flips1">
                            <a href="#" class="cbp-caption flips1_front flipscont1">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="http://placehold.it/280x210" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><i class="fa fa-users"></i> <br /> <strong>Family Law</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="flips1_back flipscont1">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent efficitur porttitor urna, fringilla auctor diam vulputate id. Mauris eget justo orci. Praesent eu diam eros. Nulla imperdiet libero non tellus rutrum, ac dictum nibh tempor. Aliquam rutrum risus mauris, eget condimentum sapien placerat vel. Donec eu placerat tellus, a euismod dolor. Ut non posuere ligula. Ut id lectus in nisi maximus ultricies nec eu erat. Aenean sem tellus, interdum eget felis sed, malesuada suscipit leo. Vivamus suscipit blandit magna, ac cursus erat ultricies quis. Cras et mauris id tortor pretium auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <p>
                            </div>
                        </li>
                        <!-- end item -->

                        <li class="cbp-item flips1">
                            <a href="#" class="cbp-caption flips1_front flipscont1">
                                <div class="cbp-caption-defaultWrap ">
                                    <img src="http://placehold.it/280x210" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><i class="fa fa-edit"></i> <br /> <strong>Premises Liability</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="flips1_back flipscont1">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent efficitur porttitor urna, fringilla auctor diam vulputate id. Mauris eget justo orci. Praesent eu diam eros. Nulla imperdiet libero non tellus rutrum, ac dictum nibh tempor. Aliquam rutrum risus mauris, eget condimentum sapien placerat vel. Donec eu placerat tellus, a euismod dolor. Ut non posuere ligula. Ut id lectus in nisi maximus ultricies nec eu erat. Aenean sem tellus, interdum eget felis sed, malesuada suscipit leo. Vivamus suscipit blandit magna, ac cursus erat ultricies quis. Cras et mauris id tortor pretium auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <p>
                            </div>
                        </li>
                        <!-- end item -->

                        <li class="cbp-item flips1">
                            <a href="#" class="cbp-caption flips1_front flipscont1">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="http://placehold.it/280x210" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><i class="fa fa-money"></i> <br /> <strong>Business &amp; Tax</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="flips1_back flipscont1">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent efficitur porttitor urna, fringilla auctor diam vulputate id. Mauris eget justo orci. Praesent eu diam eros. Nulla imperdiet libero non tellus rutrum, ac dictum nibh tempor. Aliquam rutrum risus mauris, eget condimentum sapien placerat vel. Donec eu placerat tellus, a euismod dolor. Ut non posuere ligula. Ut id lectus in nisi maximus ultricies nec eu erat. Aenean sem tellus, interdum eget felis sed, malesuada suscipit leo. Vivamus suscipit blandit magna, ac cursus erat ultricies quis. Cras et mauris id tortor pretium auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <p>
                            </div>
                        </li>
                        <!-- end item -->

                        <li class="cbp-item flips1">
                            <a href="#" class="cbp-caption flips1_front flipscont1">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="http://placehold.it/280x210" alt="">
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignLeft">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title"><i class="fa fa-university"></i> <br /> <strong>Other Cases</strong></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="flips1_back flipscont1">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent efficitur porttitor urna, fringilla auctor diam vulputate id. Mauris eget justo orci. Praesent eu diam eros. Nulla imperdiet libero non tellus rutrum, ac dictum nibh tempor. Aliquam rutrum risus mauris, eget condimentum sapien placerat vel. Donec eu placerat tellus, a euismod dolor. Ut non posuere ligula. Ut id lectus in nisi maximus ultricies nec eu erat. Aenean sem tellus, interdum eget felis sed, malesuada suscipit leo. Vivamus suscipit blandit magna, ac cursus erat ultricies quis. Cras et mauris id tortor pretium auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <p>
                            </div>
                        </li>
                        <!-- end item -->

                    </ul>
                </div>

                <div class="cbp-l-loadMore-text">
                    <div data-href="ajax/loadMore.html" class="cbp-l-loadMore-text-link"></div>
                </div>

            </div>
        </div>
    <div class="clearfix"></div>

        <div class="feature_sec8">
            <div class="container">

                <div class="one">
                    <h2 class="small2">Recent <strong>Blogs</strong></h2>
                </div>

                <div class="one_half">

                    <div class="small two">

                        <div style="display: flex">

                            <div class="left">
                                <a href="#"><img src="http://placehold.it/100x100" alt="" /></a>
                                <div class="date"><a href="#"><strong>27</strong> NOV</a></div>
                                <div class="comment"><a href="#"><i class="fa fa-comments fa-2x"></i>&nbsp; 257</a></div>
                            </div>

                            <div class="right">
                                <div class="big_text2"><a href="#">There are many variations passages desktop lorem Ipsum available.</a></div>
                                <br />
                                <p>But the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                    anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet to repeat predefined chunks as necessary, making this the first true generator on the normal distribution Internet.</p>
                            </div>

                        </div>
                        <!-- end section -->
                    </div>
                    
                </div>
                <!-- end all section -->
                <div class="one_half last">
                
                    <div class="small two">

                        <div style="display: flex">

                            <div class="left">
                                <a href="#"><img src="http://placehold.it/100x100" alt="" /></a>
                                <div class="date"><a href="#"><strong>27</strong> NOV</a></div>
                                <div class="comment"><a href="#"><i class="fa fa-comments fa-2x"></i>&nbsp; 257</a></div>
                            </div>

                            <div class="right">
                                <div class="big_text2"><a href="#">There are many variations passages desktop lorem Ipsum available.</a></div>
                                <br />
                                <p>But the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                    anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet to repeat predefined chunks as necessary, making this the first true generator on the normal distribution Internet.</p>
                            </div>

                        </div>
                        <!-- end section -->
                    </div>

                    </div>
            </div>
                    
        </div>
                    
    </div>

@endsection