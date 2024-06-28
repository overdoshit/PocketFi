<?= $this->include('Templates/header'); ?>

<style>
    @keyframes spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .spinning {
        animation: spin 5s linear infinite;
    }

    .btn-warning {
        background-color: #FBD010;
        color: #000000;
        border: 0px;
    }

    .btn-warning:hover {
        background-color: #FCD940;
        color: #000000;
    }

    .btn-warning:active {
        background-color: #D2AC04 !important;
        color: #000000 !important;
    }
</style>

<div class="container d-flex flex-column overflow-hidden">
    <div class="row align-items-center justify-content-center min-vh-100 text-center">
        <div class="col-lg-6 col-12">
            <div class="position-relative mb-7">
                <div class="scene d-none d-lg-block" data-relative-input="true">
                    <div class="position-absolute" data-depth="0.1">
                        <img src="/assets/images/error/repairing-tools.svg" style="height: 90px;" alt />
                    </div>
                </div>
                <div class="scene d-none d-lg-block" data-relative-input="true">
                    <div class="position-absolute top-0 start-50 translate-middle" style="margin-top: -80px; margin-left: -80px" data-depth="0.1">
                        <img src="/assets/images/error/gear.svg" alt style="height: 60px;" class="spinning" />
                    </div>
                </div>
                <div class="scene d-none d-lg-block" data-relative-input="true">
                    <div class="position-absolute start-50" data-depth="0.1">
                        <img src="/assets/images/error/repairing-browser.svg" style="height: 120px; position: absolute; left: 170px; top:-110px" alt />
                    </div>
                </div>
                <div class="position-relative z-n1">
                    <img src="/assets/images/error/503.svg" alt class="img-fluid" />
                </div>
                <div class="scene d-none d-lg-block" data-relative-input="true">
                    <div class="position-absolute start-100 bottom-0" style data-depth="0.1">
                        <img src="/assets/images/error/hammer.svg" style="height: 90px;" alt />
                    </div>
                </div>

                <img class="w-100 mb-2" src="/assets/images/error/caution-stripes.svg" style="height: 30px; object-fit: cover;" alt>
                <h2 class="mb-1">Under Maintenance</h2>
                <p class="mb-3">The page you are looking for is under maintenance.</p>
                <a href="/" class="btn btn-warning p-2 fw-semibold">Go back to home</a>
            </div>
        </div>
    </div>
</div>

<script src="/assets/libs/parralax/parallax.min.js"></script>
<script src="/assets/libs/parralax/parallax.js"></script>

<?= $this->include('Templates/footer'); ?>