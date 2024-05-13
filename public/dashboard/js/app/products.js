const ajaxUrl = route("product.add");
console.log(routeUrl);

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

        formData.append("name", $("#productName").val());
        formData.append("price", $("#productPrice").val());
        formData.append("rating", $("#productRating").val());
        formData.append("category", $("#productCategory").val());
        formData.append("description", $("#productCategory").val());
        formData.append("image", $("#productImage")[0].files[0]);
        formData.append("_token", $("#_token").val());

        $.ajax({
            url: ajaxUrl,
            method: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                console.log(response);
                $.alert({
                    typeAnimated: true,
                    type: "green",
                    title: "Alert!",
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
            error: function (data) {
                console.log(data);
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
