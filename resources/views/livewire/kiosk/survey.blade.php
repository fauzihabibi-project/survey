<div class="container py-5 survey-wrapper">

    @if (session()->has('success'))
        <div class="alert alert-success text-center fs-4 py-3 mb-4 rounded-4">
            ✅ {{ session('success') }}
        </div>
    @endif

    <div class="row g-5 align-items-center">

        {{-- KIRI: PROFILE + RATING --}}
        <div class="col-md-5 text-center">

            <div class="employee-avatar-wrapper mx-auto mb-3">
                @if($employee->photo)
                    <img src="{{ asset('storage/'.$employee->photo) }}"
                         class="employee-avatar">
                @else
                    <div class="employee-avatar placeholder">
                        {{ strtoupper(substr($employee->name,0,1)) }}
                    </div>
                @endif
            </div>

            <h3 class="fw-bold mb-1">{{ $employee->name }}</h3>
            <p class="text-muted fs-5 mb-4">{{ $employee->position }}</p>

            <h5 class="fw-semibold mb-3">Rate Our Service</h5>

            <div class="rating-stars mb-2">
                @for($i = 1; $i <= 5; $i++)
                    <span wire:click="$set('rating', {{ $i }})"
                          class="star {{ $rating >= $i ? 'active' : '' }}">
                        ★
                    </span>
                @endfor
            </div>

            @error('rating')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        {{-- KANAN: FORM --}}
        <div class="col-md-7">

            <div class="survey-form-card">

                <div class="mb-4">
                    <label class="form-label fs-5 fw-semibold">
                        Your Name
                    </label>
                    <input type="text"
                           class="form-control form-control-lg rounded-3"
                           wire:model.defer="client_name"
                           placeholder="Enter your name">
                    @error('client_name')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="form-label fs-5 fw-semibold">
                        Message (optional)
                    </label>
                    <textarea class="form-control fs-5 rounded-3"
                              rows="4"
                              wire:model.defer="message"
                              placeholder="Write your feedback..."></textarea>
                </div>

                <div class="text-end">
                    <button class="btn btn-primary btn-lg px-5 rounded-pill submit-btn"
                            wire:click="submit">
                        Submit Feedback
                    </button>
                </div>

            </div>

        </div>

    </div>
</div>
