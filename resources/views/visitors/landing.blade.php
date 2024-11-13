@extends('visitors.main_layouts.master')

@section('title', __('الرئيسية'))

@section('content')
    <!-- Start Slider Area  -->
    <div class="slider-area slider-style-1 variation-default slider-bg-image bg-banner1 slider-bg-shape"
        data-black-overlay="1">
        <!-- <div class="bg-blend-top bg_dot-mask"></div> -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="inner text-center mt--140" id="aboutsna">
                        <h1 class="title display-one">New <strong>Dimension </strong> Sustainable <br>Real Estate
                            <span class="header-caption">
                                <span class="cd-headline rotate-1">
                                    <span class="cd-words-wrapper" style="width: 221px;">
                                        <b class="theme-gradient is-visible">Efficiency</b>
                                        <b class="theme-gradient is-hidden">Resilience</b>
                                        <b class="theme-gradient is-hidden">Innovation</b>
                                    </span>
                                </span>
                            </span>
                        </h1>
                        {{-- SEND VIDEO --}}
                        <div class="form-group">
                            <div class="read-more">
                                <a class="btn-default" href="{{ route('start-page') }}"> <i
                                        class="fa-sharp fa-solid fa-arrow-left me-2"></i>Start
                                    With Boad</a>
                            </div>
                        </div>
                        {{-- END SEND VIDEO --}}
                        <div class="inner-shape">
                            <img src="{{ asset('assets/images/bg/icon-shape/icon-shape-one.png') }}" alt="Icon Shape"
                                class="iconshape iconshape-one">
                            <img src="{{ asset('assets/images/bg/icon-shape/icon-shape-two.png') }}" alt="Icon Shape"
                                class="iconshape iconshape-two">
                            <img src="{{ asset('assets/images/bg/icon-shape/icon-shape-three.png') }}" alt="Icon Shape"
                                class="iconshape iconshape-three">
                            <img src="{{ asset('assets/images/bg/icon-shape/icon-shape-four.png') }}" alt="Icon Shape"
                                class="iconshape iconshape-four">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-shape">
            <img class="bg-shape-one" src="{{ asset('assets/images/bg/bg-shape-four.png') }}" alt="Bg Shape">
            <img class="bg-shape-two" src="{{ asset('assets/images/bg/bg-shape-five.png') }}" alt="Bg Shape">
        </div>
    </div>
    <!-- End Slider Area  -->

    <!-- Start Brand Area -->
    <!-- Start Tab__Style--one Area  -->
    <div class="rainbow-service-area rainbow-section-gap">
        <div class="container">
            <div class="row" id="whyus">
                <div class="col-lg-12">
                    <div class="section-title text-center pb--60" data-sal="slide-up" data-sal-duration="700"
                        data-sal-delay="100">
                        <h4 class="subtitle">
                            <span class="theme-gradient">Why us?</span>
                        </h4>
                        <h2 class="title mb--0">AI tailored for you.</h2>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Tab__Style--one Area  -->


    <!-- Start Brand Area -->
    <div class="rainbow-brand-area rainbow-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mt--10">
                    <ul class="brand-list brand-style-2">
                        <li><a href="index.html#"><img src="{{ asset('assets/images/brand/roshn_sponsor.svg') }}"
                                    alt="Brand Image"></a></li>
                        <li><a href="index.html#"><img src="{{ asset('assets/images/brand/roshn_white.svg') }}"
                                    alt="Brand Image"></a></li>
                        <li><a href="index.html#"><img src="{{ asset('assets/images/brand/city_logo.svg') }}"
                                    alt="Brand Image"></a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-shape-left">
            <img src="{{ asset('assets/images/bg/bg-shape-two.png') }}" alt="Bg shape">
        </div>
    </div>
@endsection

@section('scripts')

@endsection
