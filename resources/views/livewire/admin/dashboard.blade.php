<div class="container-fluid py-4">

    {{-- HEADER --}}
    <div class="mb-4">
        <h3 class="fw-bold mb-0">Dashboard</h3>
        <small class="text-muted">Survey system summary</small>
    </div>

    {{-- STAT CARDS --}}
    <div class="row g-4 mb-4">

        <div class="col-md-3">
            <div class="card stat-card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="text-muted">Total Employees</h6>
                            <h3 class="fw-bold">{{ $totalEmployees }}</h3>
                        </div>
                        <div class="stat-icon bg-primary">
                            <i class="fa fa-users"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card stat-card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="text-muted">Total Survey</h6>
                            <h3 class="fw-bold">{{ $totalSurveys }}</h3>
                        </div>
                        <div class="stat-icon bg-success">
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card stat-card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="text-muted">Average Rating</h6>
                            <h3 class="fw-bold">{{ number_format($avgRating, 1) }}</h3>
                        </div>
                        <div class="stat-icon bg-warning">
                            <i class="fa fa-chart-line"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card stat-card shadow-sm border-0">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6 class="text-muted">Active Employees</h6>
                            <h3 class="fw-bold">{{ $activeEmployees }}</h3>
                        </div>
                        <div class="stat-icon bg-info">
                            <i class="fa fa-user-check"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="row mt-4">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="fw-semibold mb-3">
                        📊 Survey Masuk Tahun {{ now()->year }}
                    </h5>

                    <canvas id="surveyChart" height="100"></canvas>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body text-center">
                    <h5 class="fw-semibold mb-3">🏆 Top Employee</h5>

                    @if($topEmployee)
                    <img src="{{ asset('storage/'.$topEmployee->photo) }}"
                        class="rounded-circle mb-3"
                        style="width:80px;height:80px;object-fit:cover">

                    <h6 class="mb-0">{{ $topEmployee->name }}</h6>
                    <small class="text-muted">{{ $topEmployee->position }}</small>

                    <div class="mt-2 text-warning fs-5">
                        ⭐ {{ number_format($topEmployee->avg_rating,1) }}
                    </div>
                    @else
                    <p class="text-muted">Belum ada data</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.addEventListener('livewire:init', () => {
    const ctx = document.getElementById('surveyChart');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($chartLabels),
            datasets: [{
                label: 'Total Survey',
                data: @json($chartData),
                tension: 0.4,
                fill: true,
                borderWidth: 2,
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
</script>
@endpush
