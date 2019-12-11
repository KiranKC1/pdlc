@extends('frontend.layouts.frontend')
@section('title', 'Search')
@section('body')
<!-- Page Title -->
<section class="dzsparallaxer auto-init height-is-based-on-content use-loading" data-options='{direction: "reverse", settings_mode_oneelement_max_offset: "150"}'>
    <!-- Parallax Image -->
    <div class="divimage dzsparallaxer--target w-100 g-bg-cover g-bg-white-gradient-opacity-v3--after" style="height: 140%; background-image: url({{asset('assets/img/bg/pattern6--gray.png')}});"></div>
    <!-- End Parallax Image -->

    <div class="container text-center g-py-100--md g-py-80">
      <h2 class="h1 text-uppercase g-font-weight-300 g-mb-30">Search Results</h2>

      <!-- Search Form -->
      <form action="{{route('frontend.search')}}" method="GET" class="g-width-60x--md mx-auto">
        <div class="form-group g-mb-20">
          <div class="input-group u-shadow-v21 rounded g-mb-15">
            <input name="query" class="form-control form-control-md g-brd-white g-font-size-16 border-right-0 pr-0 g-py-15" type="text" placeholder="Search for products">
            <div class="input-group-addon d-flex align-items-center g-bg-white g-brd-white g-color-gray-light-v1 g-pa-2">
              <button class="btn u-btn-primary g-font-size-16 g-py-15 g-px-20" type="submit">
                <i class="icon-magnifier g-pos-rel g-top-1"></i>
              </button>
            </div>
          </div>
          <small class="form-text g-opacity-0_8 g-font-size-default">Search any words and so on here.</small>
        </div>
      </form>
      <!-- End Search Form -->
    </div>
  </section>
  <!-- Page Title -->
<section class="g-pt-50 g-pb-90">
        <div class="container">
          <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 g-pr-40--lg g-mb-50 g-mb-0--lg">
              <!-- Categories -->
              <h2 class="h5 text-uppercase g-color-gray-dark-v1">Categories</h2>
              <hr class="g-brd-gray-light-v4 g-my-15">
              <ul class="list-unstyled g-mb-40">
                <li class="my-3">
                <a class="d-flex justify-content-between u-link-v5 g-color-gray-dark-v1 g-parent" href="{{route('frontend.all_categories')}}">
                      All Products <span class="d-inline-block g-font-size-12 g-min-width-40 g-brd-around g-color-gray-dark-v5 g-brd-gray-light-v3 text-center rounded g-px-10 g-py-3">{{count($all_products_count)}}</span>
                    </a>
                </li>
                @foreach($categories as $c)
                <li class="my-3">
                <a class="d-flex justify-content-between u-link-v5 g-color-gray-dark-v1 g-parent" href="{{route('frontend.categories',$c->slug)}}">
                        {{$c->title}}<span class="d-inline-block g-font-size-12 g-min-width-40 g-brd-around g-color-gray-dark-v5 g-brd-gray-light-v3 text-center rounded g-px-10 g-py-3">{{$c->products_count}}</span>
                          </a>
                </li>
                @endforeach
                
              </ul>
              <!-- End Categories -->  
            </div>
            <!-- End Sidebar -->
  
            <!-- Search Results -->
            <div class="col-lg-9">
              <!-- Search Info -->
              <div class="d-md-flex justify-content-between g-mb-30">
              <h3 class="h6 text-uppercase g-mb-10 g-mb--lg">About <span class="g-color-gray-dark-v1">{{count($products)}}</span> results</h3>
              </div>
              <!-- End Search Info -->
  
              <div class="row">
                  @if(count($products) != null)
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
                            <a class="d-inline-block g-color-gray-dark-v5 g-font-size-13" data-toggle="tooltip" data-placement="top" title="" data-original-title="{{$p->category_title}}" href="{{route('frontend.categories',$p->category_slug)}}">{{$p->category_title}}</a>
                            </div>
                            <!-- End Product Info -->
                            <ul class="list-inline media-body text-right">
                                    <li class="list-inline-item align-middle mx-0">
                                      <a class="u-icon-v1 u-icon-size--sm g-color-gray-dark-v5 g-color-primary--hover g-font-size-12 rounded-circle" href="{{route('frontend.search',$p->slug)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Make Enquiry about product">
                                            <i class="fa fa-envelope"></i>
                                      </a>
                                    </li>
                            </ul>
                        </div>
                        <!-- End Product -->
                    </div>
                @endforeach
                @else
                <div class="container">
                        <div class="g-mt-30">
                        <h3>No products found for "{{$query}}"</h3>
                        </div>
                    </div>
                @endif
              </div>
        
            </div>
            <!-- End Search Results -->
          </div>
        </div>
      </section>

@endsection