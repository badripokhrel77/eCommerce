@extends('layouts.main')
@section('title', 'Shop Now')
@section('content')

    <body class="bg-light">
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="card shadow p-4" style="max-width: 600px; width: 100%;">
                <h2 class="text-center text-info mb-4">Register</h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!-- First Name and Last Name -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="firstname"
                                placeholder="First Name" :value="old('firstname')" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="lastname"
                                placeholder="Last Name" :value="old('lastname')" required>
                        </div>
                    </div>

                    <!-- Phone and Address -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone"
                                placeholder="Phone Number" :value="old('phone')" required>
                        </div>
                        <div class="col-md-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address"
                                :value="old('address')" required>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter your email" :value="old('email')" required>
                    </div>

                    <!-- Password and Confirm Password -->
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Password" required>
                        </div>
                        <div class="col-md-6">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="password_confirmation"
                                placeholder="Confirm Password" required>
                        </div>
                    </div>

                    <!-- Register Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-info w-100">Register</button>
                    </div>

                    <!-- Already Registered -->
                    <p class="text-center mt-3">Already have an account ? <a href="{{route('login')}}" class="text-info">Login Here</a></p>

                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
@endsection
