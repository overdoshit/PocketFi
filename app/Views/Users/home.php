<?= $this->include('Templates/header'); ?>

<section class="banner carousel slide mb-7" id="banner" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#banner" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
        <button type="button" data-bs-target="#banner" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
        <button type="button" data-bs-target="#banner" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="bd-placeholder-img" height="100%" width="100%" alt="First slide" src="/assets/images/banner-left.jpeg" data-was-processed="true">
            <div class="container">
                <div class="carousel-caption text-start">
                    <h1 class="fs-1 fw-bold">POCKET FI</h1>
                    <p class="fs-4">The best possible internet solution all over the world and is based in Indonesia.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="bd-placeholder-img" height="100%" width="100%" alt="Second slide" src="/assets/images/banner-center.jpeg" data-was-processed="true">
            <div class="container">
                <div class="carousel-caption">
                    <h1 class="fs-1 fw-bold">190+ COUNTRIES</h1>
                    <p class="fs-4">Offering Mobile WiFi, SIM Card, and E-SIM Connectivity in 190+ Countries for convenience and satisfication.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="bd-placeholder-img" height="100%" width="100%" alt="Third slide" src="/assets/images/banner-right.jpeg" data-was-processed="true">
            <div class="container">
                <div class="carousel-caption text-end">
                    <h1 class="fs-1 fw-bold">LET'S GO!!</h1>
                    <p class="fs-4">Easy Travel, Seamless Adventures : Explore the world with POCKET FI !</p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#banner" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#banner" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</section>

<section class="container pt-5" id="products">
    <div class="conteiner row row-cols-1 row-cols-sm-3 row-cols-md-3">
        <div class="products col mb-3">
            <div class="card-products text-center">
                <img class="image-products" src="/assets/images/product-mifi-indonesia.jpeg" alt="Product Mifi Indonesia" width="100%">
                <a class="btn btn-primary btn-products mb-5" href="/mobile-wifi/indonesia">Details</a>
            </div>
        </div>

        <div class="products col">
            <div class="card-products text-center mb-3">
                <img class="image-products" src="/assets/images/product-mifi-international.jpeg" alt="Product Mifi International" width="100%">
                <a class="btn btn-primary btn-products mb-5" href="/mobile-wifi/international">Details</a>
            </div>
        </div>
        <div class="products col">
            <div class="card-products text-center mb-3">
                <img class="image-products" src="/assets/images/product-sim-card.jpeg" alt="Product SIM Card" width="100%">
                <a class="btn btn-primary btn-products mb-5" href="/sim-card">Details</a>
            </div>
        </div>
    </div>
</section>

<section class="service container px-4 pt-5" id="services">
    <h2 class="pb-2 border-bottom">Our Services</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-5">
        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                <i class="fa-solid fa-wifi"></i>
            </div>
            <h3 class="fs-5 text-body-emphasis">Fast Network</h3>
            <p>Multioperator enable users automatically to get the best provider and uninterrupted connectivity.</p>
        </div>
        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                <i class="fa-solid fa-laptop-mobile"></i>
            </div>
            <h3 class="fs-5 text-body-emphasis">Connects Up to 8 Devices</h3>
            <p>Connect with any devices, anywhere, anytime.</p>
        </div>
        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                <i class="fa-solid fa-shield-halved"></i>
            </div>
            <h3 class="fs-5 text-body-emphasis">Secure & Easy to use</h3>
            <p>Secured by a encrypted protocol to keep you data safe.</p>
        </div>
        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                <i class="fa-solid fa-hand-holding-box"></i>
            </div>
            <h3 class="fs-5 text-body-emphasis">Light Weight</h3>
            <p>Lightweight and easy to carry on vacation anywhere.</p>
        </div>
        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                <i class="fa-solid fa-phone"></i>
            </div>
            <h3 class="fs-5 text-body-emphasis">24/7 Support</h3>
            <p>Friendly & Helpful Support Center with 24 Hours standby for your assistance.</p>
        </div>
    </div>
</section>

<section class="review container" id="reviews">
    <div class="slider-container swiper">
        <div class="slider-content">
            <div class="card-wrapper swiper-wrapper">
                <?php foreach ($reviews as $review) : ?>
                    <div class="card-review swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="<?= $review['imageUrl']; ?>" class="card-img" alt="<?= $review['name']; ?>" />
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name"><?= $review['name']; ?></h2>
                            <div class="start">
                                <?php for ($i = 0; $i < $review['rating']; $i++) : ?>
                                    <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                                <?php endfor; ?>
                            </div>
                            <p class="description"><?= $review['comment']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<?= $this->include('Templates/footer'); ?>