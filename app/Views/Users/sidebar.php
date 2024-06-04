<?php $session = session(); ?>

<style>
    .offcanvas-start {
        max-width: 85% !important;
    }

    .navbar {
        z-index: 0;
    }

    .menu-link {
        display: flex;
        text-decoration: none;
        color: var(--bs-dark);
    }

    .menu-link:hover {
        color: #0d6efd;
    }

    .position-lg-sticky {
        position: -webkit-sticky !important;
        position: sticky !important;
    }

    .fs-xs {
        font-size: 10px;
    }

    .fs-sm {
        font-size: 13px;
    }

    .aside-card {
        background-color: #f6f9fc;
        padding: 0 20px;
        border-radius: 30px;
        margin-top: 85px;
        margin-bottom: 50px;
    }

    .active-menu {
        color: #0d6efd;
    }

    @media (max-width: 991px) {

        .offcanvas-lg.showing,
        .offcanvas-lg.hiding,
        .offcanvas-lg.show {
            visibility: visible;
        }
    }
</style>

<aside class="col-lg-3 pe-lg-4 pe-xl-5 mt-n3">
    <div class="aside-card position-lg-sticky top-0">
        <div class="offcanvas-lg offcanvas-start" id="sidebarAccount">
            <button class="btn-close fs-3 position-absolute top-0 end-0 mt-3 me-2 d-lg-none" type="button" data-bs-dismiss="offcanvas" data-bs-target="#sidebarAccount" aria-label="Close"></button>
            <div class="offcanvas-body d-block py-3">
                <div class="pb-2 pb-lg-0 mb-4 mb-lg-5">
                    <img class="d-block rounded-circle my-2" src="<?= $session->get('imageUrl'); ?>" width="80" alt="Profile Image">
                    <h3 class="h5 mb-1"><?= $session->get('name'); ?></h3>
                    <p class="fs-sm text-body-secondary mb-0"><?= $session->get('email'); ?></p>
                </div>
                <div class="menu flex-column pb-2 pb-lg-4 mb-3">
                    <h4 class="fs-xs fw-medium text-body-secondary text-uppercase pb-1 mb-2">Account</h4>
                    <a class="menu-link fw-semibold py-2 px-0" href="#">
                        <i class="fa-regular fa-user-check fs-5 me-1"></i>
                        Overview
                    </a>
                    <a class="menu-link fw-semibold py-2 px-0 active-menu" href="/profile">
                        <i class="fa-regular fa-gear fs-5 me-2"></i>
                        Settings
                    </a>
                    <a class="menu-link fw-semibold py-2 px-0" href="#">
                        <i class="fa-regular fa-wallet fs-5 me-2"></i>
                        Billing
                    </a>
                </div>
                <div class="menu flex-column pb-2 pb-lg-4 mb-1">
                    <h4 class="fs-xs fw-medium text-body-secondary text-uppercase pb-1 mb-2">Dashboard</h4>
                    <a class="menu-link fw-semibold py-2 px-0" href="#">
                        <i class="fa-regular fa-cart-shopping fs-5 me-2"></i>
                        Orders
                    </a>
                    <a class="menu-link fw-semibold py-2 px-0" href="#">
                        <i class="fa-regular fa-wave-pulse fs-5 me-1"></i>
                        Earnings
                    </a>
                    <a class="menu-link fw-semibold py-2 px-0" href="#">
                        <i class="fa-regular fa-message-dots fs-5 me-2"></i>
                        Chat
                        <span class="badge bg-danger ms-auto p-2">3</span>
                    </a>
                    <a class="menu-link fw-semibold py-2 px-0" href="#">
                        <i class="fa-regular fa-heart fs-5 me-2"></i>
                        Favorites
                    </a>
                </div>
                <div class="menu flex-column">
                    <a class="text-danger menu-link fw-semibold py-2 px-0" href="#">
                        <i class="fa-regular fa-right-from-bracket fs-5 me-2"></i>
                        Sign out
                    </a>
                </div>
            </div>
        </div>
    </div>
</aside>