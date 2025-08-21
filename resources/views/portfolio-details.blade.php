@extends('layouts.softora')

@section('title', 'Portfolio Details')

@section('content')
    <!-- Breadcrumb Section -->
    <div class="breadcrumb-section bg-img" style="background-image: url('{{ asset('assets/img/bg-img/90.jpg') }}');">
        <div class="container">
            <div class="breadcrumb-content">
                <div class="divider"></div>
                <h2>Project Details</h2>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Project Details</li>
                </ul>
            </div>
        </div>
        <div class="divider"></div>
    </div>

    <!-- Portfolio Details Section -->
    <div class="portfolio-details-section">
        <div class="divider"></div>
        <div class="container">
            <div class="row"><div class="col-12"><img src="{{ asset('assets/img/bg-img/131.jpg') }}" alt=""></div></div>
            <div class="divider-sm"></div>
            <div class="row g-5 g-md-4 g-lg-5">
                <div class="col-12 col-md-6 col-lg-7 col-xl-8">
                    <div class="portfolio-details-content">
                        <h2 class="fw-semibold display-5">Responsive Websites for Accessibility</h2>
                        <p>When an unknown printer took ar galley offer type year anddey scrambled make aewer specimen a book bethas survived not only five when anner year unknown printer eed little help from friend from time to time. Although we offer the one-stop convenience.</p>
                        <p>When an unknown printer took ar galley offer type year anddey scrambled make aewer specimen a book bethas survived not only five when anner year unknown printer eed little.</p>
                        <div class="row g-4">
                            <div class="col-6"><img src="{{ asset('assets/img/bg-img/132.jpg') }}" alt=""></div>
                            <div class="col-6"><img src="{{ asset('assets/img/bg-img/133.jpg') }}" alt=""></div>
                        </div>
                        <p>When an unknown printer took ar galley offer type year anddey scrambled make aewer specimen a book bethas survived not only five when anner year unknown printer eed little help from friend from time to time. Although we offer the one-stop convenience. unknown printer took galley type year anddey scrambled. unknown printer took ar galley offer type year anddey scrambled.</p>
                        <h2>Challenge & Solution</h2>
                        <p>Future, as it seeks to lead the industry in technological innovation and sustainable building practices to deliver long-lasting value for its clients. unknown printer took galley type year anddey scrambled. unknown printer.</p>
                        <h2>Final Result</h2>
                        <p>For almost 50 years Leighton Asia, one of the region's largest and most respected construction companies, has been progressively building for a better future by leveraging international expertise with local intelligence. In that time Leighton has delivered some of Asia's prestigious buildings and transformational infrastructure projects.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="portfolio-sidebar">
                        <div class="project-details-card">
                            <h4 class="fw-bold">Project Details</h4>
                            <div class="project-info my-4">
                                <div><span class="label">Client</span>: <span class="value">Porter Victoria</span></div>
                                <div><span class="label">Category</span>: <span class="value">Web Development</span></div>
                                <div><span class="label">Date</span>: <span class="value">20 January, 2023</span></div>
                                <div><span class="label">Website</span>: <a href="#">example.site.com</a></div>
                            </div>
                            <div class="social-nav">
                                <a href="#"><i class="ti ti-brand-facebook"></i></a>
                                <a href="#"><i class="ti ti-brand-x"></i></a>
                                <a href="#"><i class="ti ti-brand-linkedin"></i></a>
                                <a href="#"><i class="ti ti-brand-instagram"></i></a>
                            </div>
                        </div>
                        <div class="need-help-card">
                            <h4 class="fw-bold">Need Any Help?</h4>
                            <p class="mb-4">Need Any Help, Call Us 24/7 For Support</p>
                            <div class="d-flex flex-column gap-4">
                                <div class="help-item d-flex align-items-center">
                                    <div class="icon">@include('partials.icons.phone')</div>
                                    <div><p class="mb-1">Call Us</p><h5 class="mb-0">+123 456 7890</h5></div>
                                </div>
                                <div class="help-item d-flex align-items-center">
                                    <div class="icon">@include('partials.icons.mail')</div>
                                    <div><p class="mb-1">Mail Us</p><h5 class="mb-0">info@example.com</h5></div>
                                </div>
                                <div class="help-item d-flex align-items-center">
                                    <div class="icon">@include('partials.icons.pin')</div>
                                    <div><p class="mb-1">Office Address</p><h5 class="mb-0">125 Berlin, Germany</h5></div>
                                </div>
                            </div>
                        </div>
                        <div class="download-card">
                            <h4 class="mb-4 fw-bold">Download Brochure</h4>
                            <a href="#" class="btn btn-primary w-100 mb-3">DOWNLOAD PDF</a>
                            <a href="#" class="btn btn-light bg-white w-100">DOWNLOAD PDF</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <!-- CTA Wrapper -->
    <div class="cta-wrapper bg-img" style="background-image: url({{ asset('assets/img/core-img/grid.jpg') }})">
        <div class="divider"></div>
        <div class="container">
            <div class="row g-4 g-xl-5 align-items-center">
                <div class="col-12 col-lg-6 col-xl-7"><h2 class="mb-0 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Start Building Your Business Now</h2></div>
                <div class="col-12 col-lg-6 col-xl-5"><p class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">Communicate your pricing clearly and transparently to build trust with your customers. Hidden fees or unclear pricing structures can lead to dissatisfaction.</p><a href="#" class="btn btn-primary btn-hover-border wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">Get Started <i class="ti ti-arrow-up-right"></i></a></div>
            </div>
        </div>
        <div class="divider"></div>
    </div>
@endsection


