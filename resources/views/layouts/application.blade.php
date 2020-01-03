<!DOCTYPE HTML>
<html>
    <head>
        @include('includes.head')
    </head>
    <body>
        <div class="colorlib-loader"></div>
        <div id="page">
            <header>
                @include('includes.header')
            </header>
            <div>
                @yield('content')
            </div>
            <footer id="colorlib-footer" role="contentinfo" style="padding: 30px 0">
                @include('includes.footer')
            </footer>
        </div>
        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
        </div>

        <!-- jQuery -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <!-- jQuery Easing -->
        <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- Waypoints -->
        <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
        <!-- Stellar Parallax -->
        <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
        <!-- Flexslider -->
        <script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
        <!-- Owl carousel -->
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <!-- Magnific Popup -->
        <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('js/magnific-popup-options.js')}}"></script>
        <!-- Counters -->
        <script src="{{asset('js/jquery.countTo.js')}}"></script>
        <!-- Main -->
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
