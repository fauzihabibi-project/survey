<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5 col-lg-4">

            <div class="card login-card shadow-lg">
                <div class="card-body p-4">

                    <div class="text-center mb-4">
                        <div class="login-icon mb-2">
                            🔐
                        </div>
                        <h4 class="fw-bold mb-1">Admin Login</h4>
                        <p class="text-muted small">
                            Please login to manage the system
                        </p>
                    </div>

                    <form wire:submit.prevent="login">

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Email Address
                            </label>
                            <input type="email"
                                   class="form-control form-control-lg rounded-3"
                                   wire:model.defer="email"
                                   placeholder="admin@email.com">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                Password
                            </label>
                            <input type="password"
                                   class="form-control form-control-lg rounded-3"
                                   wire:model.defer="password"
                                   placeholder="••••••••">
                        </div>

                        <button class="btn btn-primary btn-lg w-100 rounded-pill">
                            Login
                        </button>

                    </form>

                    <div class="text-center mt-4">
                        <small class="text-muted">
                            Don't have an account?
                            <a href="/register" class="fw-semibold">
                                Register
                            </a>
                        </small>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
