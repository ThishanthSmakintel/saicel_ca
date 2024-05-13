const ajaxUrl = route("product.add");
console.log("ajaxUrl:", ajaxUrl);

$(document).ready(function () {
    $(window).on("load", function () {
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

        // Get values from form fields
        var name = $("#productName").val().trim();
        var price = $("#productPrice").val().trim();
        var rating = $("#productRating").val().trim();
        var category = $("#productCategory").val().trim();
        var description = $("#productDescription").val().trim();
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

        formData.append("name", name);
        formData.append("price", price);
        formData.append("rating", rating);
        formData.append("category", category);
        formData.append("description", description);
        formData.append("image", image);
        formData.append("_token", token);

        $.ajax({
            url: ajaxUrl,
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

    $(document).on("click", ".edit-btn", function () {
        var productId = $(this).data("id");
    });

    $(document).on("click", ".delete-btn", function () {
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
