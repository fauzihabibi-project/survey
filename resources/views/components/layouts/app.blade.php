<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Survey Karyawan') }}</title>

    {{-- CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">


    {{-- Livewire Styles --}}
    @stack('css')
    @livewireStyles

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        /* LINK RESET */
        .employee-card-link {
            text-decoration: none;
            color: inherit;
        }

        /* CARD */
        .employee-card {
            border: none;
            border-radius: 16px;
            padding-top: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        /* HOVER EFFECT */
        .employee-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.12);
        }

        /* PHOTO WRAPPER */
        .employee-photo-wrapper {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        /* PHOTO */
        .employee-photo {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #f1f3f5;
            background: #fff;
        }

        /* PLACEHOLDER FOTO */
        .employee-photo.placeholder {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(135deg, #0d6efd, #6f42c1);
            color: #fff;
            font-size: 42px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* RESPONSIVE TOUCH (KIOSK) */
        @media (max-width: 576px) {
            .employee-card {
                padding-top: 10px;
            }
        }


        /* NAVBAR MODERN */
        .navbar-modern {
            border-bottom: 1px solid #f1f3f5;
        }

        /* BRAND */
        .navbar-modern .navbar-brand {
            font-size: 1.2rem;
        }

        .brand-dot {
            width: 10px;
            height: 10px;
            background: linear-gradient(135deg, #0d6efd, #6f42c1);
            border-radius: 50%;
        }

        /* LINK */
        .nav-link-modern {
            position: relative;
            font-weight: 500;
            color: #495057 !important;
            padding: 8px 12px;
            border-radius: 10px;
            transition: all 0.25s ease;
        }

        /* HOVER */
        .nav-link-modern:hover {
            background: #f8f9fa;
            color: #0d6efd !important;
        }

        /* ACTIVE */
        .nav-link-modern.active {
            background: #0d6efd;
            color: #fff !important;
        }

        /* MOBILE */
        @media (max-width: 991px) {
            .nav-link-modern {
                margin-bottom: 6px;
            }
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



        /* WRAPPER */
        .survey-wrapper {
            max-width: 1000px;
        }

        /* AVATAR */
        .employee-avatar-wrapper {
            width: 160px;
            height: 160px;
        }

        .employee-avatar {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #f1f3f5;
        }

        .employee-avatar.placeholder {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            font-weight: bold;
            color: #fff;
            background: linear-gradient(135deg, #0d6efd, #6f42c1);
        }

        /* RATING */
        .rating-stars {
            font-size: 3rem;
        }

        .rating-stars .star {
            cursor: pointer;
            color: #ced4da;
            transition: transform .2s ease, color .2s ease;
        }

        .rating-stars .star:hover {
            transform: scale(1.2);
            color: #ffc107;
        }

        .rating-stars .star.active {
            color: #ffc107;
        }

        /* FORM CARD */
        .survey-form-card {
            background: #fff;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
        }

        /* SUBMIT */
        .submit-btn {
            box-shadow: 0 10px 30px rgba(13, 110, 253, .3);
        }

        .submit-btn:hover {
            transform: translateY(-2px);
        }

        /* MOBILE */
        @media (max-width: 768px) {
            .survey-form-card {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

    <livewire:atom.navbar />
    {{-- MAIN CONTENT --}}
    <main class="container py-4">
        {{ $slot }}
    </main>
    <livewire:atom.footer />

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Livewire Scripts --}}
    @livewireScripts
</body>

</html>