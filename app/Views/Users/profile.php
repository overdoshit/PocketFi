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

    .dropdown-image {
        position: relative;
    }

    @media (max-width: 991px) {
        .settings {
            margin-top: -100px;
        }

        .dropdown-image {
            position: static;
        }
    }

    .show,
    .showing,
    .hidding {
        transition: 0.2s ease-in-out;
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
                <form action="<?= base_url('profile/update') ?>" method="post" enctype="multipart/form-data">
                    <div class="d-flex align-items-center mt-sm-n1 pb-4 mb-0 mb-lg-1 mb-xl-3">
                        <i class="ai-user text-primary lead pe-1 me-2"></i>
                        <h2 class="h4 mb-0">Basic info</h2>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="dropdown dropdown-image">
                            <a class="d-flex flex-column justify-content-end overflow-hidden rounded-circle bg-size-cover bg-position-center flex-shrink-0" href="#" data-bs-toggle="dropdown" aria-expanded="false" style="width: 80px; height: 80px; object-fit: cover; background-image: url(<?= $session->get('imageUrl'); ?>);" aria-label="Upload picture">
                                <span class="d-block text-light text-center lh-1 pb-1" style="background-color: rgba(0,0,0,.5)">
                                    <i class="fa-regular fa-camera"></i>
                                </span>
                            </a>
                            <div class="dropdown-menu">
                                <label class="dropdown-item fw-normal">
                                    <i class="fa-regular fa-camera fa-fw me-1"></i>
                                    Upload new photo
                                    <input type="file" class="d-none" id="profileImage" name="profileImage">
                                </label>
                                <a class="dropdown-item text-danger fw-normal" href="#" onclick="event.preventDefault(); var form = document.getElementById('delete-photo-form'); if (form) { form.submit(); } else { console.error('Form not found'); }">
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
                        <div class="col-12">
                            <label class="form-label" for="fn">Full name</label>
                            <input class="form-control" type="text" value="<?= session()->get('name'); ?>" name="name" placeholder="John Doe">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="email">Email address</label>
                            <input class="form-control" type="email" value="<?= session()->get('email'); ?>" name="email" placeholder="johndoe@mail.com" disabled>
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="phone">Phone<span class="text-body-secondary"> (with whatsapp preferably)</span></label>
                            <input class="form-control" type="tel" value="<?= session()->get('phone'); ?>" name="phone" placeholder="+62 __ ____ ____" id="phone">
                        </div>
                        <div class="col-12">
                            <label class="form-label" for="address">Address</label>
                            <textarea class="form-control" rows="5" name="address" placeholder="Jl. Sama Dia"><?= session()->get('address'); ?></textarea>
                        </div>

                        <div class="col-12 d-flex justify-content-end pt-3">
                            <button class="btn btn-primary ms-3" type="submit">Save changes</button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>

<!-- Hidden form for deleting photo -->
<form id="delete-photo-form" action="<?= base_url('profile/delete-photo') ?>" method="post" style="display: none;">
    <?= csrf_field() ?>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const phoneInput = document.getElementById('phone');
        if (phoneInput) {
            new Cleave(phoneInput, {
                numericOnly: true,
                blocks: [15],
                prefix: '+62',
                noImmediatePrefix: true,
                rawValueTrimPrefix: true,
                onValueChanged: function(e) {
                    const rawValue = e.target.rawValue;
                    if (rawValue.startsWith('62')) {
                        phoneInput.value = '+62' + rawValue.substring(2);
                    } else {
                        phoneInput.value = '+62' + rawValue;
                    }
                }
            });
        }
    });

    const profileImageInput = document.getElementById('profileImage');
    const profileImage = document.querySelector('.bg-size-cover.bg-position-center');

    profileImageInput.addEventListener('change', function(event) {
        const file = event.target.files[0];
        const reader = new FileReader();

        reader.onload = function(e) {
            profileImage.style.backgroundImage = `url(${e.target.result})`;
        };

        reader.readAsDataURL(file);
    });
</script>

<!-- Sidebar toggle button when mobile view -->
<button class="d-lg-none btn btn-sm fs-sm btn-primary w-100 rounded-0 fixed-bottom" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarAccount">
    <i class="fa-solid fa-bars me-2"></i>
    Account Menu
</button>

<?= $this->include('Templates/footer'); ?>