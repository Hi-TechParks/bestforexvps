@extends('website.layouts.master')
@section('title', 'Home')
@section('content')

    <!-- =========================
        Product Details Section
    ============================== -->
    <section class="product-details">
    	<div class="container">
    		<div class="row">
                <div class="col-12 col-sm-12 col-lg-12 reviews-load-more-full_grid">
                    <figure class="figure product-box row">
                        <figcaption></figcaption>
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12 p0">
                            <div class="figure-caption text-left">
                                <div class="row mb-20">
                                    <div class="col-12 col-md-4 col-lg-4 col-xl-4 pr-0">
                                        <a href="{{ $review->ref_link }}" target="_blank" class="price-start">
                                            <strong class="active-color"><h3>{{ $review->title }} Review</h3></strong>
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
                                            <a class="btn btn-primary btn-sm" href="{{ $review->ref_link }}" target="_blank"><i class="fa fa-rocket" aria-hidden="true"></i> Visit Site</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-12">
                                        <div class="content-excerpt">
                                            <p class="product-content">{!! $review->sub_title !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>

        <div class="container">
			<div class="row">
				<div class="col-12">
				<div class="wd-tab-section">
					<div class="bd-example bd-example-tabs">
					  <ul class="nav nav-pills mb-3 wd-tab-menu" id="pills-tab" role="tablist">
					    <li class="nav-item col-6 col-md">
					      <a class="nav-link active" id="description-tab" data-toggle="pill" href="#description-section" role="tab" aria-controls="description-section" aria-expanded="true">Description</a>
					    </li>
					    <li class="nav-item col-6 col-md">
					      <a class="nav-link" id="full-specifiction-tab" data-toggle="pill" href="#full-specifiction" role="tab" aria-controls="full-specifiction" aria-expanded="false">Ful Specifiction</a>
					    </li>
					    <li class="nav-item col-6 col-md">
					      <a class="nav-link" id="reviews-tab" data-toggle="pill" href="#reviews" role="tab" aria-controls="reviews" aria-expanded="false">Reviews</a>
					    </li>
					    <li class="nav-item col-6 col-md">
					      <a class="nav-link" id="price-history-tab" data-toggle="pill" href="#price-history" role="tab" aria-controls="price-history" aria-expanded="false">Pricing</a>
					    </li>
					  </ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade active show " id="description-section" role="tabpanel" aria-labelledby="description-tab" aria-expanded="true">
								<div class="product-tab-content">
									
									{!! $review->description !!}
                                    
								</div>
                                
							</div>
							<div class="tab-pane fade" id="full-specifiction">
								<h6>Full Specifiction</h6>
								<p class="wd-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores id assumenda, ex ab voluptatem doloremque soluta magnam eum nihil iusto maiores! Libero nisi maior</p>

								<ul class="list-group wd-info-section">
									<li class="list-group-item d-flex justify-content-between align-items-center p0">
										<div class="col-12 col-md-6 info-section">
											<p>Brand Name : Asus</p>
										</div>
										<div class="col-12 col-md-5 info-section">
											<p>Release Date : 2018</p>
										</div>
										<div class="col-1"></div>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center p0">
										<div class="col-12 col-md-6 info-section">
											<p>Google Play: Yes</p>
										</div>
										<div class="col-12 col-md-5 info-section">
											<p>Unlock Phones: Yes</p>
										</div>
										<div class="col-1"></div>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center p0">
										<div class="col-12 col-md-6 info-section">
											<p>Talk Time: 4-6h</p>
										</div>
										<div class="col-12 col-md-5 info-section">
											<p>Battery Type: Not Detachable</p>
										</div>
										<div class="col-1"></div>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center p0">
										<div class="col-12 col-md-6 info-section">
											<p>Size: 154.6x75.2x8.35mm</p>
										</div>
										<div class="col-12 col-md-5 info-section">
											<p>Display Resolution: 1920x1080</p>
										</div>
										<div class="col-1"></div>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center p0">
										<div class="col-12 col-md-6 info-section">
											<p>Feature: Gravity Response,MP3 Playback,Touchscreen,GPS</p>
										</div>
										<div class="col-12 col-md-5 info-section">
											<p>Battery Capacity(mAh): 4000mAh</p>
										</div>
										<div class="col-1"></div>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center p0">
										<div class="col-12 col-md-6 info-section">
											<p>Feature: Gravity Response,MP3 Playback,Touchscreen,GPS</p>
										</div>
										<div class="col-12 col-md-5 info-section">
											<p>CPU Manufacturer: Qualcomm</p>
										</div>
										<div class="col-1"></div>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center p0">
										<div class="col-12 col-md-6 info-section">
											<p>Feature: Gravity Response,MP3 Playback,Touchscreen,GPS</p>
										</div>
										<div class="col-12 col-md-5 info-section">
											<p>CPU: Octa Core</p>
										</div>
										<div class="col-1"></div>

									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center p0">
										<div class="col-12 col-md-6 info-section">
											<p>ROM: 16G</p>
										</div>
										<div class="col-12 col-md-5 info-section">
											<p>SlotsDesign: Bar</p>
										</div>
										<div class="col-1"></div>
									</li>
								</ul>
							</div>
							<div class="tab-pane fadereviews-section" id="reviews">
								<div class="row">
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
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
    	</div>
    </section>

@endsection