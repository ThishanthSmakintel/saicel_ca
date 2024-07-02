$(document).ready(function() {
    $('#message-text').summernote({
        height: 100
    });

    $('#send-reply').click(function() {
        let formData = new FormData();
        formData.append('_token', $('input[name="_token"]').val());
        formData.append('message_id', $('#message-id').val());
        formData.append('reply_message', $('#message-text').val());
        formData.append('status', $('#status-select').val());

        $.ajax({
            url: route('message.storeReply'),
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                try {
                    let jsonResponse = response;

                    // Check email and reply statuses
                    let emailStatus = jsonResponse.emailStatus;
                    let emailStatusMessage = jsonResponse.emailStatusMessage;
                    let replyStatus = jsonResponse.replyStatus;
                    let replyStatusMessage = jsonResponse.replyStatusMessage;

                    if (replyStatus === 'sent') {
                        // Show success message for reply
                        let alertType = emailStatus ? 'green' : 'orange';
                        let alertContent = 'Reply stored successfully!';
                        
                        if (!emailStatus) {
                            alertContent += '\nWarning: Email notification failed to send.';
                        }

                        $.alert({
                            title: 'Success!',
                            content: alertContent,
                            type: alertType
                        });

                        // Optionally update UI to show success or handle further actions
                        // Example: update status badges, update reply list, etc.
                    } else {
                        // Show error message for reply
                        $.alert({
                            title: 'Error!',
                            content: replyStatusMessage,
                            type: 'red'
                        });
                    }
                } catch (e) {
                    // Handle parsing or unexpected JSON format error
                    $.alert({
                        title: 'Error!',
                        content: 'Invalid JSON response received.',
                        type: 'red'
                    });
                    console.error(e); // Log detailed error
                }
            },
            error: function(xhr, status, error) {
                // Handle AJAX request error
                $.alert({
                    title: 'Error!',
                    content: 'An error occurred. Please try again.',
                    type: 'red'
                });
                console.error(xhr.responseText); // Log detailed error response
            }
        });
    });
});
