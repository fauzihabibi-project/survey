<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Auth') }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    @livewireStyles

    <style>
        /* LOGIN CARD */
        .login-card {
            border: none;
            border-radius: 20px;
        }

        /* ICON */
        .login-icon {
            font-size: 42px;
        }

        /* INPUT */
        .login-card .form-control {
            border: 1px solid #dee2e6;
            transition: all .2s ease;
        }

        .login-card .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 .2rem rgba(13, 110, 253, .15);
        }

        /* REGISTER CARD */
        .register-card {
            border: none;
            border-radius: 20px;
        }

        /* ICON */
        .register-icon {
            font-size: 42px;
        }

        /* INPUT FOCUS */
        .register-card .form-control:focus {
            border-color: #198754;
            box-shadow: 0 0 0 .2rem rgba(25, 135, 84, .15);
        }
    </style>
</head>

<body>

    <div class="auth-card">
        {{ $slot }}
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @livewireScripts
</body>

</html>