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
                    <h1 class="title">Software</h1>
                    <div class="subtitle"></div></div>
                <div class="page-title-breadcrumb">
                    {{--<nav class="cms-breadcrumb">--}}
                        {{--<a href="http://7oroof.com/tfdemos/wp-metrics/">About US</a>--}}
                        {{--<span class="breadcrumb-sep">/</span>--}}
                        {{--<a href="http://7oroof.com/tfdemos/wp-metrics/about/">About</a>--}}
                        {{--<span class="breadcrumb-sep">/</span>--}}
                        {{--<span class="current">About Us 2</span>--}}
                    {{--</nav>--}}
                </div>
            </div>
        </div>
    </div>
@endsection


@section("content1")






    {{--INTRO--}}
   
    {{--FEATURES--}}
 <div style="position: relative; margin-top: 40px;"></div>
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="cms-fancybox-wrapper">
                                        <div class="cms-fancybox cms-fancybox-top-left-icon cms-fancybox-color-custom">
                                            <div class="fancybox-icon" style="color:#0c5c99">
                                                <i class="sgicon sgicon-Chart"></i>
                                            </div>
                                            <div class="fancybox-body">
                                                <div class="fancybox-header">
                                                    <h4 class="fancybox-title">SERVER SOFTWARE:</h4>
                                                </div>
                                                <div class="fancybox-content">
                                                     Microsoft Server Suites<BR>
 Linux Enterprise Suites                                                </div>
                                            </div>
                                            <div class="fancybox-action">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="cms-fancybox-wrapper">
                                        <div class="cms-fancybox cms-fancybox-top-left-icon cms-fancybox-color-custom">
                                            <div class="fancybox-icon" style="color:#0c5c99">
                                                <i class="sgicon sgicon-Shield"></i>
                                            </div>
                                            <div class="fancybox-body">
                                                <div class="fancybox-header">
                                                    <h4 class="fancybox-title">DESKTOP SOFTWARE:</h4>
                                                </div>
                                                <div class="fancybox-content">
                                                     Microsoft Office Suites<br>
 Microsoft Windows
                                           </div>
                                            </div>
                                            <div class="fancybox-action">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="cms-fancybox-wrapper">
                                        <div class="cms-fancybox cms-fancybox-top-left-icon cms-fancybox-color-custom">
                                            <div class="fancybox-icon" style="color:#0c5c99">
                                                <i class="sgicon sgicon-MessageLeft"></i>
                                            </div>
                                            <div class="fancybox-body">
                                                <div class="fancybox-header">
                                                    <h4 class="fancybox-title">SECURITY SOFTWARE:</h4>
                                                </div>
                                                <div class="fancybox-content">
                                                    Anti-Virus/Malware<BR>
 Internet Security<br>
 End Point Security<br>
 Content Security                                                </div>
                                            </div>
                                            <div class="fancybox-action">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-3">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="cms-fancybox-wrapper">
                                        <div class="cms-fancybox cms-fancybox-top-left-icon cms-fancybox-color-custom">
                                            <div class="fancybox-icon" style="color:#0c5c99">
                                                <i class="sgicon sgicon-Antenna2"></i>
                                            </div>
                                            <div class="fancybox-body">
                                                <div class="fancybox-header">
                                                    <h4 class="fancybox-title">CUSTOMIZED SOFTWARE:</h4>
                                                </div>
                                                <div class="fancybox-content">
                                                     LMS & eLearning<br>
 MFI/SACCO System<br>
 HRM & Payroll System<br>
 HMIS                                                </div>
                                            </div>
                                            <div class="fancybox-action">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_empty_space" style="height: 58px">
                        <span class="vc_empty_space_inner"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--ANOTHER SOLUTION--}}

@endsection

@section('customSection')




    {{--PRODUCTS FEATURE--}}
    
    {{--ANOTHER SECTION--}}
    
    {{--CORDIAN--}}

    



       


    {{--ACCORDIAN--}}
    
                        
                                              
                                              
                                         




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

