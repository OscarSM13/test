<!-- ######### JS FILES ######### -->
    <!-- get jQuery from the google apis -->
    <script type="text/javascript" src="{{ asset('js/universal/jquery.js') }}"></script>

    <!-- style switcher -->
    <script src="{{ asset('js/style-switcher/jquery-1.js') }}"></script>
    <script src="{{ asset('js/style-switcher/styleselector.js') }}"></script>

    <!-- animations -->
    <script src="{{ asset('js/animations/js/animations.min.js') }}" type="text/javascript"></script>

    <!-- mega menu -->
    <script src="{{ asset('js/mainmenu/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/mainmenu/customeUI.js') }}"></script>

    <!-- MasterSlider -->
<script src="{{asset('js/masterslider/jquery.easing.min.js')}}"></script>
<script src="{{ asset('js/masterslider/masterslider.min.js') }}"></script>
<script type="text/javascript">
    (function($) {
        "use strict";

        var slider = new MasterSlider();
        // adds Arrows navigation control to the slider.
        slider.control('arrows');
        slider.control('bullets');

        slider.setup('masterslider', {
            width: 1400, // slider standard width
            height: 580, // slider standard height
            space: 0,
            speed: 45,
            layout: 'fullwidth',
            loop: true,
            preload: 0,
            autoplay: true,
            view: "mask"
        });

    })(jQuery);
</script>

    @stack('scripts')

    <!-- scroll up -->
    <script src="{{ asset('js/scrolltotop/totop.js') }}" type="text/javascript"></script>

   
    <!-- sticky menu -->
    <script type="text/javascript" src="{{ asset('js/mainmenu/sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/mainmenu/modernizr.custom.75180.js') }}"></script>

    <!-- cubeportfolio -->
    <script type="text/javascript" src="{{ asset('js/cubeportfolio/jquery.cubeportfolio.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/cubeportfolio/main.js') }}"></script>

    <!-- owl carousel -->
    <script src="{{ asset('js/carouselowl/owl.carousel.js') }}"></script>

    <!-- Accordion-->
    <script type="text/javascript" src="{{ asset('js/accordion/jquery.accordion.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/accordion/jquery.easing.1.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/accordion/custom.js') }}"></script>

    <!-- tabs -->
    <script src="{{ asset('js/tabs/assets/js/responsive-tabs.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('js/universal/custom.js') }}" ></script>
    
    <!-- Contact -->
    <script type="text/javascript">
            (function($) {
                "use strict";

                var slider = new MasterSlider();
                // adds Arrows navigation control to the slider.
                slider.control('arrows');
                slider.control('bullets');

                slider.setup('masterslider', {
                    width: 1400, // slider standard width
                    height: 580, // slider standard height
                    space: 0,
                    speed: 45,
                    layout: 'fullwidth',
                    loop: true,
                    preload: 0,
                    autoplay: true,
                    view: "mask"
                });

            })(jQuery);
        </script>

    
   