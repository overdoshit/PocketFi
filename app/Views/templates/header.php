<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        .nav-link.active {
            font-weight: bold;
        }

        @media screen and (min-width:992px) {
            .nav-link.active {
                border-bottom: 2px solid #0d6efd;
            }
        }

        .show,
        .showing,
        .hidding {
            transition: 0.3s ease-in-out;
        }

        .offcanvas-start {
            max-width: 80% !important;
        }
    </style>
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
                            <li class="nav-item mx-2"><a class="nav-link <?= (current_url() == base_url('/mobile-wifi')) ? 'active' : ''; ?>" href="#">Mobile Wifi</a></li>
                            <li class="nav-item mx-2"><a class="nav-link <?= (current_url() == base_url('/sim-card')) ? 'active' : ''; ?>" href="#">Sim Card & E-Sim</a></li>
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