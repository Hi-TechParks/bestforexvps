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
                                            <div class="col-12 col-md-4 col-lg-4 col-xl-4 pr-0">
                                                <a href="{{ $review->ref_link }}" target="_blank" class="price-start">
                                                    <strong class="active-color"><h3>{{ $key+1 }}. {{ $review->title }}</h3></strong>
                                                </a>
                                            </div>
                                            <div class="col-12 col-md-4 col-lg-4 col-xl-4">
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
                                            <div class="col-12 col-md-4 col-lg-4 col-xl-4">
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
                                        <div class="col-6 col-md-4">
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
                                        <div class="col-6 col-md-4">
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

                        {{-- <div class="col-12 col-sm-6 col-lg-12 reviews-load-more-full_grid">
                            <figure class="figure product-box row">
                                <figcaption></figcaption>
                                <div class="col-12 col-md-12 col-lg-5 col-xl-4 p0">
                                    <div class="product-box-img">
                                        <a href="product-details.html">
                                            <img src="{{ asset('frontend/img/shop-img/shop-img-2.jpg') }}" class="figure-img img-fluid" alt="Product Img">
                                        </a>
                                    </div>
                                    <div class="quick-view-btn">
                                        <div class="compare-btn">
                                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg-product-1"><i class="fa fa-eye" aria-hidden="true"></i> Quick view</button>
                                        </div>
                                    </div>
                                        <span class="badge badge-secondary wd-badge text-uppercase">New</span>
                                        <div class="wishlist">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-7 col-xl-8 p0">
                                    <div class="figure-caption text-left">
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-lg-6 col-xl-4 pr-0">
                                                <div class="price-start">
                                                    <strong class="active-color"><u>$80.00</u> - <u>$75.00</u></strong>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12 col-lg-6">
                                                <div class="rating">
                                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                    <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="content-excerpt">
                                                    <h6 class="product-title">Bose QuietControl 30 Wireless <br> Headphones</h6>
                                                    <p class="product-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veni</p>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="compare-btn">
                                                    <a class="btn btn-primary btn-sm" href="#"><i class="fa fa-exchange" aria-hidden="true"></i> Add to compare</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 review-our-product-area">
                                    <div class="row">
                                        <div class="col-12"></div>
                                        <div class="col-6 col-md-4">
                                            <div class="rating-market-section">
                                                <span class="badge badge-secondary wd-star-market-badge text-uppercase">4.5 <i class="fa fa-star-o" aria-hidden="true"></i></span>
                                                <div class="rating-star">
                                                    <div class="review-rating-light-yellow-5"></div><span class="rating-number">5</span>
                                                </div>
                                                <div class="rating-star">
                                                    <div class="review-rating-light-yellow-4"></div><span class="rating-number">4</span>
                                                </div>
                                                <div class="rating-star">
                                                    <div class="review-rating-light-yellow-3"></div><span class="rating-number">3</span>
                                                </div>
                                                <div class="rating-star">
                                                    <div class="review-rating-light-yellow-2"></div><span class="rating-number">2</span>
                                                </div>
                                                <div class="rating-star">
                                                    <div class="review-rating-light-yellow-1"></div><span class="rating-number">3</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="client-review-list">
                                                <div class="media">
                                                  <div class="media-left media-middle">
                                                    <a href="#">
                                                      <img class="media-object" src="{{ asset('frontend/img/client/client-list-icon-1.png') }}" alt="client-img">
                                                    </a>
                                                  </div>
                                                  <div class="media-body">
                                                    <h6 class="media-heading">Prons</h6>
                                                  </div>
                                                </div>
                                                <ul class="check-list">
                                                    <li><i class="fa fa-check" aria-hidden="true"></i> All</li>
                                                    <li><i class="fa fa-check" aria-hidden="true"></i> Design</li>
                                                    <li><i class="fa fa-check" aria-hidden="true"></i> Developing</li>
                                                    <li><i class="fa fa-check" aria-hidden="true"></i> Metalic</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="client-review-list">
                                                <div class="media">
                                                  <div class="media-left media-middle">
                                                    <a href="#">
                                                      <img class="media-object" src="{{ asset('frontend/img/client/client-list-icon-2.png') }}" alt="client-img">
                                                    </a>
                                                  </div>
                                                  <div class="media-body">
                                                    <h6 class="media-heading">Prons</h6>
                                                  </div>
                                                </div>
                                                <ul class="check-list icon-red">
                                                    <li><i class="fa fa-check" aria-hidden="true"></i> All</li>
                                                    <li><i class="fa fa-check" aria-hidden="true"></i> Design</li>
                                                    <li><i class="fa fa-check" aria-hidden="true"></i> Developing</li>
                                                    <li><i class="fa fa-check" aria-hidden="true"></i> Metalic</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- =========================
        Blog Section
    ============================== -->
    {{-- <section id="blog">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="section-title-center text-center">
    					<h2 class="title">Weekly Top News</h2>
    				</div>
    			</div>
    			<div class="col-md-4">
					<figure class="figure blog-box wow fadeInUp animated" data-wow-delay="300ms">
						<img src="{{ asset('frontend/img/blog/blog-img-1.jpg') }}" class="figure-img img-fluid" alt="blog-img">
						<figcaption class="figure-caption">
						<div class="mata-info">
							<ul>
								<li>
									<a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 115</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 59</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-share-alt-square" aria-hidden="true"></i> 20</a>
								</li>
							</ul>
						</div>
							<a class="blog-title" href="single-blog-with.html">
								Market top 10 trending product list from
							</a>
							<div class="blog-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ab ratione quibusdam, distinctio numquam. Eligendi recusandae qu.
							</div>
							<div class="raed-more">
								<a class="btn btn-link" href="single-blog-with.html">
									READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i>
								</a>
							</div>
						</figcaption>
					</figure>
    			</div>
    			<div class="col-md-4">
					<figure class="figure blog-box wow fadeInUp animated" data-wow-delay="600ms">
						<img src="{{ asset('frontend/img/blog/blog-img-2.jpg') }}" class="figure-img img-fluid" alt="blog-img">
						<figcaption class="figure-caption">
						<div class="mata-info">
							<ul>
								<li>
									<a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 115</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 59</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-share-alt-square" aria-hidden="true"></i> 20</a>
								</li>
							</ul>
						</div>
							<a class="blog-title" href="single-blog-with.html">
								Why laptop going hyper on hybernating option based
							</a>
							<div class="blog-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ab ratione quibusdam, distinctio numquam. Eligendi recusandae qu.
							</div>
							<div class="raed-more">
								<a class="btn btn-link" href="single-blog-with.html">
									READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i>
								</a>
							</div>
						</figcaption>
					</figure>
    			</div>
    			<div class="col-md-4">
					<figure class="figure blog-box wow fadeInUp animated" data-wow-delay="900ms">
						<img src="{{ asset('frontend/img/blog/blog-img-3.jpg') }}" class="figure-img img-fluid" alt="blog-img">
						<figcaption class="figure-caption">
						<div class="mata-info">
							<ul>
								<li>
									<a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> 115</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-commenting" aria-hidden="true"></i> 59</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-share-alt-square" aria-hidden="true"></i> 20</a>
								</li>
							</ul>
						</div>
							<a class="blog-title" href="single-blog-with.html">
								Preview option changed on this mobile list view
							</a>
							<div class="blog-content">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem ab ratione quibusdam, distinctio numquam. Eligendi recusandae qu.
							</div>
							<div class="raed-more">
								<a class="btn btn-link" href="single-blog-with.html">
									READ MORE <i class="fa fa-angle-right" aria-hidden="true"></i>
								</a>
							</div>
						</figcaption>
					</figure>
    			</div>
    		</div>
    	</div>
    </section> --}}

@endsection