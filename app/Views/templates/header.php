<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <!-- Swiper js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script defer src="/assets/js/main.js"></script>
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Header -->
    <div class="container">
        <header class="navbar navbar-expand-lg sticky-top mb-2">
            <div class="container-fluid">
                <!-- Logo -->
                <a href="/" class="text-decoration-none">
                    <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Bootstrap" height="40">
                </a>

                <!-- Hamburger Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Hamburger Menu -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
                    <div class="offcanvas-header">
                        <a href="/" class="text-decoration-none">
                            <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Bootstrap" height="40">
                        </a>
                        <button type="button" class="btn-close fs-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <!-- Navbar Menu -->
                    <div class="offcanvas-body">
                        <nav class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item mx-2"><a class="nav-link <?= (current_url() == base_url('/')) ? 'active' : ''; ?>" href="/">Home</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Mobile Wifi
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Indonesia</a></li>
                                    <li><a class="dropdown-item" href="#">International</a></li>
                                </ul>
                            </li>
                            <li class="nav-item mx-2"><a class="nav-link <?= (current_url() == base_url('/sim-card')) ? 'active' : ''; ?>" href="#">SIM Card & E-SIM</a></li>
                            <li class="nav-item mx-2"><a class="nav-link <?= (current_url() == base_url('/how-it-works')) ? 'active' : ''; ?>" href="#">How it Works</a></li>
                            <li class="nav-item mx-2"><a class="nav-link <?= (current_url() == base_url('/contact')) ? 'active' : ''; ?>" href="/contact">Contact Us</a></li>
                            <li class="nav-item mx-2"><a class="nav-link <?= (current_url() == base_url('/faq')) ? 'active' : ''; ?>" href="#">FAQ</a></li>
                        </nav>
                        <div class="d-flex justify-content-center align-items-center gap-2">
                            <button type="button" class="btn btn-outline-primary">Login</button>
                            <button type="button" class="btn btn-primary">Sign-up</button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>