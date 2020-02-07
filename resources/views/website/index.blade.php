@extends('website.layouts.master')
@section('title', 'Home')
@section('content')

    <!-- =========================
        Slider Section
    ============================== -->
    <section id="main-slider-section">
    	<div id="main-slider" class="slider-bg1 owl-carousel owl-theme product-review">
			<div class="item slider-bg d-flex align-items-center">
				
                <div class="container">
                    <div class="row no-gutters">
                        <div class="slider-text fadeInUp animated order-2 order-sm-1  col-sm-6 col-md-7">
                            <h1 class="slider-title">Find the Most Appropriate Solution & Pick Your <span class="strong">Best One</span>.</h1>
                            <p class="slider-content">Let Us Do All the Research, Analysis , Categorization & Reviewal.</p>
                        </div>
                        <div class="col-sm-6 col-md-5 order-1 order-sm-2 slider-img fadeInDown animated">
                            <img src="{{ asset('frontend/img/forex_trading.png') }}" alt="">
                        </div>
                    </div>
                </div>
			</div>
           
    	</div>
    </section>


    <section id="product-amazon" class="product-shop-page product-shop-full-grid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12 product-grid">
                    <div class="row">

                        @foreach($reviews as $key => $review)
                        <div class="col-12 col-sm-12 col-lg-12 reviews-load-more-full_grid">
                            <figure class="figure product-box row">
                                <figcaption></figcaption>
                                <div class="col-12 col-md-5 col-lg-4 col-xl-4 p0">
                                    <div class="product-box-img">
                                        <a href="{{ $review->ref_link }}" target="_blank">
                                            <img src="{{ asset('uploads/review/'.$review->thumb_path) }}" class="figure-img img-fluid mx-auto d-block" alt="Product Img">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-md-7 col-lg-8 col-xl-8 p0">
                                    <div class="figure-caption text-left">
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-lg-6 col-xl-6 pr-0">
                                                <a href="{{ $review->ref_link }}" target="_blank" class="price-start">
                                                    <strong class="active-color"><h3>{{ $key+1 }}. {{ $review->title }}</h3></strong>
                                                </a>
                                            </div>
                                            <div class="col-6 col-md-6 col-lg-3 col-xl-3">
                                                <div class="rating">
                                                    @if($review->rating >= 1)
                                                    <i class="fa fa-star active-color" aria-hidden="true"></i>
                                                    @endif
                                                    @if($review->rating >= 2)
                                                    <i class="fa fa-star active-color" aria-hidden="true"></i>
                                                    @endif
                                                    @if($review->rating >= 3)
                                                    <i class="fa fa-star active-color" aria-hidden="true"></i>
                                                    @endif
                                                    @if($review->rating >= 4)
                                                    <i class="fa fa-star active-color" aria-hidden="true"></i>
                                                    @endif
                                                    @if($review->rating >= 5)
                                                    <i class="fa fa-star active-color" aria-hidden="true"></i>
                                                    @endif

                                                    @if($review->rating >= 0.1 && $review->rating <= 0.9)
                                                    <i class="fa fa-star-half-o active-color" aria-hidden="true"></i>
                                                    @endif
                                                    @if($review->rating >= 1.1 && $review->rating <= 1.9)
                                                    <i class="fa fa-star-half-o active-color" aria-hidden="true"></i>
                                                    @endif
                                                    @if($review->rating >= 2.1 && $review->rating <= 2.9)
                                                    <i class="fa fa-star-half-o active-color" aria-hidden="true"></i>
                                                    @endif
                                                    @if($review->rating >= 3.1 && $review->rating <= 3.9)
                                                    <i class="fa fa-star-half-o active-color" aria-hidden="true"></i>
                                                    @endif
                                                    @if($review->rating >= 4.1 && $review->rating <= 4.9)
                                                    <i class="fa fa-star-half-o active-color" aria-hidden="true"></i>
                                                    @endif

                                                    @if($review->rating <= 0)
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    @endif
                                                    @if($review->rating <= 1)
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    @endif
                                                    @if($review->rating <= 2)
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    @endif
                                                    @if($review->rating <= 3)
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    @endif
                                                    @if($review->rating <= 4)
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-6 col-lg-3 col-xl-3">
                                                <div class="compare-btn">
                                                    <a class="btn btn-primary btn-sm" href="{{ $review->ref_link }}" target="_blank"><i class="fa fa-rocket" aria-hidden="true"></i> Explore Features</a>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12 col-lg-12">
                                                <div class="content-excerpt">
                                                    <p class="product-content">{!! $review->short_desc !!}</p>

                                                    <div class="raed-more">
                                                        <a class="btn btn-link" href="{{ $review->ref_link }}">
                                                            Read Full Review <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 review-our-product-area">
                                    <div class="row">
                                        <div class="col-12 col-md-4">
                                            <div class="client-review-list">
                                                <div class="media">
                                                  <div class="media-left media-middle">
                                                    <span class="badge badge-secondary wd-star-market-badge text-uppercase"><i class="fa fa-star-o" aria-hidden="true"></i></span>
                                                  </div>
                                                  <div class="media-body">
                                                    <h6 class="media-heading">Key Features</h6>
                                                  </div>
                                                </div>
                                                <ul class="check-list icon-orange">
                                                    {!! $review->key_features !!}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="client-review-list">
                                                <div class="media">
                                                  <div class="media-left media-middle">
                                                    <img class="media-object" src="{{ asset('frontend/img/client/client-list-icon-1.png') }}" alt="client-img">
                                                  </div>
                                                  <div class="media-body">
                                                    <h6 class="media-heading">Pros</h6>
                                                  </div>
                                                </div>
                                                <ul class="check-list">
                                                    {!! $review->pros !!}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="client-review-list">
                                                <div class="media">
                                                  <div class="media-left media-middle">
                                                    <img class="media-object" src="{{ asset('frontend/img/client/client-list-icon-2.png') }}" alt="client-img">
                                                  </div>
                                                  <div class="media-body">
                                                    <h6 class="media-heading">Cons</h6>
                                                  </div>
                                                </div>
                                                <ul class="check-list icon-red">
                                                    {!! $review->cons !!}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection