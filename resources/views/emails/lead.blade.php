<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Lead</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 600px;
            background: #fff;
            margin: 0 auto;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
        }
        h2 {
            color: #2c3e50;
            margin-bottom: 20px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            font-size: 22px;
        }
        .detail {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }
        .value {
            background: #f4f6f8;
            padding: 10px 12px;
            border-radius: 6px;
            font-size: 14px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Contact Lead</h2>

        <div class="detail">
            <span class="label">Name:</span>
            <div class="value">{{ $details['name'] }}</div>
        </div>

        <div class="detail">
            <span class="label">Email:</span>
            <div class="value">{{ $details['email'] }}</div>
        </div>

        <div class="detail">
            <span class="label">Phone:</span>
            <div class="value">{{ $details['phone'] ?? 'N/A' }}</div>
        </div>

        <div class="detail">
            <span class="label">Message:</span>
            <div class="value">{{ $details['message'] ?? 'N/A' }}</div>
        </div>
    </div>
</body>
</html>
