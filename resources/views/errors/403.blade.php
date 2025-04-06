<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forbidden - Access Denied</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .error-container {
            text-align: center;
        }

        .error-code {
            font-size: 8rem;
            color: #dc3545;
        }

        .error-message {
            font-size: 2rem;
            margin-top: 20px;
            color: #343a40;
        }

        .btn-home {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="error-container">
            <div class="error-code">403</div>
            <div class="error-message">Oops! Access Denied</div>
            <p class="text-muted">Sorry, you do not have the right roles to access this page.</p>
            <a href="/" class="btn btn-primary btn-home">Go to Home Page</a>
        </div>
    </div>
</body>

</html>
=======
@extends('layouts.app')
@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center vh-100 bg-light">
        <div class="d-flex justify-content-center align-items-center bg-danger bg-opacity-10 rounded-circle" style="width: 80px; height: 80px;">
            <i class="fas fa-exclamation-triangle text-danger fs-1"></i>
        </div>
        <h1 class="mt-4 fw-bold text-dark">403</h1>
        <p class="lead text-muted">Access Denied</p>
        <p class="text-secondary">
            Sorry, you don't have permission to view this page.
        </p>

        <a href="{{ request()->is('admin', 'admin/*') ? route('admin.dashboard.index') : route('shop.dashboard.index') }}" class="btn btn-primary mt-4 px-4 py-2">
            Back to Dashboard
        </a>

        <div class="mt-5">
            <img src="https://via.placeholder.com/500x300?text=403+Illustration" alt="403 Illustration" class="img-fluid rounded">
        </div>
    </div>
@endsection
@push('css')
    <style>
        .bg-opacity-10 {
            background-color: rgba(255, 0, 0, 0.1) !important;
        }
    </style>
@endpush
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
