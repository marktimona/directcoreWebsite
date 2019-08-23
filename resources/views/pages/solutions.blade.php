@extends('layout.master')
@section('customSlider')
<div id="page_title" class="cms-page-title page-title-layout-1 page-title-layout-large page-title-with-sub page-title-with-breadcrumb text-center page-title-with-header-1" style="background-image:url({{url("/")}}/wp-content/uploads/2017/07/slider-home16.jpg)"; background-repeat: no-repeat; background-size: cover; background-attachment: scroll; background-position: center center; ">
        <div class="page-title-inner">
            <div class="page-title-placeholder" style="height:119px">

            </div>
            <div class="container">
                <div class="page-title-text">
                    <h1 class="title changeFont">{{$content->content(4, 47)}}</h1>
                    <div class="subtitle changeFont">{{$content->content(4,48)}}</div></div>
                <div class="page-title-breadcrumb">
                    <nav class="cms-breadcrumb"><a href="http://7oroof.com/tfdemos/wp-metrics/">DirectCore</a><span class="breadcrumb-sep">/</span><a href="http://7oroof.com/tfdemos/wp-metrics/about/">Solutions</a><span class="breadcrumb-sep">/</span>
                        
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customSection')

    <div class="wpb_column vc_column_container vc_col-sm-12 text-center">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="vc_empty_space" style="height: 64px">
                    <span class="vc_empty_space_inner"></span>
                </div>
                <div class="cms-heading-container vc_custom_1457419590799">
                    <div class="cms-heading text-center">
                        <div class="heading-block">
                            
                            <h2 class="title"><span class="title-shadow">Solutions</span> <span class="title-text">{{$content->content(4,49)}}</span></h2>{{--
							<h6 class="subtitle">Here are our solutions</h6>--}} <span class="cms-divider divider-vertical">{{--<span class="divider-line-1">-</span>--}} <span class="divider-line-2">-</span> <span class="divider-line-3">-</span></span>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-10 vc_col-sm-offset-1">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element font-xlarge font-alt-3 custom-home3-text">
                                    <div class="wpb_wrapper font-alt-3">
                                        <p style="text-align: center;">{{$content->content(4,50)}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="vc_empty_space" style="height: 90px">
                    <span class="vc_empty_space_inner"></span>
                </div>
            </div>
        </div>
    </div>

    {{--BLOCKS--}}

    <div class="vc_row wpb_row vc_inner vc_row-fluid fancybox-group">
        <div class="wpb_column vc_column_container vc_col-sm-6">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="cms-fancybox-wrapper">
                        <div class="cms-fancybox cms-fancybox-left-icon cms-fancybox-color-dark">
                            <div class="fancybox-body">
                                <div class="fancybox-header">
                                    <div class="fancybox-icon">
                                        <i class="sgicon sgicon-Chart"></i>
                                    </div>
                                    
                                    <a h4 href="{{url('mobileVas')}}" class="fancybox-title">{{$content->content(4,51)}}</h4></a>
                                </div>
                                <div class="fancybox-content">
                                    We Plan, Build, Support, Manage, Improve, Innovate<br>
                                    Mobile Financial Solutions<br>
                                    Mobile Money Transfer Solutions<br>
                                    Mobile Value Add Services<br>
                                    Mobile Integration Services
                                </div>
                            </div>
                            <div class="fancybox-action">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wpb_column vc_column_container vc_col-sm-6">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="cms-fancybox-wrapper">
                        <div class="cms-fancybox cms-fancybox-left-icon cms-fancybox-color-dark">
                            <div class="fancybox-body">
                                <div class="fancybox-header">
                                    <div class="fancybox-icon">
                                        <i class="cms-icon sgicon sgicon-MessageLeft"></i>
                                    </div>
                                    
                                    <a h4 href="{{url('software')}}" class="fancybox-title">{{$content->content(4,53)}}</h4></a>
                                </div>
                                <div class="fancybox-content">
                                   We resell, customize, optimize, support & manage<br>
                                    Core Banking Software<br>
                                    Financial Systems<br>
                                    ERP Systems<br>
                                    Business Intelligence & Analytic Systems<br>
                                    Middleware Systems
                                </div>
                            </div>
                            <div class="fancybox-action">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>

    <div class="vc_row wpb_row vc_inner vc_row-fluid fancybox-group">
        <div class="wpb_column vc_column_container vc_col-sm-6">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="cms-fancybox-wrapper">
                        <div class="cms-fancybox cms-fancybox-left-icon cms-fancybox-color-dark">
                            <div class="fancybox-body">
                                <div class="fancybox-header">
                                    <div class="fancybox-icon">
                                        <i class="cms-icon sgicon sgicon-Antenna2"></i>
                                    </div>
                                <a h4 href="{{url('networking')}}" class="fancybox-title">{{$content->content(4,55)}}</h4></a>
                                </div>
                                <div class="fancybox-content">
                                    We Plan, Build, Support, Manage, Improve, Innovate<br>
                                    Real-Time Transactional Systems Infrastructure Solutions<br>
                                    Service Providers Infrastructure Solutions<br>
                                    Enterprise IT Infrastructure Solutions<br>
                                    Business IT Infrastructure Solutions
                                </div>
                            </div>
                            <div class="fancybox-action">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wpb_column vc_column_container vc_col-sm-6">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="cms-fancybox-wrapper">
                        <div class="cms-fancybox cms-fancybox-left-icon cms-fancybox-color-dark">
                            <div class="fancybox-body">
                                <div class="fancybox-header">
                                    <div class="fancybox-icon">
                                        <i class="sgicon sgicon-Shield"></i>
                                    </div>
                                <a h4 href="{{url('security')}}"class="fancybox-title">{{$content->content(4,57)}}</h4></a>
                                </div>
                                <div class="fancybox-content">
                                   We Plan, Build, Support, Manage, Improve, Innovate<br>
                Financial Institutions Infrastructure Security<br>
                Service Providers Infrastructure Security<br>
                Enterprise Infrastructure Security<br>
                Business Infrastructure Security<br>
                Security Solutions for Mobility
                            </div>
                            </div>
                            <div class="fancybox-action">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="wpb_column vc_column_container vc_col-sm-6">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="cms-fancybox-wrapper">
                        <div class="cms-fancybox cms-fancybox-left-icon cms-fancybox-color-dark">
                            <div class="fancybox-body">
                                <div class="fancybox-header">
                                    <div class="fancybox-icon">
                                        <i class="sgicon sgicon-Shield"></i>
                                    </div>
                                    
                                    <a h4 href="{{url('hardware')}}" class="fancybox-title">Hardware</h4></a>
                                </div>
                                <div class="fancybox-content">
                                   We Plan, Build, Support, Manage, Improve, Innovate<br>
Financial Institutions Infrastructure Security<br>
Service Providers Infrastructure Security<br>
Enterprise Infrastructure Security<br>
Business Infrastructure Security<br>
Security Solutions for Mobility
                            </div>
                            </div>
                            <div class="fancybox-action">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wpb_column vc_column_container vc_col-sm-6">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="cms-fancybox-wrapper">
                        <div class="cms-fancybox cms-fancybox-left-icon cms-fancybox-color-dark">
                            <div class="fancybox-body">
                                <div class="fancybox-header">
                                    <div class="fancybox-icon">
                                        <i class="sgicon sgicon-Chart"></i>
                                    </div>
                                <a h4 href="{{url('internet')}}"  class="fancybox-title">Internet</h4></a>
                                </div>
                                <div class="fancybox-content">
                                   We Plan, Build, Support, Manage, Improve, Innovate<br>
Financial Institutions Infrastructure Security<br>
Service Providers Infrastructure Security<br>
Enterprise Infrastructure Security<br>
Business Infrastructure Security<br>
Security Solutions for Mobility
                            </div>
                            </div>
                            <div class="fancybox-action">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    

    <div style="left:0; margin-top: 25px; position:relative;  height: 2.5px;" >

    </div>

    {{--END SECTION--}}

@endsection