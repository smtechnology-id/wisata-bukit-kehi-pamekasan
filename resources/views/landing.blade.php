@extends('layouts.landing')
@section('content')

<!-- banner starts -->
<section class="banner overflow-hidden">
    <div class="slider top50">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="slide-image"
                            style="background-image:url({{ asset('assets-landing/images/slider/1.jpg') }})"></div>
                        <div class="swiper-content">
                            <div class="entry-meta mb-2">
                                <h5 class="entry-category mb-0 white">Amazing Places</h5>
                            </div>
                            <h1 class="mb-2"><a href="tour-single.html" class="white">Make Your Trip Fun & Noted</a>
                            </h1>
                            <p class="white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            <a href="tour-single.html" class="nir-btn">Discover More</a>
                        </div>
                        <div class="dot-overlay"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="slide-image"
                            style="background-image:url({{ asset('assets-landing/images/slider/2.jpg') }})"></div>
                        <div class="swiper-content">
                            <div class="entry-meta mb-2">
                                <h5 class="entry-category mb-0 white">Explore Travel</h5>
                            </div>
                            <h1 class="mb-2"><a href="tour-single.html" class="white">Start Planning Your Dream Trip</a>
                            </h1>
                            <p class="white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            <div class="slider-button d-flex justify-content-center">
                                <a href="tour-single1.html" class="nir-btn me-4">Read More</a>
                                <a href="tour-single.html" class="nir-btn-black">Contact Us</a>
                            </div>
                        </div>
                        <div class="dot-overlay"></div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="slide-inner">
                        <div class="slide-image"
                            style="background-image:url({{ asset('assets-landing/images/slider/3.jpg') }})"></div>
                        <div class="swiper-content">
                            <div class="entry-meta mb-2">
                                <h5 class="entry-category mb-0 white">Road To Travel</h5>
                            </div>
                            <h1 class="mb-2"><a href="tour-single.html" class="white">Begin your adventure with us</a>
                            </h1>
                            <p class="white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            <a href="tour-single.html" class="nir-btn">Make An Enquiry</a>
                        </div>
                        <div class="dot-overlay"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</section>
<!-- banner ends -->

<!-- about-us starts -->
<section class="about-us pb-6 pt-10"
    style="background-image:url({{ asset('assets-landing/images/shape4.png') }}); background-position:center;">
    <div class="container">

        <div class="section-title mb-6 w-50 mx-auto text-center">
            <h4 class="mb-1 theme1">Core Features</h4>
            <h2 class="mb-1">Find <span class="theme">Travel Perfection</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>

        <!-- why us starts -->
        <div class="why-us">
            <div class="why-us-box">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                            <div class="why-us-content">
                                <div class="why-us-icon mb-1">
                                    <i class="icon-flag theme"></i>
                                </div>
                                <h4><a href="about.html">Tell Us What You want To Do</a></h4>
                                <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia.</p>
                                <p class="mb-0 theme">100+ Reviews</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                            <div class="why-us-content">
                                <div class="why-us-icon mb-1">
                                    <i class="icon-location-pin theme"></i>
                                </div>
                                <h4><a href="about.html">Share Your Travel Locations</a></h4>
                                <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia.</p>
                                <p class="mb-0 theme">100+ Reviews</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                            <div class="why-us-content">
                                <div class="why-us-icon mb-1">
                                    <i class="icon-directions theme"></i>
                                </div>
                                <h4><a href="about.html">Share Your Travel Preference</a></h4>
                                <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia.</p>
                                <p class="mb-0 theme">100+ Reviews</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="why-us-item p-5 pt-6 pb-6 border rounded bg-white">
                            <div class="why-us-content">
                                <div class="why-us-icon mb-1">
                                    <i class="icon-compass theme"></i>
                                </div>
                                <h4><a href="about.html">Here 100% Trusted Tour Agency</a></h4>
                                <p class="mb-2">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia.</p>
                                <p class="mb-0 theme">100+ Reviews</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- why us ends -->
    </div>
    <div class="white-overlay"></div>
</section>
<!-- about-us ends -->

<!-- top Destination starts -->
<section class="trending pb-3 pt-0">
    <div class="container">
        <div class="section-title mb-6 w-50 mx-auto text-center">
            <h4 class="mb-1 theme1">Top Destinations</h4>
            <h2 class="mb-1">Explore <span class="theme">Top Destinations</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>
        <div class="row align-items-center">
            @foreach ($destinations as $destination)
            <div class="col-lg-4 mb-4">
                <div class="trend-item1">
                    <div class="trend-image position-relative rounded">
                        <img src="{{ asset('assets-landing/images/destination/destination1.jpg') }}" alt="image">
                        <div
                            class="trend-content d-flex align-items-center justify-content-between position-absolute bottom-0 p-4 w-100 z-index">
                            <div class="trend-content-title">
                                <h5 class="mb-0"><a href="tour-grid.html" class="theme1">England</a></h5>
                                <h3 class="mb-0 white">London</h3>
                            </div>
                            <span class="white bg-theme p-1 px-2 rounded">15 Tours</span>
                        </div>
                        <div class="color-overlay"></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- top Destination ends -->

<!-- best tour Starts -->
<section class="trending bg-grey pt-17 pb-6">
    <div class="section-shape top-0" style="background-image: url({{ asset('assets-landing/images/shape8.png') }});">
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-between mb-6 ">
            <div class="col-lg-7">
                <div class="section-title text-center text-lg-start">
                    <h4 class="mb-1 theme1">Top Pick</h4>
                    <h2 class="mb-1">Best <span class="theme">Tour Ticket Packages</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore.</p>
                </div>
            </div>
            <div class="col-lg-5">
            </div>
        </div>
        <div class="trend-box">
            <div class="row item-slider">
                @foreach ($tickets as $ticket)
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="trend-item rounded box-shadow bg-white">
                        <div class="trend-image position-relative">
                            <img src="{{ asset('storage/ticket/' . $ticket->photo) }}" alt="image" class=""
                                style="width: 100%; height: 200px; object-fit: cover;">
                            <div class="color-overlay"></div>
                        </div>
                        <div class="trend-content p-4 pt-5 position-relative">

                            <h5 class="theme mb-1"><i class="flaticon-location-pin"></i> Pamekasan, Jawa Timur</h5>
                            <h3 class="mb-1"><a href="{{ route('ticket') }}">{{ $ticket->name }}</a></h3>

                            <div class="entry-meta">
                                <div class="entry-author d-flex align-items-center">
                                    <p class="mb-0"><span class="theme fw-bold fs-5">Rp. {{
                                            number_format($ticket->price, 2) }}</span> | Per person</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- best tour Ends -->
<!-- our teams starts -->
<section class="our-team pb-0">
    <div class="container">

        <div class="section-title mb-6 w-75 mx-auto text-center">
            <h4 class="mb-1 theme1">Aparatur</h4>
            <h2 class="mb-1">Meet Our <span class="theme">Excellent Aparatur</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>
        <div class="team-main">
            <div class="row shop-slider">
                @foreach ($aparatur as $item)
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="team-list rounded">
                        <div class="team-image">
                            <img src="{{ asset('storage/aparatur/' . $item->image) }}" alt="team" style="width: 100%; height: 300px; object-fit: cover;">
                        </div>
                        <div class="team-content text-center p-3 bg-theme">
                            <h4 class="mb-0 white">{{ $item->name }}</h4>
                            <p class="mb-0 white">{{ $item->position }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- our teams Ends -->

<!-- recent-articles starts -->
<section class="trending recent-articles pb-6 pt-5">
    <div class="container">
        <div class="section-title mb-6 w-75 mx-auto text-center">
            <h4 class="mb-1 theme1">Our Blogs Offers</h4>
            <h2 class="mb-1">Recent <span class="theme">Articles & Posts</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
        </div>
        <div class="recent-articles-inner">
            <div class="row">
                @foreach ($news as $item)
                <div class="col-lg-4">
                    <div class="trend-item box-shadow bg-white mb-4 rounded">
                        <div class="trend-image">
                            <img src="{{ asset('storage/news/' . $item->image) }}" alt="image" style="width: 100%; height: 200px; object-fit: cover;">
                        </div>
                        <div class="trend-content-main p-4">
                            <div class="trend-content">
                                <h5 class="theme mb-1">Berita Tentang Wisata Bukit Kehi Pamekasan</h5>
                                <h4 class="mb-0"><a href="{{ route('landing.news.detail', $item->slug) }}">{{ $item->title }}</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- recent-articles ends -->

@endsection