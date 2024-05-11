$(document).ready(function () {
    // Show add product modal when clicking on add button
    $("#showAddProductModal").click(function () {
        $("#addProductModal").modal("show");
    });

    // Handle form submission for adding a new product
    $("#addProductForm").submit(function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: "",
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                // Handle success
                console.log(response);
                $("#addProductModal").modal("hide");
            },
            error: function (xhr, status, error) {
                // Handle error
                console.error(xhr.responseText);
            },
        });
    });

    // Edit button click handler
    $(document).on("click", ".edit-btn", function () {
        var productId = $(this).data("id");
        // Redirect or open modal for edit based on productId
        // Example:
        // window.location.href = '/products/' + productId + '/edit';
    });

    // Delete button click handler
    $(document).on("click", ".delete-btn", function () {
        var productId = $(this).data("id");
        // Send AJAX request to delete product based on productId
        // Example:
        // $.ajax({
        //     url: '/products/' + productId,
        //     method: 'DELETE',
        //     success: function(response) {
        //         // Handle success
        //     },
        //     error: function(xhr, status, error) {
        //         // Handle error
        //     }
        // });
    });

    // Function to handle image preview
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = $("#imagePreview");
            output.html(
                '<img src="' +
                    reader.result +
                    '" class="img-fluid img-thumbnail" style="max-width: 200px;">'
            );
            output.append(
                '<button type="button" class="btn btn-danger btn-sm mt-2" id="removeImageButton">Remove</button>'
            );
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    // Function to clear image preview
    function clearImagePreview() {
        $("#imagePreview").empty(); // Clear the image preview
        $("#productImage").val(""); // Clear the file input value
    }

    // Event listener for file input change
    $("#productImage").change(function (event) {
        previewImage(event);
    });

    // Event listener for remove image button
    $(document).on("click", "#removeImageButton", function () {
        clearImagePreview();
    });

    // Event listener for modal hide event to clear all entered data
    $("#addProductModal").on("hide.bs.modal", function () {
        $("#addProductForm").trigger("reset"); // Reset the form
        clearImagePreview(); // Clear the image preview
    });
});
