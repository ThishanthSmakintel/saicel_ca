$(document).ready(function () {
    $("#btnContactUs").on("click", function () {
        var name = $("#name");
        var email = $("#email");
        var subject = $("#subject");
        var message = $("#message");
        var valid = true;

        if (name.val() === "") {
            $.alert({
                type: "red",
                btnClass: "btn-red",
                title: '<i class="fas fa-exclamation-circle"></i> Error!',
                content: "Please enter your name.",
                onClose: function () {
                    name.focus();
                },
            });
            valid = false;
        }

        if (email.val() === "") {
            $.alert({
                type: "red",
                btnClass: "btn-red",
                title: '<i class="fas fa-exclamation-circle"></i> Error!',
                content: "Please enter your email.",
                onClose: function () {
                    email.focus();
                },
            });
            valid = false;
        }

        if (subject.val() === "") {
            $.alert({
                type: "red",
                btnClass: "btn-red",
                title: '<i class="fas fa-exclamation-circle"></i> Error!',
                content: "Please enter a subject.",
                onClose: function () {
                    subject.focus();
                },
            });
            valid = false;
        }

        if (message.val() === "") {
            $.alert({
                type: "red",
                btnClass: "btn-red",
                title: '<i class="fas fa-exclamation-circle"></i> Error!',
                content: "Please enter a message.",
                onClose: function () {
                    message.focus();
                },
            });
            valid = false;
        }

        if (!valid) {
            return false;
        }

        var formData = new FormData();
        formData.append("_token", $('input[name="_token"]').val());
        formData.append("name", name.val());
        formData.append("email", email.val());
        formData.append("subject", subject.val());
        formData.append("message", message.val());

        $.ajax({
            url: route("website.contact.submit"),
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $("#btnContactUs").prop("disabled", true);
                $(".buttonLoader").removeClass("d-none");
            },
            success: function (response) {
                $.alert({
                    typeAnimated: true,
                    type: "green",
                    title: "Success!",
                    icon: "fas fa-check-circle",
                    content: "Message sent successfully!",
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
                $("#contact-form")[0].reset();
                $("#btnContactUs").prop("disabled", false);
                $(".buttonLoader").addClass("d-none");
            },
            error: function (response) {
                $.alert({
                    type: "red",
                    btnClass: "btn-red",
                    title: '<i class="fas fa-exclamation-circle"></i> Error!',
                    content:
                        "There was an error sending your message. Please try again later.",
                });
                $("#btnContactUs").prop("disabled", false);
                $(".buttonLoader").addClass("d-none");
            },
        });
    });
});
