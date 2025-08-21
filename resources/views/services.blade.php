@extends('layouts.softora')

@section('title', 'Services - ATI Technologies')

@section('content')
    <!-- Breadcrumb Section -->
    <div class="breadcrumb-section bg-img" style="background-image: url('{{ asset('assets/img/bg-img/90.jpg') }}');">
        <div class="container">
            <div class="breadcrumb-content">
                <div class="divider"></div>
                <h2>Our Services</h2>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
        <div class="divider"></div>
    </div>

    <!-- Service Section -->
    <section class="service-section">
        <div class="divider"></div>
        <div class="container">
            <div class="row justify-content-center">
                <!-- Section Heading -->
                <div class="col-12 col-md-7">
                    <div class="section-heading text-center">
                        <span class="sub-title">Our Services</span>
                        <h2 class="mb-0">We Provide Experts Cyber Security Services</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <div class="divider-sm"></div>

        <div class="container">
            <div class="row g-4 g-xl-5">
                <!-- Service Card 1 -->
                <div class="col-12 col-sm-6 col-xl-4">
                    <div class="service-card">
                        <div class="shape">
                            <img src="{{ asset('assets/img/core-img/shape7.png') }}" alt="">
                        </div>
                        <div class="service-thumb">
                            <a href="#" class="btn">Learn More <i class="ti ti-arrow-right"></i></a>
                            <img src="{{ asset('assets/img/bg-img/34.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">Cyber Security</h4>
                            <p class="mb-0">Empower your business with our cutting-edge tailored solutions.</p>
                        </div>
                        <div class="service-number">01</div>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="col-12 col-sm-6 col-xl-4">
                    <div class="service-card">
                        <div class="shape">
                            <img src="{{ asset('assets/img/core-img/shape7.png') }}" alt="">
                        </div>
                        <div class="service-thumb">
                            <a href="#" class="btn">Learn More <i class="ti ti-arrow-right"></i></a>
                            <img src="{{ asset('assets/img/bg-img/35.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">Data Protection</h4>
                            <p class="mb-0">Empower your business with our cutting-edge tailored solutions.</p>
                        </div>
                        <div class="service-number">02</div>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="col-12 col-sm-6 col-xl-4">
                    <div class="service-card">
                        <div class="shape">
                            <img src="{{ asset('assets/img/core-img/shape7.png') }}" alt="">
                        </div>
                        <div class="service-thumb">
                            <a href="#" class="btn">Learn More <i class="ti ti-arrow-right"></i></a>
                            <img src="{{ asset('assets/img/bg-img/36.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">Network Security</h4>
                            <p class="mb-0">Empower your business with our cutting-edge tailored solutions.</p>
                        </div>
                        <div class="service-number">03</div>
                    </div>
                </div>

                <!-- Service Card 4 -->
                <div class="col-12 col-sm-6 col-xl-4">
                    <div class="service-card">
                        <div class="shape">
                            <img src="{{ asset('assets/img/core-img/shape7.png') }}" alt="">
                        </div>
                        <div class="service-thumb">
                            <a href="#" class="btn">Learn More <i class="ti ti-arrow-right"></i></a>
                            <img src="{{ asset('assets/img/bg-img/91.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">Machine Learning</h4>
                            <p class="mb-0">Empower your business with our cutting-edge tailored solutions.</p>
                        </div>
                        <div class="service-number">04</div>
                    </div>
                </div>

                <!-- Service Card 5 -->
                <div class="col-12 col-sm-6 col-xl-4">
                    <div class="service-card">
                        <div class="shape">
                            <img src="{{ asset('assets/img/core-img/shape7.png') }}" alt="">
                        </div>
                        <div class="service-thumb">
                            <a href="#" class="btn">Learn More <i class="ti ti-arrow-right"></i></a>
                            <img src="{{ asset('assets/img/bg-img/92.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">Database Security</h4>
                            <p class="mb-0">Empower your business with our cutting-edge tailored solutions.</p>
                        </div>
                        <div class="service-number">05</div>
                    </div>
                </div>

                <!-- Service Card 6 -->
                <div class="col-12 col-sm-6 col-xl-4">
                    <div class="service-card">
                        <div class="shape">
                            <img src="{{ asset('assets/img/core-img/shape7.png') }}" alt="">
                        </div>
                        <div class="service-thumb">
                            <a href="#" class="btn">Learn More <i class="ti ti-arrow-right"></i></a>
                            <img src="{{ asset('assets/img/bg-img/93.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">IT Management</h4>
                            <p class="mb-0">Empower your business with our cutting-edge tailored solutions.</p>
                        </div>
                        <div class="service-number">06</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <div class="divider"></div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial-section style-two bg-secondary">
        <div class="divider"></div>

        <!-- Background Circles -->
        <div class="testimonial-circles">
            <img src="{{ asset('assets/img/core-img/circles.png') }}" alt="">
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <!-- Section Heading -->
                <div class="col-12 col-lg-8">
                    <div class="section-heading text-center">
                        <span class="sub-title">Testimonial</span>
                        <h2>What Client Say About Us</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="divider-sm"></div>

        <!-- Testimonial Slider -->
        <div class="testimonial-slide">
            <div class="swiper testimonial-swiper-two">
                <div class="swiper-wrapper">
                    <!-- Testimonial Slide 1 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card style-three">
                            <div class="testimonial-info bg-white">
                                <div class="testimonial-content">
                                    <!-- Ratings -->
                                    <div class="ratings">
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                    </div>
                                    <p class="testimonial-text">“Working with several word themes and templates
                                        the last years only can say this is best in every level use it for my
                                        reviews that I have already compa and the reviews that I have already are
                                        all excellent. Not only the design but the are reviews code.”</p>
                                </div>
                                <div class="testimonial-author d-flex align-items-center justify-content-between gap-4">
                                    <div>
                                        <h4 class="mb-1">Marvin McKinney</h4>
                                        <p class="mb-0">Product Manager</p>
                                    </div>
                                    <div>
                                        <svg width="62" height="62">
                                            <use href="#double-quote-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Slide 2 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card style-three">
                            <div class="testimonial-info bg-white">
                                <div class="testimonial-content">
                                    <div class="ratings">
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                    </div>
                                    <p class="testimonial-text">“Working with several word themes and templates
                                        the last years only can say this is best in every level use it for my
                                        reviews that I have already compa and the reviews that I have already are
                                        all excellent. Not only the design but the are reviews code.”</p>
                                </div>
                                <div class="testimonial-author d-flex align-items-center justify-content-between gap-4">
                                    <div>
                                        <h4 class="mb-1">Marvin McKinney</h4>
                                        <p class="mb-0">Product Manager</p>
                                    </div>
                                    <div>
                                        <svg width="62" height="62">
                                            <use href="#double-quote-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Slide 3 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card style-three">
                            <div class="testimonial-info bg-white">
                                <div class="testimonial-content">
                                    <div class="ratings">
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                    </div>
                                    <p class="testimonial-text">“Working with several word themes and templates
                                        the last years only can say this is best in every level use it for my
                                        reviews that I have already compa and the reviews that I have already are
                                        all excellent. Not only the design but the are reviews code.”</p>
                                </div>
                                <div class="testimonial-author d-flex align-items-center justify-content-between gap-4">
                                    <div>
                                        <h4 class="mb-1">Marvin McKinney</h4>
                                        <p class="mb-0">Product Manager</p>
                                    </div>
                                    <div>
                                        <svg width="62" height="62">
                                            <use href="#double-quote-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial Slide 4 -->
                    <div class="swiper-slide">
                        <div class="testimonial-card style-three">
                            <div class="testimonial-info bg-white">
                                <div class="testimonial-content">
                                    <div class="ratings">
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                        <i class="ti ti-star-filled"></i>
                                    </div>
                                    <p class="testimonial-text">“Working with several word themes and templates
                                        the last years only can say this is best in every level use it for my
                                        reviews that I have already compa and the reviews that I have already are
                                        all excellent. Not only the design but the are reviews code.”</p>
                                </div>
                                <div class="testimonial-author d-flex align-items-center justify-content-between gap-4">
                                    <div>
                                        <h4 class="mb-1">Marvin McKinney</h4>
                                        <p class="mb-0">Product Manager</p>
                                    </div>
                                    <div>
                                        <svg width="62" height="62">
                                            <use href="#double-quote-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial Pagination -->
                <div class="testimonial-swiper-two-pagination"></div>
            </div>
        </div>

        <!-- Divider -->
        <div class="divider"></div>
    </section>

    <!-- CTA Wrapper -->
    <div class="cta-wrapper bg-img" style="background-image: url({{ asset('assets/img/core-img/grid.jpg') }})">
        <div class="divider"></div>

        <div class="container">
            <div class="row g-4 g-xl-5 align-items-center">
                <div class="col-12 col-lg-6 col-xl-7">
                    <h2 class="mb-0 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Start Building Your
                        Business Now</h2>
                </div>

                <div class="col-12 col-lg-6 col-xl-5">
                    <p class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">Communicate your pricing
                        clearly and transparently to build trust with your customers. Hidden fees or
                        unclear pricing structures can lead to dissatisfaction.</p>
                    <a href="pricing.html" class="btn btn-primary btn-hover-border wow fadeInUp" data-wow-duration="1000ms"
                        data-wow-delay="800ms">Get Started <i class="ti ti-arrow-up-right"></i></a>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <div class="divider"></div>
    </div>
@endsection


