<!DOCTYPE html>
<html>
<head>
    <title>Admission Confirmation</title>
</head>
<body>
    <h2>Dear <?php echo e($data['name']); ?>,</h2>

    <p>Thank you for your admission enquiry.</p>
    <p><strong>Course Selected:</strong> <?php echo e($data['courses']); ?></p>
    <p>We will get back to you shortly.</p>

    <br>
    <p>Best regards,</p>
    <p><strong>Your Institute Name</strong></p>
</body>
</html>
<?php /**PATH /home/u127772000/domains/prabhateng.co.in/public_html/resources/views/website/emails/admission-enquiry-confirmation.blade.php ENDPATH**/ ?>