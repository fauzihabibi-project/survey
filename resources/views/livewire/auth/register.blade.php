<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">

            <div class="card register-card shadow-lg">
                <div class="card-body p-4">

                    <div class="text-center mb-4">
                        <div class="register-icon mb-2">
                            📝
                        </div>
                        <h4 class="fw-bold mb-1">Admin Registration</h4>
                        <p class="text-muted small">
                            Create a new admin account
                        </p>
                    </div>

                    <form wire:submit.prevent="register">

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Full Name
                            </label>
                            <input type="text"
                                   class="form-control form-control-lg rounded-3"
                                   wire:model.defer="name"
                                   placeholder="Your name">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

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

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Password
                            </label>
                            <input type="password"
                                   class="form-control form-control-lg rounded-3"
                                   wire:model.defer="password"
                                   placeholder="••••••••">
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                Confirm Password
                            </label>
                            <input type="password"
                                   class="form-control form-control-lg rounded-3"
                                   wire:model.defer="password_confirmation"
                                   placeholder="••••••••">
                        </div>

                        <button class="btn btn-success btn-lg w-100 rounded-pill">
                            Register
                        </button>

                    </form>

                    <div class="text-center mt-4">
                        <small class="text-muted">
                            Already have an account?
                            <a href="/login" class="fw-semibold">
                                Login
                            </a>
                        </small>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
