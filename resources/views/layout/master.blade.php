<!DOCTYPE html>
<!--[if lte IE 9]><html lang="en-US" class="lte-ie-9"><![endif]-->
<!--[if gt IE 9]><html lang="en-US"><![endif]-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
 @include('layout.partials.head')
</head>

<body class="page-template-default page page-id-1632 page-child parent-pageid-1134 wpb-js-composer js-comp-ver-5.2.1 vc_responsive">
<div id="page" class="site">
    <div id="cms_page_loader" class="loading"><div class="cms-page-loader-spinner"></div></div><div id="masthead_placeholder" class="header-placeholder header-placeholder-layout-4"></div>
    <header id="masthead" class="site-header header-with-bg header-layout-4 header-with-top header-sticky" data-sticky-height="80">
        <div class="site-header-inner">

            {{--TOP NAV--}}
            @include('layout.partials.topNav')

            {{-- MAIN MENU --}}
            @include('layout.partials.mainMenu')
        </div><!-- .site-header-inner -->
    </header>

    {{--<div id="site_search_popup" class="site-search-popup cms-page-overlay">--}}
        {{--<div class="cms-page-overlay-inner">--}}
            {{--<div class="cms-search-popup">--}}
                {{--<div class="container">--}}
                    {{--<div class="site-search-popup-inner text-center">--}}
                        {{--<form method="get" class="search-form" action="http://7oroof.com/tfdemos/wp-metrics/">--}}
                            {{--<label>--}}
                                {{--<span class="screen-reader-text">Search for:</span>--}}
                                {{--<input type="search" class="search-field" placeholder="Type and hit enter..." value="" name="s" title="Search for:">--}}
                            {{--</label>--}}
                            {{--<button type="submit" class="search-submit"><i class="fa fa-search"></i></button>--}}
                        {{--</form>                </div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div id="site_side_panel_popup" class="site-side-panel-popup cms-page-overlay">
        <div class="side-panel">
            <a href="#" class="side-panel-toggle"></a>
            <div class="side-panel-inner">
                <div class="side-panel-logo side-panel-block"><div class="side-panel-block-content"><a href="http://7oroof.com/tfdemos/wp-metrics/"><img src="../../wp-content/themes/wp-metrics/assets/images/side-panel-logo.png" alt=""/></a></div></div><div class="side-panel-menu side-panel-block"><div class="side-menu-container side-panel-block-content"><ul id="side_menu" class="cms-menu-side"><li id="menu-item-1446" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor menu-item-1446"><a href="http://7oroof.com/tfdemos/wp-metrics/home/"><span class="menu-title">Home</span></a></li>
                            <li id="menu-item-1447" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1447"><a href="http://7oroof.com/tfdemos/wp-metrics/about/"><span class="menu-title">About</span></a></li>
                            <li id="menu-item-1448" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1448"><a href="http://7oroof.com/tfdemos/wp-metrics/solutions/products/"><span class="menu-title">Products</span></a></li>
                            <li id="menu-item-1449" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1449"><a href="http://7oroof.com/tfdemos/wp-metrics/solutions/"><span class="menu-title">Solutions</span></a></li>
                            <li id="menu-item-1450" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1450"><a href="http://7oroof.com/tfdemos/wp-metrics/features/"><span class="menu-title">Features</span></a></li>
                            <li id="menu-item-1451" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1451"><a href="http://7oroof.com/tfdemos/wp-metrics/solutions/plans/"><span class="menu-title">Plans</span></a></li>
                            <li id="menu-item-1452" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1452"><a href="http://7oroof.com/tfdemos/wp-metrics/blog/"><span class="menu-title">Blog</span></a></li>
                            <li id="menu-item-1453" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1453"><a href="http://7oroof.com/tfdemos/wp-metrics/contact/"><span class="menu-title">Contact</span></a></li>
                        </ul></div></div><div class="side-panel-widget-area side-panel-block"><div class="side-panel-widgets side-panel-block-content"><aside id="cms_social-3" class="widget widget_cms_social"><ul id="menu-social-menu-1" class="cms-social text-center spacing-wider size-medium"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1900"><a href="https://www.facebook.com/directcoretechnologies/"><span class="menu-icon"><i class="fa fa-facebook"></i></span><span class="screen-reader-text">Facebook</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1901"><a href="https://twitter.com/DirectcoreTech"><span class="menu-icon"><i class="fa fa-twitter"></i></span><span class="screen-reader-text">Twitter</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1902"><a href="https://vimeo.com/"><span class="menu-icon"><i class="fa fa-vimeo"></i></span><span class="screen-reader-text">Vimeo</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1903"><a href="https://www.linkedin.com/in/directcoretech/"><span class="menu-icon"><i class="fa fa-linkedin"></i></span><span class="screen-reader-text">Linkedin</span></a></li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1904"><a href="http://example.com/rss"><span class="menu-icon"><i class="fa fa-rss"></i></span><span class="screen-reader-text">RSS</span></a></li>
                            </ul></aside><aside id="custom_html-17" class="widget_text widget widget_custom_html text-center"><div class="textwidget custom-html-widget">© 2015 - 2016 Metrics. All Rights Reserved<br/>With Love by <a href="http://themeforest.net/user/7oroof/portfolio?ref=7oroof" target="_blank">7oroof.com</a></div></aside></div></div>        </div>
        </div>
    </div>
   {{--WENT FOR CLEANING--}}

    @yield('customSlider')

    <div class="site-content" id="content">
        <div class="content-area" id="primary">
                <main class="site-main" id="main">
                    <article class="post-1632 page type-page status-publish hentry">


                        <div class="entry-content">

                            {{--SLIDER--}}
                            <div class="vc_row wpb_row vc_row-fluid">
                                @yield('slider')
                            </div>
                            <div class="container">
                            {{--CONTENT--}}
                                <div class="vc_row wpb_row vc_row-fluid">
                                    @yield('content1')
                                </div>


                                    @yield('customSection')

                                <div class="vc_row wpb_row vc_row-fluid">

                                    @yield('content2')

                                </div>

                            <div class="vc_row wpb_row vc_row-fluid vc_custom_1499161060922 vc_row-has-fill row-has-overlay" data-vc-full-width="true" data-vc-full-width-init="false">

                                    @yield('content3')
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>

                            <div class="vc_row-full-width vc_clearfix"></div>

                                <br>
                                <br>
                            <div class="vc_row-full-width vc_clearfix"></div>
                         @include('layout.partials.partners')
                        </div><!-- .entry-content -->
                        </div>
                    </article><!-- #post-## -->

                </main><!-- #main -->
            </div><!-- #primary -->
        </div>
    </div>



    <footer id="colophon" class="site-footer footer-with-top-full footer-layout-1">
       @include('layout.partials.footer')
    </footer><!-- #colophon -->
    <a id="backtotop" class="back-to-top" href="javascript:void(0);"><span class="screen-reader-text">Back to top</span><i class="fa fa-angle-up"></i></a></div><!-- #page -->
        {{--SCRIPTS--}}
        @include('layout.partials.scripts')

</body>


</html>
