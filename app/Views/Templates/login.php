<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-4 mx-2 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2" id="loginModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-3 mx-3 pt-0">
                <form id="loginForm" action="<?= base_url('login') ?>" method="post">

                    <div class="form-floating mb-4">
                        <input type="email" class="form-control rounded-3 <?= session('errors.email') ? 'is-invalid' : '' ?>" id="floatingInput" name="email" autocomplete="email" placeholder="name@example.com" value="<?= old('email') ?>" required>
                        <label for="floatingInput">Email Address</label>
                        <?php if (session('errors.email')) : ?>
                            <div class="invalid-feedback d-block">
                                <?= session('errors.email') ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="password" class="form-control rounded-3 <?= session('errors.password') ? 'is-invalid' : '' ?>" id="floatingPassword" name="password" autocomplete="current-password" placeholder="Password" required>
                        <label for="floatingPassword">Password</label>
                        <button type="button" class="btn toggle-eye" onclick="togglePasswordVisibility('floatingPassword', 'togglePassword')">
                            <i id="togglePassword" class="bi bi-eye-fill fs-4"></i>
                        </button>
                        <?php if (session('errors.password')) : ?>
                            <div class="invalid-feedback d-block">
                                <?= session('errors.password') ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Login</button>
                    <small class="text-body-secondary">Don't have an account yet?</small> <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">Register here</a>
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

<?php if (session('modal') === 'login') : ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
            loginModal.show();
        });
    </script>
<?php endif; ?>