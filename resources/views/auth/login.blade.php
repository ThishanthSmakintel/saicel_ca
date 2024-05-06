<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Include Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Include jQuery Confirm CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
</head>

<body style="background: linear-gradient(45deg, #2c3e50, #3498db);">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">Login</div>
                    <div class="card-body">
                        <form id="loginForm">
                            @csrf <!-- CSRF token -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div id="emailValidation" class="invalid-feedback d-none">Please enter a valid email
                                    address.</div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                <div id="passwordValidation" class="invalid-feedback d-none">Password must be at least 8
                                    characters long.</div>
                            </div>
                            <button type="submit" class="btn btn-primary" id="loginBtn">Login</button>
                        </form>
                        <div id="loginErrors" class="alert alert-danger d-none mt-3"></div>
                        <div id="loginSuccess" class="alert alert-success d-none mt-3">Login successful. Redirecting...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include jQuery Confirm JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#loginForm').submit(function(e) {
                e.preventDefault();
                $('#loginBtn').attr('disabled', true); // Disable login button
                var formData = $(this).serialize();
                $.ajax({
                    url: '/authenticate', // Replace with your Laravel route URL
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        $('#loginSuccess').removeClass('d-none')
                            .show(); // Display success message
                        setTimeout(function() {
                            window.location.href =
                                '/home'; // Redirect to home page after a delay
                        }, 2000); // Redirect after 2 seconds
                    },
                    error: function(xhr, status, error) {
                        $('#loginErrors').html(xhr.responseText).show(); // Display errors
                    },
                    complete: function() {
                        $('#loginBtn').attr('disabled', false); // Enable login button
                    }
                });
            });
        });
    </script>

    <!-- Include Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-WD4MhuT/RArFomFJHAux1weJHQ5iFduhHpyfMjJaeoYDQMlZVAAHiagwswRV5J+a" crossorigin="anonymous">
    </script>
</body>

</html>
