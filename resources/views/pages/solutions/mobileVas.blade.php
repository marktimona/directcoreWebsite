@extends('layout.master')

@section('styles')
    <link rel='stylesheet' id='cms-plugin-stylesheet-css'  href='{{url("/")}}/css/solutions.css' type='text/css' media='all' />

@endsection

@section('customSlider')
    <div id="page_title" class="cms-page-title page-title-layout-1 page-title-layout-large page-title-with-sub page-title-with-breadcrumb text-center page-title-with-header-1" style="background-image:url(http://7oroof.com/tfdemos/wp-metrics/wp-content/uploads/2016/03/page-title-about.jpg); background-repeat: no-repeat; background-size: cover; background-attachment: scroll; background-position: center center; ">
        <div class="page-title-inner">
            <div class="page-title-placeholder" style="height:119px">

            </div>
            <div class="container">
                <div class="page-title-text">
                    <h1 class="title">{{$content->content(10, 175)}}</h1>
                    <div class="subtitle">{{$content->content(10, 176)}}</div></div>
                <div class="page-title-breadcrumb">
                    <nav class="cms-breadcrumb">
                        <a href="http://7oroof.com/tfdemos/wp-metrics/">About US</a>
                        {{--<span class="breadcrumb-sep">/</span>--}}
                        {{--<a href="http://7oroof.com/tfdemos/wp-metrics/about/">About</a>--}}
                        {{--<span class="breadcrumb-sep">/</span>--}}
                        {{--<span class="current">About Us 2</span>--}}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection


@section("content1")






    {{--INTRO--}}
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="vc_empty_space" style="height: 0px">
                        <span class="vc_empty_space_inner"></span>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>

    {{--FEATURES--}}

    


    {{--ANOTHER SOLUTION--}}

@endsection

@section('customSection')




    {{--PRODUCTS FEATURE--}}
    

    {{--ANOTHER SECTION--}}
  




    {{--CORDIAN--}}

   
    <br>
    <br>



    {{--ACCORDIAN--}}
    <div style="position: relative; margin-top: 0px;"></div>

    <div style="position: absolute; width: 100%; left: 0; height: 1050px; background-color: #fafafa" ;>

    </div>
    <div class="vc_empty_space" style="height: 0px">
        <span class="vc_empty_space_inner"></span>
    </div>
    <div class="cms-heading-container">
        <div class="cms-heading text-center">
            <div class="heading-block">
                <h6 class="subtitle">Choose Your Plan</h6>
                <h2 class="title"><span class="title-text">Join Our Successful Customers</span></h2><span class="cms-divider divider-horizontal"><span class="divider-line-1">-</span><span class="divider-line-2">-</span><span class="divider-line-3">-</span></span>
            </div>
        </div>
    </div>
    <div class="vc_empty_space" style="height: 30px">
        <span class="vc_empty_space_inner"></span>
    </div>
    <div class="vc_row wpb_row vc_inner vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="cms-grid-wrapper" id="cms_grid_1">
                        <div class="cms-grid cms-grid-pricing-plans">
                            <div class="row grid-items-wrapper">
                                <div class="grid-items">
                                    <div class="grid-item col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <article class="entry-pricing-plans post-392 pricing_plan type-pricing_plan status-publish hentry">
                                            <header class="entry-header">
                                                <h3 class="entry-title"><span>Mobile Solutions</span></h3>
                                                
                                            </header><!-- .entry-header -->
                                            <div class="entry-content">
                                                <div class="entry-description font-alt-1">
                                                    <span class="entry-desc-before"></span>
                                                    <div class="entry-desc-content">
                                                        <p><strong></strong></p>
                                                    </div><span class="entry-desc-after"></span>
                                                </div>
                                                <div class="entry-features">
                                                    <ul>
                                                        <li><strong>USSD</strong></li>
                                                        <li><strong>SMS</strong> </li>
                                                        <li><strong>IVR</strong> </li>
                                                        <li><strong>Mobile Ads</strong> </li>
                                                        <li><strong>Mobile Apps</strong></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div><!-- .entry-content -->
                                            <footer class="entry-footer">
                                                <div class="entry-footer-inner">
                                                    <a class="btn btn-default btn-hover-primary btn-block" href="#">Get Started Now<i class="pricing-action-icon fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </footer><!-- .entry-footer -->
                                        </article><!-- #post-## -->
                                    </div>
                                    <div class="grid-item col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <article class="entry-pricing-plans post-392 pricing_plan type-pricing_plan status-publish hentry">
                                            <header class="entry-header">
                                                <h3 class="entry-title"><span>Mobile Banking</span></h3>
                                                
                                            </header><!-- .entry-header -->
                                            <div class="entry-content">
                                                <div class="entry-description font-alt-1">
                                                    <span class="entry-desc-before"></span>
                                                    <div class="entry-desc-content">
                                                        <p><strong></strong></p>
                                                    </div><span class="entry-desc-after"></span>
                                                </div>
                                                <div class="entry-features">
                                                    <ul>
                                                        <li><strong>USSD channel</strong></li>
                                                        <li><strong>SMS channel</strong> </li>
                                                        <li><strong>Universal Wallet</strong> </li>
                                                        <li><strong>Integrated switch</strong> </li>
                                                        <li><strong>Mobile Apps</strong></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div><!-- .entry-content -->
                                            <footer class="entry-footer">
                                                <div class="entry-footer-inner">
                                                    <a class="btn btn-default btn-hover-primary btn-block" href="#">Get Started Now<i class="pricing-action-icon fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </footer><!-- .entry-footer -->
                                        </article><!-- #post-## -->
                                    </div>
                                    <div class="grid-item col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <article class="entry-pricing-plans post-392 pricing_plan type-pricing_plan status-publish hentry">
                                            <header class="entry-header">
                                                <h3 class="entry-title"><span>Mobile CDP</span></h3>
                                                
                                            </header><!-- .entry-header -->
                                            <div class="entry-content">
                                                <div class="entry-description font-alt-1">
                                                    <span class="entry-desc-before"></span>
                                                    <div class="entry-desc-content">
                                                        <p><strong></strong></p>
                                                    </div><span class="entry-desc-after"></span>
                                                </div>
                                                <div class="entry-features">
                                                    <ul>
                                                        <li><strong>CSP Portal</strong></li>
                                                        <li><strong>Distribution Portal</strong> </li>
                                                        <li><strong>Billing Portal</strong> </li>
                                                        <li><strong>Analytics</strong> </li>
                                                        <li><strong>Mobile Apps</strong></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div><!-- .entry-content -->
                                            <footer class="entry-footer">
                                                <div class="entry-footer-inner">
                                                    <a class="btn btn-default btn-hover-primary btn-block" href="#">Get Started Now<i class="pricing-action-icon fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </footer><!-- .entry-footer -->
                                        </article><!-- #post-## -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection


@section("scripts")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <script>

        $(".expand").on("click", function () {
            $(".right-arrow").text("+");
            $(".detail:visible").slideUp();
            if(!$(this).next().is(":visible")){

                $(this).next().slideDown(200);
                $(this).find(".right-arrow").text("-");
            }
        });





        //
        //        var acc = document.getElementsByClassName("accordion");
        //        var i;
        //
        //        for (i = 0; i < acc.length; i++) {
        //            acc[i].addEventListener("click", function() {
        //                this.classList.toggle("active");
        //                var panel = this.nextElementSibling;
        //                if (panel.style.display === "block") {
        //                    panel.style.display = "none";
        //                } else {
        //                    panel.style.display = "block";
        //                }
        //            });
        //        }
    </script>
@endsection

