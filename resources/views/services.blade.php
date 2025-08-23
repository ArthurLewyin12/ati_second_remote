@extends('layouts.softora')

@section('title', 'Services - ATI Technologies')

@section('content')
    <!-- Breadcrumb Section -->
    <div class="breadcrumb-section bg-img" style="background-image: url('{{ asset('assets/img/bg-img/90.jpg') }}');">
        <div class="container">
            <div class="breadcrumb-content">
                <div class="divider"></div>
                <h2>Nos Services</h2>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}">Accueil</a></li>
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
                        <span class="sub-title">Nos Domaines d’Expertise</span>
                        <h2 class="mb-0">Des solutions innovantes adaptées à vos besoins</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <div class="divider-sm"></div>

        <div class="container">
            <div class="row g-4 g-xl-5">

                <!-- Domotique -->
                <div class="col-12 col-sm-6 col-xl-4">
                    <div class="service-card">
                        <div class="shape"><img src="{{ asset('assets/img/core-img/shape7.png') }}" alt=""></div>
                        <div class="service-thumb">
                            <img src="{{ asset('assets/img/bg-img/34.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">Domotique</h4>
                            <ul class="mb-0">
                                <li>Surveillance consommation électrique</li>
                                <li>Contrôle éclairage</li>
                                <li>Contrôle d’accès (garage, porte)</li>
                                <li>Contrôle température & humidité</li>
                                <li>Caméras de surveillance</li>
                                <li>Clôtures électrifiées</li>
                                <li>Portails & baies vitrées motorisés</li>
                            </ul>
                        </div>
                        <div class="service-number">01</div>
                    </div>
                </div>

                <!-- Industriel -->
                <div class="col-12 col-sm-6 col-xl-4">
                    <div class="service-card">
                        <div class="shape"><img src="{{ asset('assets/img/core-img/shape7.png') }}" alt=""></div>
                        <div class="service-thumb">
                            <img src="{{ asset('assets/img/bg-img/35.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">Industriel</h4>
                            <ul class="mb-0">
                                <li>Systèmes de contrôle</li>
                                <li>Visualisation industrielle</li>
                            </ul>
                        </div>
                        <div class="service-number">02</div>
                    </div>
                </div>

                <!-- Informatique -->
                <div class="col-12 col-sm-6 col-xl-4">
                    <div class="service-card">
                        <div class="shape"><img src="{{ asset('assets/img/core-img/shape7.png') }}" alt=""></div>
                        <div class="service-thumb">
                            <img src="{{ asset('assets/img/bg-img/36.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">Informatique</h4>
                            <ul class="mb-0">
                                <li>Sites web & identité numérique</li>
                                <li>Applications de gestion</li>
                                <li>Architectures réseaux</li>
                                <li>Assistance & maintenance</li>
                                <li>Vente de matériel informatique</li>
                            </ul>
                        </div>
                        <div class="service-number">03</div>
                    </div>
                </div>

                <!-- Télécommunication -->
                <div class="col-12 col-sm-6 col-xl-4">
                    <div class="service-card">
                        <div class="shape"><img src="{{ asset('assets/img/core-img/shape7.png') }}" alt=""></div>
                        <div class="service-thumb">
                            <img src="{{ asset('assets/img/bg-img/91.png') }}" alt="">
                        </div>
                        <div class="service-content">
                            <h4 class="service-title">Télécommunication</h4>
                            <ul class="mb-0">
                                <li>Interconnexion de sites distants</li>
                                <li>Installation de pylônes GSM</li>
                                <li>Installation VSAT</li>
                            </ul>
                        </div>
                        <div class="service-number">04</div>
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
                        <span class="sub-title">Témoignages</span>
                        <h2>Ce que nos clients disent</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="divider-sm"></div>

        <!-- Testimonial Slider -->
        <div class="testimonial-slide">
            <div class="swiper testimonial-swiper-two">
                <div class="swiper-wrapper">

                    <!-- Slide 1: Irie Emmanuel -->
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
                                    <p class="testimonial-text">“Équipe réactive et professionnelle. La domotique installée
                                        nous fait gagner du temps et réduit nos coûts énergétiques.”</p>
                                </div>
                                <div class="testimonial-author d-flex align-items-center justify-content-between gap-4">
                                    <div>
                                        <h4 class="mb-1">Irie Emmanuel</h4>
                                        <p class="mb-0">Directeur Technique</p>
                                    </div>
                                    <div>
                                        <svg width="62" height="62"><use href="#double-quote-icon"></use></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: Emmanuel Malan -->
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
                                    <p class="testimonial-text">“Très bonne maîtrise réseau et informatique.
                                        Déploiement rapide, maintenance impeccable.”</p>
                                </div>
                                <div class="testimonial-author d-flex align-items-center justify-content-between gap-4">
                                    <div>
                                        <h4 class="mb-1">Emmanuel Malan</h4>
                                        <p class="mb-0">Responsable Informatique</p>
                                    </div>
                                    <div>
                                        <svg width="62" height="62"><use href="#double-quote-icon"></use></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3: Irie Emmanuel -->
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
                                    <p class="testimonial-text">“Le système de contrôle industriel est stable et
                                        la visualisation nous donne une vue claire sur la production.”</p>
                                </div>
                                <div class="testimonial-author d-flex align-items-center justify-content-between gap-4">
                                    <div>
                                        <h4 class="mb-1">Irie Emmanuel</h4>
                                        <p class="mb-0">Chef de Projet</p>
                                    </div>
                                    <div>
                                        <svg width="62" height="62"><use href="#double-quote-icon"></use></svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4: Emmanuel Malan -->
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
                                    <p class="testimonial-text">“Excellente interconnexion de nos sites distants.
                                        La qualité de service VSAT et GSM est au rendez-vous.”</p>
                                </div>
                                <div class="testimonial-author d-flex align-items-center justify-content-between gap-4">
                                    <div>
                                        <h4 class="mb-1">Emmanuel Malan</h4>
                                        <p class="mb-0">Entrepreneur</p>
                                    </div>
                                    <div>
                                        <svg width="62" height="62"><use href="#double-quote-icon"></use></svg>
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
                    <h2 class="mb-0 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                        Construisons ensemble votre futur digital
                    </h2>
                </div>

                <div class="col-12 col-lg-6 col-xl-5">
                    <p class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                        Contactez-nous et trouvons des solutions adaptées à vos besoins technologiques et industriels.
                    </p>
                    <a href="{{ url('/contact') }}" class="btn btn-primary btn-hover-border wow fadeInUp"
                       data-wow-duration="1000ms" data-wow-delay="800ms">
                        Nous Contacter <i class="ti ti-arrow-up-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Divider -->
        <div class="divider"></div>
    </div>
@endsection
