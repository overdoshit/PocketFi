<!DOCTYPE html>

<html lang="en">

<head>
    <title>Login Dashboard · Pocket Fi</title>
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

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css">

    <style>
        .invalid-feedback {
            position: absolute;
            left: 10px;
            font-size: 0.8em;
            color: red;
        }

        .form-control.is-invalid {
            background-image: none;
        }
    </style>
</head>

<!--begin::Body-->

<body id="kt_body" class="app-blank app-blank">

    <?= $this->include('Templates/toaster'); ?>

    <!--begin::App-->
    <div class="d-flex flex-column flex-root min-vh-100" id="kt_app_root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid align-items-center justify-content-center">
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid p-10 align-items-center justify-content-center">
                <!--begin::Form-->
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-100 w-md-500px p-10">

                        <!--begin::Form-->
                        <form class="form w-100" id="loginForm" action="<?= base_url('login') ?>" method="POST">
                            <!--begin::Heading-->
                            <div class="text-center mb-11">
                                <!--begin::Title-->
                                <h1 class="text-gray-900 fw-bolder mb-3">
                                    Sign In
                                </h1>
                                <!--end::Title-->

                                <!--begin::Subtitle-->
                                <div class="text-gray-500 fw-semibold fs-6">
                                    Admin Dashboard Pocket Fi
                                </div>
                                <!--end::Subtitle--->
                            </div>
                            <!--begin::Heading-->

                            <!--begin::Input group--->
                            <div class="fv-row mb-8 position-relative">
                                <!--begin::Email-->
                                <input type="email" name="email" id="email" class="form-control bg-transparent <?= session('errors.email') ? 'is-invalid' : '' ?>" placeholder="Email" autocomplete="email" value="<?= old('email') ?>" required />
                                <?php if (session('errors.email')) : ?>
                                    <div class="invalid-feedback d-block">
                                        <?= session('errors.email') ?>
                                    </div>
                                <?php endif; ?>
                                <!--end::Email-->
                            </div>

                            <!--end::Input group--->
                            <div class=" fv-row mb-8 position-relative">
                                <!--begin::Password-->
                                <input type="password" name="password" id="password" class="form-control bg-transparent <?= session('errors.password') ? 'is-invalid' : '' ?>" placeholder="Password" autocomplete="off" required />
                                <span toggle="#password" class="fa fa-fw fa-eye fs-4 field-icon toggle-password position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></span>
                                <?php if (session('errors.password')) : ?>
                                    <div class="invalid-feedback d-block">
                                        <?= session('errors.password') ?>
                                    </div>
                                <?php endif; ?>
                                <!--end::Password-->
                            </div>
                            <!--end::Input group--->

                            <!--begin::Submit button-->
                            <div class="d-grid mb-10">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary" disabled>
                                    <span class="indicator-label">Sign In</span>
                                </button>
                            </div>
                            <!--end::Submit button-->

                        </form>
                        <!--end::Form-->

                        <!--begin::Separator-->
                        <div class="separator separator-content my-14">
                            <span class="w-200px text-gray-500 fw-semibold fs-7">Or use a third-party</span>
                        </div>
                        <!--end::Separator-->

                        <!--begin::Login options-->
                        <div class="row g-3 mb-9">
                            <!--begin::Col-->
                            <div class="col-md-12">
                                <!--begin::Google link--->
                                <a href="/auth/google" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                    <img alt="Logo" src="/assets/media/svg/brand-logos/google-icon.svg" class="h-15px me-3" />
                                    Sign in with Google
                                </a>
                                <!--end::Google link--->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Login options-->

                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Form-->

                <!--begin::Footer-->
                <span class="text-center text-muted fw-semibold me-1">Copyright &copy; <?= date('Y'); ?> Pocket Fi. All rights reserved.</span>
                <!--end::Footer-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->

    </div>
    <!--end::App-->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const emailInput = document.getElementById("email");
            const passwordInput = document.getElementById("password");
            const submitButton = document.getElementById("kt_sign_in_submit");

            // Toggle password Eye
            const togglePassword = document.querySelector(".toggle-password");
            togglePassword.addEventListener("click", function(e) {
                const type =
                    passwordInput.getAttribute("type") === "password" ?
                    "text" :
                    "password";
                passwordInput.setAttribute("type", type);

                if (type === "text") {
                    togglePassword.classList.remove("fa-eye");
                    togglePassword.classList.add("fa-eye-slash");
                } else {
                    togglePassword.classList.remove("fa-eye-slash");
                    togglePassword.classList.add("fa-eye");
                }
            });

            // Button submit validate
            const validateForm = () => {
                const email = emailInput.value.trim();
                const password = passwordInput.value.trim();
                const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]+$/;

                if (email && password && emailRegex.test(email)) {
                    submitButton.removeAttribute("disabled");
                } else {
                    submitButton.setAttribute("disabled", "disabled");
                }
            };

            emailInput.addEventListener("input", validateForm);
            passwordInput.addEventListener("input", validateForm);
        });
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="/assets/js/custom/authentication/sign-in/general.js"></script>

</body>
<!--end::Body-->

</html>