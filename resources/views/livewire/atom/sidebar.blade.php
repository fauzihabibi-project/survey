<aside class="col-md-3 col-lg-2 sidebar-admin p-3">

    <ul class="nav flex-column gap-2">

        <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}"
               class="nav-link sidebar-link {{ request()->is('dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2 me-2"></i>
                Dashboard
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('admin.employees') }}"
               class="nav-link sidebar-link {{ request()->is('employees*') ? 'active' : '' }}">
                <i class="bi bi-people me-2"></i>
                Employees
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('admin.leaderboard') }}"
               class="nav-link sidebar-link {{ request()->is('leaderboard') ? 'active' : '' }}">
                <i class="bi bi-trophy me-2"></i>
                Leaderboard
            </a>
        </li>

    </ul>

</aside>
