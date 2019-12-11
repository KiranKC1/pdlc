@extends('frontend.layouts.frontend')
@section('title', 'Home')
@section('body')
<section class="g-bg-gray-light-v5 g-py-50 g-mb-50" style="background-image: url({{asset('assets/img/bg/pattern6--gray.png')}});">
    <div class="container">
      <div class="d-sm-flex text-center">
        <div class="align-self-center">
          <h2 class="h3 g-font-weight-300 w-100 g-mb-10 g-mb-0--md">All Products</h2>
        </div>
  
        <div class="align-self-center ml-auto">
          <ul class="u-list-inline">
            <li class="list-inline-item g-mr-5">
            <a class="u-link-v5 g-color-main" href="{{URL::to('/')}}">Home</a>
              <i class="g-color-gray-light-v2 g-ml-5">/</i>
            </li>
            <li class="list-inline-item g-color-primary">
            <span>All Products</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>


    <div class="container">
        <div class="row">
            <!-- Filters -->
            <div class="col-lg-3 g-mb-30">
                    <h3 class="h4 mb-3">Filter Products</h3>
                <!-- Links -->
                <ul class="list-unstyled g-hidden-md-down mb-5">
                  <li class="my-1">
                    <a class="active d-block u-link-v5 g-brd-left g-brd-3 g-brd-transparent g-brd-primary--hover g-brd-primary--active g-color-main g-color-primary--hover g-color-primary--active g-bg-secondary g-font-weight-600 g-px-20 g-pl-25--hover g-pl-25--active g-py-12" href="{{route('frontend.all_categories')}}">
                        All Products
                    </a>
                  
                  </li>
                  @foreach($categories as $c)
                  <li class="my-1">
                    <a class="d-block u-link-v5 g-brd-left g-brd-3 g-brd-transparent g-brd-primary--hover g-brd-primary--active g-color-main g-color-primary--hover g-color-primary--active g-bg-secondary g-font-weight-600 g-px-20 g-pl-25--hover g-pl-25--active g-py-12" href="{{route('frontend.categories',$c->slug)}}">
                        {{$c->title}}
                    </a>
                    
                  </li>
                  @endforeach
                </ul>
              </div>
            <!-- Content -->
            <div class="col-md-9 order-md-2">
                <div class="g-pl-15--lg">
                    <h3 class="h4 mb-3">All Products </h3>
                    <!-- Products -->
                    <div class="row g-pt-30 g-mb-50">
                        @foreach($products as $p)
                            <?php
                            $image = json_decode($p->images);
                            ?>
                            <div class="col-6 col-lg-4 g-mb-30">
                                <!-- Product -->
                                <figure class="g-pos-rel g-mb-20">
                                    <img class="img-fluid" src="{{asset('storage'.'/'.$image[0])}}" alt="{{$p->title}}">
                                <a href="{{route('frontend.products',$p->slug)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View {{$p->title}}"class="w-100 g-text-underline--none--hover g-bg-primary g-bg-black-opacity-0_3--hover text-center g-pos-abs g-bottom-0 g-transition-0_2 g-py-5">
                                        <span class="g-color-white g-font-size-11 text-uppercase g-letter-spacing-1 g-text-underline--none--hover" >View Product</a>
                                        </a>
                                </figure>

                                <div class="media">
                                    <!-- Product Info -->
                                    <div class="d-flex flex-column  ">
                                        <h4 class="h6 g-color-black mb-1">
                                        <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{$p->title}}">
                                                {{str_limit($p->title,35)}}
                                            </a>
                                        </h4>
                                    <a data-toggle="tooltip" data-placement="top" title="" data-original-title="{{$p->category_title}}" class="d-inline-block g-color-gray-dark-v5 g-font-size-13" href="{{route('frontend.categories',$p->category_slug)}}">{{$p->category_title}}</a>
                                    </div>
                                    <!-- End Product Info -->
                                    <ul class="list-inline media-body text-right">
                                            <li class="list-inline-item align-middle mx-0">
                                            <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle" href="{{route('frontend.enquiry',$p->slug)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Make Enquiry about product">
                                                    <i class="fa fa-envelope"></i>
                                              </a>
                                            </li>
                                    </ul>
                                </div>
                                <!-- End Product -->
                            </div>
                        @endforeach
                    </div>
                    <!-- End Products -->
                </div>
            </div>
            <!-- End Content -->


        </div>
    </div>
@endsection