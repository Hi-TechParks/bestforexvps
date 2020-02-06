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
                                            <strong class="active-color"><h3>{{ $review->title }}</h3></strong>
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
									
									<!--Widget for advertisement -->
									

                                    <div class="row justify-content-center">
                                        <div class="col-xl-12">
                                            <div class="user-rev-rating">
                                                <div class="urr-head">
                                                    <h6>User ratings and review for OnePlus 3T</h6>
                                                </div>
                                                <div class="urr-con">
                                                   <div class="circle-rating">
                                                        <p>Based on ratings</p>
                                                        <div class="progressbar" data-animate="false">
                                                            <div class="circle" data-percent="90">
                                                                <span>4.5</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="line-rating">
                                                        <p>Based on 11 review</p>
                                                        <div class="media rating-star-area">
                                                            <p>5 Star</p>
                                                            <div class="media-body rating-bar">
                                                                <div class="progress wd-progress">
                                                                    <div class="progress-bar wd-bg-green" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media rating-star-area">
                                                            <p>4.5 Star</p>
                                                            <div class="media-body rating-bar">
                                                                <div class="progress wd-progress">
                                                                    <div class="progress-bar wd-bg-green" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media rating-star-area">
                                                            <p>2.5 Star</p>
                                                            <div class="media-body rating-bar">
                                                                <div class="progress wd-progress">
                                                                    <div class="progress-bar wd-bg-green" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media rating-star-area">
                                                            <p>2 Star</p>
                                                            <div class="media-body rating-bar">
                                                                <div class="progress wd-progress">
                                                                    <div class="progress-bar wd-bg-green" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="media rating-star-area">
                                                            <p>5 Star</p>
                                                            <div class="media-body rating-bar">
                                                                <div class="progress wd-progress">
                                                                    <div class="progress-bar wd-bg-green" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="circle-rating">
                                                        <p>Based on ratings</p>
                                                        <div class="progressbar" data-animate="false">
                                                            <div class="circle" data-percent="80">
                                                                <span>80%</span>
                                                                <p>Recommended</p>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                     <h4 class="description-title">Vigo SP111-31N-P2GH Spin 1 Details</h4>

									<h6 class="description-subtitle">Battery and Power</h6>
									<p class="description-subcontent">Those looking forward to an excellent trimmer at an affordable price will say they have found their ultimate solution in Kamei KM-2013 Trimmer. This Electric Hair Clipper from Kemei features in brown color with an ergonomically crafted outfit. The recharge time for this device is 480 minutes with the usage time of 40 minutes. You can plug and charge the device from a standard 220V, 50Hz power source. The technology and design assure a great trimming experience.</p>

									<h6 class="description-subtitle">Quality of Body and Combs</h6>
									<p class="description-subcontent">High Hardness Alloy Steel Blade. The attachment includes stubble comb which can suffice various applications. The device also comes with Superior lift cut technology which offers smooth trimming with the cutting intervals of 1 mm, 1.5 mm, 2 mm, 3 mm, 4 mm, 5 mm, 6 mm, 7 mm, 8 mm. The number of combs is one, and the number of trim settings are </p>

									<h6 class="description-subtitle">Usability</h6>
									<p class="description-subcontent">There are no additional epilator settings. Brush cleaning is facilitated to clean after every use. The device can be used in cordless fashion for extra convenience. So you do not have to worry about moving the unit to the desired location. The handle grip material is made of plastic and there is a pop-up trimmer as well. The different technical specifications make it highly convenient to use.</p>

									<h6 class="description-subtitle">Additional features</h6>
									<p class="description-subcontent">The device features a LED display. here are no additional epilator settings. Brush cleaning is facilitated to clean after every use. The device can be used in cordless fashion for extra convenience. S The interesting aspects of the hair trimmer include a fantastic design that supports ease of use, <a class="highlights-text" href="#">good battery backup and a great blade that</a></p>

									<div class="row">
										<div class="col-12 col-md-12 col-lg-6">
											<ul class="description-list">
												<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Windows Mobile® 6.1 Professional Edition</li>
												<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Qualcomm® MSM7201 400MHz Processor</li>
												<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> 320x320 transflective colour TFT touchscreen</li>
												<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> HSDPA/UMTS/EDGE/GPRS/GSM radio</li>
												<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Tri-band UMTS — 850MHz, 1900MHz, 2100MHz</li>
												<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Quad-band GSM — 850/900/1800/1900</li>
												<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> 802.11b/g with WPA, WPA2, and 801.1x authentication</li>
												<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Built-in GPS</li>
												<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Bluetooth Version: 2.0 + Enhanced Data Rate</li>
												<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> 256MB storage (100MB user available), 128MB RAM</li>
												<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> 2.0 megapixel camera, up to 8x digital zoom and video capture</li>
												<li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Removable, rechargeable 1500mAh lithium-ion battery</li>
											</ul>
										</div>
										<div class="col-12 col-md-12 col-lg-6">
											<img class="figure-img img-fluid" src="{{ asset('frontend/img/tab-img-5.jpg') }}" alt="Features">
										</div>
									</div>
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
									<div class="col-12">
										<p class="wd-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores id assumenda, ex ab voluptatem doloremque soluta magnam eum nihil iusto maiores! Libero nisi maior</p>

										<h6 class="review-rating-title">Average Ratings and Reviews</h6>
										<div class="row tab-rating-bar-section">
											<div class="col-8 col-md-4 col-lg-4">
												<img src="{{ asset('frontend/img/review-bg.png') }}" alt="review-bg">
												<div class="review-rating text-center">
													<h1 class="rating">4.5</h1>
													<p>4 Ratings &amp;
													0 Reviews</p>
												</div>
											</div>
											<div class="col-12 col-md-3 rating-bar-section">
												<div class="media rating-star-area">
													<p>5 <i class="fa fa-star" aria-hidden="true"></i></p>
													<div class="media-body rating-bar">
														<div class="progress wd-progress">
															<div class="progress-bar wd-bg-green" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
												</div>
												<div class="media rating-star-area">
													<p>4 <i class="fa fa-star" aria-hidden="true"></i></p>
													<div class="media-body rating-bar">
														<div class="progress wd-progress">
															<div class="progress-bar wd-bg-green" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
												</div>
												<div class="media rating-star-area">
													<p>3 <i class="fa fa-star" aria-hidden="true"></i></p>
													<div class="media-body rating-bar">
														<div class="progress wd-progress">
															<div class="progress-bar wd-bg-green" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
												</div>
												<div class="media rating-star-area">
													<p>2 <i class="fa fa-star" aria-hidden="true"></i></p>
													<div class="media-body rating-bar">
														<div class="progress wd-progress">
															<div class="progress-bar wd-bg-yellow" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
												</div>
												<div class="media rating-star-area">
													<p>1 <i class="fa fa-star" aria-hidden="true"></i></p>
													<div class="media-body rating-bar">
														<div class="progress wd-progress">
															<div class="progress-bar wd-bg-red" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<hr>
										
										<div class="reviews-market">
											<!-- 
												=================================
												Review Our Product
												=================================
											-->
											<div class="review-our-product text-left row">
												 
												<!-- =================================
													Review Client Section
													================================= -->
												
												<div class="col-12 review-our-product-area">
													<div class="row">
														<div class="col-12 col-md-6">
															<div class="row">
																<div class="col-12">
																	<div class="media">
																	  <div class="media-left media-middle">
																	    <a href="#">
																	      <img class="media-object" src="{{ asset('frontend/img/client/client-img-1.png') }}" alt="client-img">
																	    </a>
																	  </div>
																	  <div class="media-body">
																	    <h4 class="media-heading client-title">Robert Strud</h4>
																		<div class="client-subtitle">Affiliate at <a href="#">Market 1</a></div>
																	  </div>
																	</div>
																</div>
															</div>
														</div>
														<div class="col-12 col-md-6 review-date-time">
															<p class="review-date">November 17, 2016</p>
															<p class="review-time">at 11:52 pm</p>
														</div>
													</div>
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