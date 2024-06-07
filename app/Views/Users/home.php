<?= $this->include('Templates/header'); ?>

<section class="banner carousel slide mb-7" id="myCarousel" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="bd-placeholder-img" height="100%" width="100%" alt="First slide" src="/assets/images/banner-left.jpeg" data-was-processed="true">
            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>POCKET FI</h1>
                    <p>The best possible internet solution all over the world and is based in Indonesia.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="bd-placeholder-img" height="100%" width="100%" alt="Second slide" src="/assets/images/banner-center.jpeg" data-was-processed="true">
            <div class="container">
                <div class="carousel-caption">
                    <h1>190+ COUNTRIES</h1>
                    <p>Offering Mobile WiFi, SIM Card, and E-SIM Connectivity in 190+ Countries for convenience and satisfication.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="bd-placeholder-img" height="100%" width="100%" alt="Third slide" src="/assets/images/banner-right.jpeg" data-was-processed="true">
            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>LET'S GO!!</h1>
                    <p>Easy Travel, Seamless Adventures : Explore the world with POCKET FI !</p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</section>

<section class="container py-5">
    <div class="conteiner row row-cols-1 row-cols-sm-3 row-cols-md-3">
        <div class="products col mb-3">
            <div class="card-products text-center">
                <img class="image-products" src="https://sandbox.pinjamwifi.com/wp-content/uploads/2023/10/indonesia-wifi.jpg" alt="products" width="100%">
                <button type="button" class="btn btn-primary btn-products mb-5">Primary</button>
            </div>
        </div>

        <div class="products col">
            <div class="card-products text-center mb-3">
                <img class="image-products" src="https://sandbox.pinjamwifi.com/wp-content/uploads/2023/10/indonesia-wifi.jpg" alt="products" width="100%">
                <button type="button" class="btn btn-primary btn-products mb-5">Primary</button>
            </div>
        </div>
        <div class="products col">
            <div class="card-products text-center mb-3">
                <img class="image-products" src="https://sandbox.pinjamwifi.com/wp-content/uploads/2023/10/indonesia-wifi.jpg" alt="products" width="100%">
                <button type="button" class="btn btn-primary btn-products mb-5">Primary</button>
            </div>
        </div>
    </div>
</section>

<section class="service container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Columns with icons</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-4">
        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                <i class="bi bi-collection"></i>
            </div>
            <h3 class="fs-2 text-body-emphasis">Featured title</h3>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        </div>
        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                <i class="bi bi-person-circle"></i>
            </div>
            <h3 class="fs-2 text-body-emphasis">Featured title</h3>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        </div>
        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                <i class="bi bi-toggles2"></i>
            </div>
            <h3 class="fs-2 text-body-emphasis">Featured title</h3>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        </div>
        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                <i class="bi bi-toggles2"></i>
            </div>
            <h3 class="fs-2 text-body-emphasis">Featured title</h3>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
        </div>
    </div>
</section>

<section class="review container">
    <div class="slider-container swiper">
        <div class="slider-content">
            <div class="card-wrapper swiper-wrapper">
                <div class="card-review swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img src="/assets/images/default.jpg" class="card-img" alt="" />
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">John Doe</h2>
                        <div class="start">
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                        </div>
                        <p class="description">
                            Lorem ipsum, dolor sit amet
                            consecteturadipisicing elit. Rerum sint
                            voluptatibus deleniti molestias eveniet ea
                            saepe, voluptatem consectetur est vel corporis
                            repellat necessitatibus, recusandae
                            reprehenderit amet fugiat illum ullam minus.
                            Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Illo quo eligendi ex quod
                            molestias corrupti non ducimus sequi ad dicta
                            corporis dignissimos nesciunt nihil, asperiores,
                            vel fuga. Magnam, qui cupiditate!
                        </p>
                    </div>
                </div>
                <div class="card-review swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img src="/assets/images/default.jpg" class="card-img" alt="" />
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">John Doe</h2>
                        <div class="start">
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star-half" style="color: #FFD43B;"></i>
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Labore expedita aliquam, aut
                            quia eum nihil.
                        </p>
                    </div>
                </div>
                <div class="card-review swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img src="/assets/images/default.jpg" class="card-img" alt="" />
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">John Doe</h2>
                        <div class="start">
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Labore expedita aliquam, aut
                            quia eum nihil.
                        </p>
                    </div>
                </div>
                <div class="card-review swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img src="/assets/images/default.jpg" class="card-img" alt="" />
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">John Doe</h2>
                        <div class="start">
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star-half" style="color: #FFD43B;"></i>
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Labore expedita aliquam, aut
                            quia eum nihil.
                        </p>
                    </div>
                </div>
                <div class="card-review swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img src="/assets/images/default.jpg" class="card-img" alt="" />
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">John Doe</h2>
                        <div class="start">
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star-half" style="color: #FFD43B;"></i>
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Labore expedita aliquam, aut
                            quia eum nihil.
                        </p>
                    </div>
                </div>
                <div class="card-review swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img src="/assets/images/default.jpg" class="card-img" alt="" />
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">John Doe</h2>
                        <div class="start">
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star-half" style="color: #FFD43B;"></i>
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Labore expedita aliquam, aut
                            quia eum nihil.
                        </p>
                    </div>
                </div>
                <div class="card-review swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img src="/assets/images/default.jpg" class="card-img" alt="" />
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">John Doe</h2>
                        <div class="start">
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star-half" style="color: #FFD43B;"></i>
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Labore expedita aliquam, aut
                            quia eum nihil.
                        </p>
                    </div>
                </div>
                <div class="card-review swiper-slide">
                    <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                            <img src="/assets/images/default.jpg" class="card-img" alt="" />
                        </div>
                    </div>
                    <div class="card-content">
                        <h2 class="name">John Doe</h2>
                        <div class="start">
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star" style="color: #ffd43b"></i>
                            <i class="fa-solid fa-star-half" style="color: #FFD43B;"></i>
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit, amet consectetur
                            adipisicing elit. Labore expedita aliquam, aut
                            quia eum nihil.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<?= $this->include('Templates/footer'); ?>