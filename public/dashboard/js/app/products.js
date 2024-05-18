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
        let deleteUrl = route("dashboard.products.destroy", { id: productId });
        console.log("deleteUrl" + deleteUrl);
        console.log("btnDeleteProduct" + productId);
        var formData = new FormData();
        formData.append("_token", token);
        formData.append("id", productId);
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
                            url: deleteUrl,
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
        $("#updateCropImageButton").hide();
    });

    // Event listener for the "Update Product" button
    $(".btnUpdateProductDetails").click(function () {
        var productId = $(this).attr("data-productId");
        console.log("productId ", productId);
        $("#thisProductId").val(productId);
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
            error: function (error) {
                console.log("Error:", error);
            },
            complete: function () {
                // Hide the loader after the AJAX request is complete
                $("#modalLoader").hide();
            },
        });
    });

    $("#updateProductModal").on("hide.bs.modal", function () {
        // Clear input fields
        $("#updateProductName").val("");
        $("#updateProductPrice").val("");
        $("#updateProductRating").val("");
        $("#updateProductCategory").val("");
        $("#updateProductDescription").val("");
        $("#updateProductLink").val("");

        $("#updateImagePreview").html("");

        $("#thisProductId").val("");

        if (cropper) {
            cropper.destroy();
            cropper = null;
        }
        $("#addProductForm input[name='croppedImage']").remove();
        $("#addProductForm input[name='_token']").remove();
    });
});
// update product
$("#updateBtnProduct").click(function () {
    var formData = new FormData();

    // Collect data from input fields
    var productId = $("#thisProductId").val().trim();
    var name = $("#updateProductName").val().trim();
    var price = $("#updateProductPrice").val().trim();
    var rating = $("#updateProductRating").val().trim();
    var category = $("#updateProductCategory").val().trim();
    var description = $("#updateProductDescription").val().trim();
    var productLink = $("#updateProductLink").val().trim();
    var image = $("#updateProductImage")[0].files[0];
    var token = $("#_token").val().trim();

    formData.append("id", productId);
    formData.append("name", name);
    formData.append("price", price);
    formData.append("rating", rating);
    formData.append("category", category);
    formData.append("description", description);
    formData.append("productLink", productLink);
    formData.append("image", image);
    formData.append("_token", token);

    $.ajax({
        url: route("dashboard.products.update", { id: productId }),
        method: "POST",
        data: formData,
        processData: false,
        contentType: false,
        beforeSend: function () {
            // Disable button and show loader
            $("#updateBtnProduct").prop("disabled", true);
            $(".buttonLoader").removeClass("d-none");
            $("#modalLoader").show();
        },
        success: function (response) {
            // Handle success response
            console.log(response);
            $(".buttonLoader").addClass("d-none");

            // Show success message
            $.alert({
                typeAnimated: true,
                type: "green",
                title: "Success!",
                icon: "fas fa-check-circle",
                content: "Product updated successfully",
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
            $("#modalLoader").hide();
            console.error(xhr.responseText);
            $("#updateBtnProduct").prop("disabled", false);
            $(".buttonLoader").addClass("d-none");

            // Show error message
            $.alert({
                typeAnimated: true,
                type: "red",
                btnClass: "btn-red",
                title: '<i class="fas fa-exclamation-circle"></i> Error!',
                content: "Failed to update product. Please try again.",
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

showAddProductModal;
