@extends('frontend.layouts.frontend')
@section('title','Contact Us')
@section('body')
        <!-- Promo Block -->
        <section class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall " data-options='{direction: "fromtop", animation_duration: 25, direction: "reverse"}'>
                <!-- Parallax Image -->
                <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-pos-bottom-center g-bg-bluegray-opacity-0_2--after" style="height: 130%; background-image: url({{asset('assets/img/static-images/contact.jpg')}});"></div>
                <!-- End Parallax Image -->
          
                <!-- Promo Block Content -->
                <div class="container g-color-white text-center g-py-150">
                  <h3 class="h2 g-font-weight-300 mb-0">It is good to meet you.</h3>
                  <h2 class="g-font-weight-700 g-font-size-65 text-uppercase">Got a question?</h2>
                </div>
                <!-- Promo Block Content -->
              </section>
              <!-- End Promo Block -->
          
              <!-- Icon Blocks -->
              <section class="clearfix g-brd-bottom g-brd-gray-light-v4">
                <!-- Icons Block -->
                <div class="row no-gutters g-py-20">
                  <div class="col-md-4 col-lg-4 g-brd-right--md g-brd-gray-light-v4">
                    <!-- Icon Blocks -->
                    <div class="text-center g-py-20">
                      <span class="u-icon-v1 u-icon-size--xl g-color-black g-mb-10">
                          <i class="icon-real-estate-027 u-line-icon-pro"></i>
                        </span>
                      <h4 class="h5 g-font-weight-600 g-mb-5">Address</h4>
                      <span class="d-block">New Baneshwor (Behing Janata Bank)</span>
                    </div>
                    <!-- End Icon Blocks -->
                  </div>
          
                  <div class="col-md-4 col-lg-4 g-brd-right--md g-brd-gray-light-v4">
                    <!-- Icon Blocks -->
                    <div class="text-center g-py-20">
                      <span class="u-icon-v1 u-icon-size--xl g-color-black g-mb-10">
                          <i class="icon-electronics-005  u-line-icon-pro"></i>
                        </span>
                      <h4 class="h5 g-font-weight-600 g-mb-5">Phone Number</h4>
                      <span class="d-block">+977 9841198200</span>
                    </div>
                    <!-- End Icon Blocks -->
                  </div>
          
                  <div class="col-md-4 col-lg-4 g-brd-right--md g-brd-gray-light-v4">
                    <!-- Icon Blocks -->
                    <div class="text-center g-py-20">
                      <span class="u-icon-v1 u-icon-size--xl g-color-black g-mb-10">
                          <i class="icon-communication-062  u-line-icon-pro"></i>
                        </span>
                      <h4 class="h5 g-font-weight-600 g-mb-5">Email</h4>
                      <span class="d-block">info@promonp.com</span>
                    </div>
                    <!-- End Icon Blocks -->
                  </div>
          
                </div>
                <!-- End Icons Block -->
              </section>
              <!-- End Icon Blocks -->
          
              <!-- Contact Form -->
              <section class="container g-py-20">
                <div class="row justify-content-center g-mb-20">
                  <div class="col-lg-7">
                    <!-- Heading -->
                    <div class="text-center">
                      <h2 class="h1 g-color-black g-font-weight-700 text-uppercase mb-4">Tell us about yourself</h2>
                      <div class="d-inline-block g-width-70 g-height-2 g-bg-black mb-4"></div>
                      <p class="g-font-size-18 mb-0">We are a creative company focusing on clients happiness. Somewhere between sophistication and simplicity.</p>
                    </div>
                    <!-- End Heading -->
                  </div>
                </div>
          
                <div class="row justify-content-center">
                  <div class="col-lg-9">
                  <form id="myForm" data-toggle="validator" action="{{route('frontend.post.message')}}" method="POST">
                      <div class="row">
                        {{csrf_field()}}
                        <div class="col-md-6 form-group g-mb-20">
                          <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover rounded-3 g-py-13 g-px-15" type="text" name="name" placeholder="Name" required>
                        </div>
          
                        <div class="col-md-6 form-group g-mb-20">
                          <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover rounded-3 g-py-13 g-px-15" type="email" name="email" placeholder="Email" required>
                        </div>
          
                        <div class="col-md-6 form-group g-mb-20">
                          <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover rounded-3 g-py-13 g-px-15" type="text" name="subject" placeholder="Subject" required>
                        </div>
          
                        <div class="col-md-6 form-group g-mb-20">
                          <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover rounded-3 g-py-13 g-px-15" type="tel" name="phone" placeholder="Phone" required>
                        </div>
          
                        <div class="col-md-12 form-group g-mb-40">
                          <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v3 g-brd-primary--hover g-resize-none rounded-3 g-py-13 g-px-15" name="message" rows="7" placeholder="Message" required></textarea>
                        </div>
                      </div>
          
                      <div class="text-center">
                        <button class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase g-rounded-25 g-py-15 g-px-30" type="submit" role="button">Send Message</button>
                      </div>
                    </form>
                  </div>
                </div>
              </section>
              <!-- End Contact Form -->
          
              <!-- Google Map -->
              {{-- <div id="GMapCustomized-light" class="js-g-map embed-responsive embed-responsive-21by9 g-height-400" data-type="custom" data-lat="40.674" data-lng="-73.946" data-zoom="12" data-title="Agency" data-styles='[["", "", [{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]], ["", "labels", [{"visibility":"on"}]], ["water", "", [{"color":"#bac6cb"}]] ]'
              data-pin="true" data-pin-icon="../../assets/img/icons/pin/green.png">
              </div> --}}
              <!-- End Google Map -->
@endsection

