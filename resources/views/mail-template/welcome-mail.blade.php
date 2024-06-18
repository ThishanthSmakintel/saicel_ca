<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Email</title>
</head>
<body>
    <h2>Hello, {{ $name }}</h2>
    
    <p>Thank you for your message with subject "{{ $subject }}".</p>
    
    @if (!empty($service))
        <p>We will respond to you regarding the "{{ $service }}" service as soon as possible.</p>
    @endif
    
    <p>Here is a copy of your message:</p>
    <p>{{ $messageContent }}</p>
    
    <p>Best regards,<br>Your Website Team</p>
</body>
</html>
