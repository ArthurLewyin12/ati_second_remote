<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Softora - IT Solutions & Technology HTML Template">

    <title>@yield('title', 'IT Solutions | Softora')</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tabler-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    {{-- Remove if not present in public root --}}
    @if (file_exists(public_path('style.css')))
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    @endif
    @stack('styles')
</head>

<body>
    <div class="preloader" id="preloader">
        <div class="spinner-grow" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <div class="search-bg-overlay" id="searchOverlay"></div>

    <div class="search-form-popup">
        <h2 class="mb-4">How can I help you, Today?</h2>
        <button type="button" class="close-btn" id="searchClose" aria-label="Close">
            <i class="ti ti-x"></i>
        </button>
        <form class="search-form">
            <input type="search" class="form-control" placeholder="Search...">
            <button type="submit" class="btn btn-primary">
                <i class="ti ti-search"></i> Search
            </button>
        </form>
    </div>

    <header class="header-area style-two">
        <div class="header-top">
            <div class="container h-100 d-flex align-items-center justify-content-between">
                <div class="left-side d-flex align-items-center gap-4 gap-lg-5">
                    <div class="d-flex align-items-center gap-2 text-white">
                        <i class="ti ti-mail-filled"></i>
                        <span class="d-none d-lg-block">info@atitechnologie.com</span>
                    </div>
                    <div class="d-flex align-items-center gap-2 text-white">
                        <i class="ti ti-map-pin-filled"></i>
                        <span class="d-none d-lg-block">Abidjan, Cocody Deux Plateaux Aghien</span>
                    </div>
                    <div class="d-flex align-items-center gap-2 text-white">
                        <i class="ti ti-phone"></i>
                        <span class="d-none d-lg-block">+225 27 22 26 38 07</span>
                    </div>
                </div>

                <div class="right-side">
                    <div class="social-nav d-flex align-items-center gap-3">
                        <a href="#"><i class="ti ti-brand-facebook"></i></a>
                        <a href="#"><i class="ti ti-brand-x"></i></a>
                        <a href="#"><i class="ti ti-brand-linkedin"></i></a>
                        <a href="#"><i class="ti ti-brand-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('assets/img/logo.png') }}" width="100" height="100" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#softoraNav"
                    aria-controls="softoraNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti ti-category"></i>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="softoraNav">
                    <ul class="navbar-nav navbar-nav-scroll">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/services') }}">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/#portfolio') }}">À propos</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/#support') }}">Support</a></li>
                    </ul>

                    <div class="d-flex align-items-center mt-4 mt-lg-0">
                        {{-- <div class="header-search-btn" id="searchButton">
                            <button class="btn"><i class="ti ti-search"></i></button>
                        </div> --}}
                        <a href="{{ url('/contact') }}" class="btn btn-primary">Contactez-nous <i class="ti ti-arrow-up-right"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="footer-wrapper" id="support">
        <div class="divider"></div>
        <div class="container">
            <div class="row g-5">
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="footer-card pe-lg-5">
                        <a href="#" class="d-block mb-4">
                            <img src="{{ asset('assets/img/logo.png') }}" width="120" alt="">
                        </a>
                        <p class="mb-2">ATI TECHNOLOGIES met à votre disposition le meilleur de son expertise et de son expérience.</p>
                        <ul class="list-unstyled mb-3">
                            <li><i class="ti ti-map-pin"></i> Abidjan, Cocody Deux Plateaux Aghien (rue L43)</li>
                            <li><i class="ti ti-mail"></i> info@atitechnologie.com</li>
                            <li><i class="ti ti-phone"></i> +225 27 22 26 38 07</li>
                        </ul>
                        <div class="social-nav">
                            <a href="#"><i class="ti ti-brand-facebook"></i></a>
                            <a href="#"><i class="ti ti-brand-x"></i></a>
                            <a href="#"><i class="ti ti-brand-linkedin"></i></a>
                            <a href="#"><i class="ti ti-brand-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg">
                    <div class="footer-card">
                        <h5 class="mb-4">Liens rapides</h5>
                        <ul class="footer-nav">
                            <li><a href="{{ url('/') }}">Accueil</a></li>
                            <li><a href="{{ url('/#about') }}">A propos</a></li>
                            <li><a href="{{ url('/services') }}">Services</a></li>
                            <li><a href="{{ url('/#portfolio') }}">Portefolio</a></li>
                            <li><a href="{{ url('/#contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg">
                    <div class="footer-card">
                        <h5 class="mb-4">Services</h5>
                        <ul class="footer-nav">
                            <li><a href="{{ url('/services') }}#automatisme">Automatisme</a></li>
                            <li><a href="{{ url('/services') }}#telecommunication">Télécommunication</a></li>
                            <li><a href="{{ url('/services') }}#informatique">Informatique</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg">
                    <div class="footer-card">
                        <h5 class="mb-4">Pourquoi nous choisir ?</h5>
                        <ul class="footer-nav">
                            <li>A — Sécurité des personnes, des machines et de la production</li>
                            <li>T — Temps limité, exécution dans les meilleurs délais</li>
                            <li>I — Impliqué, qualité de service de niveau industriel</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div class="copyright-wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <p class="mb-3 mb-md-0 copyright">Copyright © <span id="year">{{ date('Y') }}</span> <a href="#">ATI TECHNOLOGIES</a>
                            Tous droits réservés.</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="footer-bottom-nav">
                            <a href="{{ url('/services') }}">Services</a>
                            <a href="{{ url('/#portfolio') }}">À propos</a>
                            <a href="{{ url('/contact') }}">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <button id="scrollTopButton" class="softora-scrolltop scrolltop-hide">
        <i class="ti ti-chevron-up"></i>
    </button>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/slideToggle.min.js') }}"></script>
    <script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script src="{{ asset('assets/js/cookiealert.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/active.js') }}"></script>
    @stack('scripts')
</body>

</html>
