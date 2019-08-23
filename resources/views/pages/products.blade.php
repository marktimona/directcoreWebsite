@extends('layout.master')

@section('customSlider')
    <div id="page_title" class="cms-page-title page-title-layout-1 page-title-layout-large page-title-with-sub page-title-with-breadcrumb text-center page-title-with-header-1" style="background-image:url(http://7oroof.com/tfdemos/wp-metrics/wp-content/uploads/2016/03/page-title-products.jpg); background-repeat: no-repeat; background-size: cover; background-attachment: scroll; background-position: center center; ">
        <div class="page-title-inner">
            <div class="page-title-placeholder" style="height:119px">

            </div>
            <div class="container">
                <div class="page-title-text">
                    <h1 class="title changeFont">{{$content->content(3, 41)}}</h1>
                    <div class="subtitle changeFont">{{$content->content(3, 42)}}</div></div>
                <div class="page-title-breadcrumb">
                    <nav class="cms-breadcrumb"><a >Home</a><span class="breadcrumb-sep">/</span><a href="http://7oroof.com/tfdemos/wp-metrics/about/">About</a><span class="breadcrumb-sep">/</span>
                        <span class="current">Products </span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('customSection')
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="vc_empty_space" style="height: 100px">
                        <span class="vc_empty_space_inner"></span>
                    </div>
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-6">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="cms-fancybox-wrapper">
                                        <div class="cms-fancybox cms-fancybox-imgicon cms-fancybox-color-dark">
                                            <div class="fancybox-body">
                                                <div class="fancybox-icon">
                                                    <div class="wpb_single_image wpb_content_element vc_align_left">
                                                        <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper vc_box_border_grey"><img alt="" class="vc_single_image-img attachment-medium" height="402" src="{{url("/")}}/wp-content/uploads/2017/07/alanapage.PNG" width="401"></div>
                                                        </figure>
                                                    </div>
                                                    {{--<h6 class="fancybox-subtitle">01</h6>--}}
                                                </div>
                                                <div class="fancybox-header">
                                                    <h4 class="fancybox-title changeFont">ALANA</h4>
                                                </div>
                                                <div class="fancybox-content">
                                                    {{$content->content(3, 43)}}
                                                </div>
                                            </div>
                                            <div class="fancybox-action">
                                                <a class="fancybox-link link-underline" href="https://alana.co.ke/" target="_self" title="Learn more">Learn more<i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 18px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    <div class="vc_empty_space" style="height: 40px">
                        <span class="vc_empty_space_inner"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    {{--ANOTHER ROW--}}

    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="vc_empty_space" style="height: 100px">
                        <span class="vc_empty_space_inner"></span>
                    </div>
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-6">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="cms-fancybox-wrapper">
                                        <div class="cms-fancybox cms-fancybox-imgicon cms-fancybox-color-dark">
                                            <div class="fancybox-body">
                                                <div class="fancybox-icon">
                                                    <div class="wpb_single_image wpb_content_element vc_align_left">
                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper vc_box_border_grey"><img alt="" class="vc_single_image-img attachment-medium"  src="{{url("/")}}/wp-content/uploads/2017/07/net.jpg"  ></div>
                                                        </figure>
                                                    </div>
                                                    {{--<h6 class="fancybox-subtitle">01</h6>--}}
                                                </div>
                                                <div class="fancybox-header">
                                                    <h4 class="fancybox-title changeFont">NETAFRIKA</h4>
                                                </div>
                                                <div class="fancybox-content">
                                                    {{$content->content(3, 45)}}
                                                </div>
                                            </div>
                                            <div class="fancybox-action">
                                                <a class="fancybox-link link-underline" href="#" target="_self" title="Learn more">Learn more<i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 18px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-6">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="cms-fancybox-wrapper">
                                        <div class="cms-fancybox cms-fancybox-imgicon cms-fancybox-color-dark">
                                            <div class="fancybox-body">
                                                <div class="fancybox-icon">
                                                    <div class="wpb_single_image wpb_content_element vc_align_left">
                                                        <figure class="wpb_wrapper vc_figure">
                                                            <div class="vc_single_image-wrapper vc_box_border_grey"><img alt="" class="vc_single_image-img attachment-medium"  src="{{url("/")}}/wp-content/uploads/2017/07/shillings.jpg"> </div>
                                                        </figure>
                                                    </div>
                                                    {{--<h6 class="fancybox-subtitle">02</h6>--}}
                                                </div>
                                                <div class="fancybox-header">
                                                    <h4 class="fancybox-title changeFont">PESATEL</h4>
                                                </div>
                                                <div class="fancybox-content">
                                                    {{$content->content(3, 46)}}
                                                </div>
                                            </div>
                                            <div class="fancybox-action">
                                                <a class="fancybox-link link-underline" href="http://www.pesatel.com" target="_self" title="Learn more">Learn more<i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 18px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                       <div class="vc_empty_space" style="height: 40px">
                            <span class="vc_empty_space_inner"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="vc_video-bg vc_hidden-xs" style="margin-top: 2100px; height:400px;">
        <iframe class="inner" frameborder="0" allowfullscreen="1" allow="autoplay; encrypted-media" title="YouTube video player" width="100%" height="50%" src="https://www.youtube.com/embed/lMJXxhRFO1k?playlist=lMJXxhRFO1k&amp;iv_load_policy=3&amp;enablejsapi=1&amp;disablekb=1&amp;autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;wmode=transparent&amp;widget_referrer=http%3A%2F%2F7oroof.com%2Ftfdemos%2Fwp-metrics%2Fsolutions%2Fsolutions-blocks%2F&amp;origin=http%3A%2F%2F7oroof.com&amp;widgetid=1" id="widget2" style="max-width: 1000%; margin-left: 0px; margin-top: -95px; width: 1583px; height: 890.438px;"></iframe>
    </div>

    <div style="left:0; margin-top: 350px; position:relative;  height: 50px;" >
    </div>



    @endsection


