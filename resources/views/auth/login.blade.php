<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Include Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Include jQuery Confirm CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css">
    <style>
        body {
            background: linear-gradient(45deg, #2c3e50, #3498db);
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            min-height: 400px;
            /* Adjust the height as needed */
        }

        .card-header {
            border-bottom: none;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-login {
            border-radius: 10px;
            padding: 10px 20px;
            /* Adjust padding as needed */
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form id="loginForm" class="needs-validation" novalidate>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" name="password" required>
                                    <button class="btn btn-outline-secondary" type="button" id="password-toggle">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <div class="invalid-feedback">Password is required.</div>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" id="loginButton" class="btn btn-primary btn-block btn-login">
                                <span id="loginLoader" class="spinner-border spinner-border-sm d-none" role="status"
                                    aria-hidden="true"></span>
                                <i class="fas fa-sign-in-alt"></i> Login
                            </button>
                        </form>
                        <div id="loginErrors" class="alert alert-danger d-none mt-2"></div>
                        <div id="loginSuccess" class="alert alert-success d-none mt-2">Login successful. Redirecting...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Include jQuery Confirm JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>

    <!-- Include custom JavaScript file -->
    <script src="{{ asset('js/app/login.js') }}"></script>
</body>

</html>
