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
</style>

<div class="container d-flex flex-column overflow-hidden">
    <div class="row align-items-center justify-content-center min-vh-100 text-center">
        <div class="col-lg-6 col-12">
            <div class="position-relative mb-7">
                <div class="scene d-none d-lg-block" data-relative-input="true">
                    <div class="position-absolute top-0" data-depth="0.5">
                        <img src="/assets/images/error/stars.svg" alt />
                    </div>
                </div>
                <div class="scene d-none d-lg-block" data-relative-input="true">
                    <div class="position-absolute" data-depth="0.1">
                        <img src="/assets/images/error/rocket.svg" alt />
                    </div>
                </div>
                <div class="scene d-none d-lg-block" data-relative-input="true">
                    <div class="position-absolute top-0 start-50 translate-middle" style="margin-top: -80px; margin-left: -80px" data-depth="0.1">
                        <img src="/assets/images/error/globe.svg" alt class="spinning" />
                    </div>
                </div>
                <div class="scene d-none d-lg-block" data-relative-input="true">
                    <div class="position-absolute start-50" data-depth="0.1">
                        <img src="/assets/images/error/astronut.svg" alt style="top: -110px; position: absolute; bottom: 0" />
                    </div>
                </div>
                <div class="position-relative z-n1">
                    <img src="/assets/images/error/404.svg" alt class="img-fluid" />
                </div>
                <div class="scene d-none d-lg-block" data-relative-input="true">
                    <div class="position-absolute start-100 bottom-0" style data-depth="0.1">
                        <img src="/assets/images/error/planet.svg" alt />
                    </div>
                </div>

                <h2 class="mb-1">Oops page not found</h2>
                <p class="mb-3">The page you are looking for is not available.</p>
                <a href="/" class="btn btn-primary p-2 fw-semibold">Go back to home</a>
            </div>
        </div>
    </div>
</div>

<script src="/assets/libs/parralax/parallax.min.js"></script>
<script src="/assets/libs/parralax/parallax.js"></script>

<?= $this->include('Templates/footer'); ?>