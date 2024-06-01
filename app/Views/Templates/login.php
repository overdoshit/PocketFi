<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header p-4 mx-2 pb-4 border-bottom-0">
                <h1 class="fw-bold mb-0 fs-2" id="loginModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-3 mx-3 pt-0">
                <form>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email Address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password">
                        <button type="button" class="btn toggle-eye" onclick="togglePasswordVisibility('floatingPassword')">
                            <i id="togglePassword" class="bi bi-eye-fill fs-4"></i>
                        </button>
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Login</button>
                    <small class="text-body-secondary">Don't have an account yet?</small> <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">Register here</a>
                    <hr class="my-3">
                    <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                    <button class="w-100 py-2 mb-3 btn btn-outline-primary rounded-3" type="button">
                        <i class="bi bi-google me-1"></i> Continue with Google Account
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>