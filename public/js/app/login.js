$(document).ready(function () {
    // Password visibility toggle
    $("#password-toggle").click(function () {
        var passwordInput = $("#password");
        var passwordIcon = $(this).find("i");

        if (passwordInput.attr("type") === "password") {
            passwordInput.attr("type", "text");
            passwordIcon.removeClass("fa-eye").addClass("fa-eye-slash");
        } else {
            passwordInput.attr("type", "password");
            passwordIcon.removeClass("fa-eye-slash").addClass("fa-eye");
        }
    });

    // Form submission
    $("#loginForm").submit(function (event) {
        event.preventDefault();
        event.stopPropagation();

        if (this.checkValidity()) {
            var email = $("#email").val();
            var password = $("#password").val();
            var token = $('input[name="_token"]').val();

            // Disable button and show loader
            $("#loginButton").prop("disabled", true);
            $("#loginLoader").removeClass("d-none");

            $.ajax({
                url: "/authenticate", // URL to submit the form to
                method: "POST", // HTTP method
                data: {
                    email: email,
                    password: password,
                    _token: token,
                }, // Form data including CSRF token
                success: function (response) {
                    // Handle successful response
                    $("#loginSuccess").removeClass("d-none").fadeIn();
                    // Redirect to /home after 2 seconds
                    setTimeout(function () {
                        window.location.href = "/home";
                    }, 2000);
                },
                error: function (xhr, status, error) {
                    // Handle errors
                    if (xhr.status === 404) {
                        var errorMessage = "User not found.";
                    } else if (xhr.status === 422) {
                        var errorMessage = "Incorrect password.";
                    } else {
                        var errorMessage =
                            "An error occurred. Please try again later.";
                    }
                    $.alert({
                        title: "Error!",
                        content: errorMessage,
                        type: "red",
                        icon: "fas fa-exclamation-circle",
                        backgroundDismiss: true,
                        columnClass: "col-md-4",
                    });
                },
                complete: function () {
                    // Re-enable button and hide loader
                    $("#loginButton").prop("disabled", false);
                    $("#loginLoader").addClass("d-none");
                },
            });
        }

        $(this).addClass("was-validated");
    });
});
