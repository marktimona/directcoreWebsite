<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
@include('layouts.header')

<body id="body">

    <!--==========================
    Top Bar
  ============================-->

    <!--==========================
    Header
  ============================-->
    @include('layouts.sections.navbar')


    <main id="main">

        @yield('content')

    </main>

    <!--==========================
    Footer
  ============================-->
    @include('layouts.footer')

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/superfish/hoverIntent.js') }}"></script>
    <script src="{{ asset('lib/superfish/superfish.min.js') }}"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/magnific-popup/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('lib/sticky/sticky.js') }}"></script>
    <!-- Uncomment below if you want to use dynamic Google Maps -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script> -->

    <!-- Contact Form JavaScript File -->
    <script src="{{ asset('contactform/contactform.js') }}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        if (window.self == window.top) {
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-55234356-4', 'auto');
            ga('send', 'pageview');
        }

        $(document).ready(function () {
            $(window).scroll(function () {
                var scroll = $(window).scrollTop();
                if (scroll > 80) {
                    $("#header").css("background", "#ffffff");
                    $("#header").css("box-shadow", " 0px 6px 9px 0px rgba(0, 0, 0, 0.06)");
                    console.log('above')
                } else {
                    $("#header").css("background", "rgba(0, 0, 0, 0.01)");
                    $("#header").css("box-shadow", " 0px 0px 0px 0px rgba(0, 0, 0, 0.06)");
                    console.log('below')
                }
            })
        })

    </script>
</body>

</html>
