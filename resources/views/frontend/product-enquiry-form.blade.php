@extends('frontend.layouts.frontend')
@section('title','Contact Us')
@section('body')

<?php
    $images  = json_decode($product->images);
?>
<section class="g-bg-gray-light-v5 g-py-50 g-mb-50" style="background-image: url({{asset('assets/img/bg/pattern6--gray.png')}});">
    <div class="container">
      <div class="d-sm-flex text-center">
        <div class="align-self-center">
          <h2 class="h3 g-font-weight-300 w-100 g-mb-10 g-mb-0--md">{{$product->title}}</h2>
        </div>
  
        <div class="align-self-center ml-auto">
          <ul class="u-list-inline">
            <li class="list-inline-item g-mr-5">
            <a class="u-link-v5 g-color-main" href="{{URL::to('/')}}">Home</a>
              <i class="g-color-gray-light-v2 g-ml-5">/</i>
            </li>
            <li class="list-inline-item g-mr-5">
            <a class="u-link-v5 g-color-main" href="{{URL::to('allcategories')}}">Categories</a>
              <i class="g-color-gray-light-v2 g-ml-5">/</i>
            </li>
            <li class="list-inline-item g-mr-5">
            <a class="u-link-v5 g-color-main" href="{{URL::to('categories'.'/'.$product->category_slug)}}">{{$product->category_title}}</a>
                      <i class="g-color-gray-light-v2 g-ml-5">/</i>
            </li>
            <li class="list-inline-item g-mr-5">
                    <a class="u-link-v5 g-color-main" href="{{URL::to('product'.'/'.$product->slug)}}">{{$product->title}}</a>
                              <i class="g-color-gray-light-v2 g-ml-5">/</i>
                    </li>
            <li class="list-inline-item g-color-primary">
            <span>{{$product->title}} Enquiry</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
<div class="container">
<form action="{{route('frontend.post_enquiry')}}" method="POST" class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30">
                <input type="hidden" name="_token" value="vPFUtuhoN0d93oey9VPQqxIIkRLw7uSQmNIDLFDs">
                <h3 class="g-mb-15">Product Information</h3>
                <p>Note *: Make sure you provide us with correct information details.</p>
                <hr class="g-brd-gray-light-v4 g-mx-minus-30">
                <div class="row">
                  {{csrf_field()}}
                        <div class="text-center">
                                <table class="text-center g-width-900 g-color-gray-dark-v4">
                                  <thead class="g-color-gray-dark-v5 g-font-weight-700 g-font-size-16 text-uppercase">
                                    <tr>
                                      <th class="g-pb-20">Product</th>
                                      <th class="g-width-250 g-pb-20">Qty</th>
                                    </tr>
                                  </thead>
                              
                                  <tbody>
                                    <tr class="g-bg-secondary">
                                      <td class="text-left g-pa-15">
                                        <!-- Table Image -->
                                      <img class="d-inline-block g-brd-gray-light-v4 g-brd-around g-width-120 g-mr-15" src="{{asset('storage'.'/'.$images[0])}}"" alt="{{$product->title}}">
                                        <!-- End Table Image -->
                              
                                        <!-- Table Info -->
                                        <div class="d-inline-block align-middle">
                                        <h4 class="h6 g-color-black g-font-weight-700 text-uppercase">{{$product->title}}</h4>
                                    
                                        </div>
                                        <!-- End Table Info -->
                                      </td>
                                      <td>
                                        <!-- Table Input -->
                                        <div class="d-inline-block">
                                          <div class="js-quantity input-group u-quantity-v1 g-width-150 g-height-45 g-brd-gray-light-v4 g-brd-primary--focus">
                                            <div class="js-minus input-group-addon d-flex g-font-size-15 g-width-45 g-color-gray-dark-v4 g-bg-gray-light-v4 g-brd-gray-light-v4 g-rounded-0">
                                              −
                                            </div>
                                            <input class="js-result form-control text-center g-brd-gray-light-v4 g-color-gray-dark-v4 g-rounded-0 g-pa-15" name="product_quantity" type="text" value="1" readonly="">
                                            <div class="js-plus input-group-addon d-flex g-font-size-15 g-width-45 g-color-gray-dark-v4 g-bg-gray-light-v4 g-brd-gray-light-v4 g-rounded-0">
                                              +
                                            </div>
                                          </div>
                                        </div>
                                        <!-- End Table Input -->
                                      </td>
                              
            
                                  </tbody>
                                </table>
                              </div>
                </div>
                <hr class="g-brd-gray-light-v4 g-mx-minus-30">
                        <h3 class="g-mb-15">Your Information</h3>
                        <p>Please enter your correct information details.</p>
                        <hr class="g-brd-gray-light-v4 g-mx-minus-30">
                        <div class="form-group g-mb-20">
                                <label class="g-mb-10" for="inputGroup1_1"><h3>Name*</h3></label>
                                <input required id="inputGroup1_1" class="form-control form-control-md rounded-0" name="name" type="text" placeholder="Enter first name">
                                
                        </div>
                        <div class="form-group g-mb-20">
                                <label class="g-mb-10" for="inputGroup1_1"><h3>Your Email</h3></label>
                                <input required id="inputGroup1_1" class="form-control form-control-md rounded-0" name="email" type="email" placeholder="Enter email">
                                <small class="form-text text-muted g-font-size-default g-mt-10">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group g-mb-20">
                                <label class="g-mb-10" for="inputGroup1_1"><h3>Phone*</h3></label>
                                <input required id="inputGroup1_1" class="form-control form-control-md rounded-0" type="text" placeholder="Enter a reachable phone number..." name="phone">
                                <small class="form-text text-muted g-font-size-default g-mt-10">We'll never share your number with anyone else.</small>
                        </div>
                        <div class="form-group g-mb-20">
                                <label class="g-mb-10" for="inputGroup2_2"><h3>Message*</h3></label>
                                <textarea required id="inputGroup2_2" name="message" class="form-control form-control-md rounded-0" rows="7" placeholder="Please enter your enquiry about the product here"></textarea>
                        </div>
                        <input type="hidden" name="product_title" value="{{$product->title}}"/>
                      <input type="hidden" name="product_image" value="{{$images[0]}}"/>
                        <div class="form-group g-mb-20">
                                <input type="submit" class="btn btn-md btn-primary" id="submit">
                        </div>
                </form>
            
        </div>
@endsection
@section('scripts')
    <script  src="{{asset('assets/js/components/hs.count-qty.js')}}"></script>

<!-- JS Plugins Init. -->
<script >
  $(document).on('ready', function () {
      // initialization of forms
      $.HSCore.components.HSCountQty.init('.js-quantity');
    });
</script>

@endsection