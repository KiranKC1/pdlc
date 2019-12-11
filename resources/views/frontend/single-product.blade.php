@extends('frontend.layouts.frontend')
@section('title','Product')
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
            <li class="list-inline-item g-color-primary">
            <span>{{$product->title}}</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
    <div class="container g-mb-20">
    <div class="row">
        <div class="col-lg-7">
            <!-- Carousel -->
            
            <div id="carousel1" class="js-carousel g-pt-10 g-mb-10" data-infinite="true" data-fade="true" data-arrows-classes="u-arrow-v1 g-brd-around g-brd-white g-absolute-centered--y g-width-45 g-height-45 g-font-size-14 g-color-white g-color-primary--hover rounded-circle" data-arrow-left-classes="fa fa-angle-left g-left-40" data-arrow-right-classes="fa fa-angle-right g-right-40" data-nav-for="#carousel2">
                @foreach($images as $i)
                <div class="js-slide g-bg-cover g-bg-black-opacity-0_1--after">
                <img class="img-fluid w-100" src="{{asset('storage'.'/'.$i)}}" alt="{{$product->title}}">
                </div>
                @endforeach
            </div>
            
            @if(count($images) >1)
            <div id="carousel2" class="js-carousel text-center u-carousel-v3 g-mx-minus-5 g-mb-10" data-infinite="true" data-center-mode="true" data-slides-show="3" data-is-thumbs="true" data-nav-for="#carousel1">
                @foreach($images as $i)
                <div class="js-slide g-cursor-pointer g-px-5">
                    <img class="img-fluid" src="{{asset('storage'.'/'.$i)}}" alt="{{$product->title}}">
                </div>
                @endforeach
            </div>
            @endif
        
            <!-- End Carousel -->
        </div>

        <div class="col-lg-5">
            <div class="g-px-40--lg g-py-70">
                <!-- Product Info -->
                <div class="g-mb-30">
                    <h1 class="g-font-weight-300 mb-4">
                        {{$product->title}}
                    </h1>
                    <p>{{$product->small_description}}</p>
                </div>
                <!-- End Product Info -->

                <!-- Accordion -->
                <div id="accordion-01" role="tablist" aria-multiselectable="true">
                    <div id="accordion-01-heading-01" class="g-brd-y g-brd-gray-light-v3 py-3" role="tab">
                        <h5 class="g-font-weight-400 g-font-size-default mb-0">
                            <a class="d-block g-color-gray-dark-v5 g-text-underline--none--hover" href="#accordion-01-body-01" data-toggle="collapse" data-parent="#accordion-01" aria-expanded="false" aria-controls="accordion-01-body-01">Details
                                <span class="float-right g-pos-rel g-top-3 mr-1 fa fa-angle-down"></span>
                            </a>
                        </h5>
                    </div>
                    <div id="accordion-01-body-01" class="collapse" role="tabpanel" aria-labelledby="accordion-01-heading-01">
                        <div class="g-py-10">
                            {!! $product->description !!}
                        </div>
                    </div>
                </div>
                <!-- End Accordion -->
                <!-- Buttons -->
                <div class="row g-mx-minus-5 g-mb-20">
                    <div class="col g-px-5 g-mb-10">
                        <button id="submit_enquiry" link={{route('frontend.enquiry',$product->slug)}} class="btn btn-block u-btn-primary g-font-size-12 text-uppercase g-py-15 g-px-25" type="button">
                            Make an enquiry
                            <i class="align-middle ml-2 fa fa-envelope-o"></i>
                        </button>
                    </div>
                </div>
                <!-- End Buttons -->

                <!-- End Nav Tabs -->

            </div>
        </div>
    </div>
    </div>
    <!-- End Product Description -->
@endsection
@section('scripts')
<script>
$(document).ready(function(){
    $('#submit_enquiry').click(function(){
        var link = $(this).attr("link");
        window.location = link;
    });
});
</script>
@endsection