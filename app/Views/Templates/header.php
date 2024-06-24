<!DOCTYPE html>

<html lang="en">

<head>
    <title><?= $title; ?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pocket Fi">
    <meta name="keywords" content="Pocket Fi">
    <meta name="author" content="Overdoshit">
    <link rel="icon" type="image/x-icon" href="/assets/images/fav.png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css">

    <!-- Quill Text Editor -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

    <!-- Chart JS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<?php $session = session(); ?>
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" class="app-default">
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">

            <!--begin::Header-->
            <div id="kt_app_header" class="app-header  d-flex " data-kt-sticky="true" data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: 'false', lg: '300px'}">

                <!--begin::Header container-->
                <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between " id="kt_app_header_container">
                    <!--begin::Sidebar toggle-->
                    <div class="d-flex d-lg-none align-items-center ms-n2 me-2" title="Show sidebar menu">
                        <div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
                            <i class="fa-solid fa-bars fs-2"></i>
                        </div>
                    </div>
                    <!--end::Sidebar toggle-->

                    <!--begin::Logo-->
                    <div class="d-flex d-lg-none align-items-center me-auto">
                        <a href="/">
                            <img alt="Logo" src="/assets/images/logo.png" class="theme-light-show h-25px" />
                            <img alt="Logo" src="/assets/images/logo.png" class="theme-dark-show h-25px" />
                        </a>
                    </div>
                    <!--end::Logo-->

                    <!--begin::Page title-->
                    <div data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_container'}" class="page-title d-flex flex-column justify-content-center me-3 mb-6 mb-lg-0">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                            <?= $pageTitle; ?>
                        </h1>
                        <!--end::Title-->

                    </div>
                    <!--end::Page title-->

                    <!--begin::Navbar-->
                    <div class="app-navbar flex-shrink-0 " id="kt_app_aside_navbar">
                        <!--begin::User menu-->
                        <div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                            <!--begin::Menu wrapper-->
                            <div class="cursor-pointer symbol symbol-circle ms-2 symbol-35px symbol-lg-50px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <img src="<?= $session->get('imageUrl'); ?>" alt="<?= $session->get('name'); ?>" />
                            </div>

                            <!--begin::User account menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content d-flex align-items-center px-3">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-50px me-5">
                                            <img src="<?= $session->get('imageUrl'); ?>" alt="<?= $session->get('name'); ?>" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Username-->
                                        <div class="d-flex flex-column">
                                            <div class="fw-bold d-flex align-items-center fs-5">
                                                <?= $session->get('name'); ?> <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2" style="text-transform: capitalize;"><?= $session->get('role'); ?></span>
                                            </div>

                                            <div class="fw-semibold text-muted text-hover-primary fs-7"><?= $session->get('email'); ?></div>
                                        </div>
                                        <!--end::Username-->
                                    </div>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="#" class="menu-link px-5">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="fa-regular fa-gear fs-2 me-2"></i>
                                        </span>
                                        <span class="menu-title">
                                            Account Settings
                                        </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                    <a href="#" class="menu-link px-5">
                                        <span class="menu-icon" data-kt-element="icon" style="margin-right: 9px; margin-left: -3px;">
                                            <i class="fa-regular fa-sun-bright theme-light-show fs-1"></i><i class="fa-solid fa-moon theme-dark-show fs-1"></i>
                                        </span>
                                        <span class="menu-title">
                                            Mode
                                        </span>
                                    </a>

                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="fa-regular fa-sun-bright fs-2"></i>
                                                </span>
                                                <span class="menu-title">
                                                    Light
                                                </span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="fa-light fa-moon fs-2"></i>
                                                </span>
                                                <span class="menu-title">
                                                    Dark
                                                </span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3 my-0">
                                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                                <span class="menu-icon" data-kt-element="icon">
                                                    <i class="fa-light fa-desktop fs-2"></i>
                                                </span>
                                                <span class="menu-title">
                                                    System
                                                </span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->

                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-5">
                                    <a href="/logout" class="menu-link px-5">
                                        <span class="menu-icon" data-kt-element="icon">
                                            <i class="fa-regular fa-right-from-bracket fs-2 text-danger"></i>
                                        </span>
                                        <span class="menu-title text-danger">
                                            Sign Out
                                        </span>
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::User account menu-->
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::User menu-->
                    </div>
                    <!--end::Navbar-->
                </div>
                <!--end::Header container-->
            </div>
            <!--end::Header-->

            <?= $this->include('Templates/toaster'); ?>

            <!--begin::Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">