<div id="header_main" class="site-header-main">
    <div class="container">
        <div class="row">
            <div class="site-branding">
                <h1><a href="{{url("/")}}"><img src="{{url("/")}}/wp-content/themes/wp-metrics/assets/images/logo.png" alt="logo" title="Metrics Business"/></a></h1>
            </div>
            <div class="site-mobile-menu-tools">
                <div class="mobile-menu-tools-inner">
                    <button type="button" class="btn-default btn-small mobile-menu-toggle" aria-controls="site_nav_main"><i class="fa fa-th-list"></i></button>
                </div>
            </div>
            <div class="site-navs">
                <div class="site-navs-inner">
                    <nav id="site_nav_main" class="site-nav-main">
                        {{--<div class="menu-extras-container">--}}
                            {{--<ul class="cms-menu-extras menu-extras-3-items">--}}
                                {{--<li>--}}
                                    {{--<a class="search-toggle" href="#" title="Toggle Search">--}}
                                        {{--<i class="fa fa-search">--}}

                                        {{--</i>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="side-nav-toggle" href="#" title="Toggle Side Navigation">--}}
                                        {{--<i class="fa fa-bars">--}}

                                        {{--</i>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<a class="cart-toggle" href="#" title="Toggle Shopping Cart">--}}
                                        {{--<i class="fa fa-shopping-cart">--}}

                                        {{--</i>--}}
                                    {{--</a>--}}
                                    {{--<div class="sub-menu-cart">--}}
                                        {{--<aside id="woocommerce_widget_cart-2" class="widget woocommerce widget_shopping_cart">--}}
                                            {{--<div class="screen-reader-text">--}}
                                                {{--<h4 class="widget-title">Cart</h4>--}}
                                            {{--</div>--}}
                                            {{--<div class="widget_shopping_cart_content">--}}

                                            {{--</div>--}}
                                        {{--</aside>--}}
                                    {{--</div>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}


                        <div class="menu-main-container">
                            <ul id="primary_menu" class="cms-menu-main">
                                <li id="menu-item-1343" class="{{Request::is('/') ? 'current-menu-ancestor':''}} menu-item menu-item-type-post_type menu-item-object-page  current-page-ancestor current-page-parent current_page_ancestor menu-item-has-children menu-item-1343 menu-item-mega-3 menu-item-group-sub-menu">

                                    <a href="homePage">
                                        <span class="menu-title" style="color: #0c5c99">Home</span>
                                    </a>
                                    {{--<ul class="sub-menu multi-cols multi-cols-3"  data-item-width="190" data-item-cols="3">--}}
                                        {{--<li id="menu-item-1618" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1618 menu-item-hide-title"><a href="#"><span class="menu-title">Homepage Set 1</span></a>--}}
                                            {{--<ul class="sub-menu"  >--}}
                                                {{--<li id="menu-item-1369" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-page-parent menu-item-1369"><a href="http://7oroof.com/tfdemos/wp-metrics/home/"><span class="menu-title">Homepage 1</span></a></li>--}}
                                                {{--<li id="menu-item-1353" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1353"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-2/"><span class="menu-title">Homepage 2</span></a></li>--}}
                                                {{--<li id="menu-item-1354" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1354"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-3/"><span class="menu-title">Homepage 3</span></a></li>--}}
                                                {{--<li id="menu-item-1355" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1355"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-4/"><span class="menu-title">Homepage 4</span></a></li>--}}
                                                {{--<li id="menu-item-1364" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1364"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-5/"><span class="menu-title">Homepage 5</span></a></li>--}}
                                                {{--<li id="menu-item-1365" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1365"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-6/"><span class="menu-title">Homepage 6</span></a></li>--}}
                                                {{--<li id="menu-item-1366" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1366"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-7/"><span class="menu-title">Homepage 7</span></a></li>--}}
                                                {{--<li id="menu-item-1367" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1367"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-8/"><span class="menu-title">Homepage 8</span></a></li>--}}
                                                {{--<li id="menu-item-1368" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1368"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-9/"><span class="menu-title">Homepage 9</span></a></li>--}}
                                                {{--<li id="menu-item-1640" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1640"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-10/"><span class="menu-title">Homepage 10</span></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li id="menu-item-1619" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-1619 menu-item-hide-title"><a href="#"><span class="menu-title">Homepage Set 2</span></a>--}}
                                            {{--<ul class="sub-menu"  >--}}
                                                {{--<li id="menu-item-1639" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1639"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-11/"><span class="menu-title">Homepage 11</span></a></li>--}}
                                                {{--<li id="menu-item-1634" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1634"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-12/"><span class="menu-title">Homepage 12</span></a></li>--}}
                                                {{--<li id="menu-item-1638" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1638"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-13/"><span class="menu-title">Homepage 13</span></a></li>--}}
                                                {{--<li id="menu-item-1637" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1637"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-14/"><span class="menu-title">Homepage 14</span></a></li>--}}
                                                {{--<li id="menu-item-1636" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1636"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-15/"><span class="menu-title">Homepage 15</span></a></li>--}}
                                                {{--<li id="menu-item-1635" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1632 current_page_item menu-item-1635"><a href="index.html"><span class="menu-title">Homepage 16</span></a></li>--}}
                                                {{--<li id="menu-item-1679" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1679"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-17/"><span class="menu-title">Homepage 17</span></a></li>--}}
                                                {{--<li id="menu-item-1694" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1694"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-18/"><span class="menu-title">Homepage 18</span></a></li>--}}
                                                {{--<li id="menu-item-1710" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1710"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-19/"><span class="menu-title">Homepage 19</span></a></li>--}}
                                                {{--<li id="menu-item-1728" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1728"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-20/"><span class="menu-title">Homepage 20</span></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li id="menu-item-1696" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1696 menu-item-hide-title"><a href="#"><span class="menu-title">Homepage Set 3</span></a>--}}
                                            {{--<ul class="sub-menu"  >--}}
                                                {{--<li id="menu-item-1775" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1775"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-21/"><span class="menu-title">Homepage 21</span></a></li>--}}
                                                {{--<li id="menu-item-1781" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1781"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-22/"><span class="menu-title">Homepage 22</span></a></li>--}}
                                                {{--<li id="menu-item-1822" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1822"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-23/"><span class="menu-title">Homepage 23</span></a></li>--}}
                                                {{--<li id="menu-item-1853" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1853"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-24/"><span class="menu-title">Homepage 24</span></a></li>--}}
                                                {{--<li id="menu-item-1852" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1852"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-25/"><span class="menu-title">Homepage 25</span></a></li>--}}
                                                {{--<li id="menu-item-1851" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1851"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-26/"><span class="menu-title">Homepage 26</span></a></li>--}}
                                                {{--<li id="menu-item-1850" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1850"><a href="http://7oroof.com/tfdemos/wp-metrics/home/homepage-27/"><span class="menu-title">Homepage 27</span></a></li>--}}
                                                {{--<li id="menu-item-2265" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-2265"><a href="http://7oroof.com/tfdemos/wp-metrics/"><span class="menu-title">Landing Page</span></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                </li>
                                <li id="menu-item-1344" class="{{Request::is('about') ? 'current-menu-ancestor':''}} menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1344"  >
                                                        {{--class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-menu-ancestor current-page-parent current_page_ancestor menu-item-has-children menu-item-1343 menu-item-mega-3 menu-item-group-sub-menu"--}}
                                    <a href="about">
                                        <span class="menu-title" style="color: #0c5c99" >About</span>
                                    </a>
                                    {{--<ul class="sub-menu"  >--}}
                                        {{--<li id="menu-item-1763" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1763"><a href="http://7oroof.com/tfdemos/wp-metrics/about/about-us-1/"><span class="menu-title">About Us</span></a>--}}
                                            {{--<ul class="sub-menu"  >--}}
                                                {{--<li id="menu-item-1346" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1346"><a href="http://7oroof.com/tfdemos/wp-metrics/about/about-us-1/"><span class="menu-title">About Us 1</span></a></li>--}}
                                                {{--<li id="menu-item-1347" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1347"><a href="http://7oroof.com/tfdemos/wp-metrics/about/about-us-2/"><span class="menu-title">About Us 2</span></a></li>--}}
                                                {{--<li id="menu-item-1345" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1345"><a href="http://7oroof.com/tfdemos/wp-metrics/about/about-me/"><span class="menu-title">About Me</span></a></li>--}}
                                                {{--<li id="menu-item-1363" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1363"><a href="http://7oroof.com/tfdemos/wp-metrics/about/faqs/"><span class="menu-title">FAQs</span></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li id="menu-item-1762" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1762"><a href="http://7oroof.com/tfdemos/wp-metrics/about/our-team-1/"><span class="menu-title">Our Team</span></a>--}}
                                            {{--<ul class="sub-menu"  >--}}
                                                {{--<li id="menu-item-1374" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1374"><a href="http://7oroof.com/tfdemos/wp-metrics/about/our-team-1/"><span class="menu-title">Our Team 1</span></a></li>--}}
                                                {{--<li id="menu-item-1375" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1375"><a href="http://7oroof.com/tfdemos/wp-metrics/about/our-team-2/"><span class="menu-title">Our Team 2</span></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li id="menu-item-1349" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1349"><a href="http://7oroof.com/tfdemos/wp-metrics/about/gallery/"><span class="menu-title">Our Gallery</span></a>--}}
                                            {{--<ul class="sub-menu"  >--}}
                                                {{--<li id="menu-item-1350" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1350"><a href="http://7oroof.com/tfdemos/wp-metrics/about/gallery/gallery-2-cols/"><span class="menu-title">Gallery 2 Cols</span></a></li>--}}
                                                {{--<li id="menu-item-1351" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1351"><a href="http://7oroof.com/tfdemos/wp-metrics/about/gallery/gallery-3-cols/"><span class="menu-title">Gallery 3 Cols</span></a></li>--}}
                                                {{--<li id="menu-item-1352" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1352"><a href="http://7oroof.com/tfdemos/wp-metrics/about/gallery/gallery-4-cols/"><span class="menu-title">Gallery 4 Cols</span></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li id="menu-item-1434" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1434"><a href="http://7oroof.com/tfdemos/wp-metrics/contact/"><span class="menu-title">Contact Us</span></a>--}}
                                            {{--<ul class="sub-menu"  >--}}
                                                {{--<li id="menu-item-1435" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1435"><a href="http://7oroof.com/tfdemos/wp-metrics/contact/contact-us-1/"><span class="menu-title">Contact Us 1</span></a></li>--}}
                                                {{--<li id="menu-item-1436" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1436"><a href="http://7oroof.com/tfdemos/wp-metrics/contact/contact-us-2/"><span class="menu-title">Contact Us 2</span></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li id="menu-item-1373" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1373"><a href="http://7oroof.com/tfdemos/wp-metrics/about/our-clients/"><span class="menu-title">Our Clients</span></a></li>--}}
                                        {{--<li id="menu-item-1348" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1348"><a href="http://7oroof.com/tfdemos/wp-metrics/about/clients-testimonials/"><span class="menu-title">Testimonials</span></a></li>--}}
                                    {{--</ul>--}}
                                </li>
                                <li id="menu-item-1371" class="{{Request::is('product') ? 'current-menu-ancestor':''}} menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1371">
                                    <a href="product"><span class="menu-title" style="color: #0c5c99" >Products</span></a>
                                    {{--<ul class="sub-menu"  >--}}
                                        {{--<li id="menu-item-1766" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1766"><a href="http://7oroof.com/tfdemos/wp-metrics/solutions/our-solutions-1/"><span class="menu-title">Our Solutions</span></a>--}}
                                            {{--<ul class="sub-menu"  >--}}
                                                {{--<li id="menu-item-1372" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1372"><a href="http://7oroof.com/tfdemos/wp-metrics/solutions/our-solutions-1/"><span class="menu-title">Our Solutions 1</span></a></li>--}}
                                                {{--<li id="menu-item-1403" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1403"><a href="http://7oroof.com/tfdemos/wp-metrics/solutions/our-solutions-2/"><span class="menu-title">Our Solutions 2</span></a></li>--}}
                                                {{--<li id="menu-item-2023" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2023"><a href="http://7oroof.com/tfdemos/wp-metrics/solutions/our-solutions-3/"><span class="menu-title">Our Solutions 3</span></a></li>--}}
                                                {{--<li id="menu-item-2022" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2022"><a href="http://7oroof.com/tfdemos/wp-metrics/solutions/our-solutions-4/"><span class="menu-title">Our Solutions 4</span></a></li>--}}
                                                {{--<li id="menu-item-2021" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2021"><a href="http://7oroof.com/tfdemos/wp-metrics/solutions/our-solutions-5/"><span class="menu-title">Our Solutions 5</span></a></li>--}}
                                                {{--<li id="menu-item-2020" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2020"><a href="http://7oroof.com/tfdemos/wp-metrics/solutions/our-solutions-6/"><span class="menu-title">Our Solutions 6</span></a></li>--}}
                                                {{--<li id="menu-item-1404" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1404"><a href="http://7oroof.com/tfdemos/wp-metrics/solutions/solutions-blocks/"><span class="menu-title">Solutions Blocks</span></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li id="menu-item-1370" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1370"><a href="http://7oroof.com/tfdemos/wp-metrics/solutions/products/"><span class="menu-title">Our Products</span></a></li>--}}
                                        {{--<li id="menu-item-1402" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1402"><a href="http://7oroof.com/tfdemos/wp-metrics/solutions/plans/"><span class="menu-title">Our Plans</span></a></li>--}}
                                        {{--<li id="menu-item-2019" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2019"><a href="http://7oroof.com/tfdemos/wp-metrics/solutions/free-seo-analysis/"><span class="menu-title">Free SEO Analysis</span></a></li>--}}
                                    {{--</ul>--}}
                                </li>
                                <li id="menu-item-1360" class="{{Request::is('solution') ? 'current-menu-ancestor':''}} menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1360">
                                    <a href="solution"><span class="menu-title" style="color: #0c5c99" >Solutions</span></a>
                                    {{--<ul class="sub-menu"  >--}}
                                        {{--<li id="menu-item-1406" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1406"><a href="http://7oroof.com/tfdemos/wp-metrics/features/headers/"><span class="menu-title">Headers</span></a>--}}
                                            {{--<ul class="sub-menu"  >--}}
                                                {{--<li id="menu-item-1389" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1389"><a href="http://7oroof.com/tfdemos/wp-metrics/features/headers/header-layout-1/"><span class="menu-title">Header Layout 1</span></a></li>--}}
                                                {{--<li id="menu-item-1395" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1395"><a href="http://7oroof.com/tfdemos/wp-metrics/features/headers/header-layout-2/"><span class="menu-title">Header Layout 2</span></a></li>--}}
                                                {{--<li id="menu-item-1396" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1396"><a href="http://7oroof.com/tfdemos/wp-metrics/features/headers/header-layout-3/"><span class="menu-title">Header Layout 3</span></a></li>--}}
                                                {{--<li id="menu-item-1397" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1397"><a href="http://7oroof.com/tfdemos/wp-metrics/features/headers/header-layout-4/"><span class="menu-title">Header Layout 4</span></a></li>--}}
                                                {{--<li id="menu-item-1398" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1398"><a href="http://7oroof.com/tfdemos/wp-metrics/features/headers/header-layout-5/"><span class="menu-title">Header Layout 5</span></a></li>--}}
                                                {{--<li id="menu-item-1399" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1399"><a href="http://7oroof.com/tfdemos/wp-metrics/features/headers/header-layout-6/"><span class="menu-title">Header Layout 6</span></a></li>--}}
                                                {{--<li id="menu-item-1400" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1400"><a href="http://7oroof.com/tfdemos/wp-metrics/features/headers/header-layout-7/"><span class="menu-title">Header Layout 7</span></a></li>--}}
                                                {{--<li id="menu-item-1401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1401"><a href="http://7oroof.com/tfdemos/wp-metrics/features/headers/header-layout-8/"><span class="menu-title">Header Layout 8</span></a></li>--}}
                                                {{--<li id="menu-item-1405" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1405"><a href="http://7oroof.com/tfdemos/wp-metrics/features/headers/header-layout-9/"><span class="menu-title">Header Layout 9</span></a></li>--}}
                                                {{--<li id="menu-item-1390" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1390"><a href="http://7oroof.com/tfdemos/wp-metrics/features/headers/header-layout-10/"><span class="menu-title">Header Layout 10</span></a></li>--}}
                                                {{--<li id="menu-item-1391" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1391"><a href="http://7oroof.com/tfdemos/wp-metrics/features/headers/header-layout-11/"><span class="menu-title">Header Layout 11</span></a></li>--}}
                                                {{--<li id="menu-item-1392" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1392"><a href="http://7oroof.com/tfdemos/wp-metrics/features/headers/header-layout-12/"><span class="menu-title">Header Layout 12</span></a></li>--}}
                                                {{--<li id="menu-item-1393" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1393"><a href="http://7oroof.com/tfdemos/wp-metrics/features/headers/header-layout-13/"><span class="menu-title">Header Layout 13</span></a></li>--}}
                                                {{--<li id="menu-item-1394" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1394"><a href="http://7oroof.com/tfdemos/wp-metrics/features/headers/header-layout-14/"><span class="menu-title">Header Layout 14</span></a></li>--}}
                                                {{--<li id="menu-item-1865" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1865"><a href="http://7oroof.com/tfdemos/wp-metrics/features/headers/header-layout-15/"><span class="menu-title">Header layout 15</span></a></li>--}}
                                                {{--<li id="menu-item-1864" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1864"><a href="http://7oroof.com/tfdemos/wp-metrics/features/headers/header-layout-16/"><span class="menu-title">Header layout 16</span></a></li>--}}
                                                {{--<li id="menu-item-1863" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1863"><a href="http://7oroof.com/tfdemos/wp-metrics/features/headers/header-layout-17/"><span class="menu-title">Header layout 17</span></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li id="menu-item-1410" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1410"><a href="http://7oroof.com/tfdemos/wp-metrics/features/page-titles/"><span class="menu-title">Page Titles</span></a>--}}
                                            {{--<ul class="sub-menu"  >--}}
                                                {{--<li id="menu-item-1418" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1418"><a href="http://7oroof.com/tfdemos/wp-metrics/features/page-titles/page-title-layout-1/"><span class="menu-title">Page Title Layout 1</span></a></li>--}}
                                                {{--<li id="menu-item-1421" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1421"><a href="http://7oroof.com/tfdemos/wp-metrics/features/page-titles/page-title-layout-2/"><span class="menu-title">Page Title Layout 2</span></a></li>--}}
                                                {{--<li id="menu-item-1422" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1422"><a href="http://7oroof.com/tfdemos/wp-metrics/features/page-titles/page-title-layout-3/"><span class="menu-title">Page Title Layout 3</span></a></li>--}}
                                                {{--<li id="menu-item-1423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1423"><a href="http://7oroof.com/tfdemos/wp-metrics/features/page-titles/page-title-layout-4/"><span class="menu-title">Page Title Layout 4</span></a></li>--}}
                                                {{--<li id="menu-item-1424" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1424"><a href="http://7oroof.com/tfdemos/wp-metrics/features/page-titles/page-title-layout-5/"><span class="menu-title">Page Title Layout 5</span></a></li>--}}
                                                {{--<li id="menu-item-1425" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1425"><a href="http://7oroof.com/tfdemos/wp-metrics/features/page-titles/page-title-layout-6/"><span class="menu-title">Page Title Layout 6</span></a></li>--}}
                                                {{--<li id="menu-item-1426" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1426"><a href="http://7oroof.com/tfdemos/wp-metrics/features/page-titles/page-title-layout-7/"><span class="menu-title">Page Title Layout 7</span></a></li>--}}
                                                {{--<li id="menu-item-1427" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1427"><a href="http://7oroof.com/tfdemos/wp-metrics/features/page-titles/page-title-layout-8/"><span class="menu-title">Page Title Layout 8</span></a></li>--}}
                                                {{--<li id="menu-item-1428" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1428"><a href="http://7oroof.com/tfdemos/wp-metrics/features/page-titles/page-title-layout-9/"><span class="menu-title">Page Title Layout 9</span></a></li>--}}
                                                {{--<li id="menu-item-1419" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1419"><a href="http://7oroof.com/tfdemos/wp-metrics/features/page-titles/page-title-layout-10/"><span class="menu-title">Page Title Layout 10</span></a></li>--}}
                                                {{--<li id="menu-item-1420" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1420"><a href="http://7oroof.com/tfdemos/wp-metrics/features/page-titles/page-title-layout-11/"><span class="menu-title">Page Title Layout 11</span></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li id="menu-item-1376" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1376"><a href="http://7oroof.com/tfdemos/wp-metrics/features/footers/"><span class="menu-title">Footers</span></a>--}}
                                            {{--<ul class="sub-menu"  >--}}
                                                {{--<li id="menu-item-1377" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1377"><a href="http://7oroof.com/tfdemos/wp-metrics/features/footers/footer-layout-1/"><span class="menu-title">Footer Layout 1</span></a></li>--}}
                                                {{--<li id="menu-item-1380" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1380"><a href="http://7oroof.com/tfdemos/wp-metrics/features/footers/footer-layout-2/"><span class="menu-title">Footer Layout 2</span></a></li>--}}
                                                {{--<li id="menu-item-1381" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1381"><a href="http://7oroof.com/tfdemos/wp-metrics/features/footers/footer-layout-3/"><span class="menu-title">Footer Layout 3</span></a></li>--}}
                                                {{--<li id="menu-item-1382" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1382"><a href="http://7oroof.com/tfdemos/wp-metrics/features/footers/footer-layout-4/"><span class="menu-title">Footer Layout 4</span></a></li>--}}
                                                {{--<li id="menu-item-1383" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1383"><a href="http://7oroof.com/tfdemos/wp-metrics/features/footers/footer-layout-5/"><span class="menu-title">Footer Layout 5</span></a></li>--}}
                                                {{--<li id="menu-item-1384" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1384"><a href="http://7oroof.com/tfdemos/wp-metrics/features/footers/footer-layout-6/"><span class="menu-title">Footer Layout 6</span></a></li>--}}
                                                {{--<li id="menu-item-1385" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1385"><a href="http://7oroof.com/tfdemos/wp-metrics/features/footers/footer-layout-7/"><span class="menu-title">Footer Layout 7</span></a></li>--}}
                                                {{--<li id="menu-item-1386" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1386"><a href="http://7oroof.com/tfdemos/wp-metrics/features/footers/footer-layout-8/"><span class="menu-title">Footer Layout 8</span></a></li>--}}
                                                {{--<li id="menu-item-1387" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1387"><a href="http://7oroof.com/tfdemos/wp-metrics/features/footers/footer-layout-9/"><span class="menu-title">Footer Layout 9</span></a></li>--}}
                                                {{--<li id="menu-item-1378" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1378"><a href="http://7oroof.com/tfdemos/wp-metrics/features/footers/footer-layout-10/"><span class="menu-title">Footer Layout 10</span></a></li>--}}
                                                {{--<li id="menu-item-1379" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1379"><a href="http://7oroof.com/tfdemos/wp-metrics/features/footers/footer-layout-11/"><span class="menu-title">Footer Layout 11</span></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li id="menu-item-2065" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2065"><a href="#"><span class="menu-title">Utility Pages</span></a>--}}
                                            {{--<ul class="sub-menu"  >--}}
                                                {{--<li id="menu-item-1764" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1764"><a href="index4377.html?p=987654321"><span class="menu-title">404</span></a></li>--}}
                                                {{--<li id="menu-item-2084" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2084"><a href="http://7oroof.com/tfdemos/wp-metrics/features/coming-soon/"><span class="menu-title">Coming Soon</span></a></li>--}}
                                                {{--<li id="menu-item-2083" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2083"><a href="http://7oroof.com/tfdemos/wp-metrics/features/maintenance/"><span class="menu-title">Maintenance</span></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li id="menu-item-2064" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2064"><a href="#"><span class="menu-title">Page Templates</span></a>--}}
                                            {{--<ul class="sub-menu"  >--}}
                                                {{--<li id="menu-item-2062" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2062"><a href="http://7oroof.com/tfdemos/wp-metrics/features/no-sidebar-layout/"><span class="menu-title">No Sidebar Layout</span></a></li>--}}
                                                {{--<li id="menu-item-2063" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2063"><a href="http://7oroof.com/tfdemos/wp-metrics/features/left-sidebar-layout/"><span class="menu-title">Left Sidebar Layout</span></a></li>--}}
                                                {{--<li id="menu-item-2061" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2061"><a href="http://7oroof.com/tfdemos/wp-metrics/features/case-studies-grid-right-sidebar/"><span class="menu-title">Right Sidebar Layout</span></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                </li>
                                <li id="menu-item-1388" class="{{Request::is('contact') ? 'current-menu-ancestor':''}} menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1388">
                                    <a href="contact"><span class="menu-title" style="color: #0c5c99" >Contact</span></a>
                                    {{--<ul class="sub-menu"  >--}}
                                        {{--<li id="menu-item-2059" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2059"><a href="http://7oroof.com/tfdemos/wp-metrics/case-studies/"><span class="menu-title">Case Study Standard</span></a>--}}
                                            {{--<ul class="sub-menu"  >--}}
                                                {{--<li id="menu-item-2060" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2060"><a href="http://7oroof.com/tfdemos/wp-metrics/case-studies/"><span class="menu-title">No Sidebar Layout</span></a></li>--}}
                                                {{--<li id="menu-item-2056" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2056"><a href="http://7oroof.com/tfdemos/wp-metrics/case-studies/case-studies-standard-left-sidebar/"><span class="menu-title">Left Sidebar Layout</span></a></li>--}}
                                                {{--<li id="menu-item-2055" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2055"><a href="http://7oroof.com/tfdemos/wp-metrics/case-studies/case-studies-standard-right-sidebar/"><span class="menu-title">Right sidebar Layout</span></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li id="menu-item-2058" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2058"><a href="http://7oroof.com/tfdemos/wp-metrics/case-studies-grid-no-sidebar/"><span class="menu-title">Case Study Grid</span></a>--}}
                                            {{--<ul class="sub-menu"  >--}}
                                                {{--<li id="menu-item-2052" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2052"><a href="http://7oroof.com/tfdemos/wp-metrics/case-studies-grid-no-sidebar/"><span class="menu-title">No Sidebar Layout</span></a></li>--}}
                                                {{--<li id="menu-item-2054" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2054"><a href="http://7oroof.com/tfdemos/wp-metrics/case-studies/case-studies-grid-left-sidebar/"><span class="menu-title">Left Sidebar Layout</span></a></li>--}}
                                                {{--<li id="menu-item-2053" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2053"><a href="http://7oroof.com/tfdemos/wp-metrics/case-studies/case-study-grid-right-sidebar-layout/"><span class="menu-title">Right Sidebar Layout</span></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li id="menu-item-1312" class="menu-item menu-item-type-post_type menu-item-object-case_study menu-item-has-children menu-item-1312"><a href="http://7oroof.com/tfdemos/wp-metrics/case_study/mount-case-study/"><span class="menu-title">Single Case Study</span></a>--}}
                                            {{--<ul class="sub-menu"  >--}}
                                                {{--<li id="menu-item-2057" class="menu-item menu-item-type-post_type menu-item-object-case_study menu-item-2057"><a href="http://7oroof.com/tfdemos/wp-metrics/case_study/mount-case-study/"><span class="menu-title">Single Case Study 1</span></a></li>--}}
                                                {{--<li id="menu-item-1910" class="menu-item menu-item-type-post_type menu-item-object-case_study menu-item-1910"><a href="http://7oroof.com/tfdemos/wp-metrics/case_study/trust-case-study/"><span class="menu-title">Single Case Study 2</span></a></li>--}}
                                                {{--<li id="menu-item-1911" class="menu-item menu-item-type-post_type menu-item-object-case_study menu-item-1911"><a href="http://7oroof.com/tfdemos/wp-metrics/case_study/helmets-case-study/"><span class="menu-title">Single Case Study 3</span></a></li>--}}
                                                {{--<li id="menu-item-1912" class="menu-item menu-item-type-post_type menu-item-object-case_study menu-item-1912"><a href="http://7oroof.com/tfdemos/wp-metrics/case_study/ori-case-study/"><span class="menu-title">Single Case Study 4</span></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                </li>

                            </ul>
                        </div>
                    </nav><!-- #site-navigation -->
                </div>
            </div><!-- .site-navs -->
        </div>
    </div>
</div><!-- .site-header-main -->