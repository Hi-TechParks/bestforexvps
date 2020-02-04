@extends('website.layouts.master')
@section('title', 'Error 404')
@section('content')

    <section class="four-zero d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8 col-sm-6 ">
                    <img src="{{ asset('frontend/img/slider-img/404-fun.png') }}" alt="">
                </div>
                <div class="col-12 col-sm-6">
                    <div class="four-0-inner">
                        
                        <h3><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>OOPS!</h3>
                        <h6>You did it again..</h6>
                        <p>The page you are looking doesn’t exist. We think the page may have removed or deleted by the  authors.</p>
                        <a class="go-back" href="{{ route('index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i>Go Back</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection