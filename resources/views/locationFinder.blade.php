<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Adjustments for footer */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .footer {
            margin-top: auto;
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">City Search</h1>


        <div class="input-group mb-3">
            <input type="text" class="form-control" id="searchQuery" placeholder="Enter your search query">
            <button class="btn btn-primary" type="button" id="searchButton">Search</button>
            <div class="input-group-append">
                <span class="input-group-text" id="loadingSpinner" style="display: none;">
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    <span class="visually-hidden">Loading...</span>
                </span>
            </div>
        </div>

        <div id="searchResults" class="mt-4">
            <div id="errorDiv" class="alert alert-danger" style="display: none;"></div>
            <table class="table">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Name (EN)</th>
                        <th>Name (SI)</th>
                        <th>Name (TA)</th>
                        <th>Sub Name (EN)</th>
                        <th>Sub Name (SI)</th>
                        <th>Sub Name (TA)</th>
                    </tr>
                </thead>
                <tbody id="resultsTableBody">
                    <!-- Search results will be dynamically added here -->
                </tbody>
            </table>
        </div>
    </div>

    <footer class="footer mt-auto py-3">
        <div class="container text-center">
            Developed by Thishanth | Powered by Laravel
        </div>
    </footer>

    <!-- Include jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#searchButton').click(function() {
                var query = $('#searchQuery').val();
                search(query);
            });
        });

        function search(query) {
            var formData = new FormData();
            formData.append('query', query);
            formData.append('_token', '{{ csrf_token() }}'); // Reintroduced CSRF token

            // Show loading spinner and hide search input
            $('#loadingSpinner').show();
            $('#searchQuery').prop('disabled', true);
            $('#searchButton').prop('disabled', true);

            $.ajax({
                url: "{{ route('search.post') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.length === 0) {
                        displayErrorMessage('No results found.');
                    } else {
                        displayResults(response);
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    displayErrorMessage('An error occurred. Please try again later.');
                },
                complete: function() {
                    // Hide loading spinner and show search input
                    $('#loadingSpinner').hide();
                    $('#searchQuery').prop('disabled', false);
                    $('#searchButton').prop('disabled', false);
                }
            });
        }

        function displayResults(results) {
            var tableBody = $('#resultsTableBody');
            tableBody.empty(); // Clear previous results

            $.each(results, function(index, result) {
                var row = '<tr>' +
                    '<td>' + result.type + '</td>' +
                    '<td>' + result.name_en + '</td>' +
                    '<td>' + result.name_si + '</td>' +
                    '<td>' + result.name_ta + '</td>' +
                    '<td>' + (result.sub_name_en || 'Data not available') + '</td>' +
                    '<td>' + (result.sub_name_si || 'Data not available') + '</td>' +
                    '<td>' + (result.sub_name_ta || 'Data not available') + '</td>' +
                    '</tr>';
                tableBody.append(row);
            });

            $('#errorDiv').hide(); // Hide error message if displayed
        }

        function displayErrorMessage(message) {
            var errorDiv = $('#errorDiv');
            errorDiv.text(message);
            errorDiv.show(); // Show error message
            $('#resultsTableBody').empty(); // Clear previous results
        }
    </script>
</body>

</html>
