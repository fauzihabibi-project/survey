<div class="container py-5">

    <h2 class="mb-2 text-center fw-bold">Select Employees</h2>
    <p class="text-center text-muted mb-5">
        Tap one of our employees to give your feedback
    </p>

    <div class="row g-4">
        @foreach($employees as $employee)
            <div class="col-6 col-md-4 col-lg-3">

                <a href="{{ route('survey.employee', $employee->id) }}"
                   class="employee-card-link">

                    <div class="card employee-card text-center h-100">

                        <div class="employee-photo-wrapper">
                            @if($employee->photo)
                                <img src="{{ asset('storage/'.$employee->photo) }}"
                                     class="employee-photo">
                            @else
                                <div class="employee-photo placeholder">
                                    {{ strtoupper(substr($employee->name, 0, 1)) }}
                                </div>
                            @endif
                        </div>

                        <div class="card-body">
                            <h5 class="mb-1 fw-semibold">{{ $employee->name }}</h5>
                            <p class="text-muted small mb-0">
                                {{ $employee->position }}
                            </p>
                        </div>

                    </div>
                </a>

            </div>
        @endforeach
    </div>

</div>
