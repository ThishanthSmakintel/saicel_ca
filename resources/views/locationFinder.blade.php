<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
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
            <input type="text" class="form-control" id="searchQuery" placeholder="Enter city, district, or province">
            <div class="input-group-append">
                <span class="input-group-text" id="loadingSpinner" style="display: none;">
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    <span class="visually-hidden">Loading...</span>
                </span>
            </div>
        </div>

        <input type="hidden" id="searchData" value="">

        <div id="searchResults" class="mt-4">
            <div id="errorDiv" class="alert alert-danger" style="display: none;"></div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Name (EN)</th>
                            <th>Name (SI)</th>
                            <th>Name (TA)</th>
                            <th>District (EN)</th>
                            <th>District (SI)</th>
                            <th>District (TA)</th>
                            <th>Province (EN)</th>
                            <th>Province (SI)</th>
                            <th>Province (TA)</th>
                            <th>Sub Name (EN)</th>
                            <th>Sub Name (SI)</th>
                            <th>Sub Name (TA)</th>
                        </tr>
                    </thead>
                    <tbody id="resultsTableBody">
                        <!-- Search results  -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <footer class="footer mt-auto py-3">
        <div class="container text-center">
            Developed by Thishanth | Powered by Laravel
        </div>
    </footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</html>


<script>
    $(document).ready(function() {
        fetchData();

        $('#searchQuery').on('input', function() {
            var query = $(this).val().trim(); // Trim the search query
            if (query === '') {
                $('#resultsTableBody').empty(); // Clear table if search query is empty
            } else {
                search(query);
            }
        });
    });

    async function fetchData() {
        try {
            $('#loadingSpinner').show();
            const response = await $.ajax({
                url: "{{ route('search.post') }}",
                type: "POST",
                data: {
                    _token: '{{ csrf_token() }}'
                }
            });
            $('#searchData').val(JSON.stringify(response));
            displaySuccessMessage('Data fetched successfully.');
            $('#searchQuery').prop('disabled', false);
        } catch (error) {
            console.error(error);
            displayErrorMessage('An error occurred while fetching data. Please try again later.');
            $('#searchQuery').prop('disabled', true);
        } finally {
            $('#loadingSpinner').hide();
        }
    }

    function search(query) {
        var searchData = JSON.parse($('#searchData').val());
        console.log('Search data:', searchData);

        var results = searchData.filter(function(item) {
            return (item.city_name_en && item.city_name_en.toLowerCase().includes(query.toLowerCase())) ||
                (item.city_name_si && item.city_name_si.toLowerCase().includes(query.toLowerCase())) ||
                (item.city_name_ta && item.city_name_ta.toLowerCase().includes(query.toLowerCase())) ||
                (item.district_name_en && item.district_name_en.toLowerCase().includes(query.toLowerCase())) ||
                (item.district_name_si && item.district_name_si.toLowerCase().includes(query.toLowerCase())) ||
                (item.district_name_ta && item.district_name_ta.toLowerCase().includes(query.toLowerCase())) ||
                (item.province_name_en && item.province_name_en.toLowerCase().includes(query.toLowerCase())) ||
                (item.province_name_si && item.province_name_si.toLowerCase().includes(query.toLowerCase())) ||
                (item.province_name_ta && item.province_name_ta.toLowerCase().includes(query.toLowerCase()));
        });

        console.log('Results:', results);

        if (results.length === 0) {
            console.log('No results found.');
            displayErrorMessage('No results found.');
        } else {
            console.log('Displaying results:', results);
            displayResults(results);
        }
    }

    function displayResults(results) {
        var tableBody = $('#resultsTableBody');
        tableBody.empty();

        $.each(results, function(index, result) {
            var row = '<tr>' +
                '<td>' + 'City' + '</td>' +
                '<td>' + result.city_name_en + '</td>' +
                '<td>' + result.city_name_si + '</td>' +
                '<td>' + result.city_name_ta + '</td>' +
                '<td>' + result.district_name_en + '</td>' +
                '<td>' + result.district_name_si + '</td>' +
                '<td>' + result.district_name_ta + '</td>' +
                '<td>' + result.province_name_en + '</td>' +
                '<td>' + result.province_name_si + '</td>' +
                '<td>' + result.province_name_ta + '</td>' +
                '<td>' + (result.sub_name_en || 'Data not available') + '</td>' +
                '<td>' + (result.sub_name_si || 'Data not available') + '</td>' +
                '<td>' + (result.sub_name_ta || 'Data not available') + '</td>' +
                '</tr>';
            tableBody.append(row);
        });

        $('#errorDiv').hide();
    }

    function displayErrorMessage(message) {
        var errorDiv = $('#errorDiv');
        errorDiv.text(message);
        errorDiv.show();
        $('#resultsTableBody').empty();
    }

    function displaySuccessMessage(message) {
        var successDiv = $('#successDiv');
        if (!successDiv.length) {
            successDiv = $('<div class="alert alert-success" id="successDiv"></div>');
            $('.container').prepend(successDiv);
        }
        successDiv.text(message);
        successDiv.show();
        setTimeout(function() {
            successDiv.hide();
        }, 3000);
    }
</script>


</body>

</html>
