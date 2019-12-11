
<a class="js-go-to u-go-to-v1" href="#!" data-type="fixed" data-position='{
   "bottom": 15,
   "right": 15
 }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
    <i class="hs-icon hs-icon-arrow-top"></i>
</a>
</div>

<!-- JS Global Compulsory -->
<script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-migrate/jquery-migrate.min.js')}}"></script>
<script src="{{asset('assets/vendor/popper.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/bootstrap.min.js')}}"></script>
<script>
    $(window).load(function() {  document.getElementById("hideAll").style.display = "none"; });
</script>
<script>
    $(document).ready(function () {
        $('[data-toggle="offcanvas"]').click(function () {
            $('.row-offcanvas').toggleClass('active')
        });
    });
</script>

<!-- JS Implementing Plugins -->
<script src="{{asset('assets/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
<script src="{{asset('assets/vendor/dzsparallaxer/dzsparallaxer.js')}}"></script>
<script src="{{asset('assets/vendor/dzsparallaxer/dzsscroller/scroller.js')}}"></script>
<script src="{{asset('assets/vendor/dzsparallaxer/advancedscroller/plugin.js')}}"></script>
<script src="{{asset('assets/vendor/masonry/dist/masonry.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/vendor/slick-carousel/slick/slick.js')}}"></script>
<script src="{{asset('assets/vendor/fancybox/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('assets/vendor/gmaps/gmaps.min.js')}}"></script>

<!-- JS Unify -->
<script src="{{asset('assets/js/hs.core.js')}}"></script>

<script src="{{asset('assets/js/components/hs.header-side.js')}}"></script>
<script>
    /**
     * Hamburgers plugin helper.
     *
     * @author Htmlstream
     * @version 1.0
     * @requires hamburgers.min.css
     *
     */
    ;(function($){
        'use strict';

        $.HSCore.helpers.HSHamburgers = {

            /**
             * Initialize 'hamburgers' plugin.
             *
             * @param String selector
             *
             * @return undefined;
             */
            init: function(selector) {

                if( !selector || !$(selector).length ) return;

                var hamburgers = $(selector),
                    timeoutid;

                hamburgers.each(function(i, el){

                    var $this = $(this);

                    if($this.closest('button').length) {
                        $this.closest('button').get(0).addEventListener('click', function(e){

                            var $self = $(this),
                                $hamburger = $self.find(selector);

                            if(timeoutid) clearTimeout(timeoutid);
                            timeoutid = setTimeout(function(){

                                $hamburger.toggleClass('is-active');

                            }, 10);
                            e.preventDefault();
                        }, false);
                    }
                    else {
                        $this.get(0).addEventListener('click', function(e){

                            var $self = $(this);

                            if(timeoutid) clearTimeout(timeoutid);
                            timeoutid = setTimeout(function(){

                                $self.toggleClass('is-active');

                            }, 10);
                            e.preventDefault();
                        }, false);
                    }

                });

            }


        };

    })(jQuery);
</script>

<script src="{{asset('assets/js/components/hs.dropdown.js')}}"></script>
<script src="{{asset('assets/js/components/hs.scrollbar.js')}}"></script>
<script src="{{asset('assets/js/components/hs.popup.js')}}"></script>
<script src="{{asset('assets/js/components/hs.carousel.js')}}"></script>


<script src="{{asset('assets/js/components/hs.go-to.js')}}"></script>

<!-- JS Custom -->
<script src="{{asset('assets/js/components/hs.scroll-nav.js')}}"></script>

<!-- JS Plugins Init. -->
<script>



    $(window).on('load', function() {
        // initialization of HSScrollNav
        $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
            duration: 700
        });
        //loader
        // $('#loader').fadeOut();
        // $('#main_thing').removeAttr("hidden");
    });

    $(document).on('ready', function () {
        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');

        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {
            afterOpen: function(){
                $(this).find('input[type="search"]').focus();
            }
        });

        // initialization of masonry
        $('.masonry-grid').imagesLoaded().then(function () {
            $('.masonry-grid').masonry({
                columnWidth: '.masonry-grid-sizer',
                itemSelector: '.masonry-grid-item',
                percentPosition: true
            });
        });

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');
    });

    $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeaderSide.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
            event: 'hover',
            direction: 'vertical',
            breakpoint: 991
        });
    });

    $('.nav-link').on('click',function(){
        $( "#header-toggler" ).trigger( "click" );
    });
</script>
@yield('js')
</body>

</html>