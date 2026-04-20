<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sistema de Solicitudes') }}</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-color: #1e3a8a;
            --primary-hover: #1e40af;
            --bg-gradient-start: #eff6ff;
            --bg-gradient-end: #dbeafe;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--bg-gradient-start) 0%, var(--bg-gradient-end) 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-wrapper {
            width: 100%;
            max-width: 420px;
        }

        .login-card {
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(30, 58, 138, 0.15);
            border: none;
            overflow: hidden;
        }

        .login-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, #3b82f6 100%);
            padding: 35px 30px;
            text-align: center;
            color: white;
        }

        .login-header .icon-wrapper {
            width: 64px;
            height: 64px;
            background: rgba(255,255,255,0.2);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            backdrop-filter: blur(10px);
        }

        .login-header h2 {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 0;
        }

        .login-header p {
            opacity: 0.9;
            margin: 8px 0 0;
            font-size: 0.9rem;
        }

        .login-body {
            padding: 35px 30px;
        }

        .form-floating > .form-control {
            border-radius: 10px;
            border: 1.5px solid #e5e7eb;
        }

        .form-floating > .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(30, 58, 138, 0.1);
        }

        .input-icon-wrapper {
            position: relative;
        }

        .input-icon-wrapper .form-control {
            padding-left: 45px;
        }

        .input-icon-wrapper .icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            z-index: 10;
        }

        .form-floating > .form-control:focus ~ .icon {
            color: var(--primary-color);
        }

        .btn-login {
            background: linear-gradient(135deg, var(--primary-color) 0%, #3b82f6 100%);
            border: none;
            border-radius: 10px;
            padding: 12px;
            font-weight: 600;
            font-size: 1rem;
            letter-spacing: 0.3px;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(30, 58, 138, 0.3);
            background: linear-gradient(135deg, var(--primary-hover) 0%, #2563eb 100%);
        }

        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .text-link {
            color: #6b7280;
            text-decoration: none;
            font-size: 0.875rem;
            transition: color 0.2s;
        }

        .text-link:hover {
            color: var(--primary-color);
            text-decoration: underline;
        }

        .alert-custom {
            border-radius: 10px;
            border: none;
            font-size: 0.9rem;
        }

        .invalid-feedback {
            font-size: 0.8rem;
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            color: #6b7280;
            text-decoration: none;
            font-size: 0.875rem;
            transition: color 0.2s;
        }

        .back-link a:hover {
            color: var(--primary-color);
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        {{ $slot }}
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>