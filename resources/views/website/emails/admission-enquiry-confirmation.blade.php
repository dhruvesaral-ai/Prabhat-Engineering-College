<!DOCTYPE html>
<html>
<head>
    <title>Admission Confirmation</title>
</head>
<body>
    <h2>Dear {{ $data['name'] }},</h2>

    <p>Thank you for your admission enquiry.</p>
    <p><strong>Course Selected:</strong> {{ $data['courses'] }}</p>
    <p>We will get back to you shortly.</p>

    <br>
    <p>Best regards,</p>
    <p><strong>Your Institute Name</strong></p>
</body>
</html>
