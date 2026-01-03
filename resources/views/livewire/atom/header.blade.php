<nav class="navbar navbar-expand-lg navbar-admin shadow-sm">
    <div class="container-fluid">

        {{-- BRAND --}}
        <h1 class="navbar-brand fw-bold d-flex align-items-center gap-2">
            <b>ADMIN PANEL</b>
        </h1>

        {{-- RIGHT --}}
        <div class="d-flex align-items-center gap-3">

            <div class="text-end d-none d-md-block">
                <div class="fw-semibold">{{ auth()->user()->name }}</div>
                <small class="text-muted">Administrator</small>
            </div>

            <livewire:auth.logout />

        </div>

    </div>
</nav>
