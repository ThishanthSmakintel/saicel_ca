<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Email</title>
    <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            animation: fadeIn 1s ease-in-out;
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
        }
        .header img {
            max-width: 100%; 
            height: auto;
        }
        h2 {
            color: #333;
            animation: slideIn 1s ease-out;
        }
        p {
            color: #555;
            line-height: 1.6;
        }
        .status {
            background-color: #8ACA2B; 
            color: #fff;
            font-weight: bold;
            text-align: center;
            padding: 8px;
            border-radius: 5px;
            margin-bottom: 20px;
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

        .button:hover {
            background-color: #0056b3;
        }
        .footer {
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #e4e4e4;
            text-align: center;
            color: #888;
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
        @keyframes slideIn {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        /* Mobile responsiveness */
        @media screen and (max-width: 600px) {
            .container {
                padding: 10px;
            }
            .header img {
                max-width: 100px; 
            }
            .button {
                padding: 8px 16px; 
            }
        }
    </style>
</head>
<body>
    <div class="container">
        {{-- <div class="header">
            <img src="{{ asset('images/CompanyLogo.ico') }}" alt="Company Logo">
        </div> --}}
        
        <h2>Hello, {{ $name }}</h2>
        
        <div class="status">
            Query Status: Open
        </div>
        
        <p>Thank you for reaching out to us! We have received your message"</p>
        
        @if (!empty($service))
            <p>We understand that you have inquiries about our "<strong>{{ $service }}</strong>" service. Our team is currently received your request and The team will contact you as soon as possible.</p>
        @endif
        
        <p>For your reference, here is a copy of the message you sent us:</p>
        <blockquote style="background-color: #f9f9f9; padding: 10px; border-left: 5px solid #007BFF;">
            <p>{{ $messageContent }}</p>
        </blockquote>
        
        <p>If you have any additional information or questions, please feel free to contact our support team directly. We are here to help!</p>
        
        <p>Best regards,<br>saicel Team</p>
        
        <a href="https://www.saicel.ca" class="button">Visit Us</a>
        
        <div class="footer">
            <p>Contact us:</p>
            <p>15 Purbrook Court, North York, Ontario, Canada, M2R2B6<br>
               Email: <a href="mailto:info@saicel.ca">info@saicel.ca</a><br>
               Contact: <a href="tel:+14379224224">+1 (437) 922-4224</a>
            </p>
            <p>&copy; 2024 saicel.ca All rights reserved.</p>
        </div>
    </div>
</body>
</html>
