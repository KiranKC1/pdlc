<!-- JS Global Compulsory -->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-migrate/jquery-migrate.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery.easing/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('assets/vendor/popper.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/bootstrap.min.js')}}"></script>

<!-- JS Revolution Slider -->
<script src="{{asset('assets/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

<script src="{{asset('assets/vendor/revolution-slider/revolution-addons/slicey/js/revolution.addon.slicey.min.js')}}"></script>

<script src="{{asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

<!-- JS Custom -->
<script src="{{asset('assets/js/custom.js')}}"></script>

<!-- JS Plugins Init. -->
<script>
     var tpj = jQuery;
      
        var revapi1162;
        tpj(document).ready(function () {
          if (tpj("#menu").revolution == undefined) {
            revslider_showDoubleJqueryError("#menu");
          } else {
            revapi1162 = tpj("#menu").show().revolution({
              sliderType: "hero",
              jsFileLocation: "revolution/js/",
              sliderLayout: "fullwidth",
              dottedOverlay: "none",
              delay: 9000,
              navigation: {},
              responsiveLevels: [1240, 1024, 778, 480],
              visibilityLevels: [1240, 1024, 778, 480],
              gridwidth: [1240, 1024, 778, 480],
              gridheight: [110, 110, 110, 110],
              lazyType: "none",
              minHeight: "110",
              shadow: 0,
              spinner: "off",
              autoHeight: "off",
              disableProgressBar: "on",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                simplifyAll: "off",
                disableFocusListener: false,
              }
            });
        });
    });
    </script>
@yield('js')
</body>

</html>
