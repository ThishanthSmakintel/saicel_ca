$(document).ready(function () {
    $(document).ready(function () {
        $("#loader").fadeOut("slow", function () {
            $("#productContent").fadeIn("slow");
        });
    });

    var cropper;
    var image = $("#imagePreview");
    var btnAddNewProduct = $("#btnAddNewProduct");

    btnAddNewProduct.prop("disabled", true);

    $("#productImage").change(function () {
        btnAddNewProduct.prop("disabled", true);
        var file = $(this)[0].files[0];
        var reader = new FileReader();

        reader.onload = function (e) {
            image.html(
                '<img src="' +
                    e.target.result +
                    '" id="uploadedImage" style="max-width: 100%;">'
            );
            $("#cropImageButton").show();

            cropper = new Cropper(document.getElementById("uploadedImage"), {
                aspectRatio: 1,
                viewMode: 1,
                crop: function (e) {
                    $("#crop_x").val(e.detail.x);
                    $("#crop_y").val(e.detail.y);
                    $("#crop_width").val(e.detail.width);
                    $("#crop_height").val(e.detail.height);
                },
            });
        };

        reader.readAsDataURL(file);
    });

    $("#cropImageButton").click(function () {
        btnAddNewProduct.prop("disabled", false);
        var canvas = cropper.getCroppedCanvas();

        var croppedImageDataURL = canvas.toDataURL("image/jpeg");

        image.html(
            '<img src="' +
                croppedImageDataURL +
                '" style="max-width: 100%; display: flex; justify-content: center; align-items: center; height: 100%;">'
        );

        $("#addProductForm").append(
            '<input type="hidden" name="croppedImage" value="' +
                croppedImageDataURL +
                '">'
        );
        $("#addProductForm").append(
            '<input type="hidden" name="_token" value="' +
                $('meta[name="csrf-token"]').attr("content") +
                '">'
        );
        $("#cropImageButton").hide();
    });

    btnAddNewProduct.click(function () {
        var formData = new FormData();

        var name = $("#productName").val().trim();
        var price = $("#productPrice").val().trim();
        var rating = $("#productRating").val().trim();
        var category = $("#productCategory").val().trim();
        var description = $("#productDescription").val().trim();
        var productLink = $("#productLink").val().trim();
        var image = $("#productImage")[0].files[0];
        var token = $("#_token").val().trim();

        // Validation
        if (name === "") {
            $.alert({
                type: "red",
                btnClass: "btn-red",
                title: '<i class="fas fa-exclamation-circle"></i> Error!',
                content: "Please enter a name for the product.",
                onClose: function () {
                    $("#productName").focus();
                },
            });
            return false;
        }
        if (price === "") {
            $.alert({
                type: "red",
                btnClass: "btn-red",
                title: '<i class="fas fa-exclamation-circle"></i> Error!',
                content: "Please enter a price for the product.",
                onClose: function () {
                    $("#productPrice").focus();
                },
            });
            return false;
        }
        if (isNaN(rating) || rating === "" || rating > 5) {
            $.alert({
                type: "red",
                btnClass: "btn-red",
                title: '<i class="fas fa-exclamation-circle"></i> Error!',
                content:
                    "Please enter a valid rating for the product (less than or equal to 5).",
                onClose: function () {
                    $("#productRating").focus();
                },
            });
            return false;
        }
        if (category === "") {
            $.alert({
                type: "red",
                btnClass: "btn-red",
                title: '<i class="fas fa-exclamation-circle"></i> Error!',
                content: "Please enter a category for the product.",
                onClose: function () {
                    $("#productCategory").focus();
                },
            });
            return false;
        }
        if (description === "") {
            $.alert({
                type: "red",
                btnClass: "btn-red",
                title: '<i class="fas fa-exclamation-circle"></i> Error!',
                content: "Please enter a description for the product.",
                onClose: function () {
                    $("#productDescription").focus();
                },
            });
            return false;
        }
        if (productLink === "") {
            $.alert({
                type: "red",
                btnClass: "btn-red",
                title: '<i class="fas fa-exclamation-circle"></i> Error!',
                content: "Please enter a productLink for the product.",
                onClose: function () {
                    $("#productLink").focus();
                },
            });
            return false;
        }

        formData.append("name", name);
        formData.append("price", price);
        formData.append("rating", rating);
        formData.append("category", category);
        formData.append("description", description);
        formData.append("image", image);
        formData.append("_token", token);
        formData.append("productLink", productLink);

        $.ajax({
            url: route("dashboard.products.add"),
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function () {
                $("#btnAddNewProduct").prop("disabled", true);
                $(".buttonLoader").removeClass("d-none");
            },
            success: function (response) {
                console.log(response);

                $(".buttonLoader").addClass("d-none");
                $.alert({
                    typeAnimated: true,
                    type: "green",
                    title: "Success!",
                    icon: "fas fa-check-circle",
                    content: "Product created successfully",
                    buttons: {
                        ok: {
                            text: "OK",
                            btnClass: "btn-green",
                            action: function () {
                                setTimeout(function () {
                                    location.reload();
                                }, 300);
                            },
                        },
                    },
                });
            },
            error: function (xhr, status, error) {
                console.log(xhr.responseText);
                $("#btnAddNewProduct").prop("disabled", false);
                $(".buttonLoader").addClass("d-none");
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
                            action: function () {},
                        },
                    },
                });
            },
        });
    });

    $(document).on("click", ".btnDeleteProduct", function () {
        var productId = $(this).attr("data-productId");
        var token = $("#_token").val().trim();

        var formData = new FormData();
        formData.append("_token", token);

        // Show a confirmation dialog
        $.confirm({
            title: "Alert",
            content: "You are about to delete this product. Are you sure?",
            buttons: {
                confirm: {
                    text: "Yes",
                    btnClass: "btn-red",
                    action: function () {
                        // Create form data

                        // Send AJAX request
                        $.ajax({
                            url: route("dashboard.product.destroy", {
                                id: productId,
                            }),
                            method: "POST",
                            data: formData,
                            processData: false,
                            contentType: false,
                            beforeSend: function () {
                                // Get the height and width of the loader
                                var loaderHeight = $("#loader").outerHeight();
                                var loaderWidth = $("#loader").outerWidth();

                                var topPosition =
                                    ($(window).height() - loaderHeight) / 2;
                                var leftPosition =
                                    ($(window).width() - loaderWidth) / 2;

                                $("#loader").css({
                                    top: topPosition + "px",
                                    left: leftPosition + "px",
                                });
                                $("#productContent").hide();
                                $("#loader").show();
                            },
                            success: function (response) {
                                $.alert({
                                    typeAnimated: true,
                                    type: "green",
                                    title: "Success!",
                                    icon: "fas fa-check-circle",
                                    content: "Product Deleted successfully",
                                    buttons: {
                                        ok: {
                                            text: "OK",
                                            btnClass: "btn-green",
                                            action: function () {
                                                location.reload();
                                            },
                                        },
                                    },
                                });
                            },
                            error: function (xhr, status, error) {
                                // Show error message
                                $.alert({
                                    typeAnimated: true,
                                    type: "red",
                                    btnClass: "btn-red",
                                    title: '<i class="fas fa-exclamation-circle"></i> Error!',
                                    content:
                                        "Failed to delete product. Please try again.",
                                    buttons: {
                                        ok: {
                                            text: "OK",
                                            btnClass: "btn-red",
                                            action: function () {},
                                        },
                                    },
                                });
                            },
                        });
                    },
                },
                cancel: {
                    text: "No",
                    btnClass: "btn-default",
                },
            },
        });
    });

    $(document).on("click", ".edit-btn", function () {
        var productId = $(this).data("id");
    });

    $("#addProductModal").on("hidden.bs.modal", function () {
        $("#productImage").val("");
        image.html("");
        $("#addProductForm")[0].reset();
        btnAddNewProduct.prop("disabled", true);

        if (cropper) {
            cropper.destroy();
        }
    });
});

// $(document).ready(function () {
//     $(".btnUpdateProductDetails").click(function () {
//         var productId = $(this).attr("data-productId");
//         console.log("Product ID:", productId);

//         $.ajax({
//             type: "GET",
//             url: route("dashboard.products.show", { id: productId }),
//             success: function (response) {
//                 // Handle success response
//                 console.log("Product details:", response);
//             },
//             error: function (xhr, status, error) {
//                 // Handle error
//                 console.error("Error:", error);
//             },
//         });
//     });
// });
$(document).ready(function () {
    var cropper;
    var image = $("#updateImagePreview");
    var updateBtnProduct = $("#updateBtnProduct"); // Define updateBtnProduct

    updateBtnProduct.prop("disabled", true);

    $("#updateProductImage").change(function () {
        updateBtnProduct.prop("disabled", true);
        var file = $(this)[0].files[0];
        var reader = new FileReader();

        reader.onload = function (e) {
            image.html(
                '<img src="' +
                    e.target.result +
                    '" id="UpdateUploadedImage" style="max-width: 100%;">'
            );
            $("#updateCropImageButton").show();

            cropper = new Cropper(
                document.getElementById("UpdateUploadedImage"),
                {
                    aspectRatio: 1,
                    viewMode: 1,
                    crop: function (e) {
                        $("#crop_x").val(e.detail.x);
                        $("#crop_y").val(e.detail.y);
                        $("#crop_width").val(e.detail.width);
                        $("#crop_height").val(e.detail.height);
                    },
                }
            );
        };

        reader.readAsDataURL(file);
    });

    $("#updateCropImageButton").click(function () {
        updateBtnProduct.prop("disabled", false);
        var canvas = cropper.getCroppedCanvas();

        var croppedImageDataURL = canvas.toDataURL("image/jpeg");

        image.html(
            '<img src="' +
                croppedImageDataURL +
                '" style="max-width: 100%; display: flex; justify-content: center; align-items: center; height: 100%;">'
        );

        $("#addProductForm").append(
            '<input type="hidden" name="croppedImage" value="' +
                croppedImageDataURL +
                '">'
        );
        $("#addProductForm").append(
            '<input type="hidden" name="_token" value="' +
                $('meta[name="csrf-token"]').attr("content") +
                '">'
        );
        $("#cropImageButton").hide();
    });

    // Event listener for the "Update Product" button
    $(".btnUpdateProductDetails").click(function () {
        var productId = $(this).attr("data-productId");

        // Show the loader
        $("#modalLoader").show();

        // Send an AJAX request to fetch product details
        $.ajax({
            type: "GET",
            url: route("dashboard.products.show", { id: productId }),
            success: function (response) {
                // Handle success response
                console.log(response);

                // Extract relevant data directly from the response
                var productData = response.data.product;
                var imageUrl = response.data.image_url;

                console.log("Product Data:");
                console.log("ID:", productData.id);
                console.log("Name:", productData.name);
                console.log("Price:", productData.price);
                console.log("Rating:", productData.rating);
                console.log("Category:", productData.category);
                console.log("Description:", productData.description);
                console.log("Product Link:", productData.productLink);
                console.log("Image URL:", imageUrl);

                // Set values of input fields
                $("#updateProductName").val(productData.name);
                $("#updateProductPrice").val(productData.price);
                $("#updateProductRating").val(productData.rating);
                $("#updateProductCategory").val(productData.category);
                $("#updateProductDescription").val(productData.description);
                $("#updateProductLink").val(productData.productLink);
                // Set the image preview
                $("#updateImagePreview").html(
                    '<img src="' + imageUrl + '" style="max-width: 100%;">'
                );

                // Open the updateProductModal
                $("#updateProductModal").modal("show");
            },
            error: function (xhr, status, error) {
                // Handle error
                console.error("Error:", error);
                // Optionally, show an error message or perform error handling actions
            },
            complete: function () {
                // Hide the loader after the AJAX request is complete
                $("#modalLoader").hide();
            },
        });
    });
});
