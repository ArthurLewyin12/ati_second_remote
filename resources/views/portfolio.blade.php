@extends('layouts.softora')

@section('title', 'Portfolio Masonry')

@section('content')
    <!-- Breadcrumb Section -->
    <div class="breadcrumb-section bg-img" style="background-image: url('{{ asset('assets/img/bg-img/90.jpg') }}');">
        <div class="container">
            <div class="breadcrumb-content">
                <div class="divider"></div>
                <h2>Portfolio Masonry</h2>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Portfolio Masonry</li>
                </ul>
            </div>
        </div>
        <div class="divider"></div>
    </div>

    <!-- Showcase Section -->
    <section class="showcase-section style-two softora-container">
        <div class="divider"></div>
        <div class="container">
            <div class="row softora-filter g-4 g-md-5">
                @foreach (['16.jpg','17.jpg','18.jpg','19.jpg','94.jpg','95.jpg'] as $i => $img)
                <div class="col-12 col-sm-6 filter-item showcase-item">
                    <div class="showcase-card wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="{{ ($i%2?600:400) }}ms">
                        <div class="showcase-thumb">
                            <img src="{{ asset('assets/img/bg-img/'.$img) }}" alt="">
                            <a href="{{ url('/portfolio/details') }}" class="btn"><i class="ti ti-arrow-up-right"></i></a>
                        </div>
                        <div class="showcase-content">
                            <p>Branding / Technology / Marketing</p>
                            <h2>Innovative Web Portal Creation for an Enhanced UX Experience</h2>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="container">
            <div class="text-center mt-5 mt-xxl-0">
                <button type="button" class="btn btn-primary">Load more <i class="ti ti-arrow-up-right"></i></button>
            </div>
        </div>

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
                        clearly and transparently to build trust with your customers. Hidden fees or unclear pricing structures can lead to dissatisfaction.</p>
                    <a href="#" class="btn btn-primary btn-hover-border wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">Get Started <i class="ti ti-arrow-up-right"></i></a>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    </div>
@endsection


