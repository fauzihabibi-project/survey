<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm navbar-modern">
    <div class="container">

        <h1 class="navbar-brand fw-bold d-flex align-items-center gap-2" >
            <b>SURVEY APP</b>
        </h1>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarUser">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarUser">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3">

                <li class="nav-item">
                    <a class="nav-link nav-link-modern {{ request()->is('/') ? 'active' : '' }}"
                       href="{{ route('home-public') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link nav-link-modern {{ request()->is('leaderboard/employees') ? 'active' : '' }}"
                       href="{{ route('public.leaderboard') }}">
                        Leaderboard
                    </a>
                </li>

            </ul>
        </div>

    </div>
</nav>
