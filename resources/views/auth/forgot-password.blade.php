<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
            <p class="mb-4 text-muted">
                Forgot your password? No problem. Just let us know your email address, and we will email you a password reset link that will allow you to choose a new one.
            </p>

            <!-- Session Status -->
            <div id="session-status" class="alert alert-success d-none"></div>

            <form method="POST" action="/password/email">
                <!-- CSRF Token -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" name="email" value="" required autofocus>
                    <div id="email-error" class="text-danger mt-2"></div>
                </div>

                <div class="d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-primary">
                        Email Password Reset Link
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
