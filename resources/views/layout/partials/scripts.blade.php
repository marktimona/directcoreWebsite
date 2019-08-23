<script type="text/javascript">(function() {function addEventListener(element,event,handler) {
        if(element.addEventListener) {
            element.addEventListener(event,handler, false);
        } else if(element.attachEvent){
            element.attachEvent('on'+event,handler);
        }
    }function maybePrefixUrlField() {
        if(this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
            this.value = "http://" + this.value;
        }
    }

        var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
        if( urlFields && urlFields.length > 0 ) {
            for( var j=0; j < urlFields.length; j++ ) {
                addEventListener(urlFields[j],'blur',maybePrefixUrlField);
            }
        }/* test if browser supports date fields */
        var testInput = document.createElement('input');
        testInput.setAttribute('type', 'date');
        if( testInput.type !== 'date') {

            /* add placeholder & pattern to all date fields */
            var dateFields = document.querySelectorAll('.mc4wp-form input[type="date"]');
            for(var i=0; i<dateFields.length; i++) {
                if(!dateFields[i].placeholder) {
                    dateFields[i].placeholder = 'YYYY-MM-DD';
                }
                if(!dateFields[i].pattern) {
                    dateFields[i].pattern = '[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])';
                }
            }
        }

    })();</script>			<script type="text/javascript">
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    }
</script>
<link property="stylesheet" rel='stylesheet' id='vc_google_fonts_raleway100200300regular500600700800900-css'  href='http://fonts.googleapis.com/css?family=Raleway%3A100%2C200%2C300%2Cregular%2C500%2C600%2C700%2C800%2C900&amp;ver=4.8.5' type='text/css' media='all' />
<link rel='stylesheet' id='mediaelement-css'  href='{{url("/")}}/wp-includes/js/mediaelement/mediaelementplayer.min51cd.css?ver=2.22.0' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css'  href='{{url("/")}}/wp-includes/js/mediaelement/wp-mediaelement.min341d.css?ver=4.8.5' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='owl-carousel-css'  href='{{url("/")}}/wp-content/themes/wp-metrics/assets/css/owl.carousel.min341d.css?ver=4.8.5' type='text/css' media='all' />
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {"apiSettings":{"root":"http:\/\/7oroof.com\/tfdemos\/wp-metrics\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
    /* ]]> */
</script>
<script type='text/javascript' src='{{url("/")}}/wp-content/plugins/contact-form-7/includes/js/scriptsa288.js?ver=4.8.1'></script>
<script type='text/javascript' src='{{url("/")}}/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
<script type='text/javascript' src='{{url("/")}}/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url":"\/tfdemos\/wp-metrics\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/tfdemos\/wp-metrics\/home\/homepage-16\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type='text/javascript' src='{{url("/")}}/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min0226.js?ver=3.1.2'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {"ajax_url":"\/tfdemos\/wp-metrics\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/tfdemos\/wp-metrics\/home\/homepage-16\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments_cdd76d0eb036ff046aaa7c7d6894c883"};
    /* ]]> */
</script>
<script type='text/javascript' src='{{url("/")}}/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min0226.js?ver=3.1.2'></script>
<script type='text/javascript' src='{{url("/")}}/wp-content/plugins/cmssuperheroes/assets/js/modernizr.min341d.js?ver=4.8.5'></script>
<script type='text/javascript' src='{{url("/")}}/wp-content/themes/wp-metrics/assets/js/bootstrap.min341d.js?ver=4.8.5'></script>
<script type='text/javascript' src='{{url("/")}}/wp-content/themes/wp-metrics/assets/js/imagesloaded.pkgd.min341d.js?ver=4.8.5'></script>
<script type='text/javascript' src='{{url("/")}}/wp-content/themes/wp-metrics/assets/js/jquery.waypoints.min341d.js?ver=4.8.5'></script>
<script type='text/javascript' src='{{url("/")}}/wp-content/themes/wp-metrics/assets/js/theme.plugins341d.js?ver=4.8.5'></script>
<script type='text/javascript' src='{{url("/")}}/wp-content/themes/wp-metrics/assets/js/theme341d.js?ver=4.8.5'></script>
<script type='text/javascript' src='{{url("/")}}/wp-includes/js/wp-embed.min341d.js?ver=4.8.5'></script>
<script type='text/javascript' src='{{url("/")}}/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min7752.js?ver=5.2.1'></script>
<script type='text/javascript' src='http://www.youtube.com/iframe_api?ver=5.2.1'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var mejsL10n = {"language":"en-US","strings":{"Close":"Close","Fullscreen":"Fullscreen","Turn off Fullscreen":"Turn off Fullscreen","Go Fullscreen":"Go Fullscreen","Download File":"Download File","Download Video":"Download Video","Play":"Play","Pause":"Pause","Captions\/Subtitles":"Captions\/Subtitles","None":"None","Time Slider":"Time Slider","Skip back %1 seconds":"Skip back %1 seconds","Video Player":"Video Player","Audio Player":"Audio Player","Volume Slider":"Volume Slider","Mute Toggle":"Mute Toggle","Unmute":"Unmute","Mute":"Mute","Use Up\/Down Arrow keys to increase or decrease volume.":"Use Up\/Down Arrow keys to increase or decrease volume.","Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds."}};
    var _wpmejsSettings = {"pluginPath":"\/tfdemos\/wp-metrics\/wp-includes\/js\/mediaelement\/"};
    /* ]]> */
</script>
<script type='text/javascript' src='{{url("/")}}/wp-includes/js/mediaelement/mediaelement-and-player.min51cd.js?ver=2.22.0'></script>
<script type='text/javascript' src='{{url("/")}}/wp-includes/js/mediaelement/wp-mediaelement.min341d.js?ver=4.8.5'></script>
<script type='text/javascript' src='{{url("/")}}/wp-content/themes/wp-metrics/assets/js/owl.carousel.min341d.js?ver=4.8.5'></script>






<script type='text/javascript'>
    /* <![CDATA[ */
    var mc4wp_forms_config = [];
    /* ]]> */
</script>
<script type='text/javascript' src='{{url("/")}}/wp-content/plugins/mailchimp-for-wp/assets/js/forms-api.min3d81.js?ver=4.1.6'></script>
<!--[if lte IE 9]>
<script type='text/javascript' src='http://7oroof.com/tfdemos/wp-metrics/wp-content/plugins/mailchimp-for-wp/assets/js/third-party/placeholders.min.js?ver=4.1.6'></script>



<![endif]-->

@yield("scripts")