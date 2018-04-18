<!DOCTYPE html>
<html lang="en">
    @include('components.head')
    <body>
        @include('components.header')

        @yield('content')

        @include('components.footer')

        <a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->

        @include('components.scripts')
    </body>
</html>