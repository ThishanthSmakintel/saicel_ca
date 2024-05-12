$(document).ready(function () {
    $(window).on("load", function () {
        $("#loader").fadeOut("slow", function () {
            $("#productContent").fadeIn("slow"); // Show product content after loader fades out
        });
    });
    var cropper;
    var image = $("#imagePreview");
    var addButton = $(".addNewProduct");

    addButton.prop("disabled", true);

    $("#productImage").change(function () {
        addButton.prop("disabled", true);
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
        addButton.prop("disabled", false);
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
        $("#cropImageButton").hide();
    });

    $("#addProductForm").validate({
        rules: {
            name: {
                required: true,
            },
            price: {
                required: true,
                number: true,
            },
            rating: {
                required: true,
                number: true,
                min: 0,
                max: 5,
            },
            category: {
                required: true,
            },
            description: {
                required: true,
            },
            image: {
                required: true,
            },
        },
        messages: {
            name: {
                required: "Please enter a product name.",
            },
            price: {
                required: "Please enter a valid price.",
                number: "Please enter a valid number.",
            },
            rating: {
                required: "Please enter a rating between 0 and 5.",
                number: "Please enter a valid number.",
                min: "Rating must be at least 0.",
                max: "Rating must be at most 5.",
            },
            category: {
                required: "Please enter a category.",
            },
            description: {
                required: "Please enter a description.",
            },
            image: {
                required: "Please select an image file.",
            },
        },
        errorElement: "div",
        errorPlacement: function (error, element) {
            error.addClass("invalid-feedback");
            element.closest(".form-group").append(error);
        },
        highlight: function (element, errorClass, validClass) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass("is-invalid").addClass("is-valid");
            $(element)
                .closest(".form-group")
                .find(".invalid-feedback")
                .remove();
        },
        submitHandler: function (form) {
            var formData = new FormData(form);

            $.ajax({
                url: $(form).attr("action"),
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
                error: function (xhr, status, error) {
                    console.log(xhr.responseText);
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
        },
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
        addButton.prop("disabled", true);

        if (cropper) {
            cropper.destroy();
        }
    });
});
