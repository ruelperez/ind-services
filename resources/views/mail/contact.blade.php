<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Message From a Client</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: left;
        }

        .header {
            background-color: #0000FF;
            color: #fff;
            padding: 10px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            border-radius: 5px 5px 0 0;
            margin-bottom: 20px;
        }

        .user-details {
            margin-bottom: 20px;
        }

        .user-details p {
            margin: 10px 0;
            font-size: 16px;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">A Client Has Contacted You</div>
    <div class="user-details">
        <p><strong>Name:</strong> {{ $name }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Phone:</strong> {{ $phone }}</p>
        <p><strong>Message:</strong> {!! $messageContent !!}</p>
    </div>
    <div class="footer">
        <p>This is an automated notification. Please do not reply to this email.</p>
    </div>
</div>
</body>
</html>