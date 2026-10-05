<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Thank You - Payment Successful</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }
        .thank-you-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
            max-width: 480px;
            text-align: center;
        }
        .thank-you-container h1 {
            font-weight: 700;
            margin-bottom: 20px;
        }
        .thank-you-container p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .btn-home {
            background-color: #fff;
            color: #2575fc;
            font-weight: 600;
            padding: 10px 30px;
            border-radius: 50px;
            transition: background-color 0.3s ease;
            border: none;
            text-decoration: none;
        }
        .btn-home:hover {
            background-color: #e0e0e0;
            color: #1a52c7;
        }
        .icon-checkmark {
            font-size: 60px;
            margin-bottom: 20px;
            color: #00d97e;
        }
    </style>
</head>
<body>
    <div class="thank-you-container">
        <div class="icon-checkmark">
            &#10004; <!-- checkmark symbol -->
        </div>
        <h1>Thank You!</h1>
        <p>Your payment was successful. We have received your details and will process your request shortly.</p>
        <a href="{{ url('/') }}" class="btn-home">Back to Home</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
