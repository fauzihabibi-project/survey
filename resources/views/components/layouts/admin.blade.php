<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin - {{ config('app.name', 'Survey Karyawan') }}</title>

    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

    @livewireStyles

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        /* ADMIN NAVBAR */
        .navbar-admin {
            background: #fff;
            border-bottom: 1px solid #f1f3f5;
            padding: 12px 20px;
        }

        /* BRAND */
        .admin-dot {
            width: 10px;
            height: 10px;
            background: linear-gradient(135deg, #0d6efd, #6f42c1);
            border-radius: 50%;
        }

        /* USER */
        .navbar-admin .fw-semibold {
            line-height: 1.2;
        }



        /* SIDEBAR */
        .sidebar-admin {
            min-height: 100vh;
            background: #fff;
            border-right: 1px solid #f1f3f5;
        }

        /* LINK */
        .sidebar-link {
            display: flex;
            align-items: center;
            padding: 10px 14px;
            border-radius: 12px;
            font-weight: 500;
            color: #495057;
            transition: all 0.25s ease;
        }

        /* HOVER */
        .sidebar-link:hover {
            background: #f8f9fa;
            color: #0d6efd;
        }

        /* ACTIVE */
        .sidebar-link.active {
            background: #0d6efd;
            color: #fff;
        }

        .sidebar-link.active i {
            color: #fff;
        }

        /* ICON */
        .sidebar-link i {
            font-size: 1.1rem;
        }


        .avatar-placeholder {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #adb5bd;
            font-size: 1.2rem;
        }


        /* WRAPPER */
        .leaderboard-wrapper {
            background: #fff;
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.06);
        }

        /* TABLE */
        .leaderboard-table {
            border-collapse: separate;
            border-spacing: 0 10px;
        }

        .leaderboard-table thead th {
            border: none;
            color: #6c757d;
            font-weight: 600;
            font-size: 0.85rem;
            text-transform: uppercase;
        }

        /* ROW */
        .leaderboard-row {
            background: #fff;
            border-radius: 12px;
            transition: all 0.25s ease;
        }

        .leaderboard-row:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        /* AVATAR */
        .leaderboard-avatar {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            object-fit: cover;
            background: #f1f3f5;
        }

        .leaderboard-avatar.placeholder {
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #fff;
            background: linear-gradient(135deg, #0d6efd, #6f42c1);
        }

        /* RANK BADGE */
        .rank-badge {
            padding: 6px 12px;
            border-radius: 12px;
            font-weight: bold;
            font-size: 0.85rem;
        }

        /* TOP 3 */
        .rank-1 {
            background: #ffd700;
            color: #000;
        }

        .rank-2 {
            background: #c0c0c0;
            color: #000;
        }

        .rank-3 {
            background: #cd7f32;
            color: #fff;
        }

        .rank-badge:not(.rank-1):not(.rank-2):not(.rank-3) {
            background: #f1f3f5;
            color: #495057;
        }

        /* MOBILE */
        @media (max-width: 576px) {
            .leaderboard-wrapper {
                padding: 12px;
            }
        }


        .stat-card {
            border-radius: 14px;
        }

        .stat-icon {
            width: 45px;
            height: 45px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.3rem;
        }
    </style>
</head>

<body>

    {{-- TOP NAVBAR --}}
    <livewire:atom.header />

    {{-- MAIN --}}
    <div class="container-fluid">
        <div class="row">

            {{-- SIDEBAR --}}
            <livewire:atom.sidebar />

            {{-- CONTENT --}}
            <main class="col-md-9 col-lg-10 p-4">
                {{ $slot }}
            </main>

        </div>
    </div>

    <livewire:atom.footer />

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
    @livewireScripts
</body>

</html>