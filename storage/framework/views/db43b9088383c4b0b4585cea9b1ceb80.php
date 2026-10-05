<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form Submitted</title>
</head>
<body>
    <h2>Student Registration </h2>
    <p><strong>Name:</strong> <?php echo e($data['full_name']); ?></p>
    <p><strong>Father Name:</strong> <?php echo e($data['father_name']); ?></p>
    <p><strong>Date Of Birth:</strong> <?php echo e($data['dob']); ?></p>
    <p><strong>E-Mail:</strong> <?php echo e($data['email']); ?></p>
    <p><strong>Address:</strong> <?php echo e($data['p_address']); ?></p>
    <p><strong>Course:</strong> <?php echo e($data['courses']); ?></p>
    <p><strong>Branch:</strong> <?php echo e($data['sub_courses']); ?></p>
    <p>Thank you for your Registration.</p>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\prabh\resources\views/website/emails/student-registration-mail.blade.php ENDPATH**/ ?>