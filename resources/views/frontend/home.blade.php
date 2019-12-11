@extends('frontend.layouts.frontend')
@section('title', 'Home')
@section('body')
  <!-- WELCOME SLIDER -->
  <div id="welcome_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="r_hero" data-source="gallery" style="background-color:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
        <div id="welcome" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
          <ul>  <!-- SLIDE  -->
            <li data-index="rs-3200" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power2.easeInOut" data-easeout="Power2.easeInOut" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
              <!-- MAIN IMAGE -->
              <img src="assets/img/transparent.png" alt="Image description" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg">
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption  "
                   id="slide-3200-layer-2"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['170','170','170','66']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="image"
                   data-basealign="slide"
                   data-responsive_offset="off"
                   data-responsive="off"
                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 5;border-width:0px;">
                <img src="{{asset('assets/revolution/img/R_dotted.png')}}" alt="Image description" data-ww="['6px','6px','6px','6px']" data-hh="['190px','190px','190px','190px']" width="12" height="380">
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption R_title  "
                   id="slide-3200-layer-1"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['-40','-40','-20','-80']"
                   data-fontsize="['70','70','50','30']"
                   data-lineheight="['75','75','55','35']"
                   data-width="['640','640','420','320']"
                   data-height="none"
                   data-whitespace="normal"

                   data-type="text"
                   data-basealign="slide"
                   data-responsive_offset="off"
                   data-responsive="off"
                   data-frames='[{"from":"y:-50px;sX:2;sY:2;opacity:0;","speed":1000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 6; min-width: 640px; max-width: 640px; white-space: normal;">Smart Glass Nepal
              </div>

        
              

              <!-- LAYER NR. 3 -->
              <div class="tp-caption  "
                   id="slide-3200-layer-3"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['middle','middle','middle','middle']" data-voffset="['274','274','274','150']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="image"
                   data-basealign="slide"
                   data-responsive_offset="off"
                   data-responsive="off"
                   data-frames='[{"from":"y:-50px;opacity:0;","speed":1000,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 7;border-width:0px;">
                <div class="rs-looped rs-slideloop" data-easing="Power4.easeInOut" data-speed="3" data-xs="0" data-xe="0" data-ys="-180" data-ye="0">
                  <img src="{{asset('assets/revolution/img/R_arrow.png')}}" alt="Image description" data-ww="['30px','30px','30px','30px']" data-hh="['39px','39px','39px','39px']" width="60" height="78">
                </div>
              </div>
            </li>
          </ul>
          <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
      </div><!-- END REVOLUTION SLIDER -->

      <!-- ABOUT SLIDER --->
      <div id="about_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="r_about1" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="about" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
          <ul>  <!-- SLIDE  -->
            <li data-index="rs-3198" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power2.easeInOut" data-easeout="Power2.easeInOut" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
              <!-- MAIN IMAGE -->
              <img src="{{asset('assets/revolution/img/transparent.png')}}" alt="Image description" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg">
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption  "
                   id="slide-3198-layer-2"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['bottom','bottom','bottom','bottom']" data-voffset="['90','90','50','50']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="image"
                   data-responsive_offset="off"
                   data-responsive="off"
                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 5;border-width:0px;">
                <img src="{{asset('assets/revolution/img/R_dotted.png')}}" alt="Image description" data-ww="['6px','6px','6px','6px']" data-hh="['190px','190px','190px','190px']" width="12" height="380">
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption  "
                   id="slide-3198-layer-3"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['bottom','bottom','bottom','bottom']" data-voffset="['170','170','130','130']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="image"
                   data-responsive_offset="off"
                   data-responsive="off"
                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":1100,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 6;border-width:0px;">
                <img src="{{asset('assets/revolution/img/R_plus.png')}}" alt="Image description" data-ww="['30px','30px','30px','30px']" data-hh="['30px','30px','30px','30px']" width="60" height="60">
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                   id="slide-3198-layer-4"
                   data-x="['center','center','center','center']" data-hoffset="['-250','-250','-250','-247']"
                   data-y="['top','top','top','top']" data-voffset="['82','82','62','33']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="image"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:150px;opacity:0;","speed":1000,"to":"o:1;rZ:5;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 7;border-width:0px;">
                <img src="{{asset('assets/revolution/img/R_phone.png')}}" alt="Image description" data-ww="['500px','500px','500px','350px']" data-hh="['664px','664px','664px','465px']" width="700" height="930">
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                   id="slide-3198-layer-5"
                   data-x="['center','center','center','center']" data-hoffset="['-241','-241','-241','-241']"
                   data-y="['top','top','top','top']" data-voffset="['196','196','176','113']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="image"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:150px;opacity:0;","speed":1000,"to":"o:1;rZ:5;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 8;border-width:0px;">
                <img src="{{asset('assets/revolution/img/R_phonepic.jpg')}}" alt="Image description" data-ww="['239px','239px','239px','167px']" data-hh="['424px','424px','424px','296px']" width="478" height="848">
              </div>

              <!-- LAYER NR. 5 -->
              <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme  tp-colorchange tp-lowopacity rs-parallaxlevel-2"
                   id="slide-3198-layer-9"
                   data-x="['center','center','center','center']" data-hoffset="['-241','-241','-241','-241']"
                   data-y="['top','top','top','top']" data-voffset="['196','196','176','113']"
                   data-width="['239','239','239','167']"
                   data-height="['424','424','424','296']"
                   data-whitespace="nowrap"

                   data-type="shape"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:150px;opacity:0;","speed":1000,"to":"o:1;rZ:5;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 9;background-color:rgba(0, 0, 0, 0.75);border-color:rgba(0, 0, 0, 0);border-width:0px;"></div>

              <!-- LAYER NR. 6 -->
              <div class="tp-caption   tp-resizeme tp-svg-layer rs-parallaxlevel-2"
                   id="slide-3198-layer-10"
                   data-x="['center','center','center','center']" data-hoffset="['-241','-241','-241','-241']"
                   data-y="['top','top','top','top']" data-voffset="['362','362','342','218']"
                   data-width="['90','90','90','70']"
                   data-height="['90','90','90','70']"
                   data-whitespace="nowrap"

                   data-type="svg"
                   data-svg_src="assets/img/ic_dashboard_24px.svg"
                   data-svg_idle="sc:transparent;sw:0;sda:0;sdo:0;"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:150px;opacity:0;","speed":1000,"to":"o:1;rZ:5;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 10; min-width: 90px; max-width: 90px; max-width: 90px; max-width: 90px; color: rgba(255, 255, 255, 1.00);border-width:0px;"></div>

              <!-- LAYER NR. 7 -->
              <div class="tp-caption   tp-resizeme"
                   id="slide-3198-layer-6"
                   data-x="['left','left','left','left']" data-hoffset="['618','510','386','140']"
                   data-y="['top','top','top','top']" data-voffset="['252','252','160','160']"
                   data-width="['480','480','320','300']"
                   data-height="none"
                   data-whitespace="normal"

                   data-type="text"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 11; min-width: 480px; max-width: 480px; white-space: normal; font-size: 17px; line-height: 17px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;border-width:0px;">EASILY BUILD
              </div>

              <!-- LAYER NR. 8 -->
              <div class="tp-caption   tp-resizeme"
                   id="slide-3198-layer-1"
                   data-x="['left','left','left','left']" data-hoffset="['618','510','386','140']"
                   data-y="['top','top','top','top']" data-voffset="['281','281','189','192']"
                   data-fontsize="['40','40','40','30']"
                   data-lineheight="['45','45','45','35']"
                   data-width="['480','480','320','300']"
                   data-height="none"
                   data-whitespace="normal"

                   data-type="text"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 12; min-width: 480px; max-width: 480px; white-space: normal; font-size: 40px; line-height: 45px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;border-width:0px;">Parallax Websites
              </div>

              <!-- LAYER NR. 9 -->
              <div class="tp-caption   tp-resizeme"
                   id="slide-3198-layer-7"
                   data-x="['left','left','left','left']" data-hoffset="['618','510','386','140']"
                   data-y="['top','top','top','top']" data-voffset="['348','348','302','250']"
                   data-width="['480','480','320','300']"
                   data-height="none"
                   data-whitespace="normal"

                   data-type="text"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":800,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 13; min-width: 480px; max-width: 480px; white-space: normal; font-size: 18px; line-height: 26px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;border-width:0px;">This Website consists of several Slider Revolution blocks that can easily be customized with our Visual Editor.
              </div>

              <!-- LAYER NR. 10 -->
              <a class="tp-caption rev-btn  tp-resizeme  tp-rs-menulink"
                 href="#info" target="_self" id="slide-3198-layer-8"
                 data-x="['left','left','left','left']" data-hoffset="['618','510','386','140']"
                 data-y="['top','top','top','top']" data-voffset="['460','460','440','388']"
                 data-width="none"
                 data-height="none"
                 data-whitespace="nowrap"

                 data-type="button"
                 data-actions=""
                 data-responsive_offset="on"

                 data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":900,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(0, 0, 0, 1.00);bs:solid;"}]'
                 data-textAlign="['center','center','center','center']"
                 data-paddingtop="[0,0,0,0]"
                 data-paddingright="[40,40,40,40]"
                 data-paddingbottom="[0,0,0,0]"
                 data-paddingleft="[40,40,40,40]"

                 style="z-index: 14; white-space: nowrap; font-size: 15px; line-height: 50px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);border-width:0px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">GET GOING
              </a>
            </li>
          </ul>
          <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
      </div><!-- END REVOLUTION SLIDER -->

      <!-- PRODUCT SLIDER -->
      <div id="products_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="r_products1" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="products" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
          <ul>  <!-- SLIDE  -->
            <li data-index="rs-3194" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power2.easeInOut" data-easeout="Power2.easeInOut" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
              <!-- MAIN IMAGE -->
              <img src="assets/img/dummy.png" alt="Image description" data-lazyload="assets/img/transparent.png" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg">
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption  "
                   id="slide-3194-layer-15"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['bottom','bottom','bottom','bottom']" data-voffset="['90','90','50','50']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="image"
                   data-responsive_offset="off"
                   data-responsive="off"
                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 5;border-width:0px;">
                <img src="assets/img/dummy.png" alt="Image description" data-ww="['6px','6px','6px','6px']" data-hh="['190px','190px','190px','190px']" width="12" height="380" data-lazyload="assets/img/R_dotted.png">
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption  "
                   id="slide-3194-layer-16"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['bottom','bottom','bottom','bottom']" data-voffset="['170','170','130','130']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="image"
                   data-responsive_offset="off"
                   data-responsive="off"
                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":1100,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 6;border-width:0px;">
                <img src="assets/img/dummy.png" alt="Image description" data-ww="['30px','30px','30px','30px']" data-hh="['30px','30px','30px','30px']" width="60" height="60" data-lazyload="assets/img/R_line.png">
              </div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                   id="slide-3194-layer-10"
                   data-x="['right','right','center','center']" data-hoffset="['-68','-53','-20','-13']"
                   data-y="['top','top','top','top']" data-voffset="['120','150','344','354']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="image"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:150px;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"x:300px;opacity:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 7;border-width:0px;">
                <img src="assets/img/dummy.png" alt="Image description" data-ww="['780px','620px','600px','400px']" data-hh="['600px','477px','462px','308px']" width="1300" height="1000" data-lazyload="assets/img/R_ipad2-1.png">
              </div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption   tp-resizeme  disabled_lc rs-parallaxlevel-2 tp-videolayer"
                   id="slide-3194-layer-11"
                   data-x="['right','right','center','center']" data-hoffset="['0','2','0','0']"
                   data-y="['top','top','top','top']" data-voffset="['221','231','422','406']"
                   data-whitespace="nowrap"

                   data-type="video"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:150px;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"x:300px;opacity:0;","ease":"Power3.easeInOut"}]'
                   data-videocontrols="none" data-videowidth="['590px','468px','453px','302px']" data-videoheight="['435px','345px','334px','223px']" data-videoposter="assets/img/tp_vid_streets.jpg" data-videomp4="assets/video/tp_vid_streets.mp4" data-noposteronmobile="off" data-videopreload="auto" data-videoloop="loop" data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"
                   data-autoplay="on"
                   data-volume="mute"
                   style="z-index: 8;border-width:0px;"></div>

              <!-- LAYER NR. 5 -->
              <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme  tp-colorchange tp-lowopacity rs-parallaxlevel-2"
                   id="slide-3194-layer-13"
                   data-x="['right','right','center','center']" data-hoffset="['0','2','0','0']"
                   data-y="['top','top','top','top']" data-voffset="['221','231','422','406']"
                   data-width="['590','468','453','302']"
                   data-height="['435','345','334','223']"
                   data-whitespace="nowrap"

                   data-type="shape"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:150px;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"x:300px;opacity:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 9;background-color:rgba(0, 0, 0, 0.75);border-color:rgba(0, 0, 0, 0);border-width:0px;"></div>

              <!-- LAYER NR. 6 -->
              <div class="tp-caption   tp-resizeme tp-svg-layer rs-parallaxlevel-2"
                   id="slide-3194-layer-14"
                   data-x="['right','right','center','center']" data-hoffset="['255','189','0','0']"
                   data-y="['top','top','top','top']" data-voffset="['393','358','544','482']"
                   data-width="['90','90','90','70']"
                   data-height="['90','90','90','70']"
                   data-whitespace="normal"

                   data-type="svg"
                   data-svg_src="assets/img/ic_videocam_24px.svg"
                   data-svg_idle="sc:transparent;sw:0;sda:0;sdo:0;"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:150px;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"x:300px;opacity:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 10; min-width: 90px; max-width: 90px; max-width: 90px; max-width: 90px; color: rgba(255, 255, 255, 1.00);border-width:0px;"></div>

              <!-- LAYER NR. 7 -->
              <div class="tp-caption   tp-resizeme"
                   id="slide-3194-layer-6"
                   data-x="['left','left','center','center']" data-hoffset="['30','50','0','0']"
                   data-y="['top','top','top','top']" data-voffset="['252','252','48','48']"
                   data-width="['480','400','480','320']"
                   data-height="none"
                   data-whitespace="normal"

                   data-type="text"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 11; min-width: 480px; max-width: 480px; white-space: normal; font-size: 17px; line-height: 17px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;border-width:0px;">VERSATILE
              </div>

              <!-- LAYER NR. 8 -->
              <div class="tp-caption   tp-resizeme"
                   id="slide-3194-layer-1"
                   data-x="['left','left','center','center']" data-hoffset="['30','50','0','0']"
                   data-y="['top','top','top','top']" data-voffset="['279','281','78','78']"
                   data-fontsize="['40','40','40','30']"
                   data-lineheight="['45','45','45','35']"
                   data-width="['480','400','480','320']"
                   data-height="none"
                   data-whitespace="normal"

                   data-type="text"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 12; min-width: 480px; max-width: 480px; white-space: normal; font-size: 40px; line-height: 45px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;border-width:0px;">Full Media Support
              </div>

              <!-- LAYER NR. 9 -->
              <div class="tp-caption   tp-resizeme"
                   id="slide-3194-layer-7"
                   data-x="['left','left','center','center']" data-hoffset="['30','50','0','0']"
                   data-y="['top','top','top','top']" data-voffset="['348','348','145','137']"
                   data-width="['480','400','480','320']"
                   data-height="none"
                   data-whitespace="normal"

                   data-type="text"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":800,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 13; min-width: 480px; max-width: 480px; white-space: normal; font-size: 18px; line-height: 26px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;border-width:0px;">Add HTML5, YouTube or Vimeo videos as well as streams from all kinds of social services like Facebook or Twitter.
              </div>

              <!-- LAYER NR. 10 -->
              <div class="tp-caption rev-btn  tp-resizeme"
                   id="slide-3194-layer-8"
                   data-x="['left','left','center','center']" data-hoffset="['199','179','-36','-37']"
                   data-y="['top','top','top','top']" data-voffset="['460','458','257','265']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="button"
                   data-actions='[{"event":"click","action":"jumptoslide","slide":"previous","delay":""}]'
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":900,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(0, 0, 0, 1.00);bs:solid;"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[30,30,30,30]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[30,30,30,30]"

                   style="z-index: 14; white-space: nowrap; font-size: 15px; line-height: 50px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);border-width:0px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                <i class="fa fa-chevron-left"></i>
              </div>

              <!-- LAYER NR. 11 -->
              <div class="tp-caption rev-btn  tp-resizeme"
                   id="slide-3194-layer-12"
                   data-x="['left','left','center','center']" data-hoffset="['272','252','37','36']"
                   data-y="['top','top','top','top']" data-voffset="['460','458','257','265']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="button"
                   data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":900,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(0, 0, 0, 1.00);bs:solid;"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[30,30,30,30]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[30,30,30,30]"

                   style="z-index: 15; white-space: nowrap; font-size: 15px; line-height: 50px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);border-width:0px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                <i class="fa fa-chevron-right"></i>
              </div>
            </li>
            <!-- SLIDE  -->
            <li data-index="rs-3195" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power2.easeInOut" data-easeout="Power2.easeInOut" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
              <!-- MAIN IMAGE -->
              <img src="assets/img/dummy.png" alt="Image description" data-lazyload="assets/img/transparent.png" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg">
              <!-- LAYERS -->

              <!-- LAYER NR. 12 -->
              <div class="tp-caption  "
                   id="slide-3195-layer-15"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['bottom','bottom','bottom','bottom']" data-voffset="['90','90','50','50']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="image"
                   data-responsive_offset="off"
                   data-responsive="off"
                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 16;border-width:0px;">
                <img src="assets/img/dummy.png" alt="Image description" data-ww="['6px','6px','6px','6px']" data-hh="['190px','190px','190px','190px']" width="12" height="380" data-lazyload="assets/img/R_dotted.png">
              </div>

              <!-- LAYER NR. 13 -->
              <div class="tp-caption  "
                   id="slide-3195-layer-16"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['bottom','bottom','bottom','bottom']" data-voffset="['170','170','130','130']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="image"
                   data-responsive_offset="off"
                   data-responsive="off"
                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":1100,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 17;border-width:0px;">
                <img src="assets/img/dummy.png" alt="Image description" data-ww="['30px','30px','30px','30px']" data-hh="['30px','30px','30px','30px']" width="60" height="60" data-lazyload="assets/img/R_line.png">
              </div>

              <!-- LAYER NR. 14 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                   id="slide-3195-layer-10"
                   data-x="['right','right','center','center']" data-hoffset="['-68','-53','-20','-13']"
                   data-y="['top','top','top','top']" data-voffset="['120','150','344','354']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="image"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:150px;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"x:300px;opacity:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 18;border-width:0px;">
                <img src="assets/img/dummy.png" alt="Image description" data-ww="['780px','620px','600px','400px']" data-hh="['600px','477px','462px','308px']" width="1300" height="1000" data-lazyload="assets/img/R_ipad2-1.png">
              </div>

              <!-- LAYER NR. 15 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-2 tp-videolayer"
                   id="slide-3195-layer-11"
                   data-x="['right','right','center','center']" data-hoffset="['0','2','0','0']"
                   data-y="['top','top','top','top']" data-voffset="['221','231','422','406']"
                   data-whitespace="nowrap"

                   data-type="video"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:150px;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"x:300px;opacity:0;","ease":"Power3.easeInOut"}]'
                   data-vimeoid="119772134" data-videoattributes="title=0&byline=0&portrait=0&api=1" data-videowidth="['590px','468px','453px','302px']" data-videoheight="['435px','345px','334px','223px']" data-videoloop="loop" data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"
                   data-autoplay="on"
                   data-volume="mute"
                   style="z-index: 19;border-width:0px;"></div>

              <!-- LAYER NR. 16 -->
              <div class="tp-caption   tp-resizeme"
                   id="slide-3195-layer-6"
                   data-x="['left','left','center','center']" data-hoffset="['30','50','0','0']"
                   data-y="['top','top','top','top']" data-voffset="['252','252','48','48']"
                   data-width="['480','400','480','320']"
                   data-height="none"
                   data-whitespace="normal"

                   data-type="text"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 20; min-width: 480px; max-width: 480px; white-space: normal; font-size: 17px; line-height: 17px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;border-width:0px;">FUNKY
              </div>

              <!-- LAYER NR. 17 -->
              <div class="tp-caption   tp-resizeme"
                   id="slide-3195-layer-1"
                   data-x="['left','left','center','center']" data-hoffset="['30','50','0','0']"
                   data-y="['top','top','top','top']" data-voffset="['279','281','78','78']"
                   data-fontsize="['40','40','40','30']"
                   data-lineheight="['45','45','45','35']"
                   data-width="['480','400','480','320']"
                   data-height="none"
                   data-whitespace="normal"

                   data-type="text"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 21; min-width: 480px; max-width: 480px; white-space: normal; font-size: 40px; line-height: 45px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;border-width:0px;">Vimeo Video
              </div>

              <!-- LAYER NR. 18 -->
              <div class="tp-caption   tp-resizeme"
                   id="slide-3195-layer-7"
                   data-x="['left','left','center','center']" data-hoffset="['30','50','0','0']"
                   data-y="['top','top','top','top']" data-voffset="['348','348','145','137']"
                   data-width="['480','400','480','320']"
                   data-height="none"
                   data-whitespace="normal"

                   data-type="text"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":800,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 22; min-width: 480px; max-width: 480px; white-space: normal; font-size: 18px; line-height: 26px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;border-width:0px;">Add HTML5, YouTube or Vimeo videos as well as streams from all kinds of social services like Facebook or Twitter.
              </div>

              <!-- LAYER NR. 19 -->
              <div class="tp-caption rev-btn  tp-resizeme"
                   id="slide-3195-layer-8"
                   data-x="['left','left','center','center']" data-hoffset="['199','179','-36','-37']"
                   data-y="['top','top','top','top']" data-voffset="['460','458','257','265']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="button"
                   data-actions='[{"event":"click","action":"jumptoslide","slide":"previous","delay":""}]'
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":900,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(0, 0, 0, 1.00);bs:solid;"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[30,30,30,30]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[30,30,30,30]"

                   style="z-index: 23; white-space: nowrap; font-size: 15px; line-height: 50px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);border-width:0px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                <i class="fa fa-chevron-left"></i>
              </div>

              <!-- LAYER NR. 20 -->
              <div class="tp-caption rev-btn  tp-resizeme"
                   id="slide-3195-layer-12"
                   data-x="['left','left','center','center']" data-hoffset="['272','252','37','36']"
                   data-y="['top','top','top','top']" data-voffset="['460','458','257','265']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="button"
                   data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":900,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(0, 0, 0, 1.00);bs:solid;"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[30,30,30,30]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[30,30,30,30]"

                   style="z-index: 24; white-space: nowrap; font-size: 15px; line-height: 50px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);border-width:0px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                <i class="fa fa-chevron-right"></i>
              </div>
            </li>
            <!-- SLIDE  -->
            <li data-index="rs-3196" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power2.easeInOut" data-easeout="Power2.easeInOut" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
              <!-- MAIN IMAGE -->
              <img src="assets/img/dummy.png" alt="Image description" data-lazyload="assets/img/transparent.png" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg">
              <!-- LAYERS -->

              <!-- LAYER NR. 21 -->
              <div class="tp-caption  "
                   id="slide-3196-layer-15"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['bottom','bottom','bottom','bottom']" data-voffset="['90','90','50','50']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="image"
                   data-responsive_offset="off"
                   data-responsive="off"
                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 25;border-width:0px;">
                <img src="assets/img/dummy.png" alt="Image description" data-ww="['6px','6px','6px','6px']" data-hh="['190px','190px','190px','190px']" width="12" height="380" data-lazyload="assets/img/R_dotted.png">
              </div>

              <!-- LAYER NR. 22 -->
              <div class="tp-caption  "
                   id="slide-3196-layer-16"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['bottom','bottom','bottom','bottom']" data-voffset="['170','170','130','130']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="image"
                   data-responsive_offset="off"
                   data-responsive="off"
                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":1100,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 26;border-width:0px;">
                <img src="assets/img/dummy.png" alt="Image description" data-ww="['30px','30px','30px','30px']" data-hh="['30px','30px','30px','30px']" width="60" height="60" data-lazyload="assets/img/R_line.png">
              </div>

              <!-- LAYER NR. 23 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                   id="slide-3196-layer-10"
                   data-x="['right','right','center','center']" data-hoffset="['-68','-53','-20','-13']"
                   data-y="['top','top','top','top']" data-voffset="['120','150','344','354']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="image"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:150px;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"x:300px;opacity:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 27;border-width:0px;">
                <img src="assets/img/dummy.png" alt="Image description" data-ww="['780px','620px','600px','400px']" data-hh="['600px','477px','462px','308px']" width="1300" height="1000" data-lazyload="assets/img/R_ipad2-1.png">
              </div>

              <!-- LAYER NR. 24 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-2 tp-videolayer"
                   id="slide-3196-layer-11"
                   data-x="['right','right','center','center']" data-hoffset="['0','2','0','0']"
                   data-y="['top','top','top','top']" data-voffset="['221','231','422','406']"
                   data-whitespace="nowrap"

                   data-type="video"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:150px;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"x:300px;opacity:0;","ease":"Power3.easeInOut"}]'
                   data-ytid="JQVmkDUkZT4" data-videoattributes="version=3&amp;enablejsapi=1&amp;html5=1&amp;title=0&byline=0&portrait=0&api=1" data-videorate="1" data-videowidth="['590px','468px','453px','302px']" data-videoheight="['435px','345px','334px','223px']" data-videocontrols="controls" data-videoloop="loop" data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"
                   data-autoplay="on"
                   data-volume="mute"
                   style="z-index: 28;border-width:0px;"></div>

              <!-- LAYER NR. 25 -->
              <div class="tp-caption   tp-resizeme"
                   id="slide-3196-layer-6"
                   data-x="['left','left','center','center']" data-hoffset="['30','50','0','0']"
                   data-y="['top','top','top','top']" data-voffset="['252','252','48','48']"
                   data-width="['480','400','480','320']"
                   data-height="none"
                   data-whitespace="normal"

                   data-type="text"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 29; min-width: 480px; max-width: 480px; white-space: normal; font-size: 17px; line-height: 17px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;border-width:0px;">INTERESTING
              </div>

              <!-- LAYER NR. 26 -->
              <div class="tp-caption   tp-resizeme"
                   id="slide-3196-layer-1"
                   data-x="['left','left','center','center']" data-hoffset="['30','50','0','0']"
                   data-y="['top','top','top','top']" data-voffset="['279','281','78','78']"
                   data-fontsize="['40','40','40','30']"
                   data-lineheight="['45','45','45','35']"
                   data-width="['480','400','480','320']"
                   data-height="none"
                   data-whitespace="normal"

                   data-type="text"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 30; min-width: 480px; max-width: 480px; white-space: normal; font-size: 40px; line-height: 45px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;border-width:0px;">YouTube Video
              </div>

              <!-- LAYER NR. 27 -->
              <div class="tp-caption   tp-resizeme"
                   id="slide-3196-layer-7"
                   data-x="['left','left','center','center']" data-hoffset="['30','50','0','0']"
                   data-y="['top','top','top','top']" data-voffset="['348','348','145','137']"
                   data-width="['480','400','480','320']"
                   data-height="none"
                   data-whitespace="normal"

                   data-type="text"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":800,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 31; min-width: 480px; max-width: 480px; white-space: normal; font-size: 18px; line-height: 26px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;border-width:0px;">Add HTML5, YouTube or Vimeo videos as well as streams from all kinds of social services like Facebook or Twitter.
              </div>

              <!-- LAYER NR. 28 -->
              <div class="tp-caption rev-btn  tp-resizeme"
                   id="slide-3196-layer-8"
                   data-x="['left','left','center','center']" data-hoffset="['199','179','-36','-37']"
                   data-y="['top','top','top','top']" data-voffset="['460','458','257','265']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="button"
                   data-actions='[{"event":"click","action":"jumptoslide","slide":"previous","delay":""}]'
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":900,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(0, 0, 0, 1.00);bs:solid;"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[30,30,30,30]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[30,30,30,30]"

                   style="z-index: 32; white-space: nowrap; font-size: 15px; line-height: 50px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);border-width:0px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                <i class="fa fa-chevron-left"></i>
              </div>

              <!-- LAYER NR. 29 -->
              <div class="tp-caption rev-btn  tp-resizeme"
                   id="slide-3196-layer-12"
                   data-x="['left','left','center','center']" data-hoffset="['272','252','37','36']"
                   data-y="['top','top','top','top']" data-voffset="['460','458','257','265']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="button"
                   data-actions='[{"event":"click","action":"jumptoslide","slide":"next","delay":""}]'
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":900,"ease":"Power4.easeOut"},{"delay":"wait","speed":500,"to":"y:-50px;opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(0, 0, 0, 1.00);bs:solid;"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[30,30,30,30]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[30,30,30,30]"

                   style="z-index: 33; white-space: nowrap; font-size: 15px; line-height: 50px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);border-width:0px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                <i class="fa fa-chevron-right"></i>
              </div>
            </li>
          </ul>
          <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
      </div><!-- END REVOLUTION SLIDER -->

      <!-- INFO SLIDER -->
      <div id="info_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="r_info1" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="info" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
          <ul>  <!-- SLIDE  -->
            <li data-index="rs-3190" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power2.easeInOut" data-easeout="Power2.easeInOut" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
              <!-- MAIN IMAGE -->
              <img src="assets/img/transparent.png" alt="Image description" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg">
              <!-- LAYERS -->

              <!-- LAYER NR. 1 -->
              <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                   id="slide-3190-layer-4"
                   data-x="['center','center','center','center']" data-hoffset="['-173','-173','-173','-123']"
                   data-y="['top','top','top','top']" data-voffset="['-70','-70','-70','-40']"
                   data-width="none"
                   data-height="none"
                   data-whitespace="nowrap"

                   data-type="image"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:150px;opacity:0;","speed":1000,"to":"o:1;rZ:-5;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 5;border-width:0px;">
                <img src="assets/img/R_watch-1.png" alt="Image description" data-ww="['500px','500','500','350px']" data-hh="['500px','500','500','350px']" width="500" height="500">
              </div>

              <!-- LAYER NR. 2 -->
              <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme  tp-colorchange rs-parallaxlevel-2"
                   id="slide-3190-layer-9"
                   data-x="['center','center','center','center']" data-hoffset="['2','2','2','-1']"
                   data-y="['top','top','top','top']" data-voffset="['167','167','167','128']"
                   data-width="['74','74','74','50']"
                   data-height="['88','88','88','59']"
                   data-whitespace="nowrap"

                   data-type="shape"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:150px;opacity:0;","speed":1000,"to":"o:1;rZ:-5;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 6;background-color:rgba(85, 85, 85, 1.00);border-color:rgba(0, 0, 0, 0);border-width:0px;"></div>

              <!-- LAYER NR. 3 -->
              <div class="tp-caption   tp-resizeme tp-svg-layer rs-parallaxlevel-2"
                   id="slide-3190-layer-10"
                   data-x="['center','center','center','center']" data-hoffset="['2','2','2','0']"
                   data-y="['top','top','top','top']" data-voffset="['192','192','192','146']"
                   data-width="['40','40','40','25']"
                   data-height="['40','40','40','25']"
                   data-whitespace="nowrap"

                   data-type="svg"
                   data-svg_src="assets/img/ic_favorite_24px.svg"
                   data-svg_idle="sc:transparent;sw:0;sda:0;sdo:0;"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:150px;opacity:0;","speed":1000,"to":"o:1;rZ:-5;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['left','left','left','left']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 7; min-width: 40px; max-width: 40px; max-width: 40px; max-width: 40px; color: rgba(255, 255, 255, 1.00);border-width:0px;"></div>

              <!-- LAYER NR. 4 -->
              <div class="tp-caption   tp-resizeme"
                   id="slide-3190-layer-6"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['top','top','top','top']" data-voffset="['400','400','400','300']"
                   data-width="['480','480','480','300']"
                   data-height="none"
                   data-whitespace="normal"

                   data-type="text"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 8; min-width: 480px; max-width: 480px; white-space: normal; font-size: 17px; line-height: 17px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;border-width:0px;">MADE WITH LOVE
              </div>

              <!-- LAYER NR. 5 -->
              <div class="tp-caption   tp-resizeme"
                   id="slide-3190-layer-1"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['top','top','top','top']" data-voffset="['429','429','429','332']"
                   data-fontsize="['40','40','40','30']"
                   data-lineheight="['45','45','45','35']"
                   data-width="['480','480','480','300']"
                   data-height="none"
                   data-whitespace="normal"

                   data-type="text"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 9; min-width: 480px; max-width: 480px; white-space: normal; font-size: 40px; line-height: 45px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;border-width:0px;">Get in Touch Today
              </div>

              <!-- LAYER NR. 6 -->
              <div class="tp-caption   tp-resizeme"
                   id="slide-3190-layer-7"
                   data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                   data-y="['top','top','top','top']" data-voffset="['497','497','497','390']"
                   data-width="['480','480','480','300']"
                   data-height="none"
                   data-whitespace="normal"

                   data-type="text"
                   data-responsive_offset="on"

                   data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":800,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                   data-textAlign="['center','center','center','center']"
                   data-paddingtop="[0,0,0,0]"
                   data-paddingright="[0,0,0,0]"
                   data-paddingbottom="[0,0,0,0]"
                   data-paddingleft="[0,0,0,0]"

                   style="z-index: 10; min-width: 480px; max-width: 480px; white-space: normal; font-size: 18px; line-height: 26px; font-weight: 400; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;border-width:0px;">Rvsldr by Thmpnch
                <br/>
                South Main Street 32
                <br/>
                New York, NY 10022
              </div>

              <!-- LAYER NR. 7 -->
              <a class="tp-caption rev-btn  tp-resizeme"
                 href="http://goo.gl/bhqNzY" target="_blank" id="slide-3190-layer-11"
                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                 data-y="['top','top','top','top']" data-voffset="['610','610','610','503']"
                 data-width="none"
                 data-height="none"
                 data-whitespace="nowrap"

                 data-type="button"
                 data-actions=""
                 data-responsive_offset="on"

                 data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(0, 0, 0, 1.00);bs:solid;"}]'
                 data-textAlign="['center','center','center','center']"
                 data-paddingtop="[0,0,0,0]"
                 data-paddingright="[40,40,40,40]"
                 data-paddingbottom="[0,0,0,0]"
                 data-paddingleft="[40,40,40,40]"

                 style="z-index: 11; white-space: nowrap; font-size: 15px; line-height: 50px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Montserrat;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 0);border-width:0px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">BUY SLIDER REVOLUTION
              </a>
            </li>
          </ul>
          <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
        </div>
      </div><!-- END REVOLUTION SLIDER -->
@endsection
@section('js')
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
      
            revapi1160 = tpj("#welcome").show().revolution({
              sliderType: "hero",
              jsFileLocation: "revolution/js/",
              sliderLayout: "fullscreen",
              dottedOverlay: "none",
              delay: 9000,
              navigation: {},
              viewPort: {
                enable: true,
                outof: "wait",
                visible_area: "80%",
                presize: false
              },
              responsiveLevels: [1240, 1024, 778, 480],
              visibilityLevels: [1240, 1024, 778, 480],
              gridwidth: [1240, 1024, 778, 480],
              gridheight: [700, 700, 700, 700],
              lazyType: "none",
              parallax: {
                type: "scroll",
                origo: "slidercenter",
                speed: 400,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 0, -10, -15, 55],
                type: "scroll",
              },
              shadow: 0,
              spinner: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "15%",
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
      
            revapi1154 = tpj("#info").show().revolution({
              sliderType: "hero",
              jsFileLocation: "revolution/js/",
              sliderLayout: "fullwidth",
              dottedOverlay: "none",
              delay: 9000,
              navigation: {},
              viewPort: {
                enable: true,
                outof: "wait",
                visible_area: "90%",
                presize: false
              },
              responsiveLevels: [1240, 1024, 778, 480],
              visibilityLevels: [1240, 1024, 778, 480],
              gridwidth: [1240, 1024, 778, 480],
              gridheight: [800, 800, 800, 700],
              lazyType: "none",
              parallax: {
                type: "scroll",
                origo: "slidercenter",
                speed: 400,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, -10, -15, -20, 55],
                type: "scroll",
              },
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
      
      
            revapi1156 = tpj("#products").show().revolution({
              sliderType: "standard",
              jsFileLocation: "revolution/js/",
              sliderLayout: "fullwidth",
              dottedOverlay: "none",
              delay: 9000,
              navigation: {
                onHoverStop: "off",
              },
              viewPort: {
                enable: true,
                outof: "wait",
                visible_area: "90%",
                presize: false
              },
              responsiveLevels: [1240, 1024, 778, 480],
              visibilityLevels: [1240, 1024, 778, 480],
              gridwidth: [1240, 1024, 778, 480],
              gridheight: [1100, 1100, 1100, 1100],
              lazyType: "single",
              parallax: {
                type: "scroll",
                origo: "slidercenter",
                speed: 400,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                type: "scroll",
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: 1,
              shuffle: "off",
              autoHeight: "off",
              disableProgressBar: "on",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
              }
            });
      
            revapi1158 = tpj("#about").show().revolution({
              sliderType: "hero",
              jsFileLocation: "revolution/js/",
              sliderLayout: "fullwidth",
              dottedOverlay: "none",
              delay: 9000,
              navigation: {},
              viewPort: {
                enable: true,
                outof: "wait",
                visible_area: "85%",
                presize: false
              },
              responsiveLevels: [1240, 1024, 778, 480],
              visibilityLevels: [1240, 1024, 778, 480],
              gridwidth: [1240, 1024, 778, 480],
              gridheight: [900, 900, 900, 900],
              lazyType: "none",
              parallax: {
                type: "scroll",
                origo: "slidercenter",
                speed: 400,
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, -10, -15, -20, 55],
                type: "scroll",
              },
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
      
      
            /*
             * colorScroll - jQuery plugin
             * A jQuery plugin that transitions the background color, when the user scrolls.
             * Version 0.3.0
             *
             * https://github.com/hendriklammers/jquery-colorscroll
             *
             * Copyright (c) 2013 Hendrik Lammers
             * http://www.hendriklammers.com
             *
             * Licensed under the MIT license.
             * http://opensource.org/licenses/MIT
             */
      
            !function (o) {
              "use strict";
              "function" == typeof define && define.amd ? define(["jquery"], o) : o("object" == typeof exports ? require("jquery") : jQuery)
            }(function (o) {
              "use strict";
      
              function t(t, e) {
                this.element = t, this.$element = o(t), this.options = o.extend({}, l, e), this._defaults = l, this._name = s, this.init()
              }
      
              var s = "colorScroll", e = window.document, r = o(e), i = o(window), n = {UPDATE: "update.colorScroll"}, l = {
                colors: [{
                  color: "#FFFFFF",
                  position: "0%"
                }, {color: "#000000", position: "100%"}], scrollElement: r, fauxScroll: !1, colorChange: void 0
              }, c = function () {
                var o = e.createElement("div"), t = o.style;
                return t.cssText = "background-color:rgba(150,255,150,.5)", ("" + t.backgroundColor).indexOf("rgba") > -1
              }(), a = function (o) {
                return function (t, s) {
                  return t[o] < s[o] ? -1 : t[o] > s[o] ? 1 : 0
                }
              }, h = function (o, t, s) {
                var e = "rgb" + (c ? "a" : "") + "(" + parseInt(o[0] + s * (t[0] - o[0]), 10) + "," + parseInt(o[1] + s * (t[1] - o[1]), 10) + "," + parseInt(o[2] + s * (t[2] - o[2]), 10);
                return c && (e += "," + (o && t ? parseFloat(o[3] + s * (t[3] - o[3])) : 1)), e += ")"
              }, u = function (o) {
                var t, s;
                return (t = /#([0-9a-fA-F]{2})([0-9a-fA-F]{2})([0-9a-fA-F]{2})/.exec(o)) ? s = [parseInt(t[1], 16), parseInt(t[2], 16), parseInt(t[3], 16), 1] : (t = /#([0-9a-fA-F])([0-9a-fA-F])([0-9a-fA-F])/.exec(o)) ? s = [17 * parseInt(t[1], 16), 17 * parseInt(t[2], 16), 17 * parseInt(t[3], 16), 1] : (t = /rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(o)) ? s = [parseInt(t[1], 10), parseInt(t[2], 10), parseInt(t[3], 10), 1] : (t = /rgba\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9\.]*)\s*\)/.exec(o)) && (s = [parseInt(t[1], 10), parseInt(t[2], 10), parseInt(t[3], 10), parseFloat(t[4])]), s
              };
              t.prototype = {
                colors: [], init: function () {
                  this.setPositions(), this.currentColor = this.$element.css("background-color"), this.updateColor(), this.addListeners()
                }, addListeners: function () {
                  var t = this;
                  this.options.scrollElement.on("scroll", o.proxy(this.updateColor, this)), i.on("debouncedresize", function () {
                    t.setPositions(), t.updateColor()
                  })
                }, setPositions: function () {
                  for (var o = r.height() - i.height(), t = [], s = 0; s < this.options.colors.length; s++) {
                    var e = {}, n = this.options.colors[s].position;
                    e.color = this.options.colors[s].color, "string" == typeof n ? "%" === n.charAt(n.length - 1) ? e.position = Math.floor(parseFloat(n) * o / 100) : e.position = parseFloat(n) : e.position = n, t.push(e)
                  }
                  t.sort(a("position")), this.colors = t
                }, updateColor: function () {
                  var o, t, s, e, i = r.scrollTop();
                  if (i <= this.colors[0].position) this.setColor(this.colors[0].color); else if (i >= this.colors[this.colors.length - 1].position) this.setColor(this.colors[this.colors.length - 1].color); else {
                    for (var n = 0; n < this.colors.length; n++) {
                      if (!(i >= this.colors[n].position)) {
                        t = this.colors[n].position, e = this.colors[n].color;
                        break
                      }
                      o = this.colors[n].position, s = this.colors[n].color
                    }
                    var l = (i - o) / (t - o), c = h(u(s), u(e), l);
                    this.setColor(c)
                  }
                }, setColor: function (o) {
                  o !== this.currentColor && (this.$element.css("background-color", o), this.currentColor = o, this.$element.trigger(n.UPDATE, {color: o}), this.options.colorChange && this.options.colorChange(o))
                }
              }, o.fn[s] = function (e) {
                return this.each(function () {
                  o.data(this, "plugin_" + s) || o.data(this, "plugin_" + s, new t(this, e))
                })
              }
            }), function (o) {
              "use strict";
              var t, s, e = o.event;
              t = e.special.debouncedresize = {
                setup: function () {
                  o(this).on("resize", t.handler)
                }, teardown: function () {
                  o(this).off("resize", t.handler)
                }, handler: function (o, r) {
                  var i = this, n = arguments, l = function () {
                    o.type = "debouncedresize", e.dispatch.apply(i, n)
                  };
                  s && clearTimeout(s), r ? l() : s = setTimeout(l, t.threshold)
                }, threshold: 150
              }
            }(jQuery);
      
      
            /* SET SCROLL COLORS HERE */
      
            jQuery('body, .tp-colorchange').colorScroll({
              colors: [{
                color: '#007bff',
                position: '0%'
              }, {
                color: '#00bde9',
                position: '50%'
              }, {
                color: '#ff3839',
                position: '100%'
              }]
            });
      
      
            /* THEMEPUNCH MENU SCROLL */
      
            function sliderAnchors() {
      
              var anchorarray = new Array;
              lastknowheaderheight = 0; //jQuery('').height();
      
              // ANCHOR AND ITS HIGHLITS
              jQuery('.tp-rs-menulink').each(function (i) {
                var a = jQuery(this),
                  obj = new Object();
      
                obj.button = a;
                obj.href = a.attr("href");
                if (obj.href != undefined) {
                  obj.fakehref = obj.href.replace("#", "#!");
      
                  if (obj.href != undefined && obj.href.split("http").length < 2 && obj.href != "#wp-toolbar") {
                    obj.target = jQuery(obj.href);
                    obj.offset = obj.target.data('offset') == undefined ? 0 : obj.target.data('offset');
                  }
      
                  if (obj.target != undefined && obj.target.length > 0)
                    anchorarray.push(obj);
                }
              });
      
              jQuery('.tp-rs-menulink').each(function (i) {
                var a = jQuery(this);
                a.click(function () {
      
                  var obj = new Object(),
                    ypos = 0;
      
                  if (a.attr('href') != undefined) {
                    obj.href = a.attr("href");
                    obj.target = jQuery(obj.href);
                    if (obj.href != undefined && obj.target != undefined && jQuery(obj.target).length > 0) {
      
      
                      //if (jQuery(this).hasClass("tp-rs-menu-selected")) return false;
      
                      obj.offset = obj.target.data('offset') == undefined ? 0 : obj.target.data('offset');
                      obj.top = jQuery(obj.target).offset().top;
                      ypos = obj.top + obj.offset;
                      var counter = {val: (window.pageYOffset || document.documentElement.scrollTop) - (document.documentElement.clientTop || 0)};
      
      
                      if (jQuery('body').data('currenscrollanim') != undefined)
                        jQuery('body').data('currenscrollanim').pause();
      
      
                      var sanim = punchgs.TweenLite.to(counter, 1.5, {
                        val: ypos, ease: punchgs.Power4.easeOut,
                        onUpdate: function () {
                          forcescrolled = true;
                          punchgs.TweenLite.set(jQuery('body, html'), {scrollTop: counter.val});
                        },
                        onComplete: function () {
                          forcescrolled = false;
                          jQuery(window).trigger("scroll.tprsmenu");
                        }
                      });
      
                      forcescrolled = true;
                      jQuery.each(anchorarray, function (index, o) {
                        if (obj.href !== o.href) {
                          o.button.removeClass("tp-rs-menu-selected");
                        } else {
                          o.button.addClass("tp-rs-menu-selected");
                          window.history.pushState('', '', obj.href)
                        }
                      });
      
      
                      jQuery('body').data('currenscrollanim', sanim);
                      return false;
                    } else {
                      return true;
                    }
                  } else {
                    return true;
                  }
                })
              });
      
            }
      
            sliderAnchors();
          }
        });
      </script>
@endsection