<!DOCTYPE html>
<html>
<head>
    <title>Online Registration Submitted</title>
</head>
<body>
    <h2>Online Registration Enquiry Submitted</h2>
    <p><strong>Name:</strong> {{ $data['contact_name'] }}</p>
    <p><strong>Email:</strong> {{ $data['contact_email'] }}</p>
    <p><strong>Mobile:</strong> {{ $data['contact_phone'] }}</p>
    <p><strong>Course Interested:</strong> {{ $data['courses'] }}</p>
</body>
</html>

