<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reply Notification</title>
</head>
<body>
    <h2>Reply Notification</h2>

    <p>Dear {{ $message->name }},</p>

    <p>We have received a reply to your inquiry:</p>

    <p><strong>Original Message:</strong><br>
    {{ $message->message }}</p>

    <p><strong>Reply:</strong><br>
    {{ $reply->message }}</p>

    <p>Thank you for contacting us.</p>

    <p>Sincerely,<br>
    Your Organization</p>
</body>
</html>
