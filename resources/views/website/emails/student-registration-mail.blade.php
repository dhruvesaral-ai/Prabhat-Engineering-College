<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Student Registration Submitted</title>
</head>
<body style="margin:0; padding:0; background:#f4f4f4; font-family: Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f4f4; padding:30px 0;">
        <tr>
            <td align="center">

                <table width="650" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:10px; overflow:hidden; box-shadow:0 2px 10px rgba(0,0,0,0.1);">

                    <!-- Header -->
                    <tr>
                        <td style="background:#1F3971; padding:25px; text-align:center;">

                            <img src="{{asset('public/website/prabhat/prabhat.jpg')}}"
                                 alt="Prabhat Engineering College"
                                 style="max-width:100px; border-radius:8px; margin-bottom:10px;">

                            <h1 style="color:#ffffff; margin:0; font-size:28px;">
                                Prabhat Engineering College
                            </h1>

                            <p style="color:#dbe4ff; margin-top:8px; font-size:14px;">
                                Student Registration Confirmation
                            </p>

                        </td>
                    </tr>

                    <!-- Body -->
                    <tr>
                        <td style="padding:35px;">

                            <h2 style="color:#1F3971; margin-top:0;">
                                Registration Submitted Successfully
                            </h2>

                            <p style="font-size:15px; color:#555; line-height:1.7;">
                                Dear <strong>{{ $data['full_name'] }}</strong>,
                                <br><br>
                                Thank you for submitting your registration form.
                                Your application details are given below:
                            </p>

                            <table width="100%" cellpadding="10" cellspacing="0"
                                   style="border-collapse:collapse; margin-top:20px;">

                                <tr style="background:#f7f9fc;">
                                    <td style="border:1px solid #ddd;"><strong>Name</strong></td>
                                    <td style="border:1px solid #ddd;">{{ $data['full_name'] }}</td>
                                </tr>

                                <tr>
                                    <td style="border:1px solid #ddd;"><strong>Father Name</strong></td>
                                    <td style="border:1px solid #ddd;">{{ $data['father_name'] }}</td>
                                </tr>

                                <tr style="background:#f7f9fc;">
                                    <td style="border:1px solid #ddd;"><strong>Date Of Birth</strong></td>
                                    <td style="border:1px solid #ddd;">{{ $data['dob'] }}</td>
                                </tr>

                                <tr>
                                    <td style="border:1px solid #ddd;"><strong>Email</strong></td>
                                    <td style="border:1px solid #ddd;">{{ $data['email'] }}</td>
                                </tr>

                                <tr style="background:#f7f9fc;">
                                    <td style="border:1px solid #ddd;"><strong>Address</strong></td>
                                    <td style="border:1px solid #ddd;">{{ $data['p_address'] }}</td>
                                </tr>

                                <tr>
                                    <td style="border:1px solid #ddd;"><strong>Course</strong></td>
                                    <td style="border:1px solid #ddd;">{{ $data['courses'] }}</td>
                                </tr>

                                <tr style="background:#f7f9fc;">
                                    <td style="border:1px solid #ddd;"><strong>Branch</strong></td>
                                    <td style="border:1px solid #ddd;">{{ $data['sub_courses'] }}</td>
                                </tr>

                                <tr>
                                    <td style="border:1px solid #ddd;"><strong>Year/Semester</strong></td>
                                    <td style="border:1px solid #ddd;">{{ $data['year_semester'] }}</td>
                                </tr>

                            </table>

                            <p style="margin-top:30px; font-size:15px; color:#555; line-height:1.7;">
                                Our admission team will contact you shortly for further process.
                            </p>

                            <div style="text-align:center; margin-top:35px;">
                                <a href="https://www.prabhateng.co.in/"
                                   style="background:#1F3971;
                                          color:#ffffff;
                                          padding:12px 25px;
                                          text-decoration:none;
                                          border-radius:5px;
                                          display:inline-block;
                                          font-weight:bold;">
                                    Visit College Website
                                </a>
                            </div>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background:#f1f1f1; padding:20px; text-align:center;">

                            <p style="margin:0; color:#666; font-size:13px;">
                                © {{ date('Y') }} Prabhat Engineering College. All Rights Reserved.
                            </p>

                            <p style="margin:8px 0 0; color:#666; font-size:13px;">
                                Website:
                                <a href="https://www.prabhateng.co.in/"
                                   style="color:#1F3971; text-decoration:none;">
                                    www.prabhateng.co.in
                                </a>
                            </p>

                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>