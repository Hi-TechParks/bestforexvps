@extends('website.layouts.master')
@section('title', 'Comparison')
@section('content')

    <!-- =========================
        Magazine review section
    ============================== -->
    
    <section class="mag-review">
        <div class="container-fluid custom-width">
            <div class="row compare-folding-section">
                <div class="col-12 text-center">
                    <h2 class="compare-folding-title">Compare your Product</h2>
                    <div class="page-location pt-0">
                        <ul>
                            <li><a href="#">
                                Home <span class="divider">/</span>
                            </a></li>
                            <li><a href="#">
                                Shop <span class="divider">/</span>
                            </a></li>
                            <li><a class="page-location-active" href="#">
                                Proudct Compare
                                <span class="divider">/</span>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-5 col-xl-4 ml-auto">
                    <div class="selection-form">
                      <select name="" class="form-control">
                        <option value="just">Comparison version 1</option>
                      </select>
                    </div>

                    <div class="sin-mag-rev">
                        <div class="mr-img">
                            <img src="{{ asset('frontend/img/product-img/product-img-17.jpg') }}" alt="">
                        </div>
                        <div class="mag-rev-con">
                            <div class="mr-meta">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>226 Comments</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>226,658</a>
                            </div>
                            <h3><a href="#">Alienware AW2518H 240Hz G-Sync Monitor Review</a></h3>
                            <div class="inner-rev">
                                <span>Market 1</span>
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="inner-rev">
                                <span>Market 2</span>
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="inner-rev">
                                <span>Market 3</span>
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                </div>
                            </div>
                           
                            <div class="progress blue">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">4.5</div>
                            </div>
                            <div class="rating pro-bar">
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                            </div>
                            <div class="rev-readmore">
                                <a href="#" class="pr-btn">read more</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-5 col-xl-4 mr-auto">
                    <div class="selection-form">
                      <select name="" class="form-control">
                        <option value="just">Comparison version 2</option>
                      </select>
                    </div>

                    <div class="sin-mag-rev">
                        <div class="mr-img">
                            <img src="{{ asset('frontend/img/product-img/product-img-12.jpg') }}" alt="">
                        </div>
                        <div class="mag-rev-con">
                            <div class="mr-meta">
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i>226 Comments</a>
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i>
                        226,658</a>
                            </div>
                            <h3><a href="#">Alienware AW2518H 240Hz G-Sync Monitor Review</a></h3>
                            <div class="inner-rev">
                                <span>Market 1</span>
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="inner-rev">
                                <span>Market 2</span>
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="inner-rev">
                                <span>Market 3</span>
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                </div>
                            </div>
                           
                            <div class="progress blue">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value">4.5</div>
                            </div>
                            <div class="rating pro-bar">
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star active-color" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                            </div>
                            <div class="rev-readmore">
                                <a href="#" class="pr-btn">read more</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
@endsection