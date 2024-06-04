<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-4 mx-2 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2" id="registerModalLabel">Register</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-3 mx-3 pt-0">
                <form id="registerForm" action="<?= base_url('register') ?>" method="post">

                    <div class="form-floating mb-4 position-relative">
                        <input type="text" class="form-control rounded-3 <?= session('errors.name') ? 'is-invalid' : '' ?>" id="floatingName" name="name" autocomplete="name" placeholder="Your Name" value="<?= old('name') ?>" required>
                        <label for="floatingName">Name</label>
                        <?php if (session('errors.name')) : ?>
                            <div class="invalid-feedback d-block">
                                <?= session('errors.name') ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="form-floating mb-4 position-relative">
                        <input type="email" class="form-control rounded-3 <?= session('errors.newEmail') ? 'is-invalid' : '' ?>" id="floatingEmail" name="newEmail" autocomplete="email" placeholder="name@example.com" value="<?= old('newEmail') ?>" required>
                        <label for="floatingEmail">Email Address</label>
                        <?php if (session('errors.newEmail')) : ?>
                            <div class="invalid-feedback d-block">
                                <?= session('errors.newEmail') ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="form-floating mb-3 position-relative">
                        <input type="password" class="form-control rounded-3 <?= session('errors.newPassword') ? 'is-invalid' : '' ?>" id="floatingNewPassword" name="newPassword" autocomplete="new-password" placeholder="Password" oninput="checkPasswordStrength('floatingNewPassword', 'newPasswordStrengthMeter', 'newPasswordStrengthText')" required>
                        <label for="floatingNewPassword">Password</label>
                        <button type="button" class="btn toggle-eye" onclick="togglePasswordVisibility('floatingNewPassword', 'toggleNewPassword')">
                            <i id="toggleNewPassword" class="bi bi-eye-fill fs-4"></i>
                        </button>
                        <?php if (session('errors.newPassword')) : ?>
                            <div class="invalid-feedback d-block">
                                <?= session('errors.newPassword') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <div class="progress position-relative">
                            <div id="newPasswordStrengthMeter" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                <span id="newPasswordStrengthText" class="text-light"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-floating mb-3 position-relative">
                        <input type="password" class="form-control rounded-3 <?= session('errors.confirmPassword') ? 'is-invalid' : '' ?>" id="floatingConfirmPassword" name="confirmPassword" autocomplete="new-password" placeholder="Confirm Password" oninput="checkPasswordStrength('floatingConfirmPassword', 'confirmPasswordStrengthMeter', 'confirmPasswordStrengthText')" required>
                        <label for="floatingConfirmPassword">Confirm Password</label>
                        <button type="button" class="btn toggle-eye" onclick="togglePasswordVisibility('floatingConfirmPassword', 'toggleConfirmPassword')">
                            <i id="toggleConfirmPassword" class="bi bi-eye-fill fs-4"></i>
                        </button>
                        <?php if (session('errors.confirmPassword')) : ?>
                            <div class="invalid-feedback d-block">
                                <?= session('errors.confirmPassword') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <div class="progress position-relative">
                            <div id="confirmPasswordStrengthMeter" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                <span id="confirmPasswordStrengthText" class="text-light"></span>
                            </div>
                        </div>
                    </div>

                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Register</button>
                    <small class="text-body-secondary">Already have an account?</small> <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">Login here</a>
                    <hr class="my-3">
                    <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                    <button class="w-100 py-2 mb-3 btn btn-outline-primary rounded-3" type="button" onclick="continueWithGoogle()">
                        <div class="bg-icon bg-white d-inline-flex me-1"><i class="bi bi-google"></i></div>Continue with Google Account
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php if (session('modal') === 'register') : ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var registerModal = new bootstrap.Modal(document.getElementById('registerModal'));
            registerModal.show();
        });
    </script>
<?php endif; ?>