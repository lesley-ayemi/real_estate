<script type="text/javascript" src="js/modernizr.js"></script><!-- Modernizer -->
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script><!-- Jquery -->
<script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap -->
<script type="text/javascript" src="js/owl.carousel.min.js"></script><!-- Owl Carousal -->
<script type="text/javascript" src="js/html5lightbox.js"></script><!-- HTML -->
<script type="text/javascript" src="js/scrolly.js"></script><!-- Parallax -->
<script type="text/javascript" src="js/price-range.js"></script><!-- Parallax -->
<script type="text/javascript" src="js/script.js"></script><!-- Script -->

<script src="js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
<script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        "use strict";
        jQuery('.tp-banner').show().revolution({
            dottedOverlay: "none",
            delay: 16000,
            startwidth: 1170,
            startheight: 700,
            hideThumbs: 200,
            thumbWidth: 100,
            thumbHeight: 50,
            thumbAmount: 5,
            navigationType: "bullet",
            navigationArrows: "solo",
            navigationStyle: "preview1",
            touchenabled: "on",
            onHoverStop: "on",
            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,
            parallax: "mouse",
            parallaxBgFreeze: "on",
            parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
            keyboardNavigation: "off",
            navigationHAlign: "center",
            navigationVAlign: "bottom",
            navigationHOffset: 0,
            navigationVOffset: 20,
            soloArrowLeftHalign: "left",
            soloArrowLeftValign: "center",
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,
            soloArrowRightHalign: "right",
            soloArrowRightValign: "center",
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,
            shadow: 0,
            fullWidth: "on",
            fullScreen: "off",
            spinner: "spinner4",
            stopLoop: "off",
            stopAfterLoops: -1,
            stopAtSlide: -1,
            shuffle: "off",
            autoHeight: "off",
            forceFullWidth: "off",
            hideThumbsOnMobile: "off",
            hideNavDelayOnMobile: 1500,
            hideBulletsOnMobile: "off",
            hideArrowsOnMobile: "off",
            hideThumbsUnderResolution: 0,
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            videoJsPath: "rs-plugin/videojs/",
            fullScreenOffsetContainer: ""
        });

        $(".carousel-prop").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 2000,
            loop: true,
            dots: true,
            nav: false,
            items: 4,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false
                }
            }
        });

        $(".carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 2000,
            loop: false,
            dots: false,
            nav: true,
            margin: 0,
            items: 3
        });

        $(".carousel-client").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 2000,
            loop: false,
            dots: false,
            nav: true,
            margin: 30,
            items: 5,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: true
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        });

    });
</script>