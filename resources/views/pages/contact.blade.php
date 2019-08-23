@extends('layout.master')

@section('customSlider')
<div id="page_title" class="cms-page-title page-title-layout-1 page-title-layout-large page-title-with-sub page-title-with-breadcrumb text-center page-title-with-header-1" style="background-image:url({{url("/")}}/wp-content/uploads/2017/07/slider-home14.png)"; background-repeat: no-repeat; background-size: cover; background-attachment: scroll; background-position: center center; ">
        <div class="page-title-inner">
            <div class="page-title-placeholder" style="height:119px">

            </div>
            <div class="container">
                <div class="page-title-text">
                    <h1 class="title changeFont">{{$content->content(5, 59)}}</h1>
                    <div class="subtitle changeFont">{{$content->content(5, 60)}}</div></div>
                <div class="page-title-breadcrumb">
                    <nav class="cms-breadcrumb"><a href="http://7oroof.com/tfdemos/wp-metrics/">Home</a><span class="breadcrumb-sep">/</span><a href="http://7oroof.com/tfdemos/wp-metrics/about/">Contact</a><span class="breadcrumb-sep">/</span>
                        <span class="current">Contact Us </span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
     
@endsection


@section('customSection')


    <br>
    <br>
    <div class="vc_row wpb_row vc_row-fluid vc_custom_1457688921315">
        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-5">
            <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                    <h4 style="font-size: 16px;line-height: 20px;text-align: left;letter-spacing:0.02em" class="vc_custom_heading">{{$content->content(5, 61)}}</h4>
                    <div class="vc_empty_space" style="height: 11px">
                        <span class="vc_empty_space_inner">

                        </span>
                    </div>

                    <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                        <div class="wpb_wrapper">
                            <div class="metrics-contact-info-text">
                                <div class="contact-info-intro-text">{{$content->content(5, 62)}}</div>
                                <div class="contact-info-block">
                                    <div class="contact-info-icon color-primary"><i class="fa fa-map-marker"></i></div>
                                    <div class="contact-info-text">
                                        <p class="contact-info-label color-primary">Address :</p>
                                        <p>{{$content->content(5, 63)}}<br><a href="#">View location on map</a></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="contact-info-block">
                                            <div class="contact-info-icon color-primary"><i class="fa fa-envelope"></i></div>
                                            <div class="contact-info-text">
                                                <p class="contact-info-label color-primary">Email :</p>
                                                <p class="contact-info-content">{{$content->content(5, 64)}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-info-block">
                                            <div class="contact-info-icon color-primary"><i class="fa fa-phone"></i></div>
                                            <div class="contact-info-text">
                                                <p class="contact-info-label color-primary">Phone :</p>
                                                <p class="contact-info-content">{{$content->content(5, 65)}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_empty_space" style="height: 64px"><span class="vc_empty_space_inner"></span></div>
                </div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-8 vc_col-md-7"><div class="vc_column-inner "><div class="wpb_wrapper"><h4 style="font-size: 16px;line-height: 20px;text-align: left;letter-spacing:0.02em" class="vc_custom_heading">Drop Us A Line</h4><div class="vc_empty_space" style="height: 16px"><span class="vc_empty_space_inner"></span></div>
                    <div role="form" class="wpcf7" id="wpcf7-f367-p229-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form action="/tfdemos/wp-metrics/contact/contact-us-1/#wpcf7-f367-p229-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                            <div style="display: none;">
                                <input type="hidden" name="_wpcf7" value="367">
                                <input type="hidden" name="_wpcf7_version" value="4.8.1">
                                <input type="hidden" name="_wpcf7_locale" value="en_US">
                                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f367-p229-o1">
                                <input type="hidden" name="_wpcf7_container_post" value="229">
                                <input type="hidden" name="_wpcf7_nonce" value="e09c6959f1">
                            </div>
                            <div class="cms-wpcf7-form metrics-contact-form">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="contact-form-field"><span class="wpcf7-form-control-wrap first-name"><input type="text" name="first-name" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="First Name"></span></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-form-field"><span class="wpcf7-form-control-wrap email"><input type="email" name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="Email"></span></div>
                                    </div></div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="contact-form-field"><span class="wpcf7-form-control-wrap phone"><input type="tel" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" placeholder="Phone"></span></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-form-field"><span class="wpcf7-form-control-wrap subject"><input type="text" name="subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Subject"></span></div>
                                    </div></div>
                                <div class="contact-form-field"><span class="wpcf7-form-control-wrap message"><textarea name="message" cols="40" rows="3" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea></span></div>
                                <div class="cms-wpcf7-submit-block"><input type="submit" value="Send message" class="wpcf7-form-control wpcf7-submit btn btn-block btn-filled"><span class="ajax-loader"></span></div>
                            </div>
                            <div class="wpcf7-response-output wpcf7-display-none"></div></form></div><div class="vc_empty_space" style="height: 100px"><span class="vc_empty_space_inner"></span></div>
                </div></div></div></div>

    <div style="left:0; position:absolute; background-color: black; width:100%; height:400px;">

        <div id="map" style="width:100%; height:400px;"></div>
    </div>

    <div style="left:0; margin-top: 350px; position:relative;  height: 50px;" >
    </div>


@endsection


@section('scripts')

    <script>
        function initMap() {
            var uluru = {lat: -1.3318758, lng: 36.86232810000001};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 14,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkCOB3TkCN0HLMCVB5eYx4kRb4Y3KHUeA&callback=initMap"></script>

@endsection