@extends('layouts.softora')

@section('title', 'Accueil - IT Solutions')

@section('content')
    <section class="hero-section" style="background-image: url('{{ asset('assets/img/core-img/grid3.png') }}');">
        <div class="divider"></div>
        <div class="container">
            <div class="hero-content">
                <div class="row g-5">
                    <div class="col-12 col-md-6">
                        <h2 class="mb-0 wow fadeInUp text-white" data-wow-duration="1000ms" data-wow-delay="400ms">LA TECHNOLOGIE À
                            <span>VOTRE SERVICE</span>
                        </h2>
                        {{-- <ul class="mt-4 text-white">
                            <li>Automatiser vos actions</li>
                            <li>Moderniser votre entreprise</li>
                            <li>Informatiser vos systèmes</li>
                        </ul> --}}
                    </div>
                    <div class="col-12 col-md-6 col-xl-5 offset-xl-1 col-xxl-4 offset-xxl-1">
                        <p class="text-white wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">ATI Technologies est spécialisée dans l'Automatisme, la Télécommunication et l'Informatique. Nous fournissons des solutions adaptées aux entreprises, industriels et particuliers.</p>
                        <a class="btn border-2 btn-outline-light wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms" href="{{ url('/#services') }}">Découvrir <i class="ti ti-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    </section>

    <div class="cta-wrap jarallax" data-jarallax data-speed="0.6" style="background-image: url('{{ asset('assets/img/bg-img/back.png') }}');">
        <div class="divider"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-12 col-sm-11 col-md-10 col-lg-7 col-xl-6 col-xxl-5">
                    <div class="cta-card">
                        <div class="total-clients-wrap">
                            <div class="total-number ">
                                <h3 class="">50+</h3>
                                <p class="mb-0">Clients satisfaits</p>
                            </div>
                            <div class="clients-images">
                                <img src="{{ asset('assets/img/loxone.png') }}"  alt="">
                                <img src="{{ asset('assets/img/partenair2.png') }}" alt="">
                                <img src="{{ asset('assets/img/loxone.png') }}"  alt="">
                                <img src="{{ asset('assets/img/partenair2.png') }}" alt="">

                            </div>
                        </div>
                        <div class="cta-stats">
                            <div><h2>50+</h2><p class="mb-0">Clients satisfaits</p></div>
                            <div><h2>5+</h2><p class="mb-0">Années d'expérience</p></div>
                            <div><h2>15+</h2><p class="mb-0">Projets terminés</p></div>
                            <div><h2>5</h2><p class="mb-0">Membres de l'équipe</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    </div>

    <section class="about-section" id="about">
        <div class="right-shape">
            <img src="{{ asset('assets/img/core-img/shape.png') }}" alt="">
        </div>
        <div class="divider"></div>
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-content ps-md-4">
                        <div class="section-heading">
                            <span class="sub-title">Bienvenue à ATI TECHNOLOGIES</span>
                            <h2 class="mb-4">À Votre Service</h2>
                            <p class="mb-5">ATI Technologies est spécialisée dans l'Automatisme , la Télécommunication et l'Informatique.
                                ATI Technologie fournit des solutions adaptées aux besoins des entreprises, des industriels, et des particuliers.
                                Elle assure également dans les plus brefs délais la rénovation et la transition de système informatique et de télécommunication vers des systèmes automatisés.</p>
                                <p class="mb-5">Nous existons depuis 2021 et nous sommes basés à Abidjan, Côte d'Ivoire.</p>
                                <ul class="about-list ps-0 d-flex flex-column gap-3 list-unstyled mb-5">
                                <li class="d-flex align-items-center gap-2">
                                    <div class="icon"><i class="ti ti-arrow-right"></i></div>
                                    <h5 class="mb-0">Automatisation des processus de production et/ou de traitement.</h5>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                        <div class="icon"><i class="ti ti-arrow-right"></i></div>
                                        <h5 class="mb-0">Intégration des solutions mécaniques, électriques ou informatique.</h5>
                                </li>
                                <li class="d-flex align-items-center gap-2">
                                    <div class="icon"><i class="ti ti-arrow-right"></i></div>
                                    <h5 class="mb-0">Modernisation et/ou rénovation de système informatique et de télécommunication.</h5>
                                </li>
                            </ul>
                            <a class="btn btn-primary" href="{{ url('/#contact') }}">Contactez-nous <i class="ti ti-arrow-up-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    {{-- <div class="about-video-content wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                        <img src="{{ asset('assets/img/home2.png') }}" alt="">
                        <div class="play-video-btn video-btn" data-video="https://youtu.be/4GUFkrHvZdE">
                            <div class="icon"><i class="ti ti-player-play-filled"></i></div>
                        </div>
                    </div> --}}
                    <div class="about-images d-flex px-5 mt-5 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
                        <div><img class="w-100" src="{{ asset('assets/img/home1.png') }}" alt=""></div>
                        <div>
                            <svg class="rotatingImage" xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70" fill="none">
                                <path d="M35 0L46.1369 23.8631L70 35L46.1369 46.1369L35 70L23.8631 46.1369L0 35L23.8631 23.8631L35 0Z" fill="#222222" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    </section>

    <div id="videoPopup" class="video-popup-iframe">
        <div class="video-content">
            <span class="close-btn" id="videoCloseButton"><i class="ti ti-x"></i></span>
            <div class="ratio ratio-16x9">
                <iframe id="videoFrame" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <section class="service-section bg-secondary" id="services">
        <div class="bg-shape"><img src="{{ asset('assets/img/core-img/shape2.png') }}" alt=""></div>
        <div class="divider"></div>
        <div class="container">
            <div class="row align-items-end g-4 g-xl-5">
                <div class="col-12 col-md-6">
                    <div class="section-heading"><span class="sub-title">Nos Services</span><h2 class="mb-0">Ce que nous faisons</h2></div>
                </div>
                <div class="col-12 col-md-5 offset-md-1">
                    <div class="section-heading"><p class="mb-0">Automatisme (industriel & domotique), Informatique, et Télécommunication pour booster votre productivité et sécuriser vos systèmes.</p></div>
                </div>
            </div>
            <div class="divider-sm"></div>
            <div class="row g-4 g-xl-5">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="service-nav nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <div class="service-nav-item active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                    <g clip-path="url(#clip0_1_448)">
                                        <mask id="mask0_1_448" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="36" height="36">
                                            <path d="M36 0H0V36H36V0Z" fill="white" />
                                            <path d="M31.9681 21.8425C29.7827 26.5987 24.9899 29.6719 19.7579 29.6719C18.6641 29.6719 17.5845 29.5398 16.5389 29.2827L14.2617 31.5298C16.0121 32.159 17.8678 32.4844 19.7579 32.4844C22.9257 32.4844 25.9959 31.5716 28.6365 29.8449C31.2081 28.1633 33.2439 25.8021 34.5237 23.0168L31.9681 21.8425Z" fill="white" />
                                            <path d="M6.75717 19.6212C6.47374 18.5268 6.32812 17.393 6.32812 16.2416H3.51562C3.51562 18.1722 3.85327 20.0625 4.50682 21.8418L6.75717 19.6212Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask0_1_448)">
                                            <mask id="mask1_1_448" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="36" height="36">
                                                <path d="M0 3.8147e-06H36V36H0V3.8147e-06Z" fill="white" />
                                            </mask>
                                            <g mask="url(#mask1_1_448)">
                                                <path d="M26.8535 13.0595L23.1837 16.7115C22.6656 17.2299 21.9858 17.4892 21.3065 17.4892C20.6272 17.4892 19.9475 17.2299 19.4293 16.7115C18.3922 15.6746 18.3922 13.9937 19.4293 12.9568L23.0812 9.28716C22.0889 8.82499 21.0043 8.55949 19.8374 8.55949C15.5608 8.55949 12.0937 12.0265 12.0937 16.3032C12.0937 17.4701 12.3591 18.5724 12.8214 19.5647L2.18408 30.0614C1.14697 31.0983 1.14697 32.7793 2.18408 33.8162C2.70221 34.3345 3.382 34.5938 4.06121 34.5938C4.74057 34.5938 5.42028 34.3345 5.93842 33.8162L16.5759 23.3193C17.5682 23.7815 18.6706 24.0469 19.8374 24.0469C24.1142 24.0469 27.5812 20.58 27.5812 16.3032C27.5812 15.1364 27.3157 14.0518 26.8535 13.0595Z" stroke="#601FEB" stroke-width="2.2" stroke-miterlimit="10" />
                                                <path d="M31.9681 21.8425C29.7827 26.5987 24.9899 29.6719 19.7579 29.6719C18.6641 29.6719 17.5845 29.5398 16.5389 29.2827L14.2617 31.5298C16.0121 32.159 17.8678 32.4844 19.7579 32.4844C22.9257 32.4844 25.9959 31.5716 28.6365 29.8449C31.2081 28.1633 33.2439 25.8021 34.5237 23.0168L31.9681 21.8425Z" fill="#601FEB" />
                                                <path d="M6.75717 19.6212C6.47374 18.5268 6.32812 17.393 6.32812 16.2416H3.51562C3.51562 18.1722 3.85327 20.0625 4.50682 21.8418L6.75717 19.6212Z" fill="#601FEB" />
                                                <path d="M6.1748 10.2656C8.47374 5.04837 13.6904 1.40625 19.7578 1.40625C27.9514 1.40625 34.5937 8.04853 34.5937 16.2422" stroke="#601FEB" stroke-width="2.2" stroke-miterlimit="10" />
                                                <path d="M10.4766 10.4766H4.85156V4.85156" stroke="#601FEB" stroke-width="2.2" stroke-miterlimit="10" />
                                                <path d="M28.9688 22.0078H34.5937V27.6328" stroke="#601FEB" stroke-width="2.2" stroke-miterlimit="10" />
                                            </g>
                                        </g>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1_448">
                                            <rect width="36" height="36" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <h4 class="mb-0">Automatisme</h4>
                        </div>
                        <div class="service-nav-item" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                    <g clip-path="url(#clip0_1_478)">
                                        <path d="M15.1875 34.5938C15.1875 31.1464 13.2398 27.9949 10.1564 26.4532L9.5625 26.1562L18 13.3594L26.4375 26.1562L25.8436 26.4532C22.7602 27.9949 20.8125 31.1464 20.8125 34.5938" stroke="#2B4DFF" stroke-width="2.2" stroke-miterlimit="10" />
                                        <path d="M10.9688 34.5938H25.0312" stroke="#2B4DFF" stroke-width="2.2" stroke-miterlimit="10" />
                                        <path d="M2.53125 4.21875H33.4688" stroke="#2B4DFF" stroke-width="2.2" stroke-miterlimit="10" />
                                        <path d="M18 24.75V13.3594" stroke="#2B4DFF" stroke-width="2.2" stroke-miterlimit="10" />
                                        <path d="M18 8.4375V0" stroke="#2B4DFF" stroke-width="2.2" stroke-miterlimit="10" />
                                        <path d="M0 18.2812H8.15625" stroke="#2B4DFF" stroke-width="2.2" stroke-miterlimit="10" />
                                        <path d="M27.8438 18.2812H36" stroke="#2B4DFF" stroke-width="2.2" stroke-miterlimit="10" />
                                        <path d="M3.9375 18.2812C3.9375 10.5147 10.2335 4.21875 18 4.21875C25.7665 4.21875 32.0625 10.5147 32.0625 18.2812" stroke="#2B4DFF" stroke-width="2.2" stroke-miterlimit="10" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1_478">
                                            <rect width="36" height="36" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <h4 class="mb-0">Informatique</h4>
                        </div>
                        <div class="service-nav-item" id="v-pills-contact-tab" data-bs-toggle="pill" data-bs-target="#v-pills-contact" role="tab" aria-controls="v-pills-contact" aria-selected="false">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                    <g clip-path="url(#clip0_1_492)">
                                        <mask id="mask0_1_492" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="36" height="36">
                                            <path d="M0 3.8147e-06H36V36H0V3.8147e-06Z" fill="white" />
                                        </mask>
                                        <g mask="url(#mask0_1_492)">
                                            <path d="M19.4062 20.8125C19.4062 21.5892 18.7767 22.2188 18 22.2188C17.2233 22.2188 16.5938 21.5892 16.5938 20.8125C16.5938 20.0358 17.2233 19.4063 18 19.4063C18.7767 19.4063 19.4062 20.0358 19.4062 20.8125Z" fill="#601FEB" />
                                            <path d="M25.0312 26.4375H10.9688V15.1875H25.0312V26.4375Z" stroke="#601FEB" stroke-width="2.2" stroke-miterlimit="10" />
                                            <path d="M13.7812 15.1875V10.9688C13.7812 8.6388 15.6701 6.75 18 6.75C20.3299 6.75 22.2188 8.6388 22.2188 10.9688V15.1875" stroke="#601FEB" stroke-width="2.2" stroke-miterlimit="10" />
                                            <path d="M12.3628 2.27398C14.0457 1.7112 15.8466 1.40625 17.7188 1.40625C27.0383 1.40625 34.5938 8.96119 34.5938 18.2813C34.5938 22.6033 32.969 26.5458 30.2969 29.5312H36" stroke="#601FEB" stroke-width="2.2" stroke-miterlimit="10" />
                                            <path d="M23.9726 33.6099C22.1945 34.2468 20.2784 34.5938 18.2812 34.5938C8.96168 34.5938 1.40625 27.0388 1.40625 17.7188C1.40625 13.3968 3.0311 9.45422 5.70312 6.46875H0" stroke="#601FEB" stroke-width="2.2" stroke-miterlimit="10" />
                                        </g>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1_492">
                                            <rect width="36" height="36" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <h4 class="mb-0">Télécommunication</h4>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="tab-content ps-lg-4" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="service-tab-content">
                                <img src="{{ asset('assets/img/automatisme.jpg') }}" alt="">
                                <div class="service-tab-card">
                                    <h4 class="mb-2">Automatisme</h4>
                                    <p class="mb-2"><strong>Industriel:</strong></p>
                                    <ul class="d-flex flex-column gap-2 list-unstyled mt-3">
                                        <li><i class="ti ti-circle-check"></i> Automatisation des processus de production et/ou de traitement.</li>
                                        <li><i class="ti ti-circle-check"></i> Intégration des solutions mécaniques, électriques ou informatique.</li>
                                        <li><i class="ti ti-circle-check"></i> Formation des agents à l'exécution et la maintenance d'un système automatisé ou semi automatisé.</li>
                                    </ul>
                                    <p class="mb-2 mt-4"><strong>Domotique:</strong></p>
                                    <p>Automatisation des habitations.</p>
                                    <a class="btn btn-primary mt-4" href="#">Read More <i class="ti ti-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <div class="service-tab-content">
                                <img src="{{ asset('assets/img/informatique.jpg') }}" alt="">
                                <div class="service-tab-card">
                                    <h4 class="mb-2">Informatique</h4>
                                    <p>Propose un service informatique indispensable à tout type d'entreprise, grâce à des outils de plus en plus puissants et performants, permettant d'améliorer considérablement l'exécution des tâches en favorisant la collaboration et le partage des données entre les différentes équipes / services.</p>
                                    <a class="btn btn-primary mt-4" href="#">Read More <i class="ti ti-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
                            <div class="service-tab-content">
                                <img src="{{ asset('assets/img/telecom.jpg') }}" alt="">
                                <div class="service-tab-card">
                                    <h4 class="mb-2">Télécommunication</h4>
                                    <p>Fourniture et/ou installation d'équipements de télécommunication (routers, switch, etc.), essentiellement pour des entités morales (entreprises), mais également pour des particuliers.</p>
                                    <a class="btn btn-primary mt-4" href="#">Read More <i class="ti ti-arrow-up-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    </section>

    <section class="process-section">
        <div class="divider"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-5 col-xl-7">
                    <div class="section-heading text-center">
                        <span class="sub-title">Notre processus de travail</span>
                        <h2 class="mb-0">Notre Approche</h2>
                    </div>
                </div>
            </div>
            <div class="divider-sm"></div>
            <div class="process-wrap">
                <div class="row g-4 g-lg-5">
                    <div class="col-12 col-md-4">
                        <div class="process-card wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                            <div class="process-thumb"><img src="{{ asset('assets/img/bg-img/13.jpg') }}" alt=""><div class="number">1</div></div>
                            <div class="process-text"><h5 class="process-title mb-3">Analyse & Conseil</h5><p class="mb-0">Nous commençons par une analyse approfondie de vos besoins pour vous proposer les solutions technologiques les plus adaptées à vos objectifs.</p></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="process-card wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="process-thumb"><img src="{{ asset('assets/img/bg-img/14.jpg') }}" alt=""><div class="number">2</div></div>
                            <div class="process-text"><h5 class="process-title mb-3">Déploiement & Intégration</h5><p class="mb-0">Nos experts déploient et intègrent les nouvelles solutions à votre environnement existant, en minimisant l'impact sur vos opérations.</p></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="process-card wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
                            <div class="process-thumb"><img src="{{ asset('assets/img/bg-img/15.jpg') }}" alt=""><div class="number">3</div></div>
                            <div class="process-text"><h5 class="process-title mb-3">Formation & Suivi</h5><p class="mb-0">Nous assurons la formation de vos équipes et un suivi rigoureux pour garantir une prise en main optimale et des performances durables.</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </section>

    {{-- <section class="showcase-section softora-container bg-dark" id="portfolio">
        <div class="divider"></div>
        <div class="container">
            <div class="row softora-filter g-4 g-md-5">
                <div class="col-12 col-sm-6 filter-item showcase-item">
                    <div class="showcase-card wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                        <div class="showcase-thumb"><img src="{{ asset('assets/img/bg-img/16.jpg') }}" alt=""><a href="#" class="btn"><i class="ti ti-arrow-up-right"></i></a></div>
                        <div class="showcase-content"><p>Branding / Technology / Marketing</p><h2>Building Responsive Websites for Better User Accessibility</h2></div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 filter-item showcase-item">
                    <div class="showcase-card wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="showcase-thumb"><img src="{{ asset('assets/img/bg-img/17.jpg') }}" alt=""><a href="#" class="btn"><i class="ti ti-arrow-up-right"></i></a></div>
                        <div class="showcase-content"><p>Branding / Technology / Marketing</p><h2>Web Revamp and E-Commerce Platform Redesign</h2></div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 filter-item showcase-item">
                    <div class="showcase-card wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                        <div class="showcase-thumb"><img src="{{ asset('assets/img/bg-img/18.jpg') }}" alt=""><a href="#" class="btn"><i class="ti ti-arrow-up-right"></i></a></div>
                        <div class="showcase-content"><p>Branding / Technology / Marketing</p><h2>Building Scalable Cloud Structure for Growing Startups</h2></div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 filter-item showcase-item">
                    <div class="showcase-card wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="showcase-thumb"><img src="{{ asset('assets/img/bg-img/19.jpg') }}" alt=""><a href="#" class="btn"><i class="ti ti-arrow-up-right"></i></a></div>
                        <div class="showcase-content"><p>Branding / Technology / Marketing</p><h2>Innovative Web Portal Creation for an Enhanced UX Experience</h2></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    </section> --}}

    <!-- <section class="team-section">
        <div class="divider"></div>
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-12 col-sm-10 col-md-4">
                    <div class="section-heading"><span class="sub-title">Our Team</span><h2 class="mb-4">Our Expert Team is Always Ready to Help you</h2><p class="mb-5">Meet the talented and passionate individuals driving our innovation and success. Our expert team combines years of experience.</p><a href="#" class="btn btn-primary">Get to Know Us <i class="ti ti-arrow-up-right"></i></a></div>
                </div>
                <div class="col-12 col-md-8">
                    <div class="ps-xl-5">
                        <div class="row align-items-center g-2 g-lg-3 g-xxl-5">
                            <div class="col-12 col-sm"><div class="d-flex flex-column gap-xl-4 gap-xxl-5"><div class="team-card"><img src="{{ asset('assets/img/bg-img/8.jpg') }}" alt=""><div class="team-member-info"><h4>John Doe</h4><span>UI/UX Designer</span></div></div><div class="team-card"><img src="{{ asset('assets/img/bg-img/9.jpg') }}" alt=""><div class="team-member-info"><h4>John Doe</h4><span>UI/UX Designer</span></div></div></div></div>
                            <div class="col-12 col-sm col-lg-5"><div class="team-card middle-team-card"><img src="{{ asset('assets/img/bg-img/10.jpg') }}" alt=""><div class="team-member-info"><h4>Edoardo Romussi</h4><span>UI/UX Designer</span></div></div></div>
                            <div class="col-12 col-sm"><div class="d-flex flex-column gap-xl-4 gap-xxl-5"><div class="team-card"><img src="{{ asset('assets/img/bg-img/11.jpg') }}" alt=""><div class="team-member-info"><h4>John Doe</h4><span>UI/UX Designer</span></div></div><div class="team-card"><img src="{{ asset('assets/img/bg-img/12.jpg') }}" alt=""><div class="team-member-info"><h4>John Doe</h4><span>UI/UX Designer</span></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    </section> -->

    <section class="testimonial-section bg-secondary">
        <div class="divider"></div>
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-lg-4">
                    <div class="h-100 d-flex flex-column justify-content-between">
                         <div class="testimonial-countdown">
                            <div class="imgs-group mb-4">
                                <img src="{{ asset('assets/img/bg-img/5.jpg') }}" alt="">
                                <img src="{{ asset('assets/img/bg-img/6.jpg') }}" alt="">
                                <img src="{{ asset('assets/img/bg-img/7.jpg') }}" alt="">
                                <div><span class="counter">10</span>k</div>
                            </div>
                            <h4 class="mb-0">Des clients Satisfaits</h4>
                        </div>
                        <div class="swiper-navigation-container mt-5">
                            <div class="testimonial-button-prev"><i class="ti ti-arrow-left"></i></div>
                            <div class="testimonial-button-next"><i class="ti ti-arrow-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="section-heading">
                        <!-- <span class="sub-title">Testimonial</span> -->
                        <h2 class="mb-0">Ce que nos clients <br>disent de nous</h2></div>
                    <div class="divider-sm"></div>
                    <div class="testimonial-slide">
                        <div class="swiper testimonial-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="testimonial-thumbnail"><img src="{{ asset('assets/img/bg-img/4.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-info">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="40" viewBox="0 0 60 40" fill="none">
                                                <path d="M58.6207 0C59.2341 0 59.7854 0.424145 59.9513 1.05329C60.1353 1.75286 59.7835 2.48528 59.1324 2.75457C54.8083 4.54586 51.6329 7.61643 49.6735 11.8959C55.6703 13.503 59.9998 19.149 59.9998 25.7143C59.9998 33.5917 53.81 40 46.2018 40C38.5937 40 32.4046 33.5917 32.4046 25.7143C32.3931 25.6061 31.1752 4.30729 58.4116 0.0159988C58.4819 0.00485611 58.5513 0 58.6207 0ZM46.2018 37.1429C52.2879 37.1429 57.2388 32.0159 57.2388 25.7143C57.2388 19.9596 53.0805 15.0879 47.5668 14.3834C47.1463 14.329 46.7727 14.0786 46.5544 13.7033C46.3353 13.328 46.2949 12.8697 46.4452 12.4596C47.5526 9.43157 49.1286 6.86114 51.1588 4.76357C34.3216 10.8573 35.15 25.4416 35.1615 25.6083C35.1656 32.0159 40.1165 37.1429 46.2018 37.1429Z" fill="#601FEB" />
                                                <path d="M26.2269 0C26.8403 0 27.3916 0.424145 27.5575 1.05329C27.7415 1.75286 27.3897 2.48528 26.7386 2.75457C22.4145 4.54586 19.2391 7.61643 17.2797 11.8959C23.2765 13.503 27.606 19.149 27.606 25.7143C27.606 33.5917 21.4162 40 13.808 40C6.19994 40 0.0107918 33.5917 0.0107918 25.7143C-0.000663757 25.6061 -1.21865 4.30729 26.0178 0.0159988C26.0881 0.00485611 26.1575 0 26.2269 0ZM13.808 37.1429C19.8941 37.1429 24.845 32.0159 24.845 25.7143C24.845 19.9596 20.6867 15.0879 15.173 14.3834C14.7525 14.329 14.3789 14.0786 14.1606 13.7033C13.9415 13.328 13.9011 12.8697 14.0514 12.4596C15.1588 9.43157 16.7348 6.86114 18.765 4.76357C1.92776 10.8573 2.75622 25.4416 2.76768 25.6083C2.77182 32.0159 7.7227 37.1429 13.808 37.1429Z" fill="#601FEB" />
                                            </svg>
                                            <p class="testimonial-text mt-4">"Grâce à l'expertise d'ATI Technologies en automatisme, nous avons pu moderniser notre chaîne de production. Le résultat : un gain de productivité de 20% et une nette amélioration de la sécurité pour nos équipes. Leur accompagnement et la formation ont été irréprochables."</p>
                                            <h4 class="name">Emmanuel Malan</h4>
                                            <p class="designation mb-0">Directeur de Production</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial-card">
                                        <div class="testimonial-thumbnail"><img src="{{ asset('assets/img/bg-img/4.jpg') }}" alt="">
                                        </div>
                                        <div class="testimonial-info">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="40" viewBox="0 0 60 40" fill="none">
                                                <path d="M58.6207 0C59.2341 0 59.7854 0.424145 59.9513 1.05329C60.1353 1.75286 59.7835 2.48528 59.1324 2.75457C54.8083 4.54586 51.6329 7.61643 49.6735 11.8959C55.6703 13.503 59.9998 19.149 59.9998 25.7143C59.9998 33.5917 53.81 40 46.2018 40C38.5937 40 32.4046 33.5917 32.4046 25.7143C32.3931 25.6061 31.1752 4.30729 58.4116 0.0159988C58.4819 0.00485611 58.5513 0 58.6207 0ZM46.2018 37.1429C52.2879 37.1429 57.2388 32.0159 57.2388 25.7143C57.2388 19.9596 53.0805 15.0879 47.5668 14.3834C47.1463 14.329 46.7727 14.0786 46.5544 13.7033C46.3353 13.328 46.2949 12.8697 46.4452 12.4596C47.5526 9.43157 49.1286 6.86114 51.1588 4.76357C34.3216 10.8573 35.15 25.4416 35.1615 25.6083C35.1656 32.0159 40.1165 37.1429 46.2018 37.1429Z" fill="#601FEB" />
                                                <path d="M26.2269 0C26.8403 0 27.3916 0.424145 27.5575 1.05329C27.7415 1.75286 27.3897 2.48528 26.7386 2.75457C22.4145 4.54586 19.2391 7.61643 17.2797 11.8959C23.2765 13.503 27.606 19.149 27.606 25.7143C27.606 33.5917 21.4162 40 13.808 40C6.19994 40 0.0107918 33.5917 0.0107918 25.7143C-0.000663757 25.6061 -1.21865 4.30729 26.0178 0.0159988C26.0881 0.00485611 26.1575 0 26.2269 0ZM13.808 37.1429C19.8941 37.1429 24.845 32.0159 24.845 25.7143C24.845 19.9596 20.6867 15.0879 15.173 14.3834C14.7525 14.329 14.3789 14.0786 14.1606 13.7033C13.9415 13.328 13.9011 12.8697 14.0514 12.4596C15.1588 9.43157 16.7348 6.86114 18.765 4.76357C1.92776 10.8573 2.75622 25.4416 2.76768 25.6083C2.77182 32.0159 7.7227 37.1429 13.808 37.1429Z" fill="#601FEB" />
                                            </svg>
                                            <p class="testimonial-text mt-4">"La solution informatique et réseau mise en place par ATI a transformé notre manière de travailler. La collaboration entre nos équipes est plus fluide et nos données sont enfin centralisées et sécurisées. Un partenaire fiable et réactif que je recommande vivement."</p>
                                            <h4 class="name">Irie Emmanuel</h4>
                                            <p class="designation mb-0">Gérant d'entreprise</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-circles"><img src="{{ asset('assets/img/core-img/circles.png') }}" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="trusted-clients-logo">
            <div class="container">
                {{-- <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <h2 class="mb-0">Nos partenaires</h2>
                        </div>
                    </div>
                </div> --}}
                <div class="row g-4 align-items-center justify-content-center">
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="partner-logo">
                            <img src="{{ asset("assets/img/loxone.png") }}" alt="Loxone">
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="partner-logo">
                            <img src="{{ asset("assets/img/partenair2.png") }}" alt="SW">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    </section>

    <!-- <section class="blog-section bg-white">
        <div class="divider"></div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-xl-6">
                    <div class="section-heading text-center"><span class="sub-title">Our Blogs</span><h2 class="mb-0">Recent Blog & Articles about Technology</h2></div>
                </div>
            </div>
        </div>
        <div class="divider-sm"></div>
        <div class="container">
            <div class="row g-4 g-xxl-5 justify-content-center">
                @foreach ([1,2,3] as $n)
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="blog-card wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="{{ 200 + $n*200 }}ms">
                            <div class="post-img"><img src="{{ asset("assets/img/bg-img/$n.jpg") }}" alt=""></div>
                            <div class="post-body">
                                <div class="blog-meta flex-wrap d-flex align-items-center gap-2">
                                    <a href="#">Knowledge</a>
                                    <div class="dot"></div>
                                    <a href="#">26 June {{ date('Y') }}</a>
                                </div>
                                <a class="post-title h4" href="#">Sample blog post {{ $n }}</a>
                                <a class="read-more-btn" href="#">Learn More <i class="ti ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="divider"></div>
    </section> -->

    <div class="cta-wrapper bg-img" style="background-image: url({{ asset('assets/img/core-img/grid.jpg') }})">
        <div class="divider"></div>
        <div class="container">
            <div class="row g-4 g-xl-5 align-items-center">
                <div class="col-12 col-lg-6 col-xl-7">
                    <h2 class="mb-0 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Prêt à transformer votre entreprise ?</h2>
                </div>
                <div class="col-12 col-lg-6 col-xl-5">
                    <p class="wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">Contactez-nous dès aujourd'hui pour discuter de votre projet. Notre équipe d'experts est prête à vous accompagner et à vous proposer des solutions sur mesure.</p>
                    <a href="#" class="btn btn-primary btn-hover-border wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">Demander un devis <i class="ti ti-arrow-up-right"></i></a>
                </div>
            </div>
        </div>
        <div class="divider"></div>
    </div>
@endsection
