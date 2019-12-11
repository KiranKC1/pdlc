<style>
  #hideAll
  {
    position: fixed;
    left: 0px;
    right: 0px;
    top: 0px;
    bottom: 0px;
    background-color: black;
    z-index: 99; /* Higher than anything else in the document */

  }
</style>
<div style="display: none" id="hideAll">
</div>


<body id="body" class="u-body--header-side-push-right">
@if ($errors->any())
  <div class="container">
    <div class="row">
      <div>
        <div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger alert-dismissible fade show" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out; z-index: 1031; bottom: 20px; right: 10px; animation-iteration-count: 1;">
          <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          <h4 class="h5">
            <i class="fa fa-minus-circle"></i>
            Oh snap!
          </h4>
          @foreach ($errors->all() as $error)
            <p>{!! $error !!}</p>
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endif
@if (Session::has('error'))
  <div class="container">
    <div class="row">
      <div>
        <div data-notify="container" class="col-xs-11 col-sm-4 alert alert-danger alert-dismissible fade show" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out; z-index: 1031; bottom: 20px; right: 10px; animation-iteration-count: 1;">
          <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          <h4 class="h5">
            <i class="fa fa-minus-circle"></i>
            Oh snap!
          </h4>
          <p>{{Session::get('error')}}</p>
        </div>
      </div>
    </div>
  </div>
@endif
@if (Session::has('status'))
  <div class="container">
    <div class="row">
      <div>
        <div data-notify="container" class="col-xs-11 col-sm-4 alert alert-info alert-dismissible fade show" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out; z-index: 1031; bottom: 20px; right: 10px; animation-iteration-count: 1;">
          <p>{!!Session::get('status')!!}</p>
        </div>
      </div>
    </div>
  </div>
@endif
@if (Session::has('success'))
  <div class="container">
    <div class="row">
      <div>
        <div data-notify="container" class="col-xs-11 col-sm-4 alert alert-success alert-dismissible fade show" role="alert" data-notify-position="bottom-right" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out; z-index: 1031; bottom: 20px; right: 10px; animation-iteration-count: 1;">
          <button type="button" class="close u-alert-close--light" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          <h4 class="h5">
            <i class="fa fa-check-circle"></i>
            Success
          </h4>
          <p>{{Session::get('success')}}</p>
        </div>
      </div>
    </div>
  </div>
@endif

<div id="main_thing">
  <!-- Header Toggle Button -->
  <button  class="btn u-btn-yellow u-header-toggler u-header-toggler--top-left g-pa-0" id="header-toggler" aria-haspopup="true" aria-expanded="false" aria-controls="js-header" aria-label="Toggle Header" data-target="#js-header">
            <span class="hamburger">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
            </span>
            </span>
  </button>
  <!-- End Header Toggle Button -->

  <!-- Sidebar Navigation -->
  <div id="js-header" class="u-header u-header--side" aria-labelledby="header-toggler" data-header-behavior="push" data-header-position="right" data-header-breakpoint="lg" data-header-classes="g-transition-0_5" data-header-body-classes="g-transition-0_5"
       data-header-overlay-classes="g-bg-black-opacity-0_8 g-transition-0_5">
    <div style="background: #070E18;" class="u-header__sections-container g-brd-right--lg g-brd-gray-light-v5 g-py-10 g-py-40--lg g-px-14--lg">
      <div class="u-header__section u-header__section--light">
        <nav class="navbar navbar-expand-lg">
          <div class="js-mega-menu container">
            <!-- Responsive Toggle Button -->
            <button class="navbar-toggler g-color-white navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                      <span class="hamburger hamburger--slider">
                    <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                      </span>
                      </span>
            </button>
            <!-- End Responsive Toggle Button -->
            <!-- Logo -->
            <a href="{{URL::to('/')}}" class="navbar-brand g-mb-40--lg">
              <img src="{{asset('assets/logo/logo.png')}}" alt="Pahenlo Batti Muni" style="height:120px; width:170px;">
            </a>
            <!-- End Logo -->

            <!-- Navigation -->
            <div class="collapse navbar-collapse align-items-center flex-sm-row w-100 g-mt-20 g-mt-0--lg g-mb-40" id="navBar">
              <ul class="navbar-nav ml-auto text-uppercase text-center g-font-weight-600 u-sub-menu-v1">
                <li class="nav-item g-my-5">
                  <a href="#home" class="nav-link g-color-yellow--hover g-color-white" style="font-size:30px;">Home

                  </a>
                </li>
                <li class="nav-item g-my-5">
                  <a href="#album" class="nav-link g-color-yellow--hover g-color-white" style="font-size:27px;">Got Code?

                  </a>
                </li>
                <li class="nav-item g-my-5">
                  <a href="#buy_album" class="nav-link g-color-yellow--hover g-color-white" style="font-size:24px;">Buy Album

                  </a>
                </li>
                <li class="nav-item g-my-5">
                  <a href="#merch" class="nav-link g-color-yellow--hover g-color-white" style="font-size:21px;">Merch

                  </a>
                </li>
                <li class="nav-item g-my-5">
                  <a href="#about" class="nav-link g-color-yellow--hover g-color-white" style="font-size:15px;">About

                  </a>
                </li>
                <li class="nav-item g-my-5">
                  <a href="#contact" class="nav-link g-color-yellow--hover g-color-white" style="font-size:12px;">Contact

                  </a>
                </li>
              </ul>
            </div>
            <!-- End Navigation -->

            <div class="text-center g-hidden-lg-down">
              <ul class="list-inline g-mb-10">
                <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                  <a href="https://www.facebook.com/PahenloBattiMuni/" class="g-color-white g-color-yellow--hover" target="_blank" style="font-size:40px;">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
                  <a href="https://www.instagram.com/pahenlo.batti.muni/" class="g-color-white g-color-yellow--hover" style="font-size:40px;" target="_blank">
                    <i class="fa fa-instagram"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="YouTube">
                  <a href="https://www.youtube.com/channel/UCEq964g_WpKY7ugo5dc4XPQ" class="g-color-white g-color-yellow--hover" style="font-size:40px;" target="_blank">
                    <i class="fa fa-youtube"></i>
                  </a>
                </li>
                <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="" data-original-title="Soundcloud">
                  <a href="https://soundcloud.com/pahenlobattimuni" class="g-color-white g-color-yellow--hover" style="font-size:40px;" target="_blank">
                    <i class="fa fa-soundcloud"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <!-- End Sidebar Navigation -->