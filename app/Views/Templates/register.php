<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-4 mx-2 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2" id="registerModalLabel">Register</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-3 mx-3 pt-0">
                <form>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-3" id="floatingName" placeholder="Your Name">
                        <label for="floatingName">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-3" id="floatingEmail" placeholder="name@example.com">
                        <label for="floatingEmail">Email Address</label>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="password" class="form-control rounded-3" id="floatingNewPassword" autocomplete="new-password" placeholder="Password" oninput="checkPasswordStrength('floatingNewPassword', 'newPasswordStrengthMeter', 'newPasswordStrengthText')">
                        <button type="button" class="btn toggle-eye" onclick="togglePasswordVisibility('floatingNewPassword')">
                            <i id="toggleNewPassword" class="bi bi-eye-fill fs-4"></i>
                        </button>
                        <label for="floatingNewPassword">Password</label>
                    </div>
                    <div class="mb-3">
                        <div class="progress">
                            <div id="newPasswordStrengthMeter" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small id="newPasswordStrengthText" class="form-text text-muted"></small>
                    </div>
                    <div class="form-floating mb-1">
                        <input type="password" class="form-control rounded-3" id="floatingConfirmPassword" autocomplete="new-password" placeholder="Confirm Password" oninput="checkPasswordStrength('floatingConfirmPassword', 'confirmPasswordStrengthMeter', 'confirmPasswordStrengthText')">
                        <button type="button" class="btn toggle-eye" onclick="togglePasswordVisibility('floatingConfirmPassword')">
                            <i id="toggleConfirmPassword" class="bi bi-eye-fill fs-4"></i>
                        </button>
                        <label for="floatingConfirmPassword">Confirm Password</label>
                    </div>
                    <div class="mb-3">
                        <div class="progress">
                            <div id="confirmPasswordStrengthMeter" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small id="confirmPasswordStrengthText" class="form-text text-muted"></small>
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Register</button>
                    <small class="text-body-secondary">Already have an account?</small> <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">Login here</a>
                    <hr class="my-3">
                    <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                    <button class="w-100 py-2 mb-3 btn btn-outline-primary rounded-3" type="button">
                    <div class="bg-icon bg-white d-inline-flex me-1"><i class="bi bi-google"></i></div>Continue with Google Account
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>