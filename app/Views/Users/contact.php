<?= $this->include('Templates/header'); ?>

<style>
    @media (max-width: 1199px) {
        .row-cols-md-2>* {
            /* flex: 0 0 auto; */
            width: 100%;
        }
    }
</style>

<div class="container px-4 py-5">
    <h2 class="pb-1 text-center">Contact Us</h2>

    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
        <div class="col d-flex flex-column align-items-start gap-2">
            <h2 class="fw-bold text-body-emphasis">Pocket Fi</h2>
            <p class="text-body-secondary">Jl. Letnan Sutopo BSD Serpong Lengkong Gudang Timur, Rw. Mekar Jaya, Kec. Serpong, Kota Tangerang Selatan.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.691948387441!2d106.68452707580595!3d-6.3041446616982455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fad394552115%3A0xbf0c8c4f234a7e79!2sUniversitas%20Bina%20Sarana%20Informatika%20Kampus%20Bumi%20Serpong%20Damai%20(UBSI%20Kampus%20BSD)!5e0!3m2!1sid!2sid!4v1717865309173!5m2!1sid!2sid" width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col">
            <div class="row row-cols-1 row-cols-sm-2 g-5">
                <div class="col d-flex flex-row gap-2">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <i class="fa-brands fa-whatsapp fs-2"></i>
                    </div>
                    <div class="flex-column">
                        <p class="text-body-secondary m-0">WhatsApp</p>
                        <h6 class="fw-semibold mb-0 text-body-emphasis">+62 1234567890</h6>
                    </div>
                </div>

                <div class="col d-flex flex-row gap-2">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <i class="fa-regular fa-phone"></i>
                    </div>
                    <div class="flex-column">
                        <p class="text-body-secondary m-0">Office</p>
                        <h6 class="fw-semibold mb-0 text-body-emphasis">(021) 123456790</h6>
                    </div>
                </div>

                <div class="col d-flex flex-row gap-2">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <i class="fa-regular fa-envelope"></i>
                    </div>
                    <div class="flex-column">
                        <p class="text-body-secondary m-0">Email</p>
                        <h6 class="fw-semibold mb-0 text-body-emphasis">contact@pocketfi.com</h6>
                    </div>
                </div>

                <div class="col d-flex flex-row gap-2">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <i class="fa-regular fa-clock"></i>
                    </div>
                    <div class="flex-column">
                        <p class="text-body-secondary m-0">Working Hour.</p>
                        <h6 class="fw-semibold mb-0 text-body-emphasis">Everyday 10 A.M - 10 P.M</h6>
                    </div>
                </div>

                <div class="col d-flex flex-row gap-2">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <i class="fa-brands fa-facebook-f"></i>
                    </div>
                    <div class="flex-column">
                        <p class="text-body-secondary m-0">Facebook</p>
                        <h6 class="fw-semibold mb-0 text-body-emphasis">Pocket Fi</h6>
                    </div>
                </div>

                <div class="col d-flex flex-row gap-2">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <div class="flex-column">
                        <p class="text-body-secondary m-0">Instagram</p>
                        <h6 class="fw-semibold mb-0 text-body-emphasis">pocket.fi</h6>
                    </div>
                </div>

                <div class="col d-flex flex-row gap-2">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <i class="fa-brands fa-tiktok"></i>
                    </div>
                    <div class="flex-column">
                        <p class="text-body-secondary m-0">TikTok</p>
                        <h6 class="fw-semibold mb-0 text-body-emphasis">pocket.fi</h6>
                    </div>
                </div>

                <div class="col d-flex flex-row gap-2">
                    <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        <i class="fa-brands fa-twitter"></i>
                    </div>
                    <div class="flex-column">
                        <p class="text-body-secondary m-0">Twitter</p>
                        <h6 class="fw-semibold mb-0 text-body-emphasis">pocket.fi</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('Templates/footer'); ?>