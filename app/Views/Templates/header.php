<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pocket Fi">
    <meta name="keywords" content="Pocket Fi">
    <meta name="author" content="Overdoshit">
    <link rel="icon" type="image/x-icon" href="/assets/images/fav.png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css">

    <!-- Swiper js -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- Cleve.js for phone number input -->
    <script src="https://cdn.jsdelivr.net/npm/cleave.js@1.6.0/dist/cleave.min.js"></script>

    <!-- My Custom -->
    <link rel="stylesheet" href="/assets/css/main.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script defer src="/assets/js/main.js"></script>
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Header -->
    <div class="container-header"> <!-- Can add sticky-top -->
        <header class="navbar navbar-expand-lg">
            <div class="container-fluid container">
                <!-- Logo -->
                <a href="/" class="text-decoration-none">
                    <img src="/assets/images/logo.png" alt="Pocket Fi" height="35">
                </a>

                <!-- Hamburger Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Hamburger Menu -->
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
                    <div class="offcanvas-header">
                        <a href="/" class="text-decoration-none">
                            <img src="/assets/images/logo.png" alt="Pocket Fi" height="35">
                        </a>
                        <button type="button" class="btn-close fs-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <!-- Navbar Menu -->
                    <div class="offcanvas-body">
                        <nav class="navbar-nav justify-content-center flex-grow-1">
                            <li class="nav-item mx-2">
                                <a class="nav-link <?= (current_url() == base_url('/')) ? 'active' : ''; ?>" href="/">Home</a>
                            </li>
                            <li class="nav-item dropdown dropdown-hover mx-2">
                                <div class="nav-link dropdown-toggle <?= (current_url() == base_url('/mobile-wifi/indonesia') || current_url() == base_url('/mobile-wifi/international')) ? 'active' : ''; ?>">
                                    Mobile Wifi
                                </div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item <?= (current_url() == base_url('/mobile-wifi/indonesia')) ? 'active' : ''; ?>" href="/mobile-wifi/indonesia">Indonesia</a></li>
                                    <li><a class="dropdown-item <?= (current_url() == base_url('/mobile-wifi/international')) ? 'active' : ''; ?>" href="/mobile-wifi/international">International</a></li>
                                </ul>
                            </li>
                            <li class="nav-item mx-2"><a class="nav-link <?= (current_url() == base_url('/sim-card')) ? 'active' : ''; ?>" href="/sim-card">SIM Card & E-SIM</a></li>
                            <li class="nav-item mx-2"><a class="nav-link <?= (current_url() == base_url('/how-it-works')) ? 'active' : ''; ?>" href="/how-it-works">How it Works</a></li>
                            <li class="nav-item mx-2"><a class="nav-link <?= (current_url() == base_url('/contact')) ? 'active' : ''; ?>" href="/contact">Contact Us</a></li>
                            <li class="nav-item mx-2"><a class="nav-link <?= (current_url() == base_url('/faq')) ? 'active' : ''; ?>" href="/faq">FAQ</a></li>
                        </nav>

                        <!-- Auth & Profile Buttons (Mobile) -->
                        <div class="auth-profile-mobile d-lg-none">
                            <?php if (session('email')) : ?>
                                <div class="dropdown-hover btn-profile">
                                    <div class="profile btn btn-success px-2 d-flex justify-content-between align-items-center" role="button" id="userDropdownMobile" aria-expanded="false">
                                        <img src="<?= session('imageUrl'); ?>" alt="Profile" style="width: 30px; height: 30px; object-fit: cover;" class="rounded-circle">
                                        <i class="fa-solid fa-bars ms-2 fs-5 me-2"></i>
                                    </div>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item <?= (current_url() == base_url('/profile')) ? 'active' : ''; ?>" href="/profile"><i class="fa-regular fa-user me-2"></i>Profile</a></li>
                                        <li><a class="dropdown-item text-danger <?= (current_url() == base_url('/logout')) ? 'active' : ''; ?>" href="/logout"><i class="fa-regular fa-right-from-bracket me-2"></i>Logout</a></li>
                                    </ul>
                                </div>
                            <?php else : ?>
                                <div class="btn-auth">
                                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <!-- Auth & Profile Buttons (Desktop) -->
                <div class="auth-profile-desktop d-none d-lg-flex">
                    <?php if (session('email')) : ?>
                        <div class="dropdown-hover btn-profile">
                            <a class="profile btn btn-success px-2 d-flex justify-content-between align-items-center" role="button" id="userDropdown" aria-expanded="false">
                                <img src="<?= session('imageUrl'); ?>" alt="Profile" style="width: 30px; height: 30px; object-fit: cover;" class="rounded-circle">
                                <i class="fa-solid fa-bars ms-2 fs-5 me-2"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item <?= (current_url() == base_url('/profile')) ? 'active' : ''; ?>" href="/profile"><i class="fa-regular fa-user me-2"></i>Profile</a></li>
                                <li><a class="dropdown-item text-danger <?= (current_url() == base_url('/logout')) ? 'active' : ''; ?>" href="/logout"><i class="fa-regular fa-right-from-bracket me-2"></i>Logout</a></li>
                            </ul>
                        </div>
                    <?php else : ?>
                        <div class="btn-auth">
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </header>
    </div>

    <?= $this->include('Templates/toaster'); ?>
    <?= $this->include('Templates/login'); ?>
    <?= $this->include('Templates/register'); ?>