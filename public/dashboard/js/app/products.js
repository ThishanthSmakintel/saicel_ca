$(document).ready(function () {
    // Handle form submission for adding a new product
    $("#addProductForm").submit(function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: $(this).attr("action"),
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                // Handle success
                console.log(response);

                $.alert({
                    typeAnimated: true,
                    type: "green",
                    icon: "fas fa-check-circle",
                    content: "Product created successfully",
                    buttons: {
                        ok: {
                            text: "OK",
                            btnClass: "btn-green",
                            action: function () {
                                setTimeout(function () {
                                    location.reload();
                                }, 1000);
                            },
                        },
                    },
                });
            },
            error: function (xhr, status, error) {
                // Handle error
                console.log(xhr.responseText);
                // Show error alert
                $.alert({
                    typeAnimated: true,
                    type: "red",
                    btnClass: "btn-red",
                    title: '<i class="fas fa-exclamation-circle"></i> Error!',
                    content: "Failed to create product. Please try again.",
                    buttons: {
                        ok: {
                            text: "OK",
                            btnClass: "btn-red",
                            action: function () {
                                location.reload();
                            },
                        },
                    },
                });
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
            $(".divUploadImage").hide();
            var output = $("#imagePreview");
            output.html(
                '<div style="position: relative;">' +
                    '<img src="' +
                    reader.result +
                    '" class="img-fluid img-thumbnail" style="max-width: 100%; max-height: 800px;">' +
                    '<button type="button" class="btn btn-danger btn-sm mt-2" id="removeImageButton" style="position: absolute; top: 5px; right: 5px;"><i class="fas fa-times"></i></button>' +
                    "</div>"
            );
        };
        reader.readAsDataURL(event.target.files[0]);
    }

    // Function to clear image preview
    function clearImagePreview() {
        $("#imagePreview").empty(); // Clear the image preview
        $("#productImage").val(""); // Clear the file input value
        $(".divUploadImage").show();
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
