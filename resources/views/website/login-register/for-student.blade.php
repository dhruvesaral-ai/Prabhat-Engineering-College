@extends('website.layout.main')
@section('content')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <div class="contents">
        <section id="cnt-section" class="contact-info section-padding pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-heading center-heading text-center">
                            <h3>Student Registration</h3>
                            <p>Prabhat Engineering College</p>
                        </div>

                        <form id="registrationForm" method="POST" action="{{ route('for.student.registration') }}"
                            class="thm-form2 validate-form" enctype="multipart/form-data">
                            @csrf
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
                                        <input type="text" id="full_name" name="full_name" value="{{ old('full_name') }}"
                                            class="form-control rqrd" required>
                                        @error('full_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Father's Name <span class="text-danger">*</span></label>
                                        <input type="text" id="father_name" name="father_name"
                                            value="{{ old('father_name') }}" class="form-control rqrd" required>
                                        @error('father_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Mother's Name <span class="text-danger">*</span></label>
                                        <input type="text" id="mother_name" name="mother_name"
                                            value="{{ old('mother_name') }}" class="form-control rqrd" required>
                                        @error('mother_name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Date of Birth <span class="text-danger">*</span></label>
                                        <input type="date" name="dob" id="dob" value="{{ old('dob') }}"
                                            class="form-control rqrd" required>
                                        @error('dob')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Gender <span class="text-danger">*</span></label>
                                        <select name="gender" id="gender" value="{{ old('gender') }}"
                                            class="form-control rqrd" required>
                                            <option value="">-- Select Gender --</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        @error('gender')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Religion <span class="text-danger">*</span></label>
                                        <input type="text" name="religion" id="religion" value="{{ old('religion') }}"
                                            class="form-control rqrd" required>
                                        @error('religion')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Category <span class="text-danger">*</span></label>
                                        <select name="category" id="category" value="{{ old('category') }}"
                                            class="form-control rqrd" required>
                                            <option value="">--Select--</option>
                                            <option value="General">General</option>
                                            <option value="OBC">OBC</option>
                                            <option value="SC">SC</option>
                                            <option value="ST">ST</option>
                                            <option value="Minority">Minority</option>
                                        </select>
                                        @error('category')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Caste / Sub-caste</label>
                                        <input type="text" name="caste" id="caste" value="{{ old('caste') }}"
                                            class="form-control rqrd">
                                        @error('caste')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Aadhaar Number <span class="text-danger">*</span></label>
                                        <input type="text" name="aadhaar" value="{{ old('aadhaar') }}"
                                            maxlength="12" id="aadhaar" class="form-control rqrd" required>
                                        @error('aadhaar')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>PAN Card <span class="text-danger">*</span></label>
                                        <input type="text" name="pan_card" value="{{ old('pan_card') }}"
                                            minlength="10" maxlength="10" id="pan_card"
                                            class="form-control rqrd pan-vldt" required>
                                        <div class="text-danger error-msg" style="font-size: 13px;"></div>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Blood Group <span class="text-danger">*</span></label>
                                        <select name="blood" id="blood" value="{{ old('blood') }}"
                                            class="form-control rqrd" required>
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
                                        @error('blood')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Marital Status <span class="text-danger">*</span></label>
                                        <select name="maritul_status" value="{{ old('maritul_status') }}"
                                            id="maritul_status" class="form-control rqrd" required>
                                            <option value="">-- Select Status --</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Widowed">Widowed</option>
                                        </select>
                                        @error('maritul_status')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Nationality <span class="text-danger">*</span></label>
                                        <input type="text" name="nationality" value="{{ old('nationality') }}"
                                            id="nationality" class="form-control rqrd" value="Indian" required>
                                        @error('nationality')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Contact Information Section -->
                                <div class="col-12 mt-4">
                                    <h4 class="form-section-title">Contact Information</h4>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Permanent Address <span class="text-danger">*</span></label>
                                        <textarea name="p_address" id="p_address" cols="30" value="{{ old('p_address') }}" rows="3"
                                            class="form-control rqrd" required></textarea>
                                        @error('p_address')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Correspondence Address <span class="text-danger">*</span></label>
                                        <textarea name="c_address" id="c_address" value="{{ old('c_address') }}" cols="30" rows="3"
                                            class="form-control rqrd" required></textarea>
                                        @error('c_address')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>State <span class="text-danger">*</span></label>
                                        <select name="state" id="state" class="form-control rqrd" required>
                                            <option value="">-- Select State --</option>
                                        </select>
                                        @error('state')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>City <span class="text-danger">*</span></label>
                                        <select name="city" id="city" class="form-control rqrd" required>
                                            <option value="">-- Select City --</option>
                                        </select>
                                        @error('city')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>PIN Code <span class="text-danger">*</span></label>
                                        <input type="text" name="pin" value="{{ old('pin') }}" id="pin"
                                            maxlength="6" class="form-control rqrd" required>
                                        @error('pin')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Mobile Number <span class="text-danger">*</span></label>
                                        <input type="text" name="mobile" value="{{ old('mobile') }}" id="mobile"
                                            class="form-control rqrd" required>
                                        @error('mobile')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Alternate Number</label>
                                        <input type="text" name="alt_mobile" value="{{ old('alt_mobile') }}"
                                            id="alt_mobile" class="form-control rqrd">
                                        @error('alt_mobile')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input type="email" name="email" value="{{ old('email') }}" id="email"
                                            class="form-control rqrd email-vldt" required>
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Parent Email</label>
                                        <input type="email" name="parent_email" value="{{ old('parent_email') }}"
                                            id="parent_email" class="form-control rqrd">
                                        @error('parent_email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Course Information Section -->
                                <div class="col-12 mt-4">
                                    <h4 class="form-section-title">Course Information</h4>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Course <span class="text-danger">*</span></label>
                                        <select name="courses" id="categorySelect" value="{{ old('courses') }}"
                                            class="form-control rqrd" required>
                                            <option value="">-- Select Course --</option>
                                            <option value="B.Tech">B.Tech</option>
                                            <option value="MBA">MBA</option>
                                            <option value="Polytechnic">Polytechnic</option>
                                            <option value="Pharmacy">Pharmacy</option>
                                            <option value="Applied Science And Humanities">Applied Science And Humanities
                                            </option>
                                        </select>
                                        @error('courses')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Branch <span class="text-danger">*</span></label>
                                        <select name="sub_courses" id="subCategorySelect"
                                            value="{{ old('sub_courses') }}" class="form-control rqrd" required>
                                            <option value="">-- Select Branch --</option>
                                        </select>
                                        @error('sub_courses')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Mode of Admission <span class="text-danger">*</span></label>
                                        <select name="admission_mode" id="admission_mode"
                                            value="{{ old('admission_mode') }}" class="form-control rqrd" required>
                                            <option value="">--Select Mode--</option>
                                            <option value="Entrance Exam">Entrance Exam</option>
                                            <option value="Direct">Direct</option>
                                            <option value="Management Quota">Management Quota</option>
                                        </select>
                                        @error('admission_mode')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Admission Year/Semester <span class="text-danger">*</span></label>
                                        <input type="text" name="year_semester" value="{{ old('year_semester') }}"
                                            id="year_semester" class="form-control rqrd" required>
                                        @error('year_semester')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Educational Qualification Section -->
                                <!--<div class="col-12 mt-4">-->
                                <!--    <h4 class="form-section-title">Educational Qualification</h4>-->
                                <!--    <h5 class="mt-3">10th Standard Details</h5>-->
                                <!--</div>-->

                                <!--<div class="col-lg-4">-->
                                <!--    <div class="form-group">-->
                                <!--        <label>Exam Passed <span class="text-danger">*</span></label>-->
                                <!--        <input type="text" name="exam_10" id="exam_10" class="form-control rqrd"-->
                                <!--            value="10th" readonly>-->
                                <!--        @error('exam_10')-->
                                <!--            <small class="text-danger">{{ $message }}</small>-->
                                <!--        @enderror-->
                                <!--    </div>-->
                                <!--</div>-->

                                <!--<div class="col-lg-4">-->
                                <!--    <div class="form-group">-->
                                <!--        <label>Board/University Name <span class="text-danger">*</span></label>-->
                                <!--        <input type="text" name="board_10" value="{{ old('board_10') }}"-->
                                <!--            id="board_10" class="form-control rqrd" required>-->
                                <!--        @error('board_10')-->
                                <!--            <small class="text-danger">{{ $message }}</small>-->
                                <!--        @enderror-->
                                <!--    </div>-->
                                <!--</div>-->

                                <!--<div class="col-lg-4">-->
                                <!--    <div class="form-group">-->
                                <!--        <label>School/College Name <span class="text-danger">*</span></label>-->
                                <!--        <input type="text" name="school_10" value="{{ old('school_10') }}"-->
                                <!--            id="school_10" class="form-control rqrd" required>-->
                                <!--        @error('school_10')-->
                                <!--            <small class="text-danger">{{ $message }}</small>-->
                                <!--        @enderror-->
                                <!--    </div>-->
                                <!--</div>-->

                                <!--<div class="col-lg-4">-->
                                <!--    <div class="form-group">-->
                                <!--        <label>Year of Passing <span class="text-danger">*</span></label>-->
                                <!--        <input type="text" name="passing_year_10"-->
                                <!--            value="{{ old('passing_year_10') }}" id="passing_year_10"-->
                                <!--            class="form-control rqrd" required>-->
                                <!--        @error('passing_year_10')-->
                                <!--            <small class="text-danger">{{ $message }}</small>-->
                                <!--        @enderror-->
                                <!--    </div>-->
                                <!--</div>-->

                                <!--<div class="col-lg-4">-->
                                <!--    <div class="form-group">-->
                                <!--        <label>Percentage/CGPA <span class="text-danger">*</span></label>-->
                                <!--        <input type="text" name="percentage_10" value="{{ old('percentage_10') }}"-->
                                <!--            id="percentage_10" class="form-control rqrd" required>-->
                                <!--        @error('percentage_10')-->
                                <!--            <small class="text-danger">{{ $message }}</small>-->
                                <!--        @enderror-->
                                <!--    </div>-->
                                <!--</div>-->

                                <!--<div class="col-lg-4">-->
                                <!--    <div class="form-group">-->
                                <!--        <label>Roll Number <span class="text-danger">*</span></label>-->
                                <!--        <input type="text" name="roll_10" id="roll_10"value="{{ old('roll_10') }}"-->
                                <!--            class="form-control rqrd" required>-->
                                <!--        @error('roll_10')-->
                                <!--            <small class="text-danger">{{ $message }}</small>-->
                                <!--        @enderror-->
                                <!--    </div>-->
                                <!--</div>-->

                                <!-- Documents Upload Section -->
                                <!--<div class="col-12 mt-4">-->
                                <!--    <h4 class="form-section-title">Document Upload</h4>-->
                                <!--</div>-->

                                <!--<div class="col-lg-6">-->
                                <!--    <div class="mb-3 form-group">-->
                                <!--        <label class="form-label">Passport-size Photo (JPEG/PNG) <span-->
                                <!--                class="text-danger">*</span></label><br>-->
                                <!--        <div class="custom-file-upload">-->
                                <!--            <button type="button" class="custom-upload-btn">-->
                                <!--                <i class="fa fa-upload"></i> Choose Photo-->
                                <!--            </button>-->
                                <!--            <input type="file" name="photo" id="photo" class="form-control"-->
                                <!--                accept=".jpg,.jpeg,.png" required onchange="displayFileName(this)">-->
                                <!--        </div>-->
                                <!--        <div id="file-name" class="file-name-display file-name">No file chosen</div>-->
                                <!--    </div>-->

                                <!--</div>-->

                                <!--<div class="col-lg-6">-->
                                <!--    <div class="mb-3 form-group">-->
                                <!--        <label class="form-label">Signature Scan<span-->
                                <!--                class="text-danger">*</span></label><br>-->
                                <!--        <div class="custom-file-upload">-->
                                <!--            <button type="button" class="custom-upload-btn">-->
                                <!--                <i class="fa fa-upload"></i> Choose Signature Scan-->
                                <!--            </button>-->
                                <!--            <input type="file" name="signature" id="signature" class="form-control"-->
                                <!--                accept=".jpg,.jpeg,.png" required onchange="displayFileName(this)">-->
                                <!--        </div>-->
                                <!--        <div id="file-name" class="file-name-display file-name">No file chosen</div>-->
                                <!--    </div>-->


                                <!--</div>-->

                                <!--<div class="col-lg-6">-->
                                <!--    <div class="mb-3 form-group">-->
                                <!--        <label class="form-label">Aadhar Card (optional)<span-->
                                <!--                class="text-danger">*</span></label><br>-->
                                <!--        <div class="custom-file-upload">-->
                                <!--            <button type="button" class="custom-upload-btn">-->
                                <!--                <i class="fa fa-upload"></i> Choose Aadhar Card-->
                                <!--            </button>-->
                                <!--            <input type="file" name="aadhar_card" id="aadhar_card"-->
                                <!--                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required-->
                                <!--                onchange="displayFileName(this)">-->
                                <!--        </div>-->
                                <!--        <div id="file-name" class="file-name-display file-name">No file chosen</div>-->
                                <!--    </div>-->



                                <!--</div>-->

                                <!--<div class="col-lg-6">-->

                                <!--    <div class="mb-3 form-group">-->
                                <!--        <label class="form-label">PAN Card (optional)<span-->
                                <!--                class="text-danger">*</span></label><br>-->
                                <!--        <div class="custom-file-upload">-->
                                <!--            <button type="button" class="custom-upload-btn">-->
                                <!--                <i class="fa fa-upload"></i> Choose PAN Card-->
                                <!--            </button>-->
                                <!--            <input type="file" name="pan_card_certificate" id="pan_card_certificate"-->
                                <!--                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required-->
                                <!--                onchange="displayFileName(this)">-->
                                <!--        </div>-->
                                <!--        <div id="file-name" class="file-name-display file-name">No file chosen</div>-->
                                <!--    </div>-->






                                <!--</div>-->

                                <!--<div class="col-lg-6">-->
                                <!--    <div class="mb-3 form-group">-->
                                <!--        <label class="form-label">Bank Passbook Copy<span-->
                                <!--                class="text-danger">*</span></label><br>-->
                                <!--        <div class="custom-file-upload">-->
                                <!--            <button type="button" class="custom-upload-btn">-->
                                <!--                <i class="fa fa-upload"></i> Choose >Bank Passbook Copy-->
                                <!--            </button>-->
                                <!--            <input type="file" name="bank_passbook" id="bank_passbook"-->
                                <!--                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required-->
                                <!--                onchange="displayFileName(this)">-->
                                <!--        </div>-->
                                <!--        <div id="file-name" class="file-name-display file-name">No file chosen</div>-->
                                <!--    </div>-->



                                <!--</div>-->

                                <!--<div class="col-lg-6">-->

                                <!--    <div class="mb-3 form-group">-->
                                <!--        <label class="form-label">Income Certificate<span-->
                                <!--                class="text-danger">*</span></label><br>-->
                                <!--        <div class="custom-file-upload">-->
                                <!--            <button type="button" class="custom-upload-btn">-->
                                <!--                <i class="fa fa-upload"></i> Choose Income Certificate-->
                                <!--            </button>-->
                                <!--            <input type="file" name="income_certificate" id="income_certificate"-->
                                <!--                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required-->
                                <!--                onchange="displayFileName(this)">-->
                                <!--        </div>-->
                                <!--        <div id="file-name" class="file-name-display file-name">No file chosen</div>-->
                                <!--    </div>-->



                                <!--</div>-->

                                <!--<div class="col-lg-6">-->
                                <!--    <div class="mb-3 form-group">-->
                                <!--        <label class="form-label">Caste Certificate<span-->
                                <!--                class="text-danger">*</span></label><br>-->
                                <!--        <div class="custom-file-upload">-->
                                <!--            <button type="button" class="custom-upload-btn">-->
                                <!--                <i class="fa fa-upload"></i> Choose Caste Certificate-->
                                <!--            </button>-->
                                <!--            <input type="file" name="caste_certificate" id="caste_certificate"-->
                                <!--                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required-->
                                <!--                onchange="displayFileName(this)">-->
                                <!--        </div>-->
                                <!--        <div id="file-name" class="file-name-display file-name">No file chosen</div>-->
                                <!--    </div>-->


                                <!--</div>-->

                                <!--<div class="col-lg-6">-->

                                <!--    <div class="mb-3 form-group">-->
                                <!--        <label class="form-label">Domicile/Residential Proof<span-->
                                <!--                class="text-danger">*</span></label><br>-->
                                <!--        <div class="custom-file-upload">-->
                                <!--            <button type="button" class="custom-upload-btn">-->
                                <!--                <i class="fa fa-upload"></i> Choose Domicile Certificate-->
                                <!--            </button>-->
                                <!--            <input type="file" name="domicile_certificate" id="domicile_certificate"-->
                                <!--                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required-->
                                <!--                onchange="displayFileName(this)">-->
                                <!--        </div>-->
                                <!--        <div id="file-name" class="file-name-display file-name">No file chosen</div>-->
                                <!--    </div>-->



                                <!--</div>-->

                                <!--<div class="col-lg-6">-->
                                <!--    <div class="mb-3 form-group">-->
                                <!--        <label class="form-label">Transfer Certificate (TC) <span-->
                                <!--                class="text-danger">*</span></label><br>-->
                                <!--        <div class="custom-file-upload">-->
                                <!--            <button type="button" class="custom-upload-btn">-->
                                <!--                <i class="fa fa-upload"></i> Choose Transfer Certificate-->
                                <!--            </button>-->
                                <!--            <input type="file" name="transfer_certificate" id="transfer_certificate"-->
                                <!--                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required-->
                                <!--                onchange="displayFileName(this)">-->
                                <!--        </div>-->
                                <!--        <div id="file-name" class="file-name-display file-name">No file chosen</div>-->
                                <!--    </div>-->

                                <!--</div>-->

                                <!--<div class="col-lg-6">-->
                                <!--    <div class="mb-3 form-group">-->
                                <!--        <label class="form-label">Migration Certificate <span-->
                                <!--                class="text-danger">*</span></label><br>-->
                                <!--        <div class="custom-file-upload">-->
                                <!--            <button type="button" class="custom-upload-btn">-->
                                <!--                <i class="fa fa-upload"></i> Choose Migration Certificate-->
                                <!--            </button>-->
                                <!--            <input type="file" name="migration_certificate" id="migration_certificate"-->
                                <!--                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required-->
                                <!--                onchange="displayFileName(this)">-->
                                <!--        </div>-->
                                <!--        <div id="file-name" class="file-name-display file-name">No file chosen</div>-->
                                <!--    </div>-->





                                <!--</div>-->

                                <!--<div class="col-lg-6">-->


                                <!--    <div class="mb-3 form-group">-->
                                <!--        <label class="form-label">10th Mark Sheet <span-->
                                <!--                class="text-danger">*</span></label><br>-->
                                <!--        <div class="custom-file-upload">-->
                                <!--            <button type="button" class="custom-upload-btn">-->
                                <!--                <i class="fa fa-upload"></i> Choose 10th Mark Sheet-->
                                <!--            </button>-->
                                <!--            <input type="file" name="marksheet_10" id="marksheet_10"-->
                                <!--                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required-->
                                <!--                onchange="displayFileName(this)">-->
                                <!--        </div>-->
                                <!--        <div id="file-name" class="file-name-display file-name">No file chosen</div>-->
                                <!--    </div>-->




                                <!--</div>-->

                                <!--<div class="col-lg-6">-->

                                <!--    <div class="mb-3 form-group">-->
                                <!--        <label class="form-label">12th Mark Sheet <span-->
                                <!--                class="text-danger">*</span></label><br>-->
                                <!--        <div class="custom-file-upload">-->
                                <!--            <button type="button" class="custom-upload-btn">-->
                                <!--                <i class="fa fa-upload"></i> Choose 12th Mark Sheet-->
                                <!--            </button>-->
                                <!--            <input type="file" name="marksheet_12" id="marksheet_12"-->
                                <!--                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required-->
                                <!--                onchange="displayFileName(this)">-->
                                <!--        </div>-->
                                <!--        <div id="file-name" class="file-name-display file-name">No file chosen</div>-->
                                <!--    </div>-->



                                <!--</div>-->

                                <!--<div class="col-lg-6">-->

                                <!--    <div class="mb-3 form-group">-->
                                <!--        <label class="form-label">Graduation Mark Sheet (if applicable) <span-->
                                <!--                class="text-danger">*</span></label><br>-->
                                <!--        <div class="custom-file-upload">-->
                                <!--            <button type="button" class="custom-upload-btn">-->
                                <!--                <i class="fa fa-upload"></i> Choose Graduation Mark Sheet-->
                                <!--            </button>-->
                                <!--            <input type="file" name="marksheet_grad" id="marksheet_grad"-->
                                <!--                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required-->
                                <!--                onchange="displayFileName(this)">-->
                                <!--        </div>-->
                                <!--        <div id="file-name" class="file-name-display file-name">No file chosen</div>-->
                                <!--    </div>-->
                                <!--</div>-->




                                <!--<div class="col-lg-6">-->

                                <!--    <div class="mb-3 form-group">-->
                                <!--        <label class="form-label">Entrance Exam Score Card <span-->
                                <!--                class="text-danger">*</span></label><br>-->
                                <!--        <div class="custom-file-upload">-->
                                <!--            <button type="button" class="custom-upload-btn">-->
                                <!--                <i class="fa fa-upload"></i> Choose Score Card-->
                                <!--            </button>-->
                                <!--            <input type="file" name="entrance_scorecard" id="entrance_scorecard"-->
                                <!--                class="form-control" accept=".pdf,.jpg,.jpeg,.png" required-->
                                <!--                onchange="displayFileName(this)">-->
                                <!--        </div>-->
                                <!--        <div id="file-name" class="file-name-display file-name">No file chosen</div>-->
                                <!--    </div>-->

                                <!--</div>-->




                                <!-- Bank Details Section -->
                                <!--<div class="col-12 mt-4">-->
                                <!--    <h4 class="form-section-title">Bank Details for Scholarship/Refund</h4>-->
                                <!--</div>-->

                                <!--<div class="col-lg-6">-->
                                <!--    <div class="form-group">-->
                                <!--        <label>Bank Account Holder's Name <span class="text-danger">*</span></label>-->
                                <!--        <input type="text" name="account_holder_name"-->
                                <!--            value="{{ old('account_holder_name') }}" id="account_holder_name"-->
                                <!--            class="form-control rqrd" required>-->
                                <!--        @error('account_holder_name')-->
                                <!--            <small class="text-danger">{{ $message }}</small>-->
                                <!--        @enderror-->
                                <!--    </div>-->
                                <!--</div>-->

                                <!--<div class="col-lg-6">-->
                                <!--    <div class="form-group">-->
                                <!--        <label>Bank Name <span class="text-danger">*</span></label>-->
                                <!--        <input type="text" name="bank_name" value="{{ old('bank_name') }}"-->
                                <!--            id="bank_name" class="form-control rqrd" required>-->
                                <!--        @error('bank_name')-->
                                <!--            <small class="text-danger">{{ $message }}</small>-->
                                <!--        @enderror-->
                                <!--    </div>-->
                                <!--</div>-->

                                <!--<div class="col-lg-6">-->
                                <!--    <div class="form-group">-->
                                <!--        <label>Account Number <span class="text-danger">*</span></label>-->
                                <!--        <input type="text" name="account_number" value="{{ old('account_number') }}"-->
                                <!--            id="account_number" class="form-control rqrd" required>-->
                                <!--        @error('account_number')-->
                                <!--            <small class="text-danger">{{ $message }}</small>-->
                                <!--        @enderror-->
                                <!--    </div>-->
                                <!--</div>-->

                                <!--<div class="col-lg-6">-->
                                <!--    <div class="form-group">-->
                                <!--        <label>IFSC Code <span class="text-danger">*</span></label>-->
                                <!--        <input type="text" name="ifsc_code" value="{{ old('ifsc_code') }}"-->
                                <!--            id="ifsc_code" class="form-control rqrd" required>-->
                                <!--        @error('ifsc_code')-->
                                <!--            <small class="text-danger">{{ $message }}</small>-->
                                <!--        @enderror-->
                                <!--    </div>-->
                                <!--</div>-->

                                <!--<div class="col-lg-6">-->
                                <!--    <div class="form-group">-->
                                <!--        <label>Branch Name <span class="text-danger">*</span></label>-->
                                <!--        <input type="text" name="branch_name" value="{{ old('branch_name') }}"-->
                                <!--            id="branch_name" class="form-control rqrd" required>-->
                                <!--        @error('branch_name')-->
                                <!--            <small class="text-danger">{{ $message }}</small>-->
                                <!--        @enderror-->
                                <!--    </div>-->
                                <!--</div>-->

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


                                <!--<div class="mb-3 form-group">-->
                                <!--    <label class="form-label">Upload Signature (Digital or Scanned) <span-->
                                <!--            class="text-danger">*</span></label><br>-->
                                <!--    <div class="custom-file-upload">-->
                                <!--        <button type="button" class="custom-upload-btn">-->
                                <!--            <i class="fa fa-upload"></i> Choose Signature-->
                                <!--        </button>-->
                                <!--        <input type="file" name="digital_signature" id="digital_signature"-->
                                <!--            class="form-control" accept=".jpg,.jpeg,.png" required-->
                                <!--            onchange="displayFileName(this)">-->
                                <!--    </div>-->
                                <!--    <div id="file-name" class="file-name-display file-name">No file chosen</div>-->
                                <!--</div>-->



                                <div class="col-lg-6 mt-3">
                                    <div class="form-group">
                                        <label>Date of Submission <span class="text-danger">*</span></label>
                                        <input type="date" name="submission_date" id="submission_date"
                                            class="form-control rqrd" value="<?php echo date('Y-m-d'); ?>" required>
                                        @error('submission_date')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Google reCAPTCHA -->
                                <!-- Google reCAPTCHA script -->

                                <!-- Inside your form -->
                                {{-- <div class="form-group mt-3">
                                    <div class="g-recaptcha" data-sitekey="6LdxjFUrAAAAAAfmccLfOlqwJ50zXxaih13vNh2r">
                                    </div>
                                    @error('g-recaptcha-response')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div> --}}



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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            const defaultCountry = "India";

            function cleanText(text) {
                return text.replace(/[^a-zA-Z0-9\s,.-]/g, "");
            }

            // Fetch states of India
            function fetchStates(selectedState = null, selectedCity = null) {
                $.ajax({
                    url: "https://countriesnow.space/api/v0.1/countries/states",
                    method: "POST",
                    contentType: "application/json",
                    data: JSON.stringify({
                        country: defaultCountry
                    }),
                    success: function(response) {
                        const stateDropdown = $("#state");
                        stateDropdown
                            .empty()
                            .append('<option value="">Select State</option>');

                        response.data.states.forEach(function(state) {
                            const cleanState = cleanText(state.name);
                            const isSelected =
                                cleanState === selectedState ? "selected" : "";
                            stateDropdown.append(
                                `<option value="${cleanState}" ${isSelected}>${cleanState}</option>`
                            );
                        });

                        if (selectedState) {
                            fetchCities(selectedState, selectedCity);
                        }
                    },
                    error: function(error) {
                        console.log("Error fetching states:", error);
                    },
                });
            }

            // Fetch cities of a selected state
            function fetchCities(stateName, selectedCity = null) {
                $.ajax({
                    url: "https://countriesnow.space/api/v0.1/countries/state/cities",
                    method: "POST",
                    contentType: "application/json",
                    data: JSON.stringify({
                        country: defaultCountry,
                        state: stateName,
                    }),
                    success: function(response) {
                        const cityDropdown = $("#city");
                        cityDropdown
                            .empty()
                            .append('<option value="">Select City</option>');

                        response.data.forEach(function(city) {
                            const cleanCity = cleanText(city);
                            const isSelected = cleanCity === selectedCity ? "selected" : "";
                            cityDropdown.append(
                                `<option value="${cleanCity}" ${isSelected}>${cleanCity}</option>`
                            );
                        });
                    },
                    error: function(error) {
                        console.log("Error fetching cities:", error);
                    },
                });
            }

            // Initial load of states
            fetchStates();

            // When a state is selected
            $("#state").on("change", function() {
                const selectedState = $(this).val();
                $("#city").empty().append('<option value="">Select City</option>');
                if (selectedState) {
                    fetchCities(selectedState);
                }
            });
        });
    </script>
    <script>
        const courseBranches = {
            "B.Tech": ["Computer Science & Engineering", "Electronic & Communication Engineering",
                "Mechanical Engineering", "Electrical Engineering", "Civil Engineering"
            ],
            "MBA": ["Finance", "Marketing", "HRM", "Information Technology", "Information Business","Operation Management"],
            "Polytechnic": ["Mechanical Engineering", "Mechanical Engineering Production", "Civil Engineering",
                "Electrical Engineering"
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








        // document.getElementById('registrationForm').addEventListener('submit', function (e) {
        //   // PAN validation (e.g., ABCDE1234F)
        //   const pan = document.getElementById('pan_card').value.trim();
        //   const panRegex = /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
        //   if (!panRegex.test(pan)) {
        //     alert('Invalid PAN number. Format should be ABCDE1234F');
        //     e.preventDefault();
        //     return;
        //   }

        //   // Aadhaar validation (12 digits)
        //   const aadhaar = document.getElementById('aadhar_card').value.trim();
        //   const aadhaarRegex = /^\d{12}$/;
        //   if (!aadhaarRegex.test(aadhar_card)) {
        //     alert('Invalid Aadhaar number. It should be a 12-digit number.');
        //     e.preventDefault();
        //     return;
        //   }

        //   // Image validation
        //   const image = document.getElementById('photo').files[0];
        //   if (image) {
        //     const imageTypes = ['photo/jpeg', 'photo/png'];
        //     if (!imageTypes.includes(image.type)) {
        //       alert('Invalid image file. Only JPG and PNG are allowed.');
        //       e.preventDefault();
        //       return;
        //     }
        //   }

        //     const signature = document.getElementById('signature').files[0];
        //   if (signature) {
        //     const imageTypes = ['signature/jpeg', 'signature/png'];
        //     if (!imageTypes.includes(signature.type)) {
        //       alert('Invalid image file. Only JPG and PNG are allowed.');
        //       e.preventDefault();
        //       return;
        //     }
        //   }

        // PDF validation
        //   const pdf = document.getElementById('pdf').files[0];
        //   if (pdf) {
        //     if (pdf.type !== 'application/pdf') {
        //       alert('Invalid file. Only PDF files are allowed.');
        //       e.preventDefault();
        //       return;
        //     }
        //   }
        // });
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
    <style>
        .error-message {
            font-size: 0.875rem;
            color: red;
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


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Attach event listener to all forms with 'validate-form' class
            document.querySelectorAll('.validate-form').forEach(function(form) {
                const submitBtn = form.querySelector('button[type="button"]');

                submitBtn.addEventListener('click', function() {
                    let isValid = true;

                    // Remove previous error messages
                    form.querySelectorAll('.error-message').forEach(e => e.remove());

                    // Validate required fields
                    form.querySelectorAll('.rqrd').forEach(function(input) {
                        if (!input.value.trim()) {
                            showError(input, 'This field is required.');
                            isValid = false;
                        }
                    });

                    // Validate email fields
                    form.querySelectorAll('.email-vldt').forEach(function(input) {
                        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                        if (input.value && !emailRegex.test(input.value)) {
                            showError(input, 'Please enter a valid email address.');
                            isValid = false;
                        }
                    });

                    if (isValid) {
                        // Submit the form or proceed to payment
                        form.submit(); // You can also call your Razorpay flow here
                    }
                });

                // Remove error message on input
                form.querySelectorAll('input, select').forEach(function(input) {
                    input.addEventListener('input', function() {
                        if (input.nextElementSibling?.classList.contains('error-message')) {
                            input.nextElementSibling.remove();
                        }
                    });
                });
            });

            function showError(input, message) {
                const error = document.createElement('div');
                error.className = 'error-message text-danger mt-1';
                error.textContent = message;
                input.insertAdjacentElement('afterend', error);
            }
        });
    </script>
@endsection
