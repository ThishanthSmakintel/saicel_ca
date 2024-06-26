<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Mode</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include local CSS paths -->
    @include('include.layouts.css-paths')
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .maintenance-page {
            margin-top: 100px;
        }

        .maintenance-message {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="maintenance-page text-center">
                    <div class="maintenance-message">
                        <h2><i class="fas fa-exclamation-triangle text-warning"></i> We apologize for the inconvenience
                        </h2>
                        <p>It appears that there's a problem with your internet connection at the moment. Please check
                            your internet connection and try again.</p>
                        <p>If you continue to experience this problem, please contact our support team for further
                            assistance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Include local JS paths -->
    @include('include.layouts.js-paths')
</body>

</html>
