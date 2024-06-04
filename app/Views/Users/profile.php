<?= $this->include('Templates/header'); ?>
<?php $session = session(); ?>

<style>
    .card-body {
        background-color: #f6f9fc;
        border-radius: 30px;
    }

    .bg-position-center {
        background-position: center !important;
    }

    .bg-size-cover {
        background-size: cover !important;
    }

    @media (max-width: 991px) {
        .settings {
            margin-top: -100px;
        }
    }
</style>


<div class="container mt-4 mt-lg-5 mb-lg-4 my-xl-5">
    <div class="row pt-sm-2 pt-lg-0">
        <!-- Sidebar -->
        <?= $this->include('Users/sidebar'); ?>

        <!-- Page content -->
        <div class="settings col-lg-9 pt-4 pb-2 pb-sm-4">
            <h1 class="h2 mb-4">Settings</h1>

            <!-- Basic info -->
            <section class="card-body p-4 mb-4">
                <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                    <i class="ai-user text-primary lead pe-1 me-2"></i>
                    <h2 class="h4 mb-0">Basic info</h2>
                </div>
                <div class="d-flex align-items-center">
                    <div class="dropdown-image">
                        <a class="d-flex flex-column justify-content-end overflow-hidden rounded-circle bg-size-cover bg-position-center flex-shrink-0" href="#" data-bs-toggle="dropdown-image" aria-expanded="false" style="width: 80px; height: 80px; background-image: url(assets/around/assets/img/avatar/02.jpg);" aria-label="Upload picture">
                            <span class="d-block text-light text-center lh-1 pb-1" style="background-color: rgba(0,0,0,.5)">
                                <i class="fa-regular fa-camera"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu my-1">
                            <a class="dropdown-item fw-normal" href="#">
                                <i class="fa-regular fa-camera fa-fw me-1"></i>
                                Upload new photo
                            </a>
                            <a class="dropdown-item text-danger fw-normal" href="#">
                                <i class="fa-regular fa-trash-xmark fa-fw me-1"></i>
                                Delete photo
                            </a>
                        </div>
                    </div>
                    <div class="ps-3">
                        <h3 class="h6 mb-1">Profile picture</h3>
                        <p class="fs-sm text-body-secondary mb-0">PNG or JPG no bigger than 1000px wide and tall.</p>
                    </div>
                </div>
                <div class="row g-3 g-sm-4 mt-0 mt-lg-2">
                    <div class="col-sm-6">
                        <label class="form-label" for="fn">First name</label>
                        <input class="form-control" type="text" value="Isabella" id="fn">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="ln">Last name</label>
                        <input class="form-control" type="text" value="Bocouse" id="ln">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="email">Email address</label>
                        <input class="form-control" type="email" value="bocouse@example.com" id="email">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="phone">Phone <span class="text-body-secondary">(optional)</span></label>
                        <input class="form-control" type="tel" data-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}' placeholder="+1 ___ ___ __" id="phone">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="country">Country</label>
                        <select class="form-select" id="country">
                            <option value="" selected disabled>Select country</option>
                            <option value="Australia">Australia</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Canada">Canada</option>
                            <option value="Denmark">Denmark</option>
                            <option value="USA">USA</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="language">Language</label>
                        <select class="form-select" id="language">
                            <option value="" selected disabled>Select language</option>
                            <option value="English">English</option>
                            <option value="Français">Français</option>
                            <option value="Deutsch">Deutsch</option>
                            <option value="Italiano">Italiano</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="timezone">Time zone</label>
                        <select class="form-select" id="timezone">
                            <option value="" selected disabled>Select time zone</option>
                            <option value="AST">Atlantic Standard Time (AST)</option>
                            <option value="EST">Eastern Standard Time (EST)</option>
                            <option value="CST">Central Standard Time (CST)</option>
                            <option value="MST">Mountain Standard Time (MST)</option>
                            <option value="PST">Pacific Standard Time (PST)</option>
                            <option value="AKST">Alaskan Standard Time (AKST)</option>
                            <option value="HST">Hawaii-Aleutian Standard Time (HST)</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label" for="currency">Currency</label>
                        <select class="form-select" id="currency">
                            <option value="" selected disabled>Select currency</option>
                            <option value="usd">$ USD</option>
                            <option value="eur">€ EUR</option>
                            <option value="ukp">£ UKP</option>
                            <option value="jpy">¥ JPY</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="bio">Bio</label>
                        <textarea class="form-control" rows="5" placeholder="Add a bio" id="bio"></textarea>
                    </div>
                    <div class="col-12 d-sm-flex align-items-center pt-sm-2 pt-md-3">
                        <div class="form-label text-body-secondary mb-2 mb-sm-0 me-sm-4">Gender:</div>
                        <div class="form-check form-check-inline mb-0">
                            <input class="form-check-input" type="radio" name="gender" value="Male" id="male">
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline mb-0">
                            <input class="form-check-input" type="radio" name="gender" value="Female" checked id="female">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check form-check-inline mb-0">
                            <input class="form-check-input" type="radio" name="gender" value="Other" id="other">
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                    </div>
                    <div class="col-12 d-sm-flex align-items-center">
                        <div class="form-label text-body-secondary mb-2 mb-sm-0 me-sm-4">Communication:</div>
                        <div class="form-check form-check-inline mb-0">
                            <input class="form-check-input" type="checkbox" name="com-email" value="Email" checked id="c-email">
                            <label class="form-check-label" for="c-email">Email</label>
                        </div>
                        <div class="form-check form-check-inline mb-0">
                            <input class="form-check-input" type="checkbox" name="com-phone" value="Phone" id="c-phone">
                            <label class="form-check-label" for="c-phone">Phone</label>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end pt-3">
                        <button class="btn btn-secondary" type="button">Cancel</button>
                        <button class="btn btn-primary ms-3" type="button">Save changes</button>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- Sidebar toggle button when mobile view -->
<button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarAccount">
    <i class="fa-solid fa-bars me-2"></i>
    Account Menu
</button>


<?= $this->include('Templates/footer'); ?>