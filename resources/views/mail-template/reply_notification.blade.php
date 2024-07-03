<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reply Notification</title>
    <style>
        /* Dark theme */
        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a1a;
            color: #ffffff;
            margin: 0;
            padding: 0;
        }

        .status {
            background-color: #4CAF50; 
            color: #ffffff;
            font-weight: bold;
            text-align: center;
            padding: 8px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #2b2b2b;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            animation: fadeIn 1s ease-in-out;
        }

        h1, h2 {
            color: #ffffff;
            text-align: center;
        }

        p {
            color: #dddddd;
            line-height: 1.6;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #007BFF;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }

        .footer {
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #555555;
            text-align: center;
            color: #cccccc;
        }

        .footer p {
            margin: 5px 0;
        }

        .footer a {
            color: #007BFF;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Reply Notification</h1>
        <p>Dear {{ $sender_name }},</p>
        <div class="status">
            <p>Status: {{ $reply_status }}</p>
        </div>
        <p>We have received your message:</p>
        <blockquote style="background-color: #333333; padding: 10px; border-left: 5px solid #007BFF;">
            <p>{{$message_content }}</p>
        </blockquote>
        <p>Here is our reply:</p>
        <div style="background-color: #333333; padding: 10px; border-left: 5px solid #007BFF;">
            <p>{{$reply_message }}</p>
        </div>
        <p>Reply created at: {{ $reply_created_at }}</p>
        <p>Thank you for contacting us.</p>
        <p>If you have any additional information or questions, please feel free to contact our support team directly. We are here to help!</p>
        {{-- <p>To view previous messages, <a href="#" class="button">click here</a>.</p> --}}
        <p>Best regards,<br>{{ config('app.name') }} Team</p>
        <a href="{{ config('app.url') }}" class="button">Visit Us</a>
        <div class="footer">
            <p>Contact us:</p>
            <p>15 Purbrook Court, North York, Ontario, Canada, M2R2B6<br>
               Email: <a href="mailto:{{ config('mail.from.address') }}">{{ config('mail.from.address') }}</a><br>
               Contact: <a href="tel:+14379224224">+1 (437) 922-4224</a>
            </p>
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
