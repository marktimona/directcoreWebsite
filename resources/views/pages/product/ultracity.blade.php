@extends('layout.master')


@section('customSlider')
    <div id="page_title" class="cms-page-title page-title-layout-1 page-title-layout-large page-title-with-sub page-title-with-breadcrumb text-center page-title-with-header-1" style="background-image:url(http://7oroof.com/tfdemos/wp-metrics/wp-content/uploads/2016/03/page-title-about.jpg); background-repeat: no-repeat; background-size: cover; background-attachment: scroll; background-position: center center; ">
        <div class="page-title-inner">
            <div class="page-title-placeholder" style="height:119px">

            </div>
            <div class="container">
                <div class="page-title-text">
                    <h1 class="title">{{$content->content(9, 147)}}</h1>
                    <div class="subtitle">{{$content->content(9, 148)}}</div></div>
                <div class="page-title-breadcrumb">
                    {{--<nav class="cms-breadcrumb">--}}
                        {{--<a href="http://7oroof.com/tfdemos/wp-metrics/">Product</a>--}}
                        {{--<span class="breadcrumb-sep">/</span>--}}
                        {{--<a href="http://7oroof.com/tfdemos/wp-metrics/about/">alana</a>--}}
                        {{--<span class="breadcrumb-sep">/</span>--}}
                        {{--<span class="current">About Us 2</span>--}}
                    {{--</nav>--}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content1')
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <div class="vc_empty_space" style="height: 99px">
                    <span class="vc_empty_space_inner"></span>
                </div>
                <div class="cms-heading-container vc_custom_1457345350984">
                    <div class="cms-heading text-left">
                        <div class="heading-block">
                            <h2 class="title"><span class="title-shadow">{{$content->content(9, 149)}}</span><span class="title-text">{{$content->content(9, 149)}}</span></h2>
                            <h6 class="subtitle">{{$content->content(9, 150)}}</h6><span class="cms-divider divider-horizontal"><span class="divider-line-1">-</span><span class="divider-line-2">-</span><span class="divider-line-3">-</span></span>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element font-xlarge font-alt-3">
                                    <div class="wpb_wrapper font-alt-3">
                                        <p><em>{{$content->content(9, 151)}}</em></p>
                                    </div>
                                </div>
                                <div class="vc_empty_space" style="height: 17px">
                                    <span class="vc_empty_space_inner"></span>
                                </div>
                                {{--<button class="btn-filled">More About Us</button>--}}
                                <div class="vc_empty_space" style="height: 48px">
                                    <span class="vc_empty_space_inner"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="cms-counters-wrapper cms-counters-with-sep vc_custom_1457345409835">
                                    <div class="cms-inline-block-wrapper cms-counters"><div class="counter-item cms-inline-block-xs-12 cms-inline-block-sm-4 cms-inline-block-md-4 cms-inline-block-lg-4"><div class="cms-counter-wrapper">
                                                <div class="cms-counter">
                                                    {{--<div class="counter-icon"><i class="sgicon sgicon-Chart"></i></div>--}}
                                                    <div id="counter-1-1522326049" class="counter-text" data-counter-options="{&quot;useEasing&quot;:false,&quot;useGrouping&quot;:false,&quot;separator&quot;:&quot;&quot;,&quot;decimal&quot;:&quot;.&quot;,&quot;prefix&quot;:&quot;&quot;,&quot;suffix&quot;:&quot;%&quot;}" data-counter-extras="{&quot;start&quot;:0,&quot;end&quot;:97,&quot;decimals&quot;:0,&quot;duration&quot;:4}">97%</div>
                                                    {{--<div class="counter-info">--}}
                                                        {{--<h5 class="counter-title">Increase In Revenue</h5>--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                        </div><div class="counter-item cms-inline-block-xs-12 cms-inline-block-sm-4 cms-inline-block-md-4 cms-inline-block-lg-4"><div class="cms-counter-wrapper">
                                                <div class="cms-counter">
                                                    {{--<div class="counter-icon"><i class="sgicon sgicon-Users"></i></div>--}}
                                                    <div id="counter-2-1522326049" class="counter-text" data-counter-options="{&quot;useEasing&quot;:false,&quot;useGrouping&quot;:false,&quot;separator&quot;:&quot;&quot;,&quot;decimal&quot;:&quot;.&quot;,&quot;prefix&quot;:&quot;&quot;,&quot;suffix&quot;:&quot;%&quot;}" data-counter-extras="{&quot;start&quot;:0,&quot;end&quot;:100,&quot;decimals&quot;:0,&quot;duration&quot;:4}">100%</div>
                                                    {{--<div class="counter-info">--}}
                                                        {{--<h5 class="counter-title">Positive Feedback</h5>--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                        </div><div class="counter-item cms-inline-block-xs-12 cms-inline-block-sm-4 cms-inline-block-md-4 cms-inline-block-lg-4"><div class="cms-counter-wrapper">
                                                <div class="cms-counter">
                                                    {{--<div class="counter-icon"><i class="sgicon sgicon-ChartUp"></i></div>--}}
                                                    <div id="counter-3-1522326049" class="counter-text" data-counter-options="{&quot;useEasing&quot;:false,&quot;useGrouping&quot;:false,&quot;separator&quot;:&quot;&quot;,&quot;decimal&quot;:&quot;.&quot;,&quot;prefix&quot;:&quot;&quot;,&quot;suffix&quot;:&quot;%&quot;}" data-counter-extras="{&quot;start&quot;:0,&quot;end&quot;:800,&quot;decimals&quot;:0,&quot;duration&quot;:4}">800%</div>
                                                    {{--<div class="counter-info">--}}
                                                        {{--<h5 class="counter-title">More Conversion</h5>--}}
                                                    {{--</div>--}}
                                                </div>
                                            </div>
                                        </div></div>
                                </div></div></div></div>
                </div>
                <div class="vc_empty_space" style="height: 52px">
                    <span class="vc_empty_space_inner"></span>
                </div>
            </div>
        </div>
    </div>



    {{--OTHER SECTION--}}


    <div class="vc_row wpb_row vc_row-fluid vc_custom_1457597969375 vc_row-has-fill row-has-overlay" data-vc-full-width="true" data-vc-full-width-init="true" style="position: relative; left: -165px; box-sizing: border-box; width: 1583px; padding-left: 191.5px; padding-right: 191.5px; overflow: hidden; background-color: #2b2b2b;">
        <div class="overlay-block"></div>
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <div class="vc_empty_space" style="height: 59px">
                        <span class="vc_empty_space_inner"></span>
                    </div>
                    <div class="cms-heading-container cms-heading-with-desc-custom">
                        <div class="cms-heading cms-heading-with-desc">
                            <div class="heading-block">
                                <h2 class="title" style="color:#ffffff">{{$content->content(9, 152)}}</h2><span class="cms-heading-divider" style="border-color:rgba(255,255,255,0.07)"></span>
                            </div>
                            <div class="desc-block">
                                {{$content->content(9, 153)}}
                            </div>
                        </div>
                    </div>
                    <div class="vc_empty_space" style="height: 43px">
                        <span class="vc_empty_space_inner"></span>
                    </div>
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="cms-fancybox-wrapper">
                                        <div class="cms-fancybox cms-fancybox-default cms-fancybox-color-light">
                                            <div class="fancybox-body">
                                                <div class="fancybox-header">
                                                    <div class="fancybox-icon">
                                                        <i class="sgicon sgicon-FileBox"></i>
                                                    </div>
                                                    <h4 class="fancybox-title">{{$content->content(9, 154)}}</h4>
                                                </div>
                                                <div class="fancybox-content">
                                                    {{$content->content(9, 155)}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 19px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                    <div class="cms-fancybox-wrapper">
                                        <div class="cms-fancybox cms-fancybox-default cms-fancybox-color-light">
                                            <div class="fancybox-body">
                                                <div class="fancybox-header">
                                                    <div class="fancybox-icon">
                                                        <i class="sgicon sgicon-ClipboardChart"></i>
                                                    </div>
                                                    <h4 class="fancybox-title">{{$content->content(9, 156)}}</h4>
                                                </div>
                                                <div class="fancybox-content">
                                                    {{$content->content(9, 157)}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 19px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                    <div class="cms-fancybox-wrapper">
                                        <div class="cms-fancybox cms-fancybox-default cms-fancybox-color-light">
                                            <div class="fancybox-body">
                                                <div class="fancybox-header">
                                                    <div class="fancybox-icon">
                                                        <i class="sgicon sgicon-Settings"></i>
                                                    </div>
                                                    <h4 class="fancybox-title">{{$content->content(9, 158)}}</h4>
                                                </div>
                                                <div class="fancybox-content">
                                                    {{$content->content(9, 159)}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space" style="height: 18px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                    {{--<button class="btn-primary btn-hover-white">Explore Features</button>--}}
                                    <div class="vc_empty_space" style="height: 98px">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column-fill-place wpb_column vc_column_container vc_col-sm-12 vc_col-lg-8 column-fill-place-computed" style="padding-right: 0px; width: 1000px; margin-right: -201px; height: 691px; overflow: hidden;">
                            <div class="vc_column-inner" style="padding-right: 0px; height: 100%;">
                                <div class="wpb_wrapper" style="height: 691px; overflow: hidden;">
                                    <div class="wpb_single_image wpb_content_element vc_align_center vc_custom_1457598035475 custom-home4-featured-img">
                                        <figure class="wpb_wrapper vc_figure">
                                            {{--<div class="vc_single_image-wrapper vc_box_border_grey"><img alt="" class="vc_single_image-img attachment-full" height="717" sizes="(max-width: 1120px) 100vw, 1120px" src="../../wp-content/uploads/2016/03/big-features-03.png" srcset="http://7oroof.com/tfdemos/wp-metrics/wp-content/uploads/2016/03/big-features-03.png 1120w, http://7oroof.com/tfdemos/wp-metrics/wp-content/uploads/2016/03/big-features-03-768x492.png 768w" width="1120"></div>--}}
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--ANOTHER SECTION--}}

    <div class="vc_empty_space" style="height: 63px"><span class="vc_empty_space_inner"></span></div>

    {{--<div class="cms-heading-container"><div class="cms-heading text-center">--}}
            {{--<div class="heading-block">--}}
                {{--<h6 class="subtitle">{{$content->content(9, 160)}}</h6>--}}
                {{--<h2 class="title"><span class="title-text">{{$content->content(9, 161)}}</span></h2>--}}
                {{--<span class="cms-divider divider-horizontal">--}}
                    {{--<span class="divider-line-1">-</span><span class="divider-line-2">-</span>--}}
                    {{--<span class="divider-line-3">-</span></span>--}}
            {{--</div>--}}
        {{--</div>--}}
    </div>

    {{--CONTENT--}}

    {{--<div class="vc_row wpb_row vc_inner vc_row-fluid fancybox-group">--}}
        {{--<div class="wpb_column vc_column_container vc_col-sm-4">--}}
            {{--<div class="vc_column-inner">--}}
                {{--<div class="wpb_wrapper">--}}
                    {{--<div class="cms-fancybox-wrapper">--}}
                        {{--<div class="cms-fancybox cms-fancybox-left-icon cms-fancybox-color-dark">--}}
                            {{--<div class="fancybox-body">--}}
                                {{--<div class="fancybox-header">--}}
                                    {{--<div class="fancybox-icon">--}}
                                        {{--<i class="sgicon sgicon-Chart"></i>--}}
                                    {{--</div>--}}
                                    {{--<h4 class="fancybox-title">{{$content->content(9, 162)}}</h4>--}}
                                {{--</div>--}}
                                {{--<div class="fancybox-content">--}}
                                    {{--{{$content->content(9, 163)}}--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="fancybox-action">--}}
                                {{--<a class="fancybox-link link-underline" href="#" target="_self" title="Learn More">Learn More<i class="fa fa-long-arrow-right"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="wpb_column vc_column_container vc_col-sm-4">--}}
            {{--<div class="vc_column-inner">--}}
                {{--<div class="wpb_wrapper">--}}
                    {{--<div class="cms-fancybox-wrapper">--}}
                        {{--<div class="cms-fancybox cms-fancybox-left-icon cms-fancybox-color-dark">--}}
                            {{--<div class="fancybox-body">--}}
                                {{--<div class="fancybox-header">--}}
                                    {{--<div class="fancybox-icon">--}}
                                        {{--<i class="sgicon sgicon-Shield"></i>--}}
                                    {{--</div>--}}
                                    {{--<h4 class="fancybox-title">{{$content->content(9, 164)}}</h4>--}}
                                {{--</div>--}}
                                {{--<div class="fancybox-content">--}}
                                    {{--{{$content->content(9, 165)}}                                </div>--}}
                            {{--</div>--}}
                            {{--<div class="fancybox-action">--}}
                                {{--<a class="fancybox-link link-underline" href="#" target="_self" title="Learn More">Learn More<i class="fa fa-long-arrow-right"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="wpb_column vc_column_container vc_col-sm-4">--}}
            {{--<div class="vc_column-inner">--}}
                {{--<div class="wpb_wrapper">--}}
                    {{--<div class="cms-fancybox-wrapper">--}}
                        {{--<div class="cms-fancybox cms-fancybox-left-icon cms-fancybox-color-dark">--}}
                            {{--<div class="fancybox-body">--}}
                                {{--<div class="fancybox-header">--}}
                                    {{--<div class="fancybox-icon">--}}
                                        {{--<i class="sgicon sgicon-MessageLeft"></i>--}}
                                    {{--</div>--}}
                                    {{--<h4 class="fancybox-title">{{$content->content(9, 166)}}</h4>--}}
                                {{--</div>--}}
                                {{--<div class="fancybox-content">--}}
                                    {{--{{$content->content(9, 169)}}                                </div>--}}
                            {{--</div>--}}
                            {{--<div class="fancybox-action">--}}
                                {{--<a class="fancybox-link link-underline" href="#" target="_self" title="Learn More">Learn More<i class="fa fa-long-arrow-right"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="vc_row wpb_row vc_inner vc_row-fluid fancybox-group">--}}
        {{--<div class="wpb_column vc_column_container vc_col-sm-4">--}}
            {{--<div class="vc_column-inner">--}}
                {{--<div class="wpb_wrapper">--}}
                    {{--<div class="cms-fancybox-wrapper">--}}
                        {{--<div class="cms-fancybox cms-fancybox-left-icon cms-fancybox-color-dark">--}}
                            {{--<div class="fancybox-body">--}}
                                {{--<div class="fancybox-header">--}}
                                    {{--<div class="fancybox-icon">--}}
                                        {{--<i class="sgicon sgicon-Antenna2"></i>--}}
                                    {{--</div>--}}
                                    {{--<h4 class="fancybox-title">{{$content->content(9, 168)}}</h4>--}}
                                {{--</div>--}}
                                {{--<div class="fancybox-content">--}}
                                    {{--{{$content->content(9, 169)}}                                </div>--}}
                            {{--</div>--}}
                            {{--<div class="fancybox-action">--}}
                                {{--<a class="fancybox-link link-underline" href="#" target="_self" title="Learn More">Learn More<i class="fa fa-long-arrow-right"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="wpb_column vc_column_container vc_col-sm-4">--}}
            {{--<div class="vc_column-inner">--}}
                {{--<div class="wpb_wrapper">--}}
                    {{--<div class="cms-fancybox-wrapper">--}}
                        {{--<div class="cms-fancybox cms-fancybox-left-icon cms-fancybox-color-dark">--}}
                            {{--<div class="fancybox-body">--}}
                                {{--<div class="fancybox-header">--}}
                                    {{--<div class="fancybox-icon">--}}
                                        {{--<i class="sgicon sgicon-Tools"></i>--}}
                                    {{--</div>--}}
                                    {{--<h4 class="fancybox-title">{{$content->content(9, 170)}}</h4>--}}
                                {{--</div>--}}
                                {{--<div class="fancybox-content">--}}
                                    {{--{{$content->content(9, 171)}}                                </div>--}}
                            {{--</div>--}}
                            {{--<div class="fancybox-action">--}}
                                {{--<a class="fancybox-link link-underline" href="#" target="_self" title="Learn More">Learn More<i class="fa fa-long-arrow-right"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="wpb_column vc_column_container vc_col-sm-4">--}}
            {{--<div class="vc_column-inner">--}}
                {{--<div class="wpb_wrapper">--}}
                    {{--<div class="cms-fancybox-wrapper">--}}
                        {{--<div class="cms-fancybox cms-fancybox-left-icon cms-fancybox-color-dark">--}}
                            {{--<div class="fancybox-body">--}}
                                {{--<div class="fancybox-header">--}}
                                    {{--<div class="fancybox-icon">--}}
                                        {{--<i class="sgicon sgicon-Puzzle"></i>--}}
                                    {{--</div>--}}
                                    {{--<h4 class="fancybox-title">{{$content->content(9, 172)}}</h4>--}}
                                {{--</div>--}}
                                {{--<div class="fancybox-content">--}}
                                    {{--{{$content->content(9, 173)}}                                </div>--}}
                            {{--</div>--}}
                            {{--<div class="fancybox-action">--}}
                                {{--<a class="fancybox-link link-underline" href="#" target="_self" title="Learn More">Learn More<i class="fa fa-long-arrow-right"></i></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


    {{--<div class="btn-container text-center"><button>More Services</button></div>--}}

@endsection



