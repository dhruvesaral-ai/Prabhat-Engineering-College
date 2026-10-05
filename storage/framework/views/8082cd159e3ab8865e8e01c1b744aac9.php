<!DOCTYPE html>
<html>
<head>
    <title>New Admission Enquiry</title>
</head>
<body>
    <h2>New Admission Enquiry Submitted</h2>
    <p><strong>Name:</strong> <?php echo e($data['name']); ?></p>
    <p><strong>Email:</strong> <?php echo e($data['email']); ?></p>
    <p><strong>Mobile:</strong> <?php echo e($data['mobile']); ?></p>
    <p><strong>Course Interested:</strong> <?php echo e($data['courses']); ?></p>
</body>
</html>
<?php /**PATH /home/u127772000/domains/prabhateng.co.in/public_html/resources/views/website/emails/admission-notification.blade.php ENDPATH**/ ?>