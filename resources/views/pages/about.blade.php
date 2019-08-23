@extends('layout.master')

@section('styles')

    <style >
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto;
            background-color: #3a3a3a;
            /*padding: 10px;*/
        }
        .grid-item {
            background-color: rgba(255, 255, 255, 0.8);
            /*border: 1px solid rgba(0, 0, 0, 0.8);*/
            padding: 20px;
            font-size: 15px;
            height: 350px;
            text-align: center;
        }

        @media only screen and (max-width: 320px) {

            .visionMission {
                /*background-color: black;*/



            }

            .displayStatus{

                display:none;
            }

        }

        @media only screen and (max-width: 1420px) {

            .visionMission {
                font-size: 12px;
            }
            /*background-color: black;*/

            .displayStatus{

                display:none;
            }

        }


        @media only screen and (min-width: 10px) {


            .displayStatus{

                display:none;
            }

        }

        @media only screen and (max-width: 1120px) {

            .visionMission {
                font-size: 10px;
            }
            /*background-color: black;*/

            .displayStatus{

                display:none;
            }

        }

        @media only screen and (max-width: 1120px) {

            .visionMission {
                font-size: 15px;
            }

            .grid-container {
                display: grid;
                grid-template-columns: auto;
                background-color: #3a3a3a;

                /*padding: 10px;*/
            }

            .displayStatus{

              display: block;
            }



        }


        @media only screen and (max-width: 1200px) {

            .onScreenSize{
                /*WILL DO SOMETHING LATER ON THE OUR STORY IMAGE SECTION*/
            }


        }
    </style>
@endsection

@section('customSlider')
    <div id="page_title" class="cms-page-title page-title-layout-1 page-title-layout-large page-title-with-sub page-title-with-breadcrumb text-center page-title-with-header-1" style="background-image:url({{url("/")}}/wp-content/uploads/2017/07/slider-home14.png)";; background-repeat: no-repeat; background-size: cover; background-attachment: scroll; background-position: center center; ">
        <div class="page-title-inner">
            <div class="page-title-placeholder" style="height:119px">

            </div>
            <div class="container">
                <div class="page-title-text">
                    <h1 class="title changeFont" >{{$content->content(2,21)}}</h1>
                    <div class="subtitle changeFont">{{$content->content(2,22)}}</div></div>
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

@section('content1')
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner "><div class="wpb_wrapper"><div class="vc_empty_space" style="height: 99px">
                    <span class="vc_empty_space_inner"></span></div>
                <div class="cms-heading-container vc_custom_1457345350984"><div class="cms-heading text-left">
                        <div class="heading-block"><h2 class="title"><span class="title-shadow">{{$content->content(2,23)}}</span>
                                <span class="title-text changeFont">{{$content->content(2,23)}}</span>
                            </h2><h6 class="subtitle changeFont">{{$content->content(2,24)}}</h6>
                            <span class="cms-divider divider-horizontal">
                                <span class="divider-line-1">-</span><span class="divider-line-2">-</span>
                                <span class="divider-line-3">-</span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_inner vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6"><div class="vc_column-inner "><div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element  font-xlarge font-alt-3">
                                    <div class="wpb_wrapper font-alt-3">
                                        <p><em>{{$content->content(2,25)}}</em></p>

                                    </div>
                                </div>
                                <div class="vc_empty_space" style="height: 17px"><span class="vc_empty_space_inner"></span></div>
                                <button class="btn-filled">More About Us</button><div class="vc_empty_space" style="height: 48px"><span class="vc_empty_space_inner"></span></div>









                            </div></div></div>





                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="cms-counters-wrapper cms-counters-with-sep vc_custom_1457345409835">
                                    <div class="cms-inline-block-wrapper cms-counters"><div class="counter-item cms-inline-block-xs-12 cms-inline-block-sm-4 cms-inline-block-md-4 cms-inline-block-lg-4"><div class="cms-counter-wrapper">
                                                <div class="cms-counter">
                                                    <div class="counter-icon"><i class="sgicon sgicon-Chart"></i></div>
                                                    <div id="counter-1-1522482016" class="counter-text" data-counter-options="{&quot;useEasing&quot;:false,&quot;useGrouping&quot;:false,&quot;separator&quot;:&quot;&quot;,&quot;decimal&quot;:&quot;.&quot;,&quot;prefix&quot;:&quot;&quot;,&quot;suffix&quot;:&quot;%&quot;}" data-counter-extras="{&quot;start&quot;:0,&quot;end&quot;:97,&quot;decimals&quot;:0,&quot;duration&quot;:4}">97%</div>
                                                    <div class="counter-info">
                                                        <h5 class="counter-title"> Improved Profitability</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><div class="counter-item cms-inline-block-xs-12 cms-inline-block-sm-4 cms-inline-block-md-4 cms-inline-block-lg-4"><div class="cms-counter-wrapper">
                                                <div class="cms-counter">
                                                    <div class="counter-icon"><i class="sgicon sgicon-Users"></i></div>
                                                    <div id="counter-2-1522482016" class="counter-text" data-counter-options="{&quot;useEasing&quot;:false,&quot;useGrouping&quot;:false,&quot;separator&quot;:&quot;&quot;,&quot;decimal&quot;:&quot;.&quot;,&quot;prefix&quot;:&quot;&quot;,&quot;suffix&quot;:&quot;%&quot;}" data-counter-extras="{&quot;start&quot;:0,&quot;end&quot;:100,&quot;decimals&quot;:0,&quot;duration&quot;:4}">100%</div>
                                                    <div class="counter-info">
                                                        <h5 class="counter-title">Streamlined and Optimized Productivity</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><div class="counter-item cms-inline-block-xs-12 cms-inline-block-sm-4 cms-inline-block-md-4 cms-inline-block-lg-4"><div class="cms-counter-wrapper">
                                                <div class="cms-counter">
                                                    <div class="counter-icon"><i class="sgicon sgicon-ChartUp"></i></div>
                                                    <div id="counter-3-1522482016" class="counter-text" data-counter-options="{&quot;useEasing&quot;:false,&quot;useGrouping&quot;:false,&quot;separator&quot;:&quot;&quot;,&quot;decimal&quot;:&quot;.&quot;,&quot;prefix&quot;:&quot;&quot;,&quot;suffix&quot;:&quot;%&quot;}" data-counter-extras="{&quot;start&quot;:0,&quot;end&quot;:800,&quot;decimals&quot;:0,&quot;duration&quot;:4}">800%</div>
                                                    <div class="counter-info">
                                                        <h5 class="counter-title">Better Management of existing IT Assets
</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div></div>
                                </div></div></div></div></div><div class="vc_empty_space" style="height: 52px"><span class="vc_empty_space_inner"></span></div>
            </div></div></div>




    {{--OTHER SECTION--}}

@endsection


@section('customSection')

    <div style="left:0; position:absolute; background-color: black; width:100%; height:350px;">

        <div class="grid-container">
            <div class="grid-item" style="background-color: #9b9b9b; ">



                {{--lll--}}
            <div class="visionMission">
                <div class="cms-fancybox-wrapper" >
                    <div class="cms-fancybox cms-fancybox-left-icon-box-alt cms-fancybox-color-custom" style="padding-top: 10px;">
                        <div class="fancybox-body" style="height: 50px;">
                            <div class="fancybox-icon" style="color:#ffffff;background-color:rgba(255,255,255,0.02)"><i class="sgicon sgicon-Flag"></i></div>
                            <div class="fancybox-header">
                                <h4 class="fancybox-title" style="color:#ffffff"> {{$content->content(2,26)}}</h4>            </div>
                            <div class="fancybox-content" style="color:#f0f0f0;">
                                {{$content->content(2,27)}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            </div>
            <div class="grid-item" style="background-color: 
#0c5c99 !important">

                <div class="cms-fancybox-wrapper">

                  <div class="visionMission">
                        <div class="cms-fancybox cms-fancybox-left-icon-box-alt cms-fancybox-color-custom" style="padding-top: 35px;">
                            <div class="fancybox-body">
                                <div class="fancybox-icon" style="color:#ffffff;background-color:rgba(255,255,255,0.02)"><i class="sgicon sgicon-Bulb"></i></div>
                                <div class="fancybox-header">
                                    <h4 class="fancybox-title" style="color:#ffffff">Our Vision </h4>            </div>
                                <div class="fancybox-content" style="color:#f0f0f0">
                                    {{$content->content(2,28)}}</div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="grid-item" style="background-color: #f7941e !important">
                <div class="cms-fancybox-wrapper">
                    <div class="visionMission">
                        <div class="cms-fancybox cms-fancybox-left-icon-box-alt cms-fancybox-color-custom" style="padding-top: 35px;">
                            <div class="fancybox-body">
                                <div class="fancybox-icon" style="color:#ffffff;background-color:rgba(255,255,255,0.04)"><i class="sgicon sgicon-PaperClip"></i></div>
                                <div class="fancybox-header">
                                    <h4 class="fancybox-title" style="color:#ffffff">Our Core Values</h4>            </div>
                                <div class="fancybox-content" style="color:#f0f0f0">
                                    {{$content->content(2,30)}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="displayStatus" style="position:relative; margin-top: 560px; height: 10px;">

    </div>
    {{--<div data-vc-full-width="true" data-vc-full-width-init="true" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding vc_row-o-equal-height vc_row-o-content-top vc_row-flex" style="position: relative; left: -191.5px; box-sizing: border-box; width: 1583px;"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-4 vc_col-has-fill"><div class="vc_column-inner vc_custom_1457532567412"><div class="wpb_wrapper"><div class="vc_empty_space" style="height: 40px"><span class="vc_empty_space_inner"></span></div>--}}
                    {{--<div class="cms-fancybox-wrapper">--}}
                        {{--<div class="cms-fancybox cms-fancybox-left-icon-box-alt cms-fancybox-color-custom">--}}
                            {{--<div class="fancybox-body">--}}
                                {{--<div class="fancybox-icon" style="color:#ffffff;background-color:rgba(255,255,255,0.02)"><i class="sgicon sgicon-Flag"></i></div>--}}
                                {{--<div class="fancybox-header">--}}
                                    {{--<h4 class="fancybox-title" style="color:#ffffff">Our Mission</h4>            </div>--}}
                                {{--<div class="fancybox-content" style="color:#f0f0f0">--}}
                                    {{--We encourage every team member to be a whole person. We have a flexible, high trust environment that is focused on doing great work. We’re growing and moving at a fast pace, so everyone has the chance to work on exciting projects and try new things. You'll get to solve problems and deliver in a big way.            </div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="vc_empty_space" style="height: 55px"><span class="vc_empty_space_inner"></span></div>--}}
                {{--</div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-4 vc_col-has-fill"><div class="vc_column-inner vc_custom_1457532598622"><div class="wpb_wrapper"><div class="vc_empty_space" style="height: 40px"><span class="vc_empty_space_inner"></span></div>--}}
                    {{--<div class="cms-fancybox-wrapper">--}}
                        {{--<div class="cms-fancybox cms-fancybox-left-icon-box-alt cms-fancybox-color-custom">--}}
                            {{--<div class="fancybox-body">--}}
                                {{--<div class="fancybox-icon" style="color:#ffffff;background-color:rgba(255,255,255,0.02)"><i class="sgicon sgicon-Bulb"></i></div>--}}
                                {{--<div class="fancybox-header">--}}
                                    {{--<h4 class="fancybox-title" style="color:#ffffff">Our Vision</h4>            </div>--}}
                                {{--<div class="fancybox-content" style="color:#f0f0f0">--}}
                                    {{--Our purpose is to build solutions that remove the barriers preventing people from doing their best work, and this is at the heart of how we approach our own work, every day. We set our sights high and want to have a significant impact on the people we reach, as we have plans for improvements and expansion.            </div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="vc_empty_space" style="height: 55px"><span class="vc_empty_space_inner"></span></div>--}}
                {{--</div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-4 vc_col-has-fill"><div class="vc_column-inner vc_custom_1457532612951"><div class="wpb_wrapper"><div class="vc_empty_space" style="height: 40px"><span class="vc_empty_space_inner"></span></div>--}}
                    {{--<div class="cms-fancybox-wrapper"  style="color:
#0c5c99;" >--}}
                        {{--<div class="cms-fancybox cms-fancybox-left-icon-box-alt cms-fancybox-color-custom">--}}
                            {{--<div class="fancybox-body">--}}
                                {{--<div class="fancybox-icon" style="color:#ffffff;background-color:rgba(255,255,255,0.04)"><i class="sgicon sgicon-PaperClip"></i></div>--}}
                                {{--<div class="fancybox-header">--}}
                                    {{--<h4 class="fancybox-title" style="color:#ffffff">Added Advantage</h4>            </div>--}}
                                {{--<div class="fancybox-content" style="color:#f0f0f0">--}}
                                    {{--Learning and Growth. We’re building a learning organization, so you not only develop your craft but your ability to partner with others and be a strong team member. We know that building a high trust, high performance company takes grit. So, we stay connected and approach each challenge together.            </div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="vc_empty_space" style="height: 55px"><span class="vc_empty_space_inner"></span></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--OUR HISTORY--}}



    <div class="vc_row wpb_row vc_row-fluid vc_custom_1457678525525 vc_row-has-fill" data-vc-full-width="true" data-vc-full-width-init="true" style="position: relative; left: -191.5px; box-sizing: border-box; width: 1583px; padding-left: 191.5px; padding-right: 191.5px; overflow: hidden; margin-top: 450px;">

            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 column-fill-place column-fill-place-computed" style="padding-left: 0px; width: 800px; margin-left: -201px; height: 710px; overflow: hidden;">
                    <div class="vc_column-inner vc_custom_1457678677809" style="padding-left: 0px; height: 100%;">
                        <div class="wpb_wrapper" style="height: 710px; overflow: hidden;">
                            <div class="wpb_single_image wpb_content_element vc_align_right vc_custom_1457678137218 custom-about2-featured-img">
                                <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper vc_box_border_grey">

                                        <div class="onScreenSize">
                                            <img alt="" class="vc_single_image-img attachment-full"
                                                 height="800"
                                                 sizes="(max-width: 1200px) 100vw, 1200px"
                                                 src="http://7oroof.com/tfdemos/wp-metrics/wp-content/uploads/2016/03/gallery-picjumbo.com_HNCK7801.jpg"
                                                 srcset="http://7oroof.com/tfdemos/wp-metrics/wp-content/uploads/2016/03/gallery-picjumbo.com_HNCK7801.jpg 1200w, http://7oroof.com/tfdemos/wp-metrics/wp-content/uploads/2016/03/gallery-picjumbo.com_HNCK7801-768x512.jpg 768w"
                                                 width="1200">
                                        </div>

                                    </div>
                                </figure>
                            </div>
                        </div>
                    </div>
            </div>

        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6">
            <div class="vc_column-inner vc_custom_1457678683626">
                <div class="wpb_wrapper">
                    {{--<div class="vc_empty_space" style="height: 73px">--}}
                        {{--<span class="vc_empty_space_inner"></span>--}}
                    {{--</div>--}}
                    <p class="vc_custom_heading vc_custom_1457678752479" style="font-size: 15px;color: #9b9b9b;text-align: left;font-family:Lora;font-weight:700;font-style:normal"><strong>Our Story</strong></p>
                    <h2 class="vc_custom_heading vc_custom_1457678762070" style="font-size: 40px;text-align: left;letter-spacing:2.4px">{{$content->content(2,31)}}</h2>
                    <div class="wpb_text_column wpb_content_element vc_custom_1457678772109">
                        <div class="wpb_wrapper font-alt-3" style="font-size:17px;line-height:27px">
                            <p>{{$content->content(2,32)}}</p>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-6">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <h3 class="vc_custom_heading vc_custom_1457677258451" style="font-size: 22px;line-height: 1.25;text-align: left;letter-spacing:0.018em">{{$content->content(2,33)}}</h3>
                                    <div class="wpb_text_column wpb_content_element vc_custom_1457678780535">
                                        <div class="wpb_wrapper">
                                            <p><em>{{$content->content(2,34)}}</em></p>
                                        </div>
                                    </div>
                                    <h3 class="vc_custom_heading vc_custom_1457677295316" style="font-size: 22px;line-height: 1.25;text-align: left;letter-spacing:0.018em">{{$content->content(2,37)}}</h3>
                                    <div class="wpb_text_column wpb_content_element vc_custom_1457678785426">
                                        <div class="wpb_wrapper">
                                            <p><em>{{$content->content(2,38)}}</em></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-6">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <h3 class="vc_custom_heading vc_custom_1457677305277" style="font-size: 22px;line-height: 1.25;text-align: left;letter-spacing:0.018em">{{$content->content(2,35)}}</h3>
                                    <div class="wpb_text_column wpb_content_element vc_custom_1457678795338">
                                        <div class="wpb_wrapper">
                                            <p><em>Improved Profitability<br>
Streamlined and Optimized Productivity<br>
Better Management of existing IT Assets<br>
Secure IT ecosystem<br>
Lower IT Infrastructure operational costs & improved QoS</em></p>
                                        </div>
                                    </div>
                                    <h3 class="vc_custom_heading vc_custom_1457677314255" style="font-size: 22px;line-height: 1.25;text-align: left;letter-spacing:0.018em">{{$content->content(2,39)}}</h3>
                                    <div class="wpb_text_column wpb_content_element vc_custom_1457678790103">
                                        <div class="wpb_wrapper">
                                            <p><em>Perform with Excellence<br>
Act with Integrity and Fairness<br>Set exemplary Leadership</em></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_empty_space" style="height: 44px">
                        <span class="vc_empty_space_inner"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--@section('customSection')--}}
    {{--<div class="wpb_wrapper">--}}
        {{--<div class="vc_empty_space" style="height: 73px">--}}
            {{--<span class="vc_empty_space_inner"></span>--}}
        {{--</div>--}}
        {{--<p class="vc_custom_heading vc_custom_1457678752479" style="font-size: 15px;color: #9b9b9b;text-align: left;font-family:Lora;font-weight:700;font-style:normal"><strong>Our Story</strong></p>--}}
        {{--<h2 class="vc_custom_heading vc_custom_1457678762070" style="font-size: 40px;text-align: left;letter-spacing:2.4px">How It All Begin!</h2>--}}
        {{--<div class="wpb_text_column wpb_content_element vc_custom_1457678772109">--}}
            {{--<div class="wpb_wrapper font-alt-3" style="font-size:17px;line-height:27px">--}}
                {{--<p>we’re Metrics, an award-winning digital marketing agency based in New York. Founded by Begha over many cups of tea at her kitchen table in 2009, our brand promise is simple: to provide powerful digital marketing solutions to small and medium businesses that are looking to build success online.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="vc_row wpb_row vc_inner vc_row-fluid">--}}
            {{--<div class="wpb_column vc_column_container vc_col-sm-6">--}}
                {{--<div class="vc_column-inner">--}}
                    {{--<div class="wpb_wrapper">--}}
                        {{--<h3 class="vc_custom_heading vc_custom_1457677258451" style="font-size: 22px;line-height: 1.25;text-align: left;letter-spacing:0.018em">Our Mission</h3>--}}
                        {{--<div class="wpb_text_column wpb_content_element vc_custom_1457678780535">--}}
                            {{--<div class="wpb_wrapper">--}}
                                {{--<p>--}}
                                    {{--<em>To provide innovative, secure and scalable ICT products, solutions--}}
                                        {{--and services that meet our customers’ current and future needs--}}
                                        {{--using professional teams and partners, and providing exponential--}}
                                        {{--growth for all stakeholders.</em></p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<h3 class="vc_custom_heading vc_custom_1457677295316" style="font-size: 22px;line-height: 1.25;text-align: left;letter-spacing:0.018em">Why we do it?</h3>--}}
                        {{--<div class="wpb_text_column wpb_content_element vc_custom_1457678785426">--}}
                        {{--<div class="wpb_wrapper">--}}
                        {{--<p><em>Passion and love for developing. We are obsess over every detail. From making the user interface easy to providing the latest marketing data.</em></p>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="wpb_column vc_column_container vc_col-sm-6">--}}
                {{--<div class="vc_column-inner">--}}
                    {{--<div class="wpb_wrapper">--}}
                        {{--<h3 class="vc_custom_heading vc_custom_1457677305277" style="font-size: 22px;line-height: 1.25;text-align: left;letter-spacing:0.018em">Our Core Values</h3>--}}
                        {{--<div class="wpb_text_column wpb_content_element vc_custom_1457678795338">--}}
                            {{--<div class="wpb_wrapper">--}}
                                {{--<p><em>Perform with Excellence--}}
                                        {{--Act with Integrity and Fairness--}}
                                        {{--Set exemplary Leadership</em></p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<h3 class="vc_custom_heading vc_custom_1457677314255" style="font-size: 22px;line-height: 1.25;text-align: left;letter-spacing:0.018em">Whats Our Values?</h3>--}}
                        {{--<div class="wpb_text_column wpb_content_element vc_custom_1457678790103">--}}
                        {{--<div class="wpb_wrapper">--}}
                        {{--<p><em>We set our sights high and want to have a significant impact on the people we reach. We are in a cutting-edge space and have plans for improvements.</em></p>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="vc_empty_space" style="height: 44px">--}}
            {{--<span class="vc_empty_space_inner"></span>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--@endsection--}}


@section("scripts")
    <script type="text/javascript" src="http://localhost:81/directcoreWebsite/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min7752.js?ver=5.2.1"></script>    @endsection