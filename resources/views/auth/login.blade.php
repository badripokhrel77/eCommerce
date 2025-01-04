@extends('layouts.main')
@section('title', 'Shop Now')
@section('content')

    <body class="bg-light">
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
                <h2 class="text-center text-info mb-4">Login</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter your email" :value="old('email')" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter your password" required>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div class="form-check mb-3">
                            <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                            <label class="form-check-label" for="rememberMe">{{ __('Remember me') }}</label>
                        </div>
                        <a href="{{ route('password.request') }}" class="text-decoration-none text-info  mb-3">Forgot
                            Password?</a>

                    </div>
                    <div class="d-grid justify-content-center">
                        <button type="submit" class="btn btn-info w-100">Login</button>

                    </div>

                </form>
                <p class="mt-3">Don't have an account? <a href="{{ route('register') }}" class="text-info">Register
                        Here</a></p>

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
@endsection
