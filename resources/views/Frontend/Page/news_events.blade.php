@extends('Frontend.layout')
@section('content')
    




        <!-- start section --> 
        <section class="bg-light-gray wow animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-md-8 text-center margin-5-rem-bottom md-margin-3-rem-bottom">
                        <h4 class="alt-font font-weight-600 text-extra-dark-gray letter-spacing-minus-1px">All News & Events</h4>
                        <p class="w-80 mx-auto md-w-100 mb-0">Lorem ipsum dolor amet consectetur adipiscing elit eiusmod tempor incididunt ut labore et dolore magna</p>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-12 blog-content">
                        <ul class="blog-grid blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                            <li class="grid-sizer"></li>
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn">
                                <div class="blog-post border-radius-5px bg-white box-shadow-medium">
                                    <div class="blog-post-image bg-medium-slate-blue">
                                        <a href="blog-post-layout-01.html" title=""><img src="https://via.placeholder.com/800x560" alt=""></a>
                                        <a href="blog-masonry.html" class="blog-category alt-font">Event</a>
                                    </div>
                                    <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">
                                        <a href="blog-masonry.html" class="alt-font text-small text-shamrock-green-hover d-inline-block margin-10px-bottom">18 February 2020</a>
                                        <a href="blog-post-layout-01.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray text-shamrock-green-hover margin-15px-bottom d-block">Your Event Name</a>
                                        <p>Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum been dummy...</p>
                                        {{-- <div class="d-flex align-items-center">
                                            <img class="avtar-image" src="https://via.placeholder.com/125x125" alt=""/>
                                            <span class="alt-font text-small me-auto">By <a href="blog-masonry.html" class="text-shamrock-green-hover">Torrie asai</a></span>
                                            <a href="blog-post-layout-01.html" class="blog-like alt-font text-extra-small text-shamrock-green-hover"><i class="far fa-heart"></i><span>28</span></a>
                                        </div> --}}
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                                <div class="blog-post border-radius-5px bg-white box-shadow-medium">
                                    <div class="blog-post-image bg-medium-slate-blue">
                                        <a href="blog-post-layout-02.html" title=""><img src="https://via.placeholder.com/800x560" alt=""></a>
                                        <a href="blog-masonry.html" class="blog-category alt-font">News</a>
                                    </div>
                                    <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">
                                        <a href="blog-masonry.html" class="alt-font text-small text-shamrock-green-hover d-inline-block margin-10px-bottom">09 January 2020</a>
                                        <a href="blog-post-layout-02.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray text-shamrock-green-hover margin-15px-bottom d-block">Your News Tital</a>
                                        <p>Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum been dummy...</p>
                                        {{-- <div class="d-flex align-items-center">
                                            <img class="avtar-image" src="https://via.placeholder.com/125x125" alt=""/>
                                            <span class="alt-font text-small me-auto">By <a href="blog-masonry.html" class="text-shamrock-green-hover">Walton smith</a></span>
                                            <a href="blog-post-layout-02.html" class="blog-like alt-font text-extra-small text-shamrock-green-hover"><i class="far fa-heart"></i><span>30</span></a>
                                        </div> --}}
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                            <!-- start blog item -->
                            <li class="grid-item wow animate__fadeIn" data-wow-delay="0.4s">
                                <div class="blog-post border-radius-5px bg-white box-shadow-medium">
                                    <div class="blog-post-image bg-medium-slate-blue">
                                        <a href="blog-post-layout-03.html" title=""><img src="https://via.placeholder.com/800x560" alt=""></a>
                                        <a href="blog-masonry.html" class="blog-category alt-font">News</a>
                                    </div>
                                    <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">
                                        <a href="blog-masonry.html" class="alt-font text-small text-shamrock-green-hover d-inline-block margin-10px-bottom">12 December 2020</a>
                                        <a href="blog-post-layout-03.html" class="alt-font font-weight-500 text-extra-medium text-extra-dark-gray text-shamrock-green-hover margin-15px-bottom d-block">People ignore</a>
                                        <p>Lorem ipsum is simply dummy text printing typesetting industry lorem ipsum been dummy...</p>
                                        {{-- <div class="d-flex align-items-center">
                                            <img class="avtar-image" src="https://via.placeholder.com/125x125" alt=""/>
                                            <span class="alt-font text-small me-auto">By <a href="blog-masonry.html" class="text-shamrock-green-hover">Bill gardner</a></span>
                                            <a href="blog-post-layout-03.html" class="blog-like alt-font text-extra-small text-shamrock-green-hover"><i class="far fa-heart"></i><span>23</span></a>
                                        </div> --}}
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                        </ul>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-12 text-center">
                        <a href="blog-masonry.html" class="btn btn-link thin btn-extra-large text-extra-dark-gray margin-70px-top d-inline-block md-margin-40px-top sm-margin-20px-top">View all articles</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->


@endsection