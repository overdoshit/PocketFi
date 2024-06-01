<?= $this->include('Templates/header'); ?>

<section class="banner carousel slide mb-6" id="myCarousel" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="bd-placeholder-img" height="100%" width="100%" alt="First slide" src="https://travelwifi.id/wp-content/uploads/2023/05/homepage-kejepit_.jpg" data-was-processed="true">
            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Example headline.</h1>
                    <p class="opacity-75">Some representative placeholder content for the first slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="bd-placeholder-img" height="100%" width="100%" alt="Second slide" src="https://travelwifi.id/wp-content/uploads/2022/01/background-.jpg" data-was-processed="true">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="bd-placeholder-img" height="100%" width="100%" alt="Third slide" src="https://travelwifi.id/wp-content/uploads/2022/08/background.jpg" data-was-processed="true">
            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>One more for good measure.</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
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

<section class="container product">
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
                <div class="card-header py-3 text-bg-primary border-primary">
                    <h4 class="my-0 fw-normal">Mobile Wifi Indonesia</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Click Here</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
                <div class="card-header py-3 text-bg-primary border-primary">
                    <h4 class="my-0 fw-normal">Mobile Wifi International</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$15<small class="text-body-secondary fw-light">/mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>20 users included</li>
                        <li>10 GB of storage</li>
                        <li>Priority email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Click Here</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
                <div class="card-header py-3 text-bg-primary border-primary">
                    <h4 class="my-0 fw-normal">International SIM Card & E-SIM</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$29<small class="text-body-secondary fw-light">/mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>30 users included</li>
                        <li>15 GB of storage</li>
                        <li>Phone and email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="w-100 btn btn-lg btn-primary">Click Here</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="service container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">Columns with icons</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                <i class="bi bi-collection"></i>
            </div>
            <h3 class="fs-2 text-body-emphasis">Featured title</h3>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link">
                Read more
                <i class="bi bi-chevron-right"></i>
            </a>
        </div>
        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                <i class="bi bi-person-circle"></i>
            </div>
            <h3 class="fs-2 text-body-emphasis">Featured title</h3>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link">
                Read more
                <i class="bi bi-chevron-right"></i>
            </a>
        </div>
        <div class="feature col">
            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
                <i class="bi bi-toggles2"></i>
            </div>
            <h3 class="fs-2 text-body-emphasis">Featured title</h3>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link">
                Read more
                <i class="bi bi-chevron-right"></i>
            </a>
        </div>
    </div>
</section>

<section class="review container">
    <div class="slider-container swiper">
        <div class="slider-content">
            <div class="card-wrapper swiper-wrapper">
                <div class="card swiper-slide">
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
                <div class="card swiper-slide">
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
                <div class="card swiper-slide">
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
                <div class="card swiper-slide">
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
                <div class="card swiper-slide">
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
                <div class="card swiper-slide">
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
                <div class="card swiper-slide">
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
                <div class="card swiper-slide">
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