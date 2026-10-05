<?php $__env->startSection('content'); ?>
    <div class="contents">
        <section id="cnt-section" class="contact-info section-padding pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-heading center-heading text-center">
                            <h3>Student Registration</h3>
                            <p>Prabhat Engineering College</p>
                        </div>

                        <form id="registrationForm" method="POST" action="<?php echo e(route('for.student.registration')); ?>"
                            class="thm-form2" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-danger" id="formErrors" style="display:none;"></div>
                                </div>

                                <!-- Personal Information Section -->
                                <div class="col-12">
                                    <h4 class="form-section-title">Personal Information</h4>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Full Name <span class="text-danger">*</span></label>
                                        <input type="text" id="full_name" name="full_name" class="form-control" required>
                                        <small class="text-danger error-message" id="full_name_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Father's Name <span class="text-danger">*</span></label>
                                        <input type="text" id="father_name" name="father_name" class="form-control"
                                            required>
                                        <small class="text-danger error-message" id="father_name_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Mother's Name <span class="text-danger">*</span></label>
                                        <input type="text" id="mother_name" name="mother_name" class="form-control"
                                            required>
                                        <small class="text-danger error-message" id="mother_name_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Date of Birth <span class="text-danger">*</span></label>
                                        <input type="date" name="dob" id="dob" class="form-control" required>
                                        <small class="text-danger error-message" id="dob_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Gender <span class="text-danger">*</span></label>
                                        <select name="gender" id="gender" class="form-control" required>
                                            <option value="">-- Select Gender --</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        <small class="text-danger error-message" id="gender_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Religion <span class="text-danger">*</span></label>
                                        <input type="text" name="religion" id="religion" class="form-control" required>
                                        <small class="text-danger error-message" id="religion_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Category <span class="text-danger">*</span></label>
                                        <select name="category" id="category" class="form-control" required>
                                            <option value="">--Select--</option>
                                            <option value="General">General</option>
                                            <option value="OBC">OBC</option>
                                            <option value="SC">SC</option>
                                            <option value="ST">ST</option>
                                            <option value="Minority">Minority</option>
                                        </select>
                                        <small class="text-danger error-message" id="category_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Caste / Sub-caste</label>
                                        <input type="text" name="caste" id="caste" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Aadhaar Number <span class="text-danger">*</span></label>
                                        <input type="text" name="aadhaar" maxlength="12" id="aadhaar"
                                            class="form-control" required>
                                        <small class="text-danger error-message" id="aadhaar_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>PAN Card <span class="text-danger">*</span></label>
                                        <input type="text" name="pan_card" maxlength="10" id="pan_card"
                                            class="form-control" required>
                                        <small class="text-danger error-message" id="pan_card_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Blood Group <span class="text-danger">*</span></label>
                                        <select name="blood" id="blood" class="form-control" required>
                                            <option value="">-- Select Blood Group --</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                        </select>
                                        <small class="text-danger error-message" id="blood_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Marital Status <span class="text-danger">*</span></label>
                                        <select name="maritul_status" id="maritul_status" class="form-control" required>
                                            <option value="">-- Select Status --</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Widowed">Widowed</option>
                                        </select>
                                        <small class="text-danger error-message" id="maritul_status_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nationality <span class="text-danger">*</span></label>
                                        <input type="text" name="nationality" id="nationality" class="form-control"
                                            value="Indian" required>
                                        <small class="text-danger error-message" id="nationality_error"></small>
                                    </div>
                                </div>

                                <!-- Contact Information Section -->
                                <div class="col-12 mt-4">
                                    <h4 class="form-section-title">Contact Information</h4>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Permanent Address <span class="text-danger">*</span></label>
                                        <textarea name="p_address" id="p_address" cols="30" rows="3" class="form-control" required></textarea>
                                        <small class="text-danger error-message" id="p_address_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Correspondence Address <span class="text-danger">*</span></label>
                                        <textarea name="c_address" id="c_address" cols="30" rows="3" class="form-control" required></textarea>
                                        <small class="text-danger error-message" id="c_address_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>State <span class="text-danger">*</span></label>
                                        <select name="state" id="state" class="form-control" required>
                                            <option value="">-- Select State --</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Delhi">Delhi</option>
                                        </select>
                                        <small class="text-danger error-message" id="state_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>City <span class="text-danger">*</span></label>
                                        <select name="city" id="city" class="form-control" required>
                                            <option value="">-- Select City --</option>
                                            <option value="Kanpur Nagar">Kanpur Nagar</option>
                                            <option value="Kanpur Dehat">Kanpur Dehat</option>
                                            <option value="Seetapur">Seetapur</option>
                                        </select>
                                        <small class="text-danger error-message" id="city_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>PIN Code <span class="text-danger">*</span></label>
                                        <input type="text" name="pin" id="pin" maxlength="6"
                                            class="form-control" required>
                                        <small class="text-danger error-message" id="pin_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Mobile Number <span class="text-danger">*</span></label>
                                        <input type="text" name="mobile" id="mobile" class="form-control"
                                            required>
                                        <small class="text-danger error-message" id="mobile_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Alternate Number</label>
                                        <input type="text" name="alt_mobile" id="alt_mobile" class="form-control">
                                        <small class="text-danger error-message" id="alt_mobile_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control"
                                            required>
                                        <small class="text-danger error-message" id="email_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Parent Email</label>
                                        <input type="email" name="parent_email" id="parent_email"
                                            class="form-control">
                                        <small class="text-danger error-message" id="parent_email_error"></small>
                                    </div>
                                </div>

                                <!-- Course Information Section -->
                                <div class="col-12 mt-4">
                                    <h4 class="form-section-title">Course Information</h4>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Course <span class="text-danger">*</span></label>
                                        <select name="courses" id="categorySelect" class="form-control" required>
                                            <option value="">-- Select Course --</option>
                                            <option value="B.Tech">B.Tech</option>
                                            <option value="MBA">MBA</option>
                                            <option value="Polytechnic">Polytechnic</option>
                                            <option value="Pharmacy">Pharmacy</option>
                                            <option value="Applied Science And Humanities">Applied Science And Humanities
                                            </option>
                                        </select>
                                        <small class="text-danger error-message" id="courses_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Branch <span class="text-danger">*</span></label>
                                        <select name="sub_courses" id="subCategorySelect" class="form-control" required>
                                            <option value="">-- Select Branch --</option>
                                        </select>
                                        <small class="text-danger error-message" id="sub_courses_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Mode of Admission <span class="text-danger">*</span></label>
                                        <select name="admission_mode" id="admission_mode" class="form-control" required>
                                            <option value="">--Select Mode--</option>
                                            <option value="Entrance Exam">Entrance Exam</option>
                                            <option value="Direct">Direct</option>
                                            <option value="Management Quota">Management Quota</option>
                                        </select>
                                        <small class="text-danger error-message" id="admission_mode_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Admission Year/Semester <span class="text-danger">*</span></label>
                                        <input type="text" name="year_semester" id="year_semester"
                                            class="form-control" required>
                                        <small class="text-danger error-message" id="year_semester_error"></small>
                                    </div>
                                </div>

                                <!-- Educational Qualification Section -->
                                <div class="col-12 mt-4">
                                    <h4 class="form-section-title">Educational Qualification</h4>
                                    <h5 class="mt-3">10th Standard Details</h5>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Exam Passed <span class="text-danger">*</span></label>
                                        <input type="text" name="exam_10" id="exam_10" class="form-control"
                                            value="10th" readonly>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Board/University Name <span class="text-danger">*</span></label>
                                        <input type="text" name="board_10" id="board_10" class="form-control"
                                            required>
                                        <small class="text-danger error-message" id="board_10_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>School/College Name <span class="text-danger">*</span></label>
                                        <input type="text" name="school_10" id="school_10" class="form-control"
                                            required>
                                        <small class="text-danger error-message" id="school_10_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Year of Passing <span class="text-danger">*</span></label>
                                        <input type="text" name="passing_year_10" id="passing_year_10"
                                            class="form-control" required>
                                        <small class="text-danger error-message" id="passing_year_10_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Percentage/CGPA <span class="text-danger">*</span></label>
                                        <input type="text" name="percentage_10" id="percentage_10"
                                            class="form-control" required>
                                        <small class="text-danger error-message" id="percentage_10_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Roll Number <span class="text-danger">*</span></label>
                                        <input type="text" name="roll_10" id="roll_10" class="form-control"
                                            required>
                                        <small class="text-danger error-message" id="roll_10_error"></small>
                                    </div>
                                </div>

                                <!-- Documents Upload Section -->
                                <div class="col-12 mt-4">
                                    <h4 class="form-section-title">Document Upload</h4>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 form-group">
                                        <label class="form-label">Passport-size Photo (JPEG/PNG) <span
                                                class="text-danger">*</span></label><br>
                                        <div class="custom-file-upload">
                                            <button type="button" class="custom-upload-btn">
                                                <i class="fa fa-upload"></i> Choose Photo
                                            </button>
                                            <input type="file" name="photo" id="photo" class="form-control"
                                                accept=".pdf,.jpg,.jpeg,.png" required onchange="displayFileName(this)">
                                        </div>
                                        <div id="file-name" class="file-name-display file-name">No file chosen</div>
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 form-group">
                                        <label class="form-label">Signature Scan<span
                                                class="text-danger">*</span></label><br>
                                        <div class="custom-file-upload">
                                            <button type="button" class="custom-upload-btn">
                                                <i class="fa fa-upload"></i> Choose Signature Scan
                                            </button>
                                            <input type="file" name="signature" id="signature" class="form-control"
                                                accept=".pdf,.jpg,.jpeg,.png" required onchange="displayFileName(this)">
                                        </div>
                                        <div id="file-name" class="file-name-display file-name">No file chosen</div>
                                    </div>


                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 form-group">
                                        <label class="form-label">Aadhar Card (optional)<span
                                                class="text-danger">*</span></label><br>
                                        <div class="custom-file-upload">
                                            <button type="button" class="custom-upload-btn">
                                                <i class="fa fa-upload"></i> Choose Aadhar Card
                                            </button>
                                            <input type="file" name="aadhar_card" id="aadhar_card"
                                                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required
                                                onchange="displayFileName(this)">
                                        </div>
                                        <div id="file-name" class="file-name-display file-name">No file chosen</div>
                                    </div>



                                </div>

                                <div class="col-lg-6">

                                    <div class="mb-3 form-group">
                                        <label class="form-label">PAN Card (optional)<span
                                                class="text-danger">*</span></label><br>
                                        <div class="custom-file-upload">
                                            <button type="button" class="custom-upload-btn">
                                                <i class="fa fa-upload"></i> Choose PAN Card
                                            </button>
                                            <input type="file" name="pan_card_certificate" id="pan_card_certificate"
                                                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required
                                                onchange="displayFileName(this)">
                                        </div>
                                        <div id="file-name" class="file-name-display file-name">No file chosen</div>
                                    </div>






                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 form-group">
                                        <label class="form-label">Bank Passbook Copy<span
                                                class="text-danger">*</span></label><br>
                                        <div class="custom-file-upload">
                                            <button type="button" class="custom-upload-btn">
                                                <i class="fa fa-upload"></i> Choose >Bank Passbook Copy
                                            </button>
                                            <input type="file" name="bank_passbook" id="bank_passbook"
                                                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required
                                                onchange="displayFileName(this)">
                                        </div>
                                        <div id="file-name" class="file-name-display file-name">No file chosen</div>
                                    </div>



                                </div>

                                <div class="col-lg-6">

                                    <div class="mb-3 form-group">
                                        <label class="form-label">Income Certificate<span
                                                class="text-danger">*</span></label><br>
                                        <div class="custom-file-upload">
                                            <button type="button" class="custom-upload-btn">
                                                <i class="fa fa-upload"></i> Choose Income Certificate
                                            </button>
                                            <input type="file" name="income_certificate" id="income_certificate"
                                                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required
                                                onchange="displayFileName(this)">
                                        </div>
                                        <div id="file-name" class="file-name-display file-name">No file chosen</div>
                                    </div>



                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 form-group">
                                        <label class="form-label">Caste Certificate<span
                                                class="text-danger">*</span></label><br>
                                        <div class="custom-file-upload">
                                            <button type="button" class="custom-upload-btn">
                                                <i class="fa fa-upload"></i> Choose Caste Certificate
                                            </button>
                                            <input type="file" name="caste_certificate" id="caste_certificate"
                                                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required
                                                onchange="displayFileName(this)">
                                        </div>
                                        <div id="file-name" class="file-name-display file-name">No file chosen</div>
                                    </div>


                                </div>

                                <div class="col-lg-6">

                                    <div class="mb-3 form-group">
                                        <label class="form-label">Domicile/Residential Proof<span
                                                class="text-danger">*</span></label><br>
                                        <div class="custom-file-upload">
                                            <button type="button" class="custom-upload-btn">
                                                <i class="fa fa-upload"></i> Choose Domicile Certificate
                                            </button>
                                            <input type="file" name="domicile_certificate" id="domicile_certificate"
                                                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required
                                                onchange="displayFileName(this)">
                                        </div>
                                        <div id="file-name" class="file-name-display file-name">No file chosen</div>
                                    </div>



                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 form-group">
                                        <label class="form-label">Transfer Certificate (TC) <span
                                                class="text-danger">*</span></label><br>
                                        <div class="custom-file-upload">
                                            <button type="button" class="custom-upload-btn">
                                                <i class="fa fa-upload"></i> Choose Transfer Certificate
                                            </button>
                                            <input type="file" name="transfer_certificate" id="transfer_certificate"
                                                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required
                                                onchange="displayFileName(this)">
                                        </div>
                                        <div id="file-name" class="file-name-display file-name">No file chosen</div>
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 form-group">
                                        <label class="form-label">Migration Certificate <span
                                                class="text-danger">*</span></label><br>
                                        <div class="custom-file-upload">
                                            <button type="button" class="custom-upload-btn">
                                                <i class="fa fa-upload"></i> Choose Migration Certificate
                                            </button>
                                            <input type="file" name="migration_certificate" id="migration_certificate"
                                                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required
                                                onchange="displayFileName(this)">
                                        </div>
                                        <div id="file-name" class="file-name-display file-name">No file chosen</div>
                                    </div>





                                </div>

                                <div class="col-lg-6">


                                    <div class="mb-3 form-group">
                                        <label class="form-label">10th Mark Sheet <span
                                                class="text-danger">*</span></label><br>
                                        <div class="custom-file-upload">
                                            <button type="button" class="custom-upload-btn">
                                                <i class="fa fa-upload"></i> Choose 10th Mark Sheet
                                            </button>
                                            <input type="file" name="marksheet_10" id="marksheet_10"
                                                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required
                                                onchange="displayFileName(this)">
                                        </div>
                                        <div id="file-name" class="file-name-display file-name">No file chosen</div>
                                    </div>




                                </div>

                                <div class="col-lg-6">

                                    <div class="mb-3 form-group">
                                        <label class="form-label">12th Mark Sheet <span
                                                class="text-danger">*</span></label><br>
                                        <div class="custom-file-upload">
                                            <button type="button" class="custom-upload-btn">
                                                <i class="fa fa-upload"></i> Choose 12th Mark Sheet
                                            </button>
                                            <input type="file" name="marksheet_12" id="marksheet_12"
                                                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required
                                                onchange="displayFileName(this)">
                                        </div>
                                        <div id="file-name" class="file-name-display file-name">No file chosen</div>
                                    </div>



                                </div>

                                <div class="col-lg-6">

                                    <div class="mb-3 form-group">
                                        <label class="form-label">Graduation Mark Sheet (if applicable) <span
                                                class="text-danger">*</span></label><br>
                                        <div class="custom-file-upload">
                                            <button type="button" class="custom-upload-btn">
                                                <i class="fa fa-upload"></i> Choose Graduation Mark Sheet
                                            </button>
                                            <input type="file" name="marksheet_grad" id="marksheet_grad"
                                                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required
                                                onchange="displayFileName(this)">
                                        </div>
                                        <div id="file-name" class="file-name-display file-name">No file chosen</div>
                                    </div>
                                </div>




                                <div class="col-lg-6">

                                    <div class="mb-3 form-group">
                                        <label class="form-label">Entrance Exam Score Card <span
                                                class="text-danger">*</span></label><br>
                                        <div class="custom-file-upload">
                                            <button type="button" class="custom-upload-btn">
                                                <i class="fa fa-upload"></i> Choose Score Card
                                            </button>
                                            <input type="file" name="entrance_scorecard" id="entrance_scorecard"
                                                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required
                                                onchange="displayFileName(this)">
                                        </div>
                                        <div id="file-name" class="file-name-display file-name">No file chosen</div>
                                    </div>

                                </div>




                                <!-- Bank Details Section -->
                                <div class="col-12 mt-4">
                                    <h4 class="form-section-title">Bank Details for Scholarship/Refund</h4>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Bank Account Holder's Name <span class="text-danger">*</span></label>
                                        <input type="text" name="account_holder_name" id="account_holder_name"
                                            class="form-control" required>
                                        <small class="text-danger error-message" id="account_holder_name_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Bank Name <span class="text-danger">*</span></label>
                                        <input type="text" name="bank_name" id="bank_name" class="form-control"
                                            required>
                                        <small class="text-danger error-message" id="bank_name_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Account Number <span class="text-danger">*</span></label>
                                        <input type="text" name="account_number" id="account_number"
                                            class="form-control" required>
                                        <small class="text-danger error-message" id="account_number_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>IFSC Code <span class="text-danger">*</span></label>
                                        <input type="text" name="ifsc_code" id="ifsc_code" class="form-control"
                                            required>
                                        <small class="text-danger error-message" id="ifsc_code_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Branch Name <span class="text-danger">*</span></label>
                                        <input type="text" name="branch_name" id="branch_name" class="form-control"
                                            required>
                                        <small class="text-danger error-message" id="branch_name_error"></small>
                                    </div>
                                </div>

                                <!-- Declaration Section -->
                                <div class="col-12 mt-4">
                                    <h4 class="form-section-title">Declaration</h4>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="declaration"
                                            id="declaration" required>
                                        <label class="form-check-label" for="declaration">
                                            I confirm that all the above information is true to the best of my
                                            knowledge. I authorize Prabhat Engineering College to use these details for
                                            admission, scholarship, and other official purposes.
                                        </label>
                                        <small class="text-danger error-message" id="declaration_error"></small>
                                    </div>
                                </div>


                                <div class="mb-3 form-group">
                                    <label class="form-label">Upload Signature (Digital or Scanned) <span
                                            class="text-danger">*</span></label><br>
                                    <div class="custom-file-upload">
                                        <button type="button" class="custom-upload-btn">
                                            <i class="fa fa-upload"></i> Choose Signature
                                        </button>
                                        <input type="file" name="digital_signature" id="digital_signature"
                                            class="form-control" accept=".jpg,.jpeg,.png" required
                                            onchange="displayFileName(this)">
                                    </div>
                                    <div id="file-name" class="file-name-display file-name">No file chosen</div>
                                </div>



                                <div class="col-lg-6 mt-3">
                                    <div class="form-group">
                                        <label>Date of Submission <span class="text-danger">*</span></label>
                                        <input type="date" name="submission_date" id="submission_date"
                                            class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
                                        <small class="text-danger error-message" id="submission_date_error"></small>
                                    </div>
                                </div>

                                <div class="col-lg-12 mt-4">
                                    <div class="text-center">
                                        <button class="btn btn-primary btn-lg" type="submit" id="submitBtn">
                                            Register <i class="fa fa-angle-right ml-2"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
 <!-- Make sure jQuery is loaded first -->
    <!-- jQuery (make sure it's included) -->

    <script>

        const courseBranches = {
            "B.Tech": ["Computer Science & Engineering", "Electronic & Communication Engineering",
                "Mechanical Engineering", "Electrical Engineering", "Civil Engineering"
            ],
            "MBA": ["Finance", "Marketing", "HRM", "Information Technology", "Information Business"],
            "Polytechnic": ["Machenical Engineering", "Machenical Engineering Production", "Communication Engineering",
                "", "Electrical Engineering"
            ],
            "Pharmacy": ["D.phrama", "B.Pharma"],
            "Applied Science And Humanities": ["Applied Science And Humanities"]
        };

        const courseSelect = document.getElementById('categorySelect');
        const branchSelect = document.getElementById('subCategorySelect');

        // Populate default subcategory based on default selection (optional)
        courseSelect.addEventListener('change', function() {
            const selectedCourse = this.value;
            branchSelect.innerHTML = '<option value="">-- Select Branch --</option>'; // reset

            if (selectedCourse && courseBranches[selectedCourse]) {
                courseBranches[selectedCourse].forEach(branch => {
                    const option = document.createElement('option');
                    option.value = branch;
                    option.textContent = branch;
                    branchSelect.appendChild(option);
                });
            }
        });

        // Optional: Set default course and trigger change
        window.addEventListener('DOMContentLoaded', () => {
            courseSelect.value = "B.Tech"; // default course
            courseSelect.dispatchEvent(new Event('change')); // trigger branch update
            branchSelect.value = "Computer Science"; // default branch (optional)
        });








    document.getElementById('registrationForm').addEventListener('submit', function (e) {
      // PAN validation (e.g., ABCDE1234F)
      const pan = document.getElementById('pan_card').value.trim();
      const panRegex = /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
      if (!panRegex.test(pan)) {
        alert('Invalid PAN number. Format should be ABCDE1234F');
        e.preventDefault();
        return;
      }

      // Aadhaar validation (12 digits)
      const aadhaar = document.getElementById('aadhar_card').value.trim();
      const aadhaarRegex = /^\d{12}$/;
      if (!aadhaarRegex.test(aadhar_card)) {
        alert('Invalid Aadhaar number. It should be a 12-digit number.');
        e.preventDefault();
        return;
      }

      // Image validation
      const image = document.getElementById('photo').files[0];
      if (image) {
        const imageTypes = ['photo/jpeg', 'photo/png'];
        if (!imageTypes.includes(image.type)) {
          alert('Invalid image file. Only JPG and PNG are allowed.');
          e.preventDefault();
          return;
        }
      }

        const signature = document.getElementById('signature').files[0];
      if (signature) {
        const imageTypes = ['signature/jpeg', 'signature/png'];
        if (!imageTypes.includes(signature.type)) {
          alert('Invalid image file. Only JPG and PNG are allowed.');
          e.preventDefault();
          return;
        }
      }

      // PDF validation
    //   const pdf = document.getElementById('pdf').files[0];
    //   if (pdf) {
    //     if (pdf.type !== 'application/pdf') {
    //       alert('Invalid file. Only PDF files are allowed.');
    //       e.preventDefault();
    //       return;
    //     }
    //   }
    });

          </script>

    <style>
        .form-section-title {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 8px;
            margin-bottom: 20px;
        }

        .is-invalid {
            border-color: #dc3545 !important;
        }

        .error-message {
            display: none;
            font-size: 0.875em;
        }

        #formErrors {
            margin-bottom: 20px;
        }

        .custom-file-label::after {
            content: "Browse";
        }

        .btn-primary {
            background-color: #3498db;
            border-color: #3498db;
            padding: 10px 30px;
            font-weight: 600;
        }

        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }

        .form-control {
            padding: 10px 15px;
            border-radius: 4px;
        }

        select.form-control {
            height: calc(2.25rem + 12px);
        }

        textarea.form-control {
            min-height: 100px;
        }

        input[type="file"] {
            width: 10%;
            height: 35px;
            margin: 12px 5%;
        }

        .contact-info {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 200px);
            /* Adjust based on your header/footer height */
        }

        .contact__form {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .section-heading {
            margin-bottom: 30px;
        }
    </style>
    <script>
        function displayFileName(input) {
            // Find the closest parent form-group, then find the file-name-display within it
            const fileNameDisplay = input.closest('.form-group').querySelector('.file-name-display');
            if (input.files.length > 0) {
                fileNameDisplay.textContent = input.files[0].name;
            } else {
                fileNameDisplay.textContent = 'No file chosen';
            }
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layout.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\prabh\resources\views/website/login-register/for-student.blade.php ENDPATH**/ ?>